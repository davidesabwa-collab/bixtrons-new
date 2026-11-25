<?php
/**
 * Bixtron page-cache reader (WordPress "advanced-cache.php" drop-in).
 *
 * Install as wp-content/advanced-cache.php and set define( 'WP_CACHE', true ) in wp-config.php.
 * Runs before plugins and the theme load, so a cache hit costs a few file reads instead of a full
 * WordPress + WooCommerce boot. The writer lives in the theme: inc/bixtron-cache.php (keep the key in sync).
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

( function () {
    if ( 'GET' !== ( $_SERVER['REQUEST_METHOD'] ?? '' ) || 'cli' === PHP_SAPI ) {
        return;
    }
    if ( defined( 'DOING_AJAX' ) || defined( 'DOING_CRON' ) || defined( 'WP_INSTALLING' ) ) {
        return;
    }

    $uri  = $_SERVER['REQUEST_URI'] ?? '/';
    $path = (string) parse_url( $uri, PHP_URL_PATH );
    $qs   = (string) parse_url( $uri, PHP_URL_QUERY );

    // Never cache: admin, API, login, cron, and the dynamic shop pages.
    if ( preg_match( '#^/(wp-admin|wp-json|wp-login\.php|wp-cron\.php|xmlrpc\.php|cart|checkout|my-account|request-quote|wishlist|compare)(/|$)#i', $path ) ) {
        return;
    }
    // Query strings bypass the cache, except tracking parameters.
    if ( '' !== $qs ) {
        parse_str( $qs, $q );
        foreach ( array_keys( $q ) as $k ) {
            if ( ! preg_match( '/^(utm_[a-z]+|fbclid|gclid|msclkid)$/i', $k ) ) {
                return;
            }
        }
    }
    // Logged-in users and visitors with items in their cart or quote list get live pages.
    // (Plain WooCommerce/YITH session cookies are given to every visitor, so they do not bypass the cache.)
    foreach ( array_keys( $_COOKIE ) as $name ) {
        if ( preg_match( '/^(wordpress_logged_in|wordpress_sec|wp-postpass|comment_author|woocommerce_items_in_cart|woocommerce_cart_hash|yith_ywraq_items_in_raq|yith_ywraq_hash|bx_nocache)/', $name ) ) {
            return;
        }
    }

    // Build id (changes on every deploy) and purge generation.
    $build = '';
    $bf    = WP_CONTENT_DIR . '/themes/hello-elementor-pip/inc/build.php';
    if ( is_readable( $bf ) && preg_match( "/define\\(\\s*'BX_BUILD'\\s*,\\s*'([^']+)'/", (string) file_get_contents( $bf ), $m ) ) {
        $build = $m[1];
    }
    if ( '' === $build ) {
        return;
    }
    $dir = WP_CONTENT_DIR . '/cache/bx';
    $gen = is_readable( $dir . '/_gen' ) ? trim( (string) file_get_contents( $dir . '/_gen' ) ) : '0';
    $key = md5( strtolower( $_SERVER['HTTP_HOST'] ?? '' ) . '|' . $path . '|' . $build . '|' . $gen );

    $file = $dir . '/' . $key . '.html';
    if ( ! is_file( $file ) ) {
        return;
    }
    $mtime = filemtime( $file );
    if ( time() - $mtime > 10 * 3600 ) {
        return;
    }

    $etag = '"' . substr( md5( $key . $mtime ), 0, 16 ) . '"';
    header( 'ETag: ' . $etag );
    header( 'Content-Type: text/html; charset=UTF-8' );
    header( 'Cache-Control: public, max-age=60, s-maxage=3600, stale-while-revalidate=600' );
    header( 'X-BX-Cache: HIT' );
    header( 'Age: ' . ( time() - $mtime ) );
    if ( isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) && trim( $_SERVER['HTTP_IF_NONE_MATCH'] ) === $etag ) {
        http_response_code( 304 );
        exit;
    }
    readfile( $file );
    exit;
} )();
