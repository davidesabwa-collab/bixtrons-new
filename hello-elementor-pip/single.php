<?php
/**
 * Single post template
 */
get_header();
?>
<div class="site-content" id="content" style="padding: 60px 20px; max-width: 1000px; margin: 0 auto;">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title" style="margin-bottom: 20px;"><?php the_title(); ?></h1>
            <div class="entry-meta" style="color: #6b7280; margin-bottom: 30px;">
                <span><?php echo get_the_date(); ?></span>
            </div>
            <div class="entry-content" style="line-height: 1.8;">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</div>
<?php
get_footer();
