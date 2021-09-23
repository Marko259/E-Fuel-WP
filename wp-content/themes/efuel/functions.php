<?php

function register_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'register_theme_support');

function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

function register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/style.css", array('style-font-awesome'), $version, 'all');
    wp_enqueue_style('style-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '5.0.0', 'all');
    wp_enqueue_style('style-font-awesome', get_template_directory_uri() . "/assets/css/fontawesome.css", array('style-bootstrap'), '5.15.3', 'all');
}

add_action('wp_enqueue_scripts', 'register_styles');

function register_scripts()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('script_jquery', get_template_directory_uri() . "/assets/js/jquery-2.1.0.min.js", array(), '2.1.0', true);
    wp_enqueue_script('script_bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.bundle.min.js", array('script_jquery'), '5.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . "/assets/js/java.js", array('script-bootstrap'), $version, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');

function register_menus()
{
    $locations = array(
        'primary' => 'Main menu',
        'secondary' => 'Footer menu'
    );

    register_nav_menus($locations);
}

add_action('init', 'register_menus');

//add_filter( 'emoji_svg_url', '__return_false' );

/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
    add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}
