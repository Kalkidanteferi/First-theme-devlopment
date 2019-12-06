<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class = "post_loop">

<?php while (have_posts()) : the_post();?>

<h2><?php the_title(); ?></h2>

<P>by:<?php the_author(); ?><?php the_category(); ?></p>
<P><?php the_content(); ?></p>

<?php endwhile ?>>

</div>

<?php get_footer(); ?>