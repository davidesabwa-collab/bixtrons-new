<?php
/**
 * Bixtron full-page cache (writer + purge). The reader is the drop-in dropins/advanced-cache.php, which is
 * installed as wp-content/advanced-cache.php and serves cached pages before WordPress and plugins load.
 *
 * Only anonymous GET requests for public pages are cached. Never cached: logged-in users, any request with
 * a non-empty cart or quote list (cookies), cart, checkout, my-account, request-quote, search, 404s, REST, AJAX,
 * or URLs with query strings (other than tracking parameters).
 *
 * Cache entries are keyed by host + path + build id + generation, so a deploy (new build id) or any purge
 * (new generation) instantly makes every old entry unreachable.
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BX_CACHE_DIR', WP_CONTENT_DIR . '/cache/bx' );
define( 'BX_CACHE_TTL', 10 * HOUR_IN_SECONDS );

/** Current cache generation (changes on every purge). */
function bx_cache_gen() {
    $f = BX_CACHE_DIR . '/_gen';
    return is_readable( $f ) ? trim( (string) file_get_contents( $f ) ) : '0';
}

/** Must match the key built in dropins/advanced-cache.php. */
function bx_cache_key( $host, $path ) {
    return md5( strtolower( $host ) . '|' . $path . '|' . BX_BUILD . '|' . bx_cache_gen() );
}

function bx_cache_bypass_cookie() {
    foreach ( array_keys( $_COOKIE ) as $name ) {
        if ( preg_match( '/^(wordpress_logged_in|wordpress_sec|wp-postpass|comment_author|woocommerce_items_in_cart|woocommerce_cart_hash|yith_ywraq_items_in_raq|yith_ywraq_hash|bx_nocache)/', $name ) ) {
            return true;
        }
    }
    return false;
}

function bx_cache_should_store() {
    if ( 'GET' !== ( $_SERVER['REQUEST_METHOD'] ?? '' ) ) {
        return false;
    }
    if ( is_admin() || is_user_logged_in() || is_search() || is_404() || is_feed() || is_preview() || is_robots() || is_trackback() ) {
        return false;
    }
    if ( defined( 'DONOTCACHEPAGE' ) || defined( 'DOING_AJAX' ) || defined( 'REST_REQUEST' ) || defined( 'DOING_CRON' ) ) {
        return false;
    }
    if ( function_exists( 'is_cart' ) && ( is_cart() || is_checkout() || is_account_page() ) ) {
        return false;
    }
    if ( is_page( array( 'request-quote', 'wishlist', 'compare' ) ) ) {
        return false;
    }
    if ( bx_cache_bypass_cookie() ) {
        return false;
    }
    $qs = (string) ( $_SERVER['QUERY_STRING'] ?? '' );
    if ( '' !== $qs ) {
        parse_str( $qs, $q );
        foreach ( array_keys( $q ) as $k ) {
            if ( ! preg_match( '/^(utm_[a-z]+|fbclid|gclid|msclkid)$/i', $k ) ) {
                return false;
            }
        }
    }
    return true;
}

add_action( 'template_redirect', function () {
    if ( ! bx_cache_should_store() ) {
        return;
    }
    ob_start( function ( $html ) {
        if ( 200 !== http_response_code() || strlen( $html ) < 500 || false === stripos( $html, '</html>' ) ) {
            return $html;
        }
        if ( ! is_dir( BX_CACHE_DIR ) ) {
            wp_mkdir_p( BX_CACHE_DIR );
            @file_put_contents( BX_CACHE_DIR . '/index.php', "<?php // Silence is golden.\n" );
        }
        if ( ! is_file( BX_CACHE_DIR . '/_gen' ) ) {
            @file_put_contents( BX_CACHE_DIR . '/_gen', (string) time() );
        }
        $path = (string) wp_parse_url( $_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH );
        $key  = bx_cache_key( $_SERVER['HTTP_HOST'] ?? '', $path );
        $tmp  = BX_CACHE_DIR . '/' . $key . '.' . getmypid() . '.tmp';
        $out  = $html . "\n<!-- Bixtron page cache: stored " . gmdate( 'Y-m-d H:i:s' ) . " UTC -->";
        if ( false !== @file_put_contents( $tmp, $out ) ) {
            @rename( $tmp, BX_CACHE_DIR . '/' . $key . '.html' );
        }
        // Housekeeping: now and then remove entries older than the TTL (e.g. from previous builds).
        if ( 1 === mt_rand( 1, 40 ) ) {
            foreach ( (array) glob( BX_CACHE_DIR . '/*.{html,tmp}', GLOB_BRACE ) as $old ) {
                if ( filemtime( $old ) < time() - BX_CACHE_TTL - HOUR_IN_SECONDS ) {
                    @unlink( $old );
                }
            }
        }
        return $html;
    } );
}, 0 );

