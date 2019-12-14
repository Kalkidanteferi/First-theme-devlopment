<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class = "post_loop">


<?php while (have_posts()) : the_post();?>

<h2><?php the_title(); ?></h2>
<?php
if(have_posts());
if (is_home() && ! is_front_page()): ?>
<header>
    <h1 class = "page-title screen-reader-text"> <?php single_post_title(); ?></h1>
</header>
<?php
endif;
while (have_posts()) : the_post();
    get_templat_pat('template-parts/content', get_post_format());
endwhile;
<P>by:<?php the_author(); ?><?php the_category(); ?></p>
<P><?php the_content(); ?></p>

<?php endwhile ?>>

</div>

<?php get_footer(); ?>