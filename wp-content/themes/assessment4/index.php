<?php 
    get_header();
?>
<div class="body">
<?php  

        if(have_posts()):
            while(have_posts()): the_post(); ?>
        
            <?php get_template_part('content','blogs') ?>
            
            <?php 
           endwhile; ?>

           <?php next_posts_link('next post');?>
           <?php previous_posts_link('old post');?>

        <?php endif;?>
           
           

</div>
<?php 
    get_footer();
?>