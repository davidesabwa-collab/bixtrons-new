<?php
/**
 * Template part: About Us (content from bixtrons.com/about)
 */
$bx = bx_company();
bx_page_hero( 'Safety Without Compromise', 'About Bixtron Safety Handlers' );
?>
<div class="bx-page">
<div class="bx-two">
<div>
<h2>Your industrial partner across East and Central Africa</h2>
<p><?php echo esc_html( $bx['about_long'] ); ?></p>
<p><?php echo esc_html( $bx['about_ims'] ); ?></p>
<p><?php echo esc_html( $bx['about_reg'] ); ?></p>
<p>In our operating philosophy of offering &ldquo;<?php echo esc_html( $bx['motto'] ); ?>&rdquo;, Bixtron Safety Handlers has partnered with the world&rsquo;s leading manufacturers of research laboratory safety systems and Personal Protective Equipment (PPE) and apparel, so our clients receive authentic products and systems that meet international safety standards.</p>
<div class="bx-cta-row">
<a class="bx-btn bx-btn--red" href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>">Shop Products</a>
<a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
</div>
</div>
<div>
<div class="bx-panel">
<h3>Certified management systems</h3>
<ul class="bx-list">
<?php foreach ( $bx['certs'] as $c ) : ?><li><strong><?php echo esc_html( $c['code'] ); ?></strong> &ndash; <?php echo esc_html( $c['label'] ); ?></li><?php endforeach; ?>
</ul>
</div>
<div class="bx-panel">
<h3>Registered with</h3>
<ul class="bx-list">
<?php foreach ( $bx['registrations'] as $r ) : ?><li><?php echo esc_html( $r ); ?></li><?php endforeach; ?>
</ul>
</div>
</div>
</div>
</div>

<div class="testimonial bx-services">
<div class="container">
<h3 class="space">What We Do</h3>
<div class="bx-services__grid">
<?php foreach ( $bx['services'] as $s ) : ?>
<div class="bx-services__item"><h4><?php echo esc_html( $s['title'] ); ?></h4><p><?php echo esc_html( $s['text'] ); ?></p></div>
<?php endforeach; ?>
</div>
</div>
</div>

<div class="bx-section bx-why">
<div class="bx-section__head"><h2>Why Bixtron</h2></div>
<div class="bx-why__grid">
<?php foreach ( $bx['strengths'] as $s ) : ?>
<div class="bx-why__item"><h3><?php echo esc_html( $s['title'] ); ?></h3><p><?php echo esc_html( $s['text'] ); ?></p></div>
<?php endforeach; ?>
</div>
</div>
