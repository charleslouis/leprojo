    <div class="main" role="main">
      <article <?php post_class(); ?>>     
        <?php include(locate_template('templates/banners/banner-interview.php')); ?>
        <!--  Row for main content area -->
			  <section id="content" class="content content-itw">
			    <?php include(locate_template('templates/content/a-propos-about.php')); ?>
	    	  <?php include(locate_template('templates/content/content-interview.php')); ?>
	    	</section>
      </article>