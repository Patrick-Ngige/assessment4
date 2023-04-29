<?php 

function theme_setup(){
    register_nav_menu('Primary', 'navigation bar');

}

add_action('init', 'theme_setup');

add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );



?>