<?php
/**
 * Header template - Bixtron Safety Handlers (Hello Elementor child, PIP-style layout)
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
$bx_cats   = function_exists( 'bx_top_categories' ) ? bx_top_categories( 12 ) : array();
$bx_shop   = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
$bx_cart   = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );
$bx_count  = ( function_exists( 'WC' ) && WC()->cart ) ? (int) WC()->cart->get_cart_contents_count() : 0;
$bx_quote  = home_url( '/request-quote/' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
<div class="header-bottom-border"><!-- Border to place nav item dropdowns underneath header background --></div>
<nav class="site-header__site-nav">
<a aria-label="Bixtron Safety Handlers home" class="nav-pip-global" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img alt="Bixtron Safety Handlers" id="logo-img-black" src="<?php echo esc_url( pip_asset( 'images/bixtron/bixtron-logo-tab.svg' ) ); ?>"/>
</a>
<button class="mobile-nav-toggle" aria-label="Toggle Navigation Menu" style="display:none;background:none;border:none;font-size:28px;cursor:pointer;color:#111;padding:5px 12px;margin-left:auto;">&#9776;</button>
<ul class="site-nav__nav-center">
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">About Us</span>
<ul>
<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Who We Are</a></li>
<li><a href="<?php echo esc_url( home_url( '/quality-certifications/' ) ); ?>">Quality &amp; Certifications</a></li>
<li><a href="<?php echo esc_url( home_url( '/our-locations/' ) ); ?>">Our Locations</a></li>
<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
<li><a href="<?php echo esc_url( home_url( '/legal/' ) ); ?>">Legal &amp; Privacy</a></li>
</ul>
</li>
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">Products</span>
<ul>
<?php foreach ( $bx_cats as $c ) : ?>
<li><a href="<?php echo esc_url( $c['url'] ); ?>"><?php echo esc_html( $c['name'] ); ?></a></li>
<?php endforeach; ?>
<li><a href="<?php echo esc_url( $bx_shop ); ?>">Shop All Products</a></li>
</ul>
</li>
<li class="nav-center__logo-container">
<a aria-label="Bixtron Safety Handlers home" class="logo-container__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img alt="Bixtron Safety Handlers" id="logo-img-white" src="<?php echo esc_url( bx_logo( 'color' ) ); ?>"/>
</a>
</li>
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">Our Brands</span>
<ul>
<?php foreach ( bx_brands() as $b ) : ?>
<li><a href="<?php echo esc_url( home_url( '/#key-brands' ) ); ?>"><?php echo esc_html( $b['name'] ); ?></a></li>
<?php endforeach; ?>
</ul>
</li>
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">Order</span>
<ul>
<li><a href="<?php echo esc_url( $bx_shop ); ?>">Shop Online</a></li>
<li><a href="<?php echo esc_url( $bx_quote ); ?>">Request a Quote</a></li>
<li><a href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron, I would like to place an order.' ) ); ?>" target="_blank" rel="noopener">Order via WhatsApp</a></li>
<li><a href="<?php echo esc_url( $bx_cart ); ?>">Cart<?php echo $bx_count ? ' (' . $bx_count . ')' : ''; ?></a></li>
<li><a href="<?php echo esc_url( home_url( '/my-account/' ) ); ?>">My Account</a></li>
</ul>
</li>
</ul>
</nav>
</header>
