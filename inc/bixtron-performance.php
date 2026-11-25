<?php
/**
 * Front-end performance: strip what the Bixtron pages never use, load plugin assets only where needed,
 * preload the critical fonts, and cache the few WooCommerce queries the home page and menu repeat.
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* ------------------------------------------------------------------ head clean-up */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
add_filter( 'emoji_svg_url', '__return_false' );

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'template_redirect', 'rest_output_link_header', 11 );

add_action( 'wp_footer', function () {
    wp_deregister_script( 'wp-embed' );
}, 1 );

// No Heartbeat polling on the public site.
add_action( 'init', function () {
    if ( ! is_admin() ) {
        wp_deregister_script( 'heartbeat' );
    }
} );

// jQuery Migrate is only a compatibility shim; the theme and WooCommerce run without it.
add_action( 'wp_default_scripts', function ( $scripts ) {
    if ( is_admin() || ! isset( $scripts->registered['jquery'] ) ) {
        return;
    }
    $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );
} );

/* ------------------------------------------------------------------ plugin assets only where needed */

// The chat replaces Contact Form 7 on the site, so its assets never load.
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

function bx_is_shop_context() {
    if ( ! function_exists( 'is_woocommerce' ) ) {
        return false;
    }
    return is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_page( 'request-quote' );
}

function bx_asset_needs_dequeue( $src ) {
    if ( ! is_string( $src ) || '' === $src ) {
        return false;
    }
    $shop = bx_is_shop_context();
    if ( false !== strpos( $src, '/plugins/contact-form-7/' ) ) {
        return true;
    }
    if ( false !== strpos( $src, '/plugins/woo-order-on-whatsapp/' ) ) {
        return true; // the theme draws its own WhatsApp buttons
    }
    if ( false !== strpos( $src, '/plugins/woocommerce/' ) || false !== strpos( $src, '/plugins/yith-woocommerce-request-a-quote/' ) ) {
        // cart fragments run an uncached AJAX call on every page; the cart count is rendered by the theme instead
        if ( false !== strpos( $src, 'cart-fragments' ) ) {
            return true;
        }
        // order attribution tracking is only useful at checkout
        if ( ( false !== strpos( $src, 'order-attribution' ) || false !== strpos( $src, 'sourcebuster' ) ) && ! is_checkout() ) {
            return true;
        }
        return ! $shop;
    }
    return false;
}

add_action( 'wp_enqueue_scripts', function () {
    // Gutenberg / block styles: no blocks are used on the Bixtron templates.
    foreach ( array( 'wp-block-library', 'wp-block-library-theme', 'classic-theme-styles', 'global-styles', 'wc-blocks-style', 'wc-blocks-vendors-style' ) as $h ) {
        wp_dequeue_style( $h );
    }
    // Hello Elementor base CSS: the PIP layout carries its own reset.
    foreach ( array( 'hello-elementor', 'hello-elementor-theme-style', 'hello-elementor-header-footer', 'hello-elementor-parent-style' ) as $h ) {
        wp_dequeue_style( $h );
    }

    $styles  = wp_styles();
    $scripts = wp_scripts();
    foreach ( (array) $styles->queue as $handle ) {
        if ( isset( $styles->registered[ $handle ] ) && bx_asset_needs_dequeue( $styles->registered[ $handle ]->src ) ) {
            wp_dequeue_style( $handle );
        }
    }
    foreach ( (array) $scripts->queue as $handle ) {
        if ( isset( $scripts->registered[ $handle ] ) && bx_asset_needs_dequeue( $scripts->registered[ $handle ]->src ) ) {
            wp_dequeue_script( $handle );
        }
    }
}, 100 );

/* ------------------------------------------------------------------ fonts */

add_action( 'wp_head', function () {
    $base  = PIP_THEME_URI . '/assets/fonts/';
    $fonts = array( 'roboto-400-latin.woff2', 'roboto-condensed-700-latin.woff2', 'anton-latin.woff2' );
    foreach ( $fonts as $f ) {
        echo '<link rel="preload" href="' . esc_url( $base . $f ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
    }
}, 2 );

/* ------------------------------------------------------------------ cached queries */

function bx_flush_query_caches() {
    delete_transient( 'bx_top_cats_12' );
    delete_transient( 'bx_home_products' );
    delete_transient( 'bx_offices_cats' );
}
add_action( 'created_product_cat', 'bx_flush_query_caches' );
add_action( 'edited_product_cat', 'bx_flush_query_caches' );
add_action( 'delete_product_cat', 'bx_flush_query_caches' );
add_action( 'save_post_product', 'bx_flush_query_caches' );
add_action( 'woocommerce_update_product', 'bx_flush_query_caches' );
add_action( 'deleted_post', 'bx_flush_query_caches' );
