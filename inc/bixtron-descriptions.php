<?php
/**
 * Product descriptions: the catalogue stores them as plain paragraphs with <br> line breaks
 * ("Features<br>line<br>line ..."). Turn that into a lead paragraph, headings and bullet lists.
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function bx_desc_headings() {
    return array( 'features', 'feature', 'materials', 'material', 'specifications', 'specification', 'specs', 'sizes', 'size range', 'colours', 'colors', 'standards', 'dimensions', 'applications', 'application', 'benefits', 'care', 'care instructions', 'packaging', 'certification', 'certifications', 'includes', 'accessories', 'note', 'notes', 'technical data', 'technical details', 'compatibility', 'fabric', 'weight' );
}

/**
 * Split a description into blocks of type lead | text | heading | list | spec.
 */
function bx_parse_description( $html ) {
    $html = trim( (string) $html );
    if ( '' === $html ) {
        return array();
    }
    if ( false === stripos( $html, '<p' ) ) {
        $html = wpautop( $html );
    }
    preg_match_all( '#<p[^>]*>(.*?)</p>#is', $html, $m );
    $blocks    = array();
    $lead_done = false;
    foreach ( $m[1] as $raw ) {
        $lines = preg_split( '#<br\s*/?>#i', $raw );
        $lines = array_values( array_filter( array_map( function ( $l ) {
            return trim( html_entity_decode( wp_strip_all_tags( $l ), ENT_QUOTES, 'UTF-8' ) );
        }, $lines ), 'strlen' ) );
        if ( ! $lines ) {
            continue;
        }
        $first = strtolower( rtrim( $lines[0], ': ' ) );
        if ( in_array( $first, bx_desc_headings(), true ) ) {
            $title = rtrim( $lines[0], ': ' );
            $rest  = array_slice( $lines, 1 );
            if ( $rest ) {
                $blocks[] = array( 'type' => 'heading', 'text' => $title );
                $blocks[] = ( count( $rest ) === 1 && strlen( $rest[0] ) > 90 )
                    ? array( 'type' => 'text', 'lines' => $rest )
                    : array( 'type' => 'list', 'items' => $rest );
            }
            continue;
        }
        if ( 1 === count( $lines ) && preg_match( '/^([^:]{2,40})\s*:\s*(.+)$/u', $lines[0], $mm ) ) {
            $blocks[] = array( 'type' => 'spec', 'label' => trim( $mm[1] ), 'value' => trim( $mm[2] ) );
            continue;
        }
        if ( count( $lines ) >= 3 && ! preg_match( '/[.!?]$/', $lines[0] ) ) {
            $blocks[] = array( 'type' => 'list', 'items' => $lines );
            continue;
        }
        $blocks[]  = array( 'type' => $lead_done ? 'text' : 'lead', 'lines' => $lines );
        $lead_done = true;
    }
    return $blocks;
}

function bx_render_blocks( $blocks ) {
    $out = '<div class="bx-desc">';
    foreach ( $blocks as $b ) {
        switch ( $b['type'] ) {
            case 'lead':
                $out .= '<p class="bx-desc__lead">' . esc_html( implode( ' ', $b['lines'] ) ) . '</p>';
                break;
            case 'text':
                $out .= '<p>' . esc_html( implode( ' ', $b['lines'] ) ) . '</p>';
                break;
            case 'heading':
                $out .= '<h4 class="bx-desc__h">' . esc_html( $b['text'] ) . '</h4>';
                break;
            case 'list':
                $out .= '<ul class="bx-desc__list">';
                foreach ( $b['items'] as $i ) {
                    $out .= '<li>' . esc_html( $i ) . '</li>';
                }
                $out .= '</ul>';
                break;
            case 'spec':
                $out .= '<p class="bx-desc__spec"><strong>' . esc_html( $b['label'] ) . '</strong><span>' . esc_html( $b['value'] ) . '</span></p>';
                break;
        }
    }
    return $out . '</div>';
}

/** Description tab: full structured layout. */
add_filter( 'the_content', function ( $content ) {
    if ( is_admin() || ! is_singular( 'product' ) || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }
    $blocks = bx_parse_description( get_post_field( 'post_content', get_the_ID() ) );
    return $blocks ? bx_render_blocks( $blocks ) : $content;
}, 5 );

/** Summary under the title: intro + the first key features. Full detail is in the Description tab. */
add_filter( 'woocommerce_short_description', function ( $short ) {
    if ( ! is_singular( 'product' ) ) {
        return $short;
    }
    $source = trim( get_post_field( 'post_content', get_the_ID() ) );
    if ( '' === $source ) {
        $source = (string) $short;
    }
    $blocks = bx_parse_description( $source );
    if ( ! $blocks ) {
        return $short;
    }
    $lead = '';
    $feat = array();
    $grab = false;
    foreach ( $blocks as $b ) {
        if ( 'lead' === $b['type'] && '' === $lead ) {
            $lead = implode( ' ', $b['lines'] );
        }
        if ( 'heading' === $b['type'] ) {
            $grab = in_array( strtolower( $b['text'] ), array( 'features', 'feature', 'benefits' ), true );
            continue;
        }
        if ( $grab && 'list' === $b['type'] ) {
            $feat = array_slice( $b['items'], 0, 5 );
            $grab = false;
        }
    }
    if ( strlen( $lead ) > 260 ) {
        $cut  = substr( $lead, 0, 260 );
        $pos  = strrpos( $cut, '. ' );
        $lead = ( false !== $pos && $pos > 80 ) ? substr( $cut, 0, $pos + 1 ) : rtrim( $cut, ' ,;' ) . '...';
    }
    $out = '<div class="bx-desc bx-desc--summary">';
    if ( $lead ) {
        $out .= '<p class="bx-desc__lead">' . esc_html( $lead ) . '</p>';
    }
    if ( $feat ) {
        $out .= '<ul class="bx-desc__list">';
        foreach ( $feat as $f ) {
            $out .= '<li>' . esc_html( $f ) . '</li>';
        }
        $out .= '</ul>';
    }
    return $out . '</div>';
} );
