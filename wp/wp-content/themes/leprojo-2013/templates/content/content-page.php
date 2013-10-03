  <section id="content" class="content">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="columns large-8">					
					<?php the_content(); ?>
				</div>
			</div>
		</article>
  </section>
