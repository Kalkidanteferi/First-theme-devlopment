<?php


function firsttheme_style(){
    wp_enqueue_style("firsttheme_style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "firsttheme_style" );




register_sidebar(array (

     "name" => __("sidebar1")


))

?>