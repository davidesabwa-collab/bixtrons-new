<?php
/**
 * Footer template - Bixtron Safety Handlers (Hello Elementor child, PIP-style layout)
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
$bx_offices = bx_offices();
$bx_shop    = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );
?>

<footer class="animation-element slide-up">
<div class="links footer-logo-info">
<a aria-label="Bixtron Safety Handlers home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img alt="Bixtron Safety Handlers" id="logo-img-white" src="<?php echo esc_url( bx_logo( 'white' ) ); ?>"/>
</a>
<p class="bx-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( bx_company()['name'] ); ?>.<br/>All rights reserved.</p>
</div><!-- #map -->
<div class="links">
<h4>About Us</h4>
<ul>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Who We Are</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/quality-certifications/' ) ); ?>">Quality &amp; Certifications</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/our-locations/' ) ); ?>">Our Locations</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/legal/' ) ); ?>">Legal &amp; Privacy</a></li>
</ul>
</div><!-- .links -->
<div class="links">
<h4>Shop</h4>
<ul>
<li><a class="nav-links__link" href="<?php echo esc_url( $bx_shop ); ?>">All Products</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request a Quote</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/my-account/' ) ); ?>">My Account</a></li>
<li><a class="nav-links__link" href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
</ul>
</div>
<div class="links" id="footer-social">
<h4>Follow Us</h4>
<?php foreach ( bx_socials() as $network => $url ) : ?>
<a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener" aria-label="<?php echo esc_attr( ucfirst( $network ) ); ?>"><?php echo bx_social_svg( $network ); // phpcs:ignore WordPress.Security.EscapeOutput ?></a>
<?php endforeach; ?>
</div><!-- #footer-social -->
<div class="links" id="footer-contact">
<?php foreach ( $bx_offices as $o ) : ?>
<h4><?php echo esc_html( strtoupper( $o['name'] ) ); ?>: </h4>
<p><?php echo implode( '<br/>', array_map( 'esc_html', $o['address'] ) ); ?></p>
<p><strong><a href="tel:<?php echo esc_attr( $o['phone_raw'] ); ?>"><?php echo esc_html( $o['phone'] ); ?></a></strong><br/>
<a href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron', $o['wa_raw'] ) ); ?>" target="_blank" rel="noopener">WhatsApp <?php echo esc_html( $o['whatsapp'] ); ?></a><br/>
<a href="mailto:<?php echo esc_attr( $o['email'] ); ?>"><?php echo esc_html( $o['email'] ); ?></a></p>
<br/>
<?php endforeach; ?>
</div>
</footer>

<button class="scrollToTop" style="display: none;" aria-label="Scroll to top">
    <svg class="bx-up" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true"><path d="M5 15l7-7 7 7" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
