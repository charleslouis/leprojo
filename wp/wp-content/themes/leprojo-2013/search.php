<?php get_header(); ?>
<!-- Row for main content area -->
	<div class="main main-search" role="main">
	
		<div class="inside-wrapper">
		  
		  <header class="header-archives columns large-8">
				<h1><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h1>
				<h5>Pour être certain de ne rater aucune interview, le mieux est de nous suivre sur <a href="http://twitter.com/leprojo" target="_blank"><span>Twitter : @LeProjo</span></a>.</h5>
				<h5>Vous pouvez également liker notre <a href="http://twitter.com/leprojo" target="_blank"><span>page facebook</span></a>.</h5>  	
		  </header>
			

			<?php if ( have_posts() ) : ?>
			<?php include(locate_template('searchform.php')); ?>
		  <ul class="archive-list column large-12">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php include(locate_template('templates/content/content-archives.php')); ?>
				<?php endwhile; ?>
		  </ul>
				
				<?php else : ?>
					<?php get_template_part( 'templates/content/content', 'none' ); ?>
				
			<?php endif; // end have_posts() check ?>
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
				</nav>
			<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>