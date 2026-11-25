<?php
/**
 * Template part for Home (Bixtron Safety Handlers)
 */
?>
<div class="site-content" id="content" style="padding:0;">
<!-- START: Hero Banner -->
<div class="container-full site-content__hero" id="global-hero">
<!-- <div class="empowered-text">
                    <h1>WHAT WE PROTECT IS <br/><span>EVERYTHING<span>.</span><sup>&trade;</sup></span></h1>
                </div> -->
<!-- <div id="hero-industrial" class="hero__protection hero-half animation-element slide-left" role="img" aria-label="industrial background">
                    <div id="hero-angles-left" class="hero-angles animation-element slide-left"></div>
                    <div id="hero-chevrons-left" class="hero-chevrons animation-element slide-left"></div>
                    <div id="workers-left" class="hero-figure" role="img" aria-label="industry worker operating machinery"></div>
               
                </div>


                <div id="hero-consumer" class="hero__empowered hero-half animation-element slide-right" role="img" aria-label="construction background">
                    <div id="hero-angles-right" class="hero-angles animation-element slide-right"></div>
                    <div id="hero-chevrons-right" class="hero-chevrons animation-element slide-right"></div>
                    <div id="worker-right" class="hero-figure" role="img" aria-label="construction worker sanding wood"></div>
                </div> -->
<div id="WWPIE-Header">
<div class="hero-text-container">
<h1>SAFETY <br class="mobile-break"/>WITHOUT <br/><span>COMPROMISE<span>.</span></span></h1>
<h2><span class="hero-subtext__phrase">YOUR PEOPLE.</span> <span class="hero-subtext__phrase">YOUR WORKPLACE.</span> <span class="hero-subtext__phrase">YOUR BUSINESS.</span></h2>
</div>
<img alt="" class="hero-red-chevron" src="<?php echo pip_asset('images/wwpie-chevron.webp'); ?>"/>
</div> <!-- END WWPIE-Header-->
<div class="hero__nav-links">
<a class="nav-links__link" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>">Shop</a>
<a class="nav-links__link" href="<?php echo esc_url( home_url( '/#industrial-channels' ) ); ?>">Products</a>
<a class="nav-links__link" href="<?php echo esc_url( home_url( '/#key-brands' ) ); ?>">Brands</a>
<a class="nav-links__link" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Get a Quote</a>
<a class="nav-links__link" href="<?php echo esc_url( home_url( '/our-locations/' ) ); ?>">Locations</a>
<a class="nav-links__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
</div>
</div>
<!-- END: Hero Banner -->
<?php
$bx_company = bx_company();
$bx_cats    = bx_top_categories( 12 );
$bx_shop    = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );

// Featured products, falling back to the newest ones (IDs cached for 12h).
$bx_products = array();
if ( function_exists( 'wc_get_products' ) ) {
    $bx_ids = get_transient( 'bx_home_products' );
    if ( ! is_array( $bx_ids ) ) {
        $bx_found = wc_get_products( array( 'status' => 'publish', 'limit' => 8, 'featured' => true, 'return' => 'ids' ) );
        if ( count( $bx_found ) < 8 ) {
            $bx_found = wc_get_products( array( 'status' => 'publish', 'limit' => 8, 'orderby' => 'date', 'order' => 'DESC', 'return' => 'ids' ) );
        }
        $bx_ids = $bx_found;
        set_transient( 'bx_home_products', $bx_ids, 12 * HOUR_IN_SECONDS );
    }
    $bx_products = array_filter( array_map( 'wc_get_product', $bx_ids ) );
}
?>
<!-- START: Brands -->
<div class="site-content__key-brands" id="key-brands">
<div class="brands-header-main">
<h2 class="brands-header-main__title">Our<br/>Brands</h2>
<img alt="Chevron" class="brands-header-main__chev" src="<?php echo esc_url( pip_asset( 'images/brands/white-chevrons-down.svg' ) ); ?>"/>
</div>
<div class="key-brands-container bx-brands">
<?php foreach ( bx_brands() as $bx_brand ) : ?>
<div class="brands__brand-section reg-logo">
<?php if ( $bx_brand['url'] ) : ?><a aria-label="<?php echo esc_attr( $bx_brand['name'] ); ?>" href="<?php echo esc_url( $bx_brand['url'] ); ?>" rel="noopener" target="_blank"><?php endif; ?>
<img alt="<?php echo esc_attr( $bx_brand['name'] ); ?>" src="<?php echo esc_url( pip_asset( 'images/bixtron/brands/' . $bx_brand['logo'] ) ); ?>"/>
<?php if ( $bx_brand['url'] ) : ?></a><?php endif; ?>
</div>
<?php endforeach; ?>
</div>
</div>
<!-- END: Brands -->

<!-- START: Product categories -->
<div class="site-content__channels" id="industrial-channels">
<div class="channels__title">
<h2>Shop by Category</h2>
</div>
<?php foreach ( $bx_cats as $bx_i => $bx_cat ) :
    $bx_id = 'bx-cat-' . (int) $bx_cat['term']->term_id; ?>
