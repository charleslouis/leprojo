<?php $member_id = $featured_post->ID; ?>
<?php $member_name = $featured_post->post_title; ?>
<?php $photo = get_field('photo-small', $member_id); ?>
<?php $member_terms = wp_get_post_terms( $member_id, 'team-member-type'); ?>			
<?php $member_position = $member_terms[0]->name; //the last/lowest taxonomy level?>
<li class="realisation">
	<a href="<?php echo get_permalink($member_id); ?>">
		<figure class="realisation-caption">
			<div class="realisation-photo-wrapper">
				<img class="realisation-photo" src="<?php echo $photo[sizes][square]; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="[<?php echo $photo[sizes][square-retina]; ?>, (retina))]">				
			</div>
			<figcaption class="realisation-caption">
				<h3 class="caption-t"><?php echo $member_name;?></h3>
				<p class="caption-subt"><?php the_field('title', $member_id);?></p>
				<p class="caption-meta"><?php echo $member_position;?></p>
			</figcaption>
		</figure>
	</a>
</li>