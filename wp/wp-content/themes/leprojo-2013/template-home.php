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
			'post_type'        => 'interview',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true ); ?>

		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-home.php')); ?>
    <!--  Row for main content area -->
    <div class="main main-home" role="main">
        <?php include(locate_template('templates/intro/intro-page.php')); ?>
	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>