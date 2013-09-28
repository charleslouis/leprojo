<?php
/*
Template Name: Realisations
*/
get_header(); ?>

		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-realisations.php')); ?>
    <!--  Row for main content area -->
    <div class="main main-realisations" role="main">   
      <?php include(locate_template('templates/intro/intro-page.php')); ?>
      <?php include(locate_template('templates/loops/loop-realisations.php')); ?>
    </div><!--  /.main -->


	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>