<?php
/**
 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kalkidan
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// if comments are open or we have at least one comment, load up the comment template. 

			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; 
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class = "col-md-4">
    <?php get_sidebar(); ?>
</div>
    <?php get_footer(); 
