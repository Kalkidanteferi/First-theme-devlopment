<?php


function firsttheme_style(){
    wp_enqueue_style("firsttheme_style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "firsttheme_style" );


if (function_exists('devwp_setup')):
    function devwp_setup(){
        load_theme_textdomain('devwp', get_template_directory() );
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'menu-1' => esc_html__('primary', 'devwp'),
        ));
        add_theme_support ('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
        ));
        add_theme_support ('custome-background', apply_fillters('devwp_custome_background_args',
        array(
            'default-color' => 'ffffff',
            'defauult-image' => '',
        )));
        add_theme_support ('customize-selective-refresh-widgets');
        add_theme_support('custome-logo', array(
            'height' => 400,
            'width' => 400.
            'flex-width' => true,
            'flex-height' => true,
        ));
    }



register_sidebar(array (

     "name" => __("sidebar1")


))

?>