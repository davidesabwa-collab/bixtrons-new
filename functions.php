<?php
/**
 * Hello Elementor Child - Bixtron Safety Handlers Theme Functions (PIP-style layout)
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PIP_THEME_VERSION', '2.1.0' );
define( 'PIP_THEME_DIR', get_stylesheet_directory() );
define( 'PIP_THEME_URI', get_stylesheet_directory_uri() );

// Build id (git SHA on deploy): version string for assets and the page cache.
if ( file_exists( PIP_THEME_DIR . '/inc/build.php' ) ) {
    require_once PIP_THEME_DIR . '/inc/build.php';
}
if ( ! defined( 'BX_BUILD' ) ) {
    define( 'BX_BUILD', PIP_THEME_VERSION );
}

/**
 * Bixtron company data + helpers (logo, offices, brands, categories).
 */
require_once PIP_THEME_DIR . '/inc/bixtron-data.php';
require_once PIP_THEME_DIR . '/inc/bixtron-pages.php';
require_once PIP_THEME_DIR . '/inc/bixtron-woocommerce.php';
require_once PIP_THEME_DIR . '/inc/bixtron-descriptions.php';
require_once PIP_THEME_DIR . '/inc/bixtron-performance.php';
require_once PIP_THEME_DIR . '/inc/bixtron-cache.php';
require_once PIP_THEME_DIR . '/inc/bixtron-chat.php';

/**
 * Helper function to retrieve theme assets
 */
function pip_asset( $path = '' ) {
    return esc_url( PIP_THEME_URI . '/assets/' . ltrim( $path, '/' ) );
}

/**
 * Enqueue scripts and styles.
 *
 * Four small stylesheets instead of twenty: fonts, the PIP layout trimmed to the rules the Bixtron
 * pages use (pip-lite.min.css, built by tools/build-css.js), the theme stylesheet and the Bixtron additions.
 */
function pip_theme_enqueue_assets() {
    $v = BX_BUILD;

    wp_enqueue_style( 'bx-fonts', pip_asset( 'css/bx-fonts.css' ), array(), $v );

    wp_enqueue_style( 'bx-pip', pip_asset( 'css/pip-lite.min.css' ), array( 'bx-fonts' ), $v );
    wp_enqueue_style( 'hello-elementor-pip-style', get_stylesheet_uri(), array( 'bx-pip' ), $v );
    wp_enqueue_style( 'bixtron-css', pip_asset( 'css/bixtron.css' ), array( 'hello-elementor-pip-style' ), $v );

    // Dropdowns, scroll-to-top and scroll animations. Deferred: nothing needs it before first paint.
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'pip-theme-init', pip_asset( 'js/pip-theme.js' ), array( 'jquery' ), $v, array( 'in_footer' => true, 'strategy' => 'defer' ) );
}
add_action( 'wp_enqueue_scripts', 'pip_theme_enqueue_assets', 20 );

/**
 * Theme Setup & Elementor Support
 */
function pip_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    register_nav_menus( array(
        'primary-menu' => __( 'Primary Navigation', 'hello-elementor-pip' ),
        'footer-menu'  => __( 'Footer Navigation', 'hello-elementor-pip' ),
    ) );
}
add_action( 'after_setup_theme', 'pip_theme_setup' );

/**
 * Body class filter for special layouts
 */
function pip_theme_body_classes( $classes ) {
    if ( is_page( array( 'about', 'contact', 'our-locations', 'quality-certifications', 'legal' ) ) ) {
        $classes[] = 'bx-company-page';
    }
    if ( is_front_page() ) {
        $classes[] = 'pip-home';
    }
    return $classes;
}
add_filter( 'body_class', 'pip_theme_body_classes' );

/**
 * Favicon (Bixtron emblem) when no Site Icon is set in the Customizer.
 */
function bx_theme_favicon() {
    if ( has_site_icon() ) {
        return;
    }
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( pip_asset( 'images/bixtron/favicon-32.png' ) ) . '">' . "
";
    echo '<link rel="icon" type="image/png" sizes="192x192" href="' . esc_url( pip_asset( 'images/bixtron/favicon-192.png' ) ) . '">' . "
";
}
add_action( 'wp_head', 'bx_theme_favicon', 5 );
