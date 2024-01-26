<?php

function theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');

function mariko_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('week2_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', ' mariko_register_styles()');


function mariko_menus()
{
    register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'mariko_menus');


function widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'footer area',
            'id' => 'footer-1',
            'description' => 'footer widget area'
        )
    );
}

add_action('widgets_init', 'widget_areas');
