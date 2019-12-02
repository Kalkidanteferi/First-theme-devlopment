<?php


function firsttheme_style(){
    wp_enqueue_style("firsttheme_style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "simpletheme_style" );






?>