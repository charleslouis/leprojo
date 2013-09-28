<!-- get_ID_by_slug($page_slug) -->

</div><!-- Container End -->
<aside class="work-w-us-container">
	<div class="row">
		<div class="columns">
		  <h2 class="work-w-us-title">Travaillons ensemble!</h2>
		  <section class="work-w-us-prose">
		    <p><span>Vous avez une petite idée, un grand projet ou un problème que nous pouvons vous aider à résoudre ? </span><span class="work-w-us-prose-invite"><a href="#">Contactez-nous</a>, nous serions ravis d'en discuter avec vous.</span></p>
		  </section>
		  
		  <section class="contact-us work-w-us-contact">
		    <ul class="contact-us-list contact-list-footer">
		      <li class="contact-us-info phone icon-phone" aria-hidden="true">Appelez Charles-Louis au <a class="phone-link"href="tel:+33610265638">+33 (0)6 10 26 56 38</a></li>
		      <li class="contact-us-info icon-mail" aria-hidden="true">Ecrivez-nous à <a href="mailto:info@lasourisetlepiano.com" class="email">info@lasourisetlepiano.com</a></li>
		      <li class="contact-us-info icon-twitter" aria-hidden="true">Tweetez-nous <a rel="me" href="http://twitter.com/lasourisetlepiano">@lasourisetlepiano</a></li>
		      <li class="contact-us-info icon-map" aria-hidden="true">Ou <a href="">rendez-nous visite</a></li>
		    </ul>
		  </section>
		</div>
	</div>
</aside>

<nav id="menu" class="main-menu" role="navigation">
	<div class="row">
		<div class="column main-menu-column">
		<?php
				$args = array(
		        'theme_location' => 'primary',
		        'container' => false,
		        'depth' => 0,
		        'items_wrap' => '<ul id="nav" class="navlist"><li class="navtop"><a class="navtoplink" href="#top"><span>TOP</span></a></li>%3$s</ul>',
	          'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	          'walker' => new reverie_walker( array(
					      // 'item_type' => 'li',
					      // 'in_top_bar' => false,
					      // 'menu_type' => 'main-menu' //enable menu differenciation, used in preg_replace classes[]
	          	) ),
		    );
		    wp_nav_menu($args);
		?>
		</div>
	</div>
</nav>

<footer class="site-footer" role="contentinfo">
	<div class="row">
	  <div class="column">
	    <small class="copy_and_credits">      
	      <span class="credits">Réalisé avec <span class="icon-alone"><i aria-hidden="true" data-icon="&#xe003;"></i><span aria-hidden="true" data-icon="&#xe003;" class="screen-reader-text">amour</span></span> par <span class="organisation"><strong>La souris et le piano</strong></span> à <a href="/contactez-nous/"><span class="adress"><span class="ville">Paris</span>, <span class="pays">France</span></span></a>.</span>
	      <span class="copy">&copy;<?php echo date("Y"); ?><span class="organisation"><strong>La souris et le piano</strong></span> et nos clients. Tous droits réservés.</span>
	      <span class="legal"><a href="http://localhost/lasourisetlepiano/mentions-legales/">Mentions légales</a></span>
	    </small>
	  </div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>