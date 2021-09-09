<?php

function register_theme_support() {
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'register_theme_support');

function register_woocommerce_support() {
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'register_woocommerce_support');

function register_stylesheets() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', $version, 'all');
    wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('font-awesome-style', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array('bootstrap-style'), 'all');
}

add_action('wp_enqueue_scripts', 'register_stylesheets');

function register_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_scripts('jquery-script', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_scripts('jquery-ui-script', 'https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.min.js', array('jquery-script'), '1.13.0-rc.2', true);
    wp_enqueue_scripts('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery-ui-script'), true);
    wp_enqueue_style('custom-script', get_template_directory_uri() . '/assets/js/script.js', $version, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');