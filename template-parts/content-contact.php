<?php
/**
 * Template part: Contact (details from bixtrons.com footer; form = existing Contact Form 7)
 */
bx_page_hero( 'Contact Us', 'We are here to help' );
$bx_form_id = 0;
if ( post_type_exists( 'wpcf7_contact_form' ) ) {
    $bx_forms = get_posts( array( 'post_type' => 'wpcf7_contact_form', 'numberposts' => 1, 'orderby' => 'ID', 'order' => 'ASC' ) );
    if ( $bx_forms ) {
        $bx_form_id = (int) $bx_forms[0]->ID;
    }
}
$bx_first = bx_offices()[0];
?>
<div class="bx-page">
<div class="bx-two">
<div>
<h2>Send us a message</h2>
<?php if ( $bx_form_id ) : ?>
<div class="bx-form"><?php echo do_shortcode( '[contact-form-7 id="' . $bx_form_id . '"]' ); // phpcs:ignore ?></div>
<?php else : ?>
<p>Email us at <a href="mailto:<?php echo esc_attr( $bx_first['email'] ); ?>"><?php echo esc_html( $bx_first['email'] ); ?></a> or message us on WhatsApp.</p>
<?php endif; ?>
<div class="bx-cta-row">
<a class="bx-btn bx-btn--red" href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron, I would like to make an enquiry.' ) ); ?>" rel="noopener" target="_blank">Chat on WhatsApp</a>
<a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request a Quote</a>
</div>
</div>
<div>
<?php foreach ( bx_offices() as $o ) : ?>
<div class="bx-panel">
<h3><?php echo esc_html( $o['name'] ); ?></h3>
<p><?php echo implode( '<br/>', array_map( 'esc_html', $o['address'] ) ); ?></p>
<p><strong>Phone:</strong> <a href="tel:<?php echo esc_attr( $o['phone_raw'] ); ?>"><?php echo esc_html( $o['phone'] ); ?></a><br/>
<strong>WhatsApp:</strong> <a href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron', $o['wa_raw'] ) ); ?>" rel="noopener" target="_blank"><?php echo esc_html( $o['whatsapp'] ); ?></a><br/>
<strong>Email:</strong> <a href="mailto:<?php echo esc_attr( $o['email'] ); ?>"><?php echo esc_html( $o['email'] ); ?></a></p>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
