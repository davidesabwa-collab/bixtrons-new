<?php
/**
 * WooCommerce integration: PIP-style wrapper for shop pages, WhatsApp / quote ordering.
 * Bixtron's catalogue has no public prices (orders go through WhatsApp or quote request),
 * so the buttons below are the primary call to action. Cart and checkout stay fully active.
 *
 * @package HelloElementorPip
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'WooCommerce' ) ) {
    return;
}

/**
 * Use the PIP header/footer around WooCommerce views (woocommerce.php handles the frame).
 * Remove the default wrappers and sidebar.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

add_filter( 'loop_shop_columns', function () {
    return 4;
} );
add_filter( 'loop_shop_per_page', function () {
    return 24;
} );

/**
 * Message used for WhatsApp ordering of one product.
 */
function bx_product_whatsapp_url( $product ) {
    $msg = sprintf( 'Hello Bixtron, I would like to order: %s (%s)', wp_strip_all_tags( $product->get_name() ), get_permalink( $product->get_id() ) );
    return bx_whatsapp_url( $msg );
}

/**
 * Single product: WhatsApp + quote buttons (primary route for unpriced items).
 */
function bx_single_product_actions() {
    global $product;
    if ( ! $product ) {
        return;
    }
    ?>
    <div class="bx-order-actions">
        <a class="bx-btn bx-btn--red" href="<?php echo esc_url( bx_product_whatsapp_url( $product ) ); ?>" rel="noopener" target="_blank">Order via WhatsApp</a>
        <?php if ( ! defined( 'YITH_YWRAQ_VERSION' ) ) : // YITH adds its own "Add to Quote" button. ?>
        <a class="bx-btn bx-btn--ghost" href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>">Request a Quote</a>
        <?php endif; ?>
    </div>
    <?php
}
add_action( 'woocommerce_single_product_summary', 'bx_single_product_actions', 35 );

/**
 * Product cards in shop loops: WhatsApp shortcut.
 */
function bx_loop_whatsapp_button() {
    global $product;
    if ( ! $product ) {
        return;
    }
    echo '<a class="bx-btn bx-btn--ghost bx-btn--block" href="' . esc_url( bx_product_whatsapp_url( $product ) ) . '" rel="noopener" target="_blank">Order via WhatsApp</a>';
}
add_action( 'woocommerce_after_shop_loop_item', 'bx_loop_whatsapp_button', 15 );

/**
 * Show "Request a quote" instead of an empty price (all catalogue items are unpriced).
 */
add_filter( 'woocommerce_get_price_html', function ( $price, $product ) {
    if ( '' === $product->get_price() || 0.0 === (float) $product->get_price() ) {
        return '<span class="bx-price-quote">Price on request</span>';
    }
    return $price;
}, 20, 2 );

/**
 * Hide the default "Uncategorized" category link on products.
 */
add_filter( 'term_links-product_cat', function ( $links ) {
    return array_values( array_filter( $links, function ( $l ) {
        return false === stripos( $l, 'uncategorized' );
    } ) );
} );
