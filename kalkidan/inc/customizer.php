<?php
/**
 * Kalkidan Theme Customizer
 *
 * @package Kalkidan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kalkidan_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'kalkidan_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'kalkidan_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'kalkidan_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function kalkidan_customize_partial_blogname() {
	bloginfo( 'discription' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function kalkidan_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kalkidan_customize_preview_js() {
	wp_enqueue_script( 'kalkidan-customizer', get_template_directory_uri() . '/dist/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'kalkidan_customize_preview_js' );
