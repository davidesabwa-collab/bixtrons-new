<?php
/**
 * Bixtron Safety Handlers - single source of truth for company content.
 * All details below come from the live site https://bixtrons.com
 * (About page, footer, social links, media library).
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Company profile.
 */
function bx_company() {
    return array(
        'name'        => 'Bixtron Safety Handlers Ltd',
        'short'       => 'Bixtron',
        'tagline'     => 'Safety | Health | Environment | Quality',
        'motto'       => 'Safety without compromise',
        'intro'       => 'Your true industrial partner across East and Central Africa.',
        'about_long'  => 'For the last 20 years we have offered the market bespoke and integrated Safety, Health, Environmental & Quality (SHEQ) management systems and the related supplies solutions, while growing our product lines and partnering with leading global players to become a one-stop shop for industrial work-place safety and health needs.',
        'about_ims'   => 'We have adopted an Integrated Management Systems (IMS) approach to address quality, safety-health and environmental concerns across all our work set-ups, and we are ISO 9001:2015 QMS, ISO 45001:2018 OH&SMS and ISO 14001:2015 EMS certified.',
        'about_reg'   => 'Bixtron Safety Handlers (BSH) Ltd operates in the East African region with two autonomous branches, in Kenya (Nairobi) and Uganda (Kampala). We are fully registered under each state\'s laws, and additionally registered with UNGM (United Nations Global Marketplace), SAM (System for Award Management, USA) and each East African state\'s public procurement and disposal authority databases.',
        'whatsapp'    => '254722861183',
        'certs'       => array(
            array( 'code' => 'ISO 9001:2015', 'label' => 'Quality Management System (QMS)' ),
            array( 'code' => 'ISO 14001:2015', 'label' => 'Environmental Management System (EMS)' ),
            array( 'code' => 'ISO 45001:2018', 'label' => 'Occupational Health & Safety Management System (OH&SMS)' ),
        ),
        'registrations' => array( 'UNGM', 'SAM (USA)', 'Public Procurement & Disposal Authorities (East Africa)' ),
        'services'    => array(
            array(
                'title' => 'Imports & Supply',
                'text'  => 'Importation and supply of Personal Protective Equipment (PPE) from the world\'s leading manufacturers.',
                'slug'  => 'height-safety',
            ),
            array(
                'title' => 'Laboratory & Scientific Safety',
                'text'  => 'Importation, supply and installation of research-centre safety systems, scientific safety equipment, and specialised safety tools and fittings.',
                'slug'  => 'cabinets',
            ),
            array(
                'title' => 'OSH Consultancy & Audits',
                'text'  => 'Design of Occupational Health and Safety (OSH), quality and environmental management systems and programmes, including industrial safety audits, assessments and OSH trainings.',
                'slug'  => '',
            ),
            array(
                'title' => 'Certification Support',
                'text'  => 'Preparing and supporting institutions through ISO certification, or CE certification of their products.',
                'slug'  => '',
            ),
        ),
        'strengths'   => array(
            array( 'title' => 'Authentic products', 'text' => 'We partner with leading manufacturers so every product and system meets international safety standards.' ),
            array( 'title' => 'Integrated management', 'text' => 'ISO 9001, ISO 14001 and ISO 45001 certified processes, from quotation to delivery.' ),
            array( 'title' => 'Regional reach', 'text' => 'Autonomous branches in Nairobi and Kampala serving East and Central Africa.' ),
            array( 'title' => 'Order your way', 'text' => 'Order online, via WhatsApp or request a quote. Our sales support team is on hand.' ),
        ),
    );
}

/**
 * Offices.
 */
function bx_offices() {
    return array(
        array(
            'slug'      => 'kenya',
            'country'   => 'Kenya',
            'city'      => 'Nairobi',
            'name'      => 'Kenya Office',
            'address'   => array( 'New Commercial House, 1st Floor', 'Commercial Street, Enterprise Road Junction', '(Opp. Unilever Kenya), Nairobi' ),
            'phone'     => '+254 722 248 480',
            'phone_raw' => '+254722248480',
            'whatsapp'  => '+254 722 861 183',
            'wa_raw'    => '254722861183',
            'email'     => 'customer_care@bixtrons.com',
            'map'       => 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( 'New Commercial House, Commercial Street, Enterprise Road, Nairobi, Kenya' ),
        ),
        array(
            'slug'      => 'uganda',
            'country'   => 'Uganda',
            'city'      => 'Kampala',
            'name'      => 'Uganda Office',
            'address'   => array( 'Plot Number 3, Olympia Close', 'Kansanga, Ggaba Road, Kampala' ),
            'phone'     => '+256 757 260 633',
            'phone_raw' => '+256757260633',
            'whatsapp'  => '+256 757 261 802',
            'wa_raw'    => '256757261802',
            'email'     => 'customercare@bixtrons.com',
            'map'       => 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( 'Plot 3 Olympia Close, Kansanga, Ggaba Road, Kampala, Uganda' ),
        ),
    );
}

