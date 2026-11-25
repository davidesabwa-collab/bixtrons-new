<?php
/**
 * Template part: Quality & Certifications (facts from bixtrons.com/about)
 */
$bx = bx_company();
bx_page_hero( 'Quality & Certifications', 'Safety | Health | Environment | Quality' );
?>
<div class="bx-page">
<h2>One integrated management system</h2>
<p><?php echo esc_html( $bx['about_ims'] ); ?> This approach reflects our commitment to consistently deliver quality and efficiency in our processes, to offer superior service to all interested parties, and to guarantee our regulators total statutory compliance, all in support of our business continuity plan.</p>
<div class="bx-certs">
<?php foreach ( $bx['certs'] as $c ) : ?>
<div class="bx-certs__item"><strong><?php echo esc_html( $c['code'] ); ?></strong><span><?php echo esc_html( $c['label'] ); ?></span></div>
<?php endforeach; ?>
</div>
<div class="bx-two" style="margin-top:3rem">
<div class="bx-panel">
<h3>Registrations</h3>
<ul class="bx-list">
<?php foreach ( $bx['registrations'] as $r ) : ?><li><?php echo esc_html( $r ); ?></li><?php endforeach; ?>
<li>Registered under the laws of Kenya and Uganda</li>
</ul>
</div>
<div class="bx-panel">
<h3>Certification support</h3>
<p><?php echo esc_html( $bx['services'][3]['text'] ); ?></p>
<p><?php echo esc_html( $bx['services'][2]['text'] ); ?></p>
<div class="bx-cta-row"><a class="bx-btn bx-btn--red" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request a Quote</a></div>
</div>
</div>
</div>
