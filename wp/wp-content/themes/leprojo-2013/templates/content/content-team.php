<?php $member_id = $member->ID; ?>
<?php $member_name = $member->post_title; ?>
<?php $photo = get_field('photo-small', $member_id); ?>
<?php $member_terms = wp_get_post_terms( $member_id, 'team-member-type'); ?>			
<?php $member_position = $member_terms[0]->name; //the last/lowest taxonomy level?>
<li class="team-partner">
	<a href="<?php echo get_permalink($member_id); ?>">
		<figure>
			<img class="mbr-photo" src="<?php echo $photo[sizes][portrait]; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="[<?php echo $photo[sizes][portrait-retina]; ?>, (retina))]">
			<figcaption>
				<h3 class="fn caption-t"><?php echo $member_name;?></h3>
				<p class="caption-subt"><?php the_field('title', $member_id);?></p>
				<p class="caption-meta"><?php echo $member_position;?></p>
			</figcaption>
		</figure>
	</a>
</li>