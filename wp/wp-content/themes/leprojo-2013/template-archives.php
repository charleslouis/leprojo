<?php
/*
Template Name: Archives
*/
get_header(); ?>
		<?php $args = array(
			'posts_per_page'   => '',
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
		<div class="main" role="main">
      <?php include(locate_template('templates/loops/loop-archives.php')); ?>

<?php get_footer(); ?>