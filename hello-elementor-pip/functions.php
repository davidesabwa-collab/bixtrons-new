<?php
/**
 * Hello Elementor Child - PIP Global Replica Theme Functions
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'PIP_THEME_VERSION', '1.0.0' );
define( 'PIP_THEME_DIR', get_stylesheet_directory() );
define( 'PIP_THEME_URI', get_stylesheet_directory_uri() );

/**
 * Helper function to retrieve theme assets
 */
function pip_asset( $path = '' ) {
    return esc_url( PIP_THEME_URI . '/assets/' . ltrim( $path, '/' ) );
}

/**
 * Enqueue scripts and styles
 */
function pip_theme_enqueue_assets() {
    // 1. Parent theme style
    wp_enqueue_style( 'hello-elementor-parent-style', get_template_directory_uri() . '/style.css' );

    // 2. Typekit fonts
    wp_enqueue_style( 'pip-typekit-wvn', 'https://use.typekit.net/wvn6cug.css', array(), null );
    wp_enqueue_style( 'pip-typekit-rrf', 'https://use.typekit.net/rrf0nar.css', array(), null );

    // 3. Local Theme Stylesheets
    wp_enqueue_style( 'pip-bootstrap', pip_asset( 'css/bootstrap.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-owl-carousel', pip_asset( 'css/owl.carousel.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-twentytwenty', pip_asset( 'css/twentytwenty.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-fonts-roboto', pip_asset( 'css/fonts-roboto.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-fonts-custom', pip_asset( 'css/fonts.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-font-class-style', pip_asset( 'css/font-class-style.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-channel', pip_asset( 'css/channel.min.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-main-css', pip_asset( 'css/pip-main.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'pip-style-min', pip_asset( 'css/style.min.css' ), array(), PIP_THEME_VERSION );
    wp_enqueue_style( 'hello-elementor-pip-style', get_stylesheet_uri(), array( 'hello-elementor-parent-style' ), PIP_THEME_VERSION );

    // 4. JavaScript Libraries
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'pip-menu', pip_asset( 'js/menu.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-owl', pip_asset( 'js/owl.carousel.min.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-bxslider', pip_asset( 'js/jquery.bxslider.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-event-move', pip_asset( 'js/jquery.event.move.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-twentytwenty', pip_asset( 'js/jquery.twentytwenty.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-chart', pip_asset( 'js/chart.js' ), array(), PIP_THEME_VERSION, true );
    wp_enqueue_script( 'pip-timeline', pip_asset( 'js/timeline.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );

    // Front-page script
    if ( is_front_page() || is_home() ) {
        wp_enqueue_script( 'pip-home', pip_asset( 'js/pip-home.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
    }

    // Main interactive theme initializer
    wp_enqueue_script( 'pip-theme-init', pip_asset( 'js/pip-theme.js' ), array( 'jquery' ), PIP_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'pip_theme_enqueue_assets', 20 );

/**
 * Theme Setup & Elementor Support
 */
function pip_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
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
    if ( is_page( 'sustainability' ) ) {
        $classes[] = 'sustainability-revamp';
    }
    if ( is_front_page() ) {
        $classes[] = 'pip-home';
    }
    return $classes;
}
add_filter( 'body_class', 'pip_theme_body_classes' );
