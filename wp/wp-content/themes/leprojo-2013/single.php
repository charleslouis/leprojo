<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="main main-single" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      
      <?php include(locate_template('templates/intro/intro-single.php')); ?>
      
			<?php $c_type = get_post_type(); ?>
      <?php if ($c_type): ?>
      	<?php get_template_part( 'templates/content/content', $c_type ); ?>      	
      <?php else : ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
      <?php endif ?>

			<footer>
				<p><?php the_tags(); ?></p>
			</footer>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>		
<?php get_footer(); ?>
