<!-- get_ID_by_slug($page_slug) -->

</div><!-- Container End -->


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
	    <p class="copy_and_credits">      
	      <span class="credits">Réalisé avec <span class="icon-alone"><i aria-hidden="true" class="icon-heart-fill"></i><span aria-hidden="true" class="screen-reader-text">amour</span></span> par <span class="organisation"><strong>
	      <a href="http://lasourisetlepino.com" target="_blank">La souris et le piano</a></strong></span></span></a>.</span>
	      <span class="copy">&copy;<?php echo date("Y"); ?><span class="organisation"><strong> Le Projo - Arthur Allizard </strong></span>Tous droits réservés.</span>
	      <span class="legal"><a href="<?php echo home_url(); ?>/mentions-legales/">Mentions légales</a></span>
	    </p>
	  </div>
	  <section class="contact-us work-w-us-contact">
	    <ul class="contact-us-list contact-list-footer">
	      <li class="contact-us-info icon-mail" aria-hidden="true"><a href="mailto:info@leprojo.com" class="email">contact@leprojo.com</a></li>
	      <li class="contact-us-contact icon-twitter" aria-hidden="true"><a rel="me" href="http://twitter.com/leprojo">@leprojo</a></li>
	      <li class="contact-us-info icon-facebook" aria-hidden="true"><a rel="me" href="http://facebook.com/leprojo">@leprojo</a></li>
	    </ul>
	  </section>	  
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