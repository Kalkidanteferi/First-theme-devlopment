<?php
/**
 * This is for displaying comments
 *
 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Kalkidan
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php

	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$kalkidan_comment_count = get_comments_number();
			if ( '1' === $kalkidan_comment_count ) {
				printf(
					
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'kalkidan' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $kalkidan_comment_count, 'comments title', 'kalkidan' ) ),
					number_format_i18n( $kalkidan_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol>

		<?php
		the_comments_navigation();

		
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'kalkidan' ); ?></p>
			<?php
		endif;

	endif; 

	comment_form();
	?>

</div>
