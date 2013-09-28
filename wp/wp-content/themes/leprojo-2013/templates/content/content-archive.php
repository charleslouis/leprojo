      <section class="page-intro">
      	<a class="archive-link" href="<?php the_permalink(); ?>">
		      <header class="page-intro-header">
		        <h1><?php the_title() ?></h1>
		        <h4><?php the_field('title'); ?></h4>
						<p class="leader page-intro-prose"><?php the_field('paragraph_leader'); ?></p>
		        <hr>
		      </header>
      	</a>
      </section><!--  /.page-intro -->