<?php
/**
 * Smart Slug-Based Page Router with Elementor Fallback
 *
 * Automatically routes matching PIP slugs to their mirror templates
 * while fully supporting native Elementor Builder content!
 *
 * @package HelloElementorPip
 */

get_header();

$slug = get_post_field( 'post_name', get_post() );
$custom_part = 'template-parts/content-' . $slug;

// Check if page was built with Elementor
$is_elementor = did_action( 'elementor/loaded' ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() ) && \Elementor\Plugin::$instance->documents->get( get_the_ID() )->is_built_with_elementor();

if ( $is_elementor ) {
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
} elseif ( locate_template( $custom_part . '.php' ) ) {
    get_template_part( $custom_part );
} else {
    while ( have_posts() ) : the_post();
        ?>
        <div class="site-content" id="content" style="padding: 60px 20px; max-width: 1200px; margin: 0 auto;">
            <h1><?php the_title(); ?></h1>
            <div class="entry-content" style="margin-top: 30px; line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        </div>
        <?php
    endwhile;
}

get_footer();
