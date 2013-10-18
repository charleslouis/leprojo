<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="main main-page" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php include(locate_template('templates/content/content-page.php')); ?>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>