<?php
/**
 * WooCommerce frame: shop and single product inside the PIP header/footer.
 * WooCommerce loads this file before taxonomy-product_cat.php, so category pages are handed over here.
 *
 * @package HelloElementorPip
 */
if ( is_product_category() ) {
    require get_theme_file_path( 'taxonomy-product_cat.php' );
    return;
}

get_header();

if ( is_shop() ) {
    bx_page_hero( 'Shop', 'Bixtron Safety Handlers' );
} elseif ( is_product() ) {
    $bx_terms = get_the_terms( get_the_ID(), 'product_cat' );
    $bx_kick  = ( $bx_terms && ! is_wp_error( $bx_terms ) ) ? wp_strip_all_tags( html_entity_decode( $bx_terms[0]->name ) ) : 'Shop';
    bx_page_hero( 'Product Details', $bx_kick );
} elseif ( is_product_taxonomy() ) {
    bx_page_hero( single_term_title( '', false ), 'Shop' );
}
?>
<div class="bx-shop-wrap">
<?php woocommerce_content(); ?>
</div>
<?php
get_footer();
