
    <div class="main" role="main">
			<div class="inside-wrapper">
			  
			  <header class="header-archives columns large-8">
			  	<h1>Archives</h1>
			  </header>

			  <ul class="archive-list column large-12">
					<?php  foreach ( $myposts as $post ) : setup_postdata( $post ); ?> 
						<?php include(locate_template('templates/content/content-archives.php')); ?>
					<?php endforeach; ?>
			  </ul>

			</div>