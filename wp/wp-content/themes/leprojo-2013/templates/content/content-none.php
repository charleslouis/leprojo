<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-0" class="post no-results not-found columns">
	<header>
		<h2><?php _e( 'Nothing Found', 'reverie' ); ?></h2>
	</header>
	<div class="entry-content">
		<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'reverie' ); ?></p>
	</div>
	<hr />
	<div class="large-4 small-12 right">		
		<?php include(locate_template('searchform.php')); ?>
	</div>
</article>