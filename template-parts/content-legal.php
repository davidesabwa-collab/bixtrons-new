<?php
/**
 * Template part: Legal & Privacy
 */
$bx       = bx_company();
$bx_first = bx_offices()[0];
$bx_pp    = get_page_by_path( 'privacy-policy-2' );
if ( ! $bx_pp ) {
    $bx_pp = get_page_by_path( 'privacy-policy' );
}
bx_page_hero( 'Legal & Privacy', $bx['name'] );
?>
<div class="bx-page">
<div class="bx-two">
<div>
<div class="bx-panel">
<h3>Company</h3>
<p><?php echo esc_html( $bx['name'] ); ?> operates branches in Nairobi, Kenya and Kampala, Uganda, registered under each country&rsquo;s laws.</p>
<ul class="bx-list">
<?php foreach ( $bx['certs'] as $c ) : ?><li><?php echo esc_html( $c['code'] ); ?> &ndash; <?php echo esc_html( $c['label'] ); ?></li><?php endforeach; ?>
</ul>
</div>
<div class="bx-panel">
<h3>Returns &amp; exchanges</h3>
<p>We offer an easy 7-day free return or exchange policy. Contact our sales support team to start the process.</p>
<div class="bx-cta-row"><a class="bx-btn bx-btn--red" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact sales support</a></div>
</div>
</div>
<div>
<div class="bx-panel">
<h3>Privacy</h3>
<p>We use the information you give us only to answer your enquiry or process your order. Read the full policy on our privacy page.</p>
<?php if ( $bx_pp ) : ?><div class="bx-cta-row"><a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( get_permalink( $bx_pp ) ); ?>">Privacy policy</a></div><?php endif; ?>
</div>
<div class="bx-panel">
<h3>Questions</h3>
<p>For any legal or compliance question, email <a href="mailto:<?php echo esc_attr( $bx_first['email'] ); ?>"><?php echo esc_html( $bx_first['email'] ); ?></a>.</p>
</div>
</div>
</div>
</div>
