<?php 

function register_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'register_theme_support');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array('style-font-awesome'), $version, 'all');
    wp_enqueue_style('style-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '5.0.0', 'all');
    wp_enqueue_style('style-font-awesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array('style-bootstrap'), '5.15.3', 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('script_jquery', get_template_directory_uri() . "/assets/js/jquery-2.1.0.min.js", array(), '2.1.0', true);
    wp_enqueue_script('script_bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array('script_jquery'), '5.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . "/assets/js/java.js", array('script-bootstrap'), $version, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');

function register_menus() {
    $locations = array(
        'primary' => 'Top page menu',
        'secondary' => 'Footer menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'register_menus');

add_filter( 'emoji_svg_url', '__return_false' );

?>