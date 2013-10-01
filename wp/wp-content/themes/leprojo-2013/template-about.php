<?php
/*
Template Name: About
*/
get_header(); ?>
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
        <?php include(locate_template('templates/loops/loop-single.php')); ?>
		</article>
	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>