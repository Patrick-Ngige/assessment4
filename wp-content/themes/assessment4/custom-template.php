<?php get_header() ?>

<?php 

/*

 Template Name: Custom Template
 Description: A page template
 */
?>
<?php wp_head() ?>


<?php 
    $blogs = new WP_Query('type=post&posts_per_page=4');
    var_dump($blogs);
    if ($blogs->have_posts()):
        while ($blogs->have_posts()): $blogs->the_post(); ?>
            <h2><?php the_title(); echo 'using custom template' ?></h2>
            <p><?php the_time(); ?></p>
            <p><?php the_content(); ?></p>
           

    <?php

        endwhile;?>
       <p><?php  next_posts_link('older posts'); ?> &nbsp;
       <?php previous_posts_link('newer posts'); ?> 
        <?php echo 'hello there' ?>
    </p> 

    <?php endif;
    wp_reset_postdata();
    
?>    
 <hr>

<?php get_footer() ?>