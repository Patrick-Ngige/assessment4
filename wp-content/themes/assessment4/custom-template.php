<?php
/*
 Template Name: Custom Template
Description: A page template
 */
?>

<?php get_header() ?>

<?php 
    $blogs = new WP_Query('type=post&posts_per_page=4');
    if ($blogs->have_posts()) :
        while ($blogs->have_posts()) : $blogs->the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_time(); ?></p>
            <p><?php the_content(); ?></p>
            <hr>

    <?php

        endwhile;

        the_posts_pagination();

    endif;
    wp_reset_postdata();
?>    

<?php get_footer() ?>