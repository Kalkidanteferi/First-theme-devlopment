<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kalkidan
 */

if ( ! is_active_menu( 'menu' ) ) {
	return;
}
?>

<aside id="primary" class="widget-area">
	<?php dynamic_menu( 'menu' ); ?>
</aside><!-- #primary -->
