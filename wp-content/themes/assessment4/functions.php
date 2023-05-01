<?php 

function theme_setup(){
    add_theme_support('menus');
    register_nav_menu('Primary', 'navigation bar'); 
    register_nav_menu('secondary', 'links');
}

//Adding Navwalker
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
    
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('init', 'theme_setup');

add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );

function assignment4_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');
    wp_enqueue_style('customjs', get_template_directory_uri().'/custom/custom.js', [], '1.0.0', true);

    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3', 'all');
    wp_enqueue_style('bootstrapcss');

    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', [], '5.2.3', true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'assignment4_script_enqueue')


//  Converting HTML to HTML5 for Search Form 

// add_theme_support('html5', ['search-form']);


?>