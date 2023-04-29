<?php get_header();?>

<?php 
if(have_posts()):
    while(have_posts()): the_post();
    ?>
    <h2><?php the_title(); if(current_user_can('manage_options')){ echo '||';
            edit_post_link();} ?> </h2>
       <?php     endwhile;
            endif;
            ?>


<!-- ACTIVATING THE COMMENTS -->
<?php 
if(comments_open()){
    comments_template();
}
?>