<?php
/*
Template Name: Home
*/
get_header(); ?>
		<?php $args = array(
			'posts_per_page'   => 1,
			'offset'           => 0,
			'category'         => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'interviews',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true ); ?>
		<?php $myposts = get_posts( $args ); ?>
		<?php  foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        <?php include(locate_template('templates/loops/loop-interview.php')); ?>
		<?php endforeach; ?>
<?php get_footer(); ?>