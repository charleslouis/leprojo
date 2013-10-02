
    <div class="main" role="main">
			<div class="inside-wrapper">
			  
			  <header class="header-archives columns large-8">
			  	<h1>Archives</h1>
					<h5>Pour être certain de ne rater aucune interview, le mieux est de nous suivre sur <a href="http://twitter.com/leprojo" target="_blank"><span>Twitter : @LeProjo</span></a>.</h5>
					<h5>Vous pouvez également liker notre <a href="http://twitter.com/leprojo" target="_blank"><span>page facebook</span></a>.</h5>  	
			  </header>

			  <ul class="archive-list column large-12">
					<?php  foreach ( $myposts as $post ) : setup_postdata( $post ); ?> 
						<?php include(locate_template('templates/content/content-archives.php')); ?>
					<?php endforeach; ?>
			  </ul>

			</div>