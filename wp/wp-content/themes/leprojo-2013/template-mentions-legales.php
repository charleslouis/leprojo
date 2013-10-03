<?php 
/*
Template Name: Mentions Legales
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="main main-page main-page-legal" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php include(locate_template('templates/content/content-page.php')); ?>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>