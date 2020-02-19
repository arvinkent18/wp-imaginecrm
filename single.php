<?php get_header(); ?>
<div class="container">
    <div class="grid services">
        <?php get_template_part('template-parts/content-single', get_post_format()); ?>
    </div>
</div>
<?php get_footer(); ?>