<?php get_header(); ?>
<div class="container">
    <div class="grid services">
        <?php get_template_part('template-parts/content-services', get_post_format()); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
    </div>

    <?php get_footer(); ?>