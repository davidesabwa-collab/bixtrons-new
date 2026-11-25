<?php
/**
 * Template part: Contact. A conversation instead of a form: the chat (assets/js/bixtron-chat.js) asks for
 * name, topic, details, office and contact method, then sends the enquiry to the right Bixtron office.
 * Office details come from inc/bixtron-data.php (live bixtrons.com footer).
 */
bx_page_hero( 'Contact Us', 'Talk to our team' );
$bx_offices = bx_offices();
$bx_first   = $bx_offices[0];
?>
<div class="bx-page">
<div class="bx-two bx-two--chat">
<div>
<h2>Start a conversation</h2>
<p class="bx-chat-lead">Answer a few quick questions and we&rsquo;ll send your enquiry straight to the right office. Prefer to talk now? Use WhatsApp or call.</p>
<div id="bx-chat-inline" class="bx-chat-inline" aria-live="polite">
    <div class="bx-chat-skeleton">
        <span class="bx-chat-skeleton__bar"></span>
        <span class="bx-chat-skeleton__line"></span>
        <span class="bx-chat-skeleton__line bx-chat-skeleton__line--s"></span>
    </div>
    <noscript>
        <p>The chat needs JavaScript. Please email <a href="mailto:<?php echo esc_attr( $bx_first['email'] ); ?>"><?php echo esc_html( $bx_first['email'] ); ?></a> or message us on WhatsApp.</p>
    </noscript>
</div>
<div class="bx-cta-row">
<a class="bx-btn bx-btn--red" href="<?php echo esc_url( bx_whatsapp_url( 'Hello Bixtron, I would like to make an enquiry.' ) ); ?>" rel="noopener" target="_blank">Chat on WhatsApp</a>
<a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Open my quote list</a>
</div>
</div>
<div>
<?php foreach ( $bx_offices as $o ) : ?>
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
