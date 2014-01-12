<?php
/*
Template Name: About
*/
get_header(); ?>
    <div class="main" role="main">
      <section <?php post_class(); ?>>     
        <?php include(locate_template('templates/banners/banner-interview.php')); ?>
        <!--  Row for main content area -->
			  <section id="content" class="content content-itw">
			    <?php include(locate_template('templates/content/a-propos-about.php')); ?>
			    <div class="q-and-a-about">			    	
	    	  	<?php include(locate_template('templates/content/content-interview.php')); ?>
			    </div>
	    	</section>
      </section>
<?php get_footer(); ?>