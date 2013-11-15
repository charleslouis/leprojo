<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="main main-404" role="main">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header class="banner">
        <figure class="portrait">
        	<?php $upload_dir = wp_upload_dir(); ?>					
          <img src="<?php echo $upload_dir['baseurl']; ?>/404-error/404.gif" alt="<?php echo $photo[alt]; ?>">
        </figure>
        <h1 id="headline" class="entry-title"><?php _e('File Not Found', 'reverie'); ?></h1>
    </header><!-- banner -->

			<div class="entry-content">		
				<div class="inside-wrapper">				  
					<div class="error">
						<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'reverie'); ?></p>
					</div>
					<p><?php _e('Please try the following:', 'reverie'); ?></p>
					<ul class="unstyled"> 
						<li><?php _e('Check your spelling', 'reverie'); ?></li>
						<li><?php printf(__('Return to the <a href="%s">home page</a>', 'reverie'), home_url()); ?></li>
						<li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'reverie'); ?></li>
					</ul>
					<?php include(locate_template('searchform.php')); ?>
				</div>
			</div>
		</article>
	</div>
		
<?php get_footer(); ?>