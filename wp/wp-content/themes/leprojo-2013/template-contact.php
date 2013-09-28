<?php
/*
Template Name: Contact
*/
get_header(); ?>

		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    
    <?php include(locate_template('templates/banners/banner-contact.php')); ?>
    
    <!--  Row for main content area -->
    <div class="main main-contact" role="main">
      
      <?php include(locate_template('templates/intro/intro-page.php')); ?>
      
      <?php include(locate_template('templates/content/content-hcard.php')); ?>
      
      <?php include(locate_template('templates/content/content-map.php')); ?>
      
      <?php include(locate_template('templates/content/image-cloud.php')); ?>
    
    </div><!--  /.main -->

	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>