
    <div class="main" role="main">
			<div class="inside-wrapper">
			  
			  <header class="header-archives columns large-8">
			  	<h1>Archives</h1>
					<h5>Pour être certain de ne rater aucune interview, le mieux est de nous suivre sur Twitter <a href="http://twitter.com/@LeProjoTweet" target="_blank"><span>@LeProjoTweet</span></a>.</h5>
					<h5>Si vous préférez, vous pouvez également liker notre <a href="https://www.facebook.com/pages/Le-Projo/212047378972611#" target="_blank"><span>page facebook</span></a>.</h5>  	
			  </header>

			  <ul class="archive-list column large-12">
					<?php  foreach ( $myposts as $post ) : setup_postdata( $post ); ?> 
						<?php include(locate_template('templates/content/content-archives.php')); ?>
					<?php endforeach; ?>
			  </ul>

			</div>