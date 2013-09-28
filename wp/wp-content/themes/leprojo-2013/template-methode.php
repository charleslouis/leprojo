<?php
/*
Template Name: Méthode
*/
get_header(); ?>

		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-methode.php')); ?>
    <!--  Row for main content area -->
    <div class="main main-methode" role="main">     
      <section class="page-intro">
        <header class="page-intro-header">
          <h1><?php the_field('title'); ?></h1>        
          <h3><?php the_field('subtitle'); ?></h3>
          <hr>
        </header>
        <p class="leader page-intro-prose large-9"><?php the_field('paragraph_leader'); ?></p>
      </section><!--  /.page-intro -->
      <?php include(locate_template('templates/loops/loop-methode.php')); ?>
    </div><!--  /.main -->    
      <?php include(locate_template('templates/banners/banner-tools.php')); ?>


	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>