<section class="animation-element slide-up video-small bx-tile" id="<?php echo esc_attr( $bx_id ); ?>">
<a href="<?php echo esc_url( $bx_cat['url'] ); ?>">
<div class="full-wrap" id="channel-<?php echo esc_attr( $bx_id ); ?>" data-bx-bg="<?php echo esc_url( $bx_cat['image'] ); ?>">
<div class="title-wrap" style="pointer-events:none;">
<h2><?php echo esc_html( $bx_cat['name'] ); ?></h2>
<p class="bx-tile__count"><?php echo esc_html( sprintf( _n( '%d product', '%d products', $bx_cat['count'], 'hello-elementor-pip' ), $bx_cat['count'] ) ); ?></p>
</div>
</div>
</a>
</section>
<?php endforeach; ?>
<section class="animation-element slide-up video-small bx-tile bx-tile--all" id="bx-cat-all">
<a href="<?php echo esc_url( $bx_shop ); ?>">
<div class="full-wrap">
<div class="title-wrap" style="pointer-events:none;">
<h2>Shop All Products</h2>
<p class="bx-tile__count">Browse the full catalogue</p>
</div>
</div>
</a>
</section>
</div>
<!-- END: Product categories -->

<?php if ( $bx_products ) : ?>
<!-- START: Featured products -->
<div class="bx-section bx-featured" id="featured-products">
<div class="bx-section__head">
<h2>Featured Products</h2>
<a class="bx-link" href="<?php echo esc_url( $bx_shop ); ?>">View all products &rarr;</a>
</div>
<div class="bx-grid">
<?php foreach ( $bx_products as $bx_p ) :
    $bx_img = $bx_p->get_image_id() ? wp_get_attachment_image_url( $bx_p->get_image_id(), 'woocommerce_thumbnail' ) : wc_placeholder_img_src();
    $bx_msg = 'Hello Bixtron, I would like to order: ' . $bx_p->get_name() . ' ' . get_permalink( $bx_p->get_id() ); ?>
<article class="bx-card">
<a class="bx-card__img" href="<?php echo esc_url( get_permalink( $bx_p->get_id() ) ); ?>"><img alt="<?php echo esc_attr( $bx_p->get_name() ); ?>" loading="lazy" src="<?php echo esc_url( $bx_img ); ?>"/></a>
<h3 class="bx-card__title"><a href="<?php echo esc_url( get_permalink( $bx_p->get_id() ) ); ?>"><?php echo esc_html( wp_strip_all_tags( $bx_p->get_name() ) ); ?></a></h3>
<div class="bx-card__actions">
<a class="bx-btn bx-btn--red" href="<?php echo esc_url( get_permalink( $bx_p->get_id() ) ); ?>">View</a>
<a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( bx_whatsapp_url( $bx_msg ) ); ?>" rel="noopener" target="_blank">WhatsApp</a>
</div>
</article>
<?php endforeach; ?>
</div>
</div>
<!-- END: Featured products -->
<?php endif; ?>

<!-- START: What we do -->
<div class="testimonial bx-services" id="what-we-do">
<div class="container">
<h3 class="space">What We Do</h3>
<div class="bx-services__grid">
<?php foreach ( $bx_company['services'] as $bx_s ) : ?>
<div class="bx-services__item">
<h4><?php echo esc_html( $bx_s['title'] ); ?></h4>
<p><?php echo esc_html( $bx_s['text'] ); ?></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
<!-- END: What we do -->

<!-- START: Why Bixtron + certifications -->
<div class="bx-section bx-why" id="why-bixtron">
<div class="bx-section__head"><h2>Why Bixtron</h2></div>
<div class="bx-why__grid">
<?php foreach ( $bx_company['strengths'] as $bx_s ) : ?>
<div class="bx-why__item">
<h3><?php echo esc_html( $bx_s['title'] ); ?></h3>
<p><?php echo esc_html( $bx_s['text'] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="bx-certs">
<?php foreach ( $bx_company['certs'] as $bx_c ) : ?>
<div class="bx-certs__item"><strong><?php echo esc_html( $bx_c['code'] ); ?></strong><span><?php echo esc_html( $bx_c['label'] ); ?></span></div>
<?php endforeach; ?>
</div>
</div>
<!-- END: Why Bixtron -->

<!-- START: Offices -->
<div class="bx-offices" id="offices">
<?php foreach ( bx_offices() as $bx_o ) : ?>
<div class="bx-offices__item">
<h3><?php echo esc_html( $bx_o['name'] ); ?></h3>
<p><?php echo implode( '<br/>', array_map( 'esc_html', $bx_o['address'] ) ); ?></p>
<p><a href="tel:<?php echo esc_attr( $bx_o['phone_raw'] ); ?>"><?php echo esc_html( $bx_o['phone'] ); ?></a> &middot; <a href="mailto:<?php echo esc_attr( $bx_o['email'] ); ?>"><?php echo esc_html( $bx_o['email'] ); ?></a></p>
<p><a class="bx-btn bx-btn--red" href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron', $bx_o['wa_raw'] ) ); ?>" rel="noopener" target="_blank">WhatsApp <?php echo esc_html( $bx_o['city'] ); ?></a></p>
</div>
<?php endforeach; ?>
</div>
<!-- END: Offices -->
</div>
<script>
(function(){var t=document.querySelectorAll('[data-bx-bg]');if(!t.length)return;function s(e){e.style.backgroundImage="url('"+e.getAttribute('data-bx-bg')+"')";e.removeAttribute('data-bx-bg');}
if(!('IntersectionObserver' in window)){for(var i=0;i<t.length;i++)s(t[i]);return;}
var o=new IntersectionObserver(function(en){en.forEach(function(x){if(x.isIntersecting){s(x.target);o.unobserve(x.target);}});},{rootMargin:'400px 0px'});
for(var j=0;j<t.length;j++)o.observe(t[j]);})();
</script>
