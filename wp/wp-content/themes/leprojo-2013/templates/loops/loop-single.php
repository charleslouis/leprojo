    <div class="main" role="main">
      <article <?php post_class(); ?>>
      
        <?php include(locate_template('templates/banners/banner-single.php')); ?>
        <!--  Row for main content area -->
        <div class="main-content-wrapper">
          <section class="main-content">
            <div class="entry-content">
              <?php include(locate_template('templates/content/content-interview.php')); ?>
            </div>
            <footer>
              <!-- meta/credits/ -->
            </footer>
          </section>          
        </div>

      </article>

      <div id="nav-entry" class="nav-entry">
        <a href="/untel" class="prev-next-link older">Machin Truc</a>
        <a href="/untelOh" class="prev-next-link newer">Bidule muche</a>
      </div>