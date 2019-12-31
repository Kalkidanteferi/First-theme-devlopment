<?php
/**
 * Kalkidan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kalkidan
 */

if ( ! function_exists( 'kalkidan_setup' ) ) :
	
	function kalkidan_setup() {
		/**make theme avaliable for translation
		*/
		
		load_theme_textdomain( 'kalkidan', get_template_directory() . '/languages' );
		// add posts and comments links to head

		
		add_theme_support( 'automatic-feed-links' );
		// wordpress manage the document title
		
		add_theme_support( 'title-tag' );
		//enable support on post and page


		
		add_theme_support( 'post-thumbnails' );
		

		
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'kalkidan' ),
		) );

		
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		
		add_theme_support( 'custom-background', apply_filters( 'kalkidan_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		
		add_theme_support( 'customize-selective-refresh-widgets' );

		
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'kalkidan_setup' );

function kalkidan_add_editor_style(){
	add_editor_style('dist/css/editor-style.css');
}
//add_action('admin_init', kalkidan_add_editor_style);


function kalkidan_content_width() {
	
	$GLOBALS['content_width'] = apply_filters( 'kalkidan_content_width', 640 );
}
add_action( 'after_setup_theme', 'kalkidan_content_width', 0 );


function kalkidan_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kalkidan' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kalkidan' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kalkidan_widgets_init' );

/**
 * enqueue scripts and style
 */
function kalkidan_scripts() {
	wp_enqueue_style('kalkidan-bs-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'kalkidan-style', get_stylesheet_uri() );

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/poper.js/1/11/0/umd/popper.min.js', false, '', true);

	wp_enqueue_script('popper');

	wp_enqueue_script( 'kalkidan-skip-link-focus-fix', get_template_directory_uri() . 
	'/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kalkidan_scripts' );


require get_template_directory() . '/inc/custom-header.php';


require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/template-functions.php';

// customizer addation
require get_template_directory() . '/inc/customizer.php';

//widget file
require get_template_directory() . '/inc/widgets.php';


//bootstrap Navwalker file
//require get_template_directory() . '/inc/bootstra-wp-navwalker.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
