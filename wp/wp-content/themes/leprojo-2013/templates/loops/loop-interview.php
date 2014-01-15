    <div class="main" role="main">
      <article <?php post_class(); ?>>     
        <?php include(locate_template('templates/banners/banner-interview.php')); ?>

        <section id="content" class="content content-itw">
          <?php include(locate_template('templates/content/a-propos-interview.php')); ?>
          <?php include(locate_template('templates/content/content-interview.php')); ?>
        </section>

        <?php include(locate_template('templates/social-sharer.php')); ?>
      </article>