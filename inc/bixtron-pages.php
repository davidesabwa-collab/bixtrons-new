<?php
/**
 * Make sure the company pages the theme links to exist.
 * Page templates are picked by slug (page-{slug}.php), so only the page shells are created here.
 * Existing pages (about, contact, faq, request-quote, shop, cart ...) are never touched.
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BX_PAGES_VERSION', '2' );

function bx_required_pages() {
    return array(
        'about'                  => 'About Us',
        'contact'                => 'Contact Us',
        'our-locations'          => 'Our Locations',
        'quality-certifications' => 'Quality & Certifications',
        'legal'                  => 'Legal & Privacy',
    );
}

function bx_ensure_pages() {
    if ( get_option( 'bx_pages_version' ) === BX_PAGES_VERSION ) {
        return;
    }
    foreach ( bx_required_pages() as $slug => $title ) {
        if ( get_page_by_path( $slug ) ) {
            continue;
        }
        wp_insert_post( array(
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'post_name'    => $slug,
            'post_title'   => $title,
            'post_content' => '',
        ) );
    }
    update_option( 'bx_pages_version', BX_PAGES_VERSION, false );
}
add_action( 'init', 'bx_ensure_pages', 20 );

/**
 * Shared hero strip for inner pages (PIP channel-style banner).
 */
function bx_page_hero( $title, $kicker = '' ) {
    ?>
    <section class="bx-hero">
        <div class="bx-hero__inner">
            <?php if ( $kicker ) : ?><p class="bx-hero__kicker"><?php echo esc_html( $kicker ); ?></p><?php endif; ?>
            <h1><?php echo esc_html( $title ); ?></h1>
        </div>
    </section>
    <?php
}
