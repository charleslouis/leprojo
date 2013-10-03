  <section id="content" class="content content-single">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <header class="columns small-12">
        <h1><?php the_title(); ?></h1>
      </header>
      <div class="columns medium-9 large-8">
          <?php the_content(); ?>
      </div>
    </article>
    <footer class="columns medium-9 large-8">
      <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
      <p><?php the_tags(); ?></p>
    </footer>
    <div class="columns">     
      <?php comments_template(); ?>
    </div>
  </section>
