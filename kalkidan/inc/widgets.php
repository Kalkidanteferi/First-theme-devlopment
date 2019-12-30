<?php

/** register widget area */
/**function kalkidan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'kalkidan' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'kalkidan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kalkidan_widgets_init' );