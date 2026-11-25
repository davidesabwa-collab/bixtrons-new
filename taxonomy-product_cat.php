<?php
/**
 * Product category landing - PIP "channel" layout (lead-in banner + product grid).
 *
 * @package HelloElementorPip
 */
get_header();

$bx_term  = get_queried_object();
$bx_img   = bx_category_image( $bx_term, 'large' );
$bx_kids  = get_terms( array(
    'taxonomy'   => 'product_cat',
    'parent'     => $bx_term->term_id,
    'hide_empty' => true,
) );
$bx_wa    = bx_whatsapp_url( 'Hello Bixtron, I am interested in your ' . $bx_term->name . ' range.' );
?>
<div class="bx-lead" style="background-image:url('<?php echo esc_url( $bx_img ); ?>');">
<div class="bx-lead__overlay"></div>
<div class="bx-lead__text">
<h1><?php echo esc_html( $bx_term->name ); ?><br/> <span>PRODUCTS</span></h1>
<p class="bx-lead__desc">
<?php
echo $bx_term->description ? esc_html( wp_strip_all_tags( $bx_term->description ) ) : esc_html( sprintf( 'Browse our %s range, supplied by Bixtron Safety Handlers across East and Central Africa.', $bx_term->name ) );
?>
</p>
<p class="bx-cta-row"><a class="bx-btn bx-btn--red" href="<?php echo esc_url( $bx_wa ); ?>" rel="noopener" target="_blank">Ask on WhatsApp</a> <a class="bx-btn bx-btn--ghost bx-btn--onDark" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request a Quote</a></p>
</div>
</div>

<div class="bx-shop-wrap">
<?php if ( $bx_kids && ! is_wp_error( $bx_kids ) ) : ?>
<div class="bx-subcats">
<?php foreach ( $bx_kids as $bx_k ) : ?>
<a href="<?php echo esc_url( get_term_link( $bx_k ) ); ?>"><?php echo esc_html( $bx_k->name ); ?><span><?php echo (int) $bx_k->count; ?></span></a>
<?php endforeach; ?>
</div>
<?php endif; ?>

<?php if ( woocommerce_product_loop() ) : ?>
<?php
woocommerce_product_loop_start();
while ( have_posts() ) {
    the_post();
    wc_get_template_part( 'content', 'product' );
}
woocommerce_product_loop_end();
do_action( 'woocommerce_after_shop_loop' );
?>
<?php else : ?>
<?php do_action( 'woocommerce_no_products_found' ); ?>
<?php endif; ?>
</div>
<?php
get_footer();
