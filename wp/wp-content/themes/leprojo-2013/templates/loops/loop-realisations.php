<section class="columns">

		<?php if( get_field('post_list_repeater', $post->ID) ): ?>	
			<?php while( has_sub_field('post_list_repeater', $post->ID) ) : ?>
		
			<section class="team li-block row">
		
				<?php if (get_sub_field('posts_list_title')): ?>
		
				  <div class="li-block-header columns">
				    <h2 class="li-title"><?php the_sub_field('posts_list_title'); ?></h2>
				  </div>
		
				<?php endif ?>
				<?php if( get_sub_field('posts_list') ): ?>
		
				<ul class="realisations-li columns">
 					<?php while( has_sub_field('posts_list') ) : ?>
						<?php $featured_post = get_sub_field('post', $post->ID); ?>
						<?php include(locate_template('templates/content/content-realisations.php')); ?>
					<?php endwhile; ?>
				</ul>
		
				<?php endif; ?>

			</section>
			
			<?php endwhile; ?>
		<?php endif; ?>		
	
</section>