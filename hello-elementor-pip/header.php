<?php
/**
 * Header template for PIP Global Replica (Hello Elementor Child)
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
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
<a alt="link to PIP homepage" class="nav-pip-global" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img id="logo-img-black" src="<?php echo pip_asset('images/pip-global-safety-logo-red.svg'); ?>"/>
</a>
<button class="mobile-nav-toggle" aria-label="Toggle Navigation Menu" style="display:none;background:none;border:none;font-size:28px;cursor:pointer;color:#111;padding:5px 12px;margin-left:auto;">&#9776;</button>
<ul class="site-nav__nav-center">
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">About Us</span>
<ul>
<li><a href="<?php echo esc_url( home_url( '/career/' ) ); ?>">Careers</a></li>
<li><a href="<?php echo esc_url( home_url( '/our-locations/' ) ); ?>">Global Locations</a></li>
<li><a href="<?php echo esc_url( home_url( '/sustainability/' ) ); ?>">Sustainability</a></li>
<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
<li><a href="<?php echo esc_url( home_url( '/legal/' ) ); ?>">Legal &amp; Privacy</a></li>
</ul>
</li>
<!-- <li class="parent-link">
                <span class="show_gbl_loc" role="button" tabindex="0" aria-haspopup="true">Locations</span>
                 <ul>
                    <li><a href="<?php echo esc_url( home_url( '/our-locations/' ) ); ?>">Locations</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a></li>
                </ul>
            </li> -->
<li class="nav-center__logo-container">
<a alt="link to PIP homepage" class="logo-container__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img id="logo-img-white" src="<?php echo pip_asset('images/pip-global-safety-logo-black.svg'); ?>"/>
</a>
</li>
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">Our Brands</span>
<ul>
<li><a href="<?php echo esc_url( home_url( '/#key-brands' ) ); ?>">Industrial Brands</a></li> <!-- #key-brand -->
<!-- <li><a href="/#specialty-brands">Specialty Brands</a></li> -->
<li><a href="<?php echo esc_url( home_url( '/#retail-brands' ) ); ?>">Retail Brands</a></li>
</ul>
</li>
<li class="parent-link">
<span aria-haspopup="true" role="button" tabindex="0">Channels We Serve</span>
<ul>
<li><a href="<?php echo esc_url( home_url( '/#industrial-channels' ) ); ?>">Industrial</a></li>
<!-- <li><a href="/#specialty-channels">Specialty</a></li>  -->
<li><a href="<?php echo esc_url( home_url( '/#retail-channels' ) ); ?>">Retail</a></li>
<li><a href="https://amea.pipglobal.com/en/" target="_blank">Export</a></li>
</ul>
</li>
<li class="parent-link show_gbl_loc">
<span aria-haspopup="true" role="button" tabindex="0">Regions</span>
<!-- <ul >
                    <li><a href="https://us.pipglobal.com/en/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-usa.gif'); ?>" alt="flag"><strong>USA - English</strong></a></li>
                    <li><a href="https://ca.pipglobal.com/en/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-canada.gif'); ?>" alt="flag"><strong>Canada - English</strong></a></li>
                    <li><a href="https://ca.pipglobal.com/fr/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-canada.gif'); ?>" alt="flag"><strong>Canada - Français</strong></a></li>
                    <li><a href="https://mx.pipglobal.com/es/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-mexico.gif'); ?>" alt="flag"><strong>Mexico - Español</strong></a></li>
                    <li><a href="https://eu.pipglobal.com/en/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>" alt="flag"><strong>Europe - English</strong></a></li>
                    <li><a href="https://eu.pipglobal.com/eues/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>" alt="flag"><strong>Europe - Español</strong></a></li>
                    <li><a href="https://eu.pipglobal.com/eufr/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>" alt="flag"><strong>Europe - Français</strong></a></li>
                    <li><a href="https://eu.pipglobal.com/it/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>" alt="flag"><strong>Europe - Italiano</strong></a></li>
                    <li><a href="https://cn.pipglobal.cn/zh/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-china.gif'); ?>" alt="flag"><strong>China - 简体中文</strong></a></li>
                    <li><a href="https://cn.pipglobal.cn/en/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-hk.gif'); ?>" alt="flag"><strong>Asia Pacific</strong></a></li>
                    <li><a href="https://www.paramountsafety.com/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-australia.gif'); ?>" alt="flag"><strong>Australia</strong></a></li>
                    <li><a href="https://amea.pipglobal.com/en/" target="_blank" class="gbl_loc"><img src="<?php echo pip_asset('images/img-flag-amea.gif'); ?>" alt="flag"><strong>Export</strong></a></li>
                </ul> -->
</li>
</ul>
</nav>
<div id="locations-dropdown">
<span class="icon icon-close exitlanguages"></span>
<div id="locations-dropdown-content">
<img alt="image of map of world" id="loc-bg-map" src="<?php echo pip_asset('images/WorldMap.png'); ?>"/>
<div class="allCountries">
<!-- AMERICAS -->
<div>
<a class="loc-collapsible">
<h3>                    
                                North America                            </h3>
</a>
<div class="location-content">
<a href="//us.pipglobal.com/en/" id="loc-usen">
<img alt="usa website" class="flag" src="<?php echo pip_asset('images/img-flag-usa.gif'); ?>"/>
<span class="flagtxt" id="location-">United States - English</span>
</a>
<a href="//ca.pipglobal.com/en/" id="loc-caen">
<img alt="canadian website" class="flag" src="<?php echo pip_asset('images/img-flag-canada.gif'); ?>"/>
<span class="flagtxt">Canada - English</span>
</a>
<a href="//ca.pipglobal.com/fr/" id="loc-cafr">
<img alt="canadian website" class="flag" src="<?php echo pip_asset('images/img-flag-canada.gif'); ?>"/>
<span class="flagtxt">Canada - Français</span>
</a>
<a href="//mx.pipglobal.com/en/" id="loc-mxen">
<img alt="pip mexico english language website" class="flag" src="<?php echo pip_asset('images/img-flag-mexico.gif'); ?>"/>
<span class="flagtxt">Mexico - English</span>
</a>
<a href="//mx.pipglobal.com/es/" id="loc-mxes">
<img alt="pip mexico spanish language website" class="flag" src="<?php echo pip_asset('images/img-flag-mexico.gif'); ?>"/>
<span class="flagtxt">Mexico - Español</span>
</a>
<a href="//la.pipglobal.com/en/" id="loc-laen">
<img alt="pip latin america english language website" class="flag" src="<?php echo pip_asset('images/img-flag-la.gif'); ?>"/>
<span class="flagtxt">Latin America - English</span>
</a>
<a href="//la.pipglobal.com/es/" id="loc-laes">
<img alt="pip latin america spanish language website" class="flag" src="<?php echo pip_asset('images/img-flag-la.gif'); ?>"/>
<span class="flagtxt">Latin America - Español</span>
</a>
</div>
</div>
<!-- EUROPE -->
<div>
<a class="loc-collapsible">
<h3>            
                                Europe</h3>
</a>
<div class="location-content">
<a href="//eu.pipglobal.com/en/" id="loc-euen">
<img alt="pip europe english language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europe - English</span>
</a>
<a href="//eu.pipglobal.com/eues/" id="loc-eueues">
<img alt="pip europe spanish language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europa - Español</span>
</a>
<a href="//eu.pipglobal.com/eufr/" id="loc-eueufr">
<img alt="pip europe french language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">L'Europe - Français</span>
</a>
<a href="//eu.pipglobal.com/it/" id="loc-euit">
<img alt="pip europe italian language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europa - Italiano</span>
</a>
<a href="//eu.pipglobal.com/de/" id="loc-eude">
<img alt="pip europe german language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europa - Deutsch</span>
</a>
<a href="//eu.pipglobal.com/pl/" id="loc-eupl">
<img alt="pip europe polish language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europa - Polski</span>
</a>
<a href="//eu.pipglobal.com/cs/" id="loc-eucs">
<img alt="pip europe czech language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Evropa - Čeština</span>
</a>
<a href="//eu.pipglobal.com/nl/" id="loc-eunl">
<img alt="pip europe dutch language website" class="flag" src="<?php echo pip_asset('images/img-flag-europe.gif'); ?>"/>
<span class="flagtxt">Europa - Nederlands</span>
</a>
</div>
</div>
<!-- ASIA PACIFIC -->
<div>
<a class="loc-collapsible">
<h3>            
                                Asia &amp; Pacific                                </h3>
</a>
<div class="location-content">
<a href="//cn.pipglobal.cn/zh/" id="loc-cnzh">
<img alt="pip china website" class="flag" src="<?php echo pip_asset('images/img-flag-china.gif'); ?>"/>
<span class="flagtxt">中国 - 简体中文</span>
</a>
<a href="//cn.pipglobal.cn/en/" id="loc-cnen">
<img alt="pip asia pacific website" class="flag" src="<?php echo pip_asset('images/img-flag-china.gif'); ?>"/>
<span class="flagtxt">China - English</span>
</a>
<a href="//www.pipanz.com/" id="loc-auen">
<img alt="australia website" class="flag" src="<?php echo pip_asset('images/img-flag-australia.gif'); ?>"/>
<span class="flagtxt">Australia - English</span>
</a>
<a href="//www.pipanz.com/" id="loc-nzen">
<img alt="new zealand website" class="flag" src="<?php echo pip_asset('images/img-flag-newzealand.gif'); ?>"/>
<span class="flagtxt">New Zealand - English</span>
</a>
<a href="//amea.pipglobal.com/en/" id="loc-ameaen">
<img alt="AMEA website" class="flag" src="<?php echo pip_asset('images/img-flag-amea.gif'); ?>"/>
<span class="flagtxt">Export - English</span>
</a>
</div>
</div>
</div>
</div> <!-- End of locations-dropdown-content -->
</div>
</header>