/** Invalidate everything: new generation + remove old files. */
function bx_cache_purge_all() {
    if ( ! is_dir( BX_CACHE_DIR ) ) {
        wp_mkdir_p( BX_CACHE_DIR );
    }
    @file_put_contents( BX_CACHE_DIR . '/_gen', (string) microtime( true ) );
    foreach ( (array) glob( BX_CACHE_DIR . '/*.html' ) as $f ) {
        @unlink( $f );
    }
    foreach ( (array) glob( BX_CACHE_DIR . '/*.tmp' ) as $f ) {
        @unlink( $f );
    }
    if ( function_exists( 'bx_flush_query_caches' ) ) {
        bx_flush_query_caches();
    }
}

/** Purge when content that appears on public pages changes (purge is cheap; the site is small). */
function bx_cache_purge_hook() {
    static $done = false;
    if ( $done ) {
        return;
    }
    $done = true;
    bx_cache_purge_all();
}
// Post changes only matter for content that appears on public pages (not orders, enquiries, revisions ...).
add_action( 'save_post', function ( $post_id, $post ) {
    if ( wp_is_post_revision( $post_id ) || wp_is_post_autosave( $post_id ) ) {
        return;
    }
    if ( in_array( $post->post_type, array( 'post', 'page', 'product', 'nav_menu_item' ), true ) ) {
        bx_cache_purge_hook();
    }
}, 10, 2 );
foreach ( array(
    'deleted_post', 'trashed_post', 'untrashed_post',
    'created_term', 'edited_term', 'delete_term',
    'woocommerce_update_product', 'woocommerce_product_set_stock_status', 'woocommerce_variation_set_stock_status',
    'wp_update_nav_menu', 'switch_theme', 'after_switch_theme', 'customize_save_after',
    'activated_plugin', 'deactivated_plugin',
) as $bx_hook ) {
    add_action( $bx_hook, function ( $id = 0 ) use ( $bx_hook ) {
        if ( in_array( $bx_hook, array( 'deleted_post', 'trashed_post', 'untrashed_post' ), true ) ) {
            $t = get_post_type( $id );
            if ( ! in_array( $t, array( 'post', 'page', 'product' ), true ) ) {
                return;
            }
        }
        bx_cache_purge_hook();
    } );
}
add_action( 'updated_option', function ( $option ) {
    if ( in_array( $option, array( 'blogname', 'blogdescription', 'permalink_structure', 'page_on_front', 'show_on_front', 'woocommerce_shop_page_id', 'active_plugins' ), true ) ) {
        bx_cache_purge_hook();
    }
} );

/** Admin bar shortcut. */
add_action( 'admin_bar_menu', function ( $bar ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }
    $bar->add_node( array(
        'id'    => 'bx-purge-cache',
        'title' => 'Purge page cache',
        'href'  => wp_nonce_url( admin_url( 'admin-post.php?action=bx_purge_cache' ), 'bx_purge_cache' ),
    ) );
}, 100 );
add_action( 'admin_post_bx_purge_cache', function () {
    if ( ! current_user_can( 'manage_options' ) || ! wp_verify_nonce( $_GET['_wpnonce'] ?? '', 'bx_purge_cache' ) ) {
        wp_die( 'Not allowed' );
    }
    bx_cache_purge_all();
    wp_safe_redirect( wp_get_referer() ? wp_get_referer() : admin_url() );
    exit;
} );
