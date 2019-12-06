<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php while (have_posts()) : the_post();?>

<h2><?php the_title(); ?></h2>

<P><?php the_content(); ?></p>

<?php endwhile ?>

<?php get_footer(); ?>