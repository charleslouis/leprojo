  <section id="content" class="content content-itw">
      <article <?php post_class(); ?>>
        <section class="intro-itw">
          <h3 class="itw-t"><?php the_title(); ?></h3>
        </section>
        <!--  Row for main content area -->
        <div class="main-content-wrapper">
          <section class="main-content">
            <div class="entry-content">
              <?php the_content(); ?>
            </div>
            <footer>
              <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
              <p><?php the_tags(); ?></p>
            </footer>
            <?php comments_template(); ?>
          </section>          
        </div>

      </article>
  </section>