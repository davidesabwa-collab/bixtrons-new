<?php
/**
 * Template part: Our Locations (Kenya + Uganda offices from bixtrons.com footer)
 */
bx_page_hero( 'Our Locations', 'Nairobi & Kampala' );
?>
<div class="bx-page">
<p>Bixtron Safety Handlers operates two autonomous branches serving East and Central Africa. Visit, call or message the office nearest you.</p>
<div class="bx-two">
<?php foreach ( bx_offices() as $o ) : ?>
<div>
<div class="bx-panel">
<h3><?php echo esc_html( $o['name'] ); ?> &ndash; <?php echo esc_html( $o['city'] ); ?></h3>
<p><?php echo implode( '<br/>', array_map( 'esc_html', $o['address'] ) ); ?></p>
<p><strong>Phone:</strong> <a href="tel:<?php echo esc_attr( $o['phone_raw'] ); ?>"><?php echo esc_html( $o['phone'] ); ?></a><br/>
<strong>WhatsApp:</strong> <a href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron', $o['wa_raw'] ) ); ?>" rel="noopener" target="_blank"><?php echo esc_html( $o['whatsapp'] ); ?></a><br/>
<strong>Email:</strong> <a href="mailto:<?php echo esc_attr( $o['email'] ); ?>"><?php echo esc_html( $o['email'] ); ?></a></p>
<div class="bx-cta-row"><a class="bx-btn bx-btn--red" href="<?php echo esc_url( $o['map'] ); ?>" rel="noopener" target="_blank">Open in Maps</a></div>
</div>
<iframe class="bx-map" title="Map of <?php echo esc_attr( $o['name'] ); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=<?php echo rawurlencode( implode( ', ', $o['address'] ) ); ?>&amp;output=embed"></iframe>
</div>
<?php endforeach; ?>
</div>
</div>
