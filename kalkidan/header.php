<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kalkidan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kalkidan' ); ?></a>

	<header id="masthead" class="site-header">
	<nav id="menu" class = "navbar-expand-md navbar-light" role="navigation">
		<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$kalkidan_description = get_bloginfo( 'description', 'display' );
			if ( $kalkidan_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $kalkidan_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>
    <button class="navbar-toggle navbar-toggler-right" type="button" data-toggle="collapse"
	data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-lable="toggle navigation">
	<span class="navbar-toggler-icon">
	</span>
	</button>
	</header>

	<div id="content" class="site-content">
