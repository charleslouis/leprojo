  <section id="content" class="content content-page">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="columns small-12">
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="columns medium-9 large-8">
					<?php the_content(); ?>
			</div>
		</article>
  </section>
