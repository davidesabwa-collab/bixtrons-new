<?php
/**
 * Page router.
 *
 * - Company pages (about, contact, our-locations, quality-certifications, legal) always use the
 *   Bixtron templates in template-parts/content-{slug}.php, even if the page was built in Elementor.
 * - Other pages built with Elementor render their Elementor content.
 * - Everything else (cart, checkout, my-account, request-quote, policies ...) is shown inside the
 *   PIP header/footer with a standard page hero.
 *
 * @package HelloElementorPip
 */

get_header();

$slug        = get_post_field( 'post_name', get_post() );
$custom_part = 'template-parts/content-' . $slug;
$is_company  = in_array( $slug, array_keys( bx_required_pages() ), true ) && locate_template( $custom_part . '.php' );

$is_elementor = false;
if ( did_action( 'elementor/loaded' ) && class_exists( '\Elementor\Plugin' ) ) {
    $doc          = \Elementor\Plugin::$instance->documents->get( get_the_ID() );
    $is_elementor = $doc && $doc->is_built_with_elementor();
}

if ( $is_company ) {
    get_template_part( $custom_part );
} elseif ( $is_elementor ) {
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
} else {
    while ( have_posts() ) :
        the_post();
        bx_page_hero( get_the_title() );
        ?>
        <div class="bx-page bx-page--content">
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
}

get_footer();