/**
 * Social profiles (from the live site footer).
 */
function bx_socials() {
    return array(
        'facebook'  => 'https://www.facebook.com/share/18z5MwfTfk/',
        'x'         => 'https://x.com/BixtronL',
        'linkedin'  => 'https://www.linkedin.com/company/bixtron-safety-handlers/',
        'instagram' => 'https://www.instagram.com/bixtronsh',
    );
}

/**
 * Brands Bixtron stocks (logos taken from the live media library).
 */
function bx_brands() {
    return array(
        array( 'name' => 'Portwest',  'logo' => 'portwest.png',  'url' => 'https://www.portwest.com/' ),
        array( 'name' => '3M Scott',  'logo' => '3m-scott.png',  'url' => 'https://www.3m.com/' ),
        array( 'name' => 'Novax',     'logo' => 'novax.png',     'url' => '' ),
        array( 'name' => 'REDA Safe', 'logo' => 'reda-safe.png', 'url' => '' ),
        array( 'name' => 'Singer',    'logo' => 'singer.png',    'url' => '' ),
    );
}

/**
 * Logo URL helpers.
 */
function bx_logo( $variant = 'color' ) {
    $file = ( 'white' === $variant ) ? 'bixtron-logo-white.png' : 'bixtron-logo.png';
    return pip_asset( 'images/bixtron/' . $file );
}

/**
 * wa.me link with a pre-filled message.
 */
function bx_whatsapp_url( $message = '', $number = '' ) {
    $number = $number ? $number : bx_company()['whatsapp'];
    $url    = 'https://wa.me/' . preg_replace( '/\D/', '', $number );
    if ( $message ) {
        $url .= '?text=' . rawurlencode( $message );
    }
    return $url;
}

/**
 * Small inline SVG icons for the footer social links (Font Awesome Free paths).
 */
function bx_social_svg( $network ) {
    $paths = array(
        'facebook'  => 'M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z',
        'x'         => 'M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z',
        'linkedin'  => 'M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z',
        'instagram' => 'M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z',
    );
    if ( empty( $paths[ $network ] ) ) {
        return '';
    }
    return '<svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="' . $paths[ $network ] . '"></path></svg>';
}

/**
 * Top-level product categories worth showing (non-empty, not "Uncategorized"),
 * ordered by product count, each with a representative image URL.
 *
 * @return array[] { term, name, url, count, image }
 */
function bx_top_categories( $limit = 12 ) {
    if ( ! taxonomy_exists( 'product_cat' ) ) {
        return array();
    }
    $cache_key = 'bx_top_cats_' . (int) $limit;
    $cached    = get_transient( $cache_key );
    if ( is_array( $cached ) ) {
        return $cached;
    }
    $terms = get_terms( array(
        'taxonomy'   => 'product_cat',
        'parent'     => 0,
        'hide_empty' => true,
        'exclude'    => array( (int) get_option( 'default_product_cat' ) ),
        'orderby'    => 'count',
        'order'      => 'DESC',
        'number'     => $limit,
    ) );
    if ( is_wp_error( $terms ) ) {
        return array();
    }
    $out = array();
    foreach ( $terms as $t ) {
        // "Emergency" duplicates "Emergency Safety Showers & Eye Wash Stations" in the current catalogue.
        if ( 'emergency' === $t->slug && get_term_by( 'slug', 'emergency-safety-showers-eye-wash-stations', 'product_cat' ) ) {
            continue;
        }
        $out[] = array(
            'term'  => $t,
            'name'  => $t->name,
            'url'   => get_term_link( $t ),
            'count' => (int) $t->count,
            'image' => bx_category_image( $t, 'woocommerce_single' ),
        );
    }
    set_transient( $cache_key, $out, 12 * HOUR_IN_SECONDS );
    return $out;
}

/**
 * Category image: its own thumbnail, else the first product photo found in it.
 */
function bx_category_image( $term, $size = 'large' ) {
    $thumb_id = (int) get_term_meta( $term->term_id, 'thumbnail_id', true );
    if ( $thumb_id ) {
        $src = wp_get_attachment_image_url( $thumb_id, $size );
        if ( $src ) {
            return $src;
        }
    }
    $ids = get_posts( array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => 1,
        'fields'         => 'ids',
        'meta_key'       => '_thumbnail_id',
        'tax_query'      => array( array(
            'taxonomy'         => 'product_cat',
            'field'            => 'term_id',
            'terms'            => $term->term_id,
            'include_children' => true,
        ) ),
    ) );
    if ( $ids ) {
        $src = get_the_post_thumbnail_url( $ids[0], $size );
        if ( $src ) {
            return $src;
        }
    }
    return function_exists( 'wc_placeholder_img_src' ) ? wc_placeholder_img_src( $size ) : '';
}
