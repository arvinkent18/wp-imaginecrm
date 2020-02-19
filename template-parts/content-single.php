<div class="col-md-12">
    <?php while (have_posts()) : the_post(); ?>
        <div class="entry-content-post">
            <?php the_content(); ?>
        </div>
    <?php endwhile;
    wp_reset_query(); ?>
</div>