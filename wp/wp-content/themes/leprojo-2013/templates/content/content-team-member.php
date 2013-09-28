<!-- teamplate for content in team member -->			
			<section class="entry-content">				
				<section class="prose-team-mbr columns large-9">
					<p class="leader page-intro-prose"><?php the_field('paragraph_leader'); ?></p>
					<h2>Titre intermédiaire</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<h2>Titre intermédiaire</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</section>
				<aside class="side-info side-info-mbr columns large-3">
					<figure class="mbr-pic">
						<?php $photo = get_field('photo-small', 42); ?>
						<?php $photo = get_field('photo-small'); ?>
						<img src="<?php echo $photo[sizes][portrait]; ?>" alt="" data-interchange="[<?php echo $photo[sizes][portrait-retina]; ?>, (retina))]">
					</figure>
					<ul class="unstyled">
		      	<li class="contact-us-info" aria-hidden="true" data-icon="&#xe004;"><a rel="me" href="http://twitter.com/lasourisetlepiano">@charleloui</a></li>
		      	<li class="contact-us-info" aria-hidden="true" data-icon="&#xe004;"><a rel="me" href="http://twitter.com/lasourisetlepiano">@charleloui</a></li>
		      	<li class="contact-us-info" aria-hidden="true" data-icon="&#xe004;"><a rel="me" href="http://twitter.com/lasourisetlepiano">@charleloui</a></li>
		      	<li class="contact-us-info" aria-hidden="true" data-icon="&#xe004;"><a rel="me" href="http://twitter.com/lasourisetlepiano">@charleloui</a></li>
					</ul>
				</aside>
			</section>