<?php
/**
 * Main index fallback template
 */
get_header();
?>
<div class="site-content" id="content" style="padding: 60px 20px; max-width: 1200px; margin: 0 auto;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post-card' ); ?> style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid #e5e7eb;">
                <h2><a href="<?php the_permalink(); ?>" style="color: #111827; text-decoration: none;"><?php the_title(); ?></a></h2>
                <div style="color: #6b7280; font-size: 14px; margin: 10px 0;"><?php echo get_the_date(); ?></div>
                <div style="line-height: 1.8;"><?php the_excerpt(); ?></div>
            </article>
            <?php
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</div>
<?php
get_footer();
