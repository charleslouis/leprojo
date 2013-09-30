    <div class="main" role="main">
      <article <?php post_class(); ?>>
      
        <?php include(locate_template('templates/banners/banner-single.php')); ?>
        <!--  Row for main content area -->
        <section>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <!-- meta/credits/ -->
          </footer>
        </section>

      </article>

      <div id="nav-entry" class="nav-entry">
        <a href="/untel" class="prev-next-link older">Machin Truc</a>
        <a href="/untelOh" class="prev-next-link newer">Bidule muche</a>
      </div>