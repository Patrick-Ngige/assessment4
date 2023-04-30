<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <header>
            <h3><?php the_title();  ?></h3>
        </header>
        <?php the_content(); ?>



<?php endwhile;
endif;
?>


<!-- ACTIVATING THE COMMENTS -->
<?php
if (comments_open()) {
    comments_template();
}
?>