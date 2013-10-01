<div>
  <section id="content" class="content content-itw">
    <div class="row">
      
      <section class="about large-3 columns">
        <h3 class="about-t">A propos de <br/><?php the_field('titre_about'); ?></h3>
        <p class="about-p"><?php the_field('paragraphe_about'); ?></p>
 
        <?php if( get_field('contacts') ): ?>
        <ul class="about-links-ul">
          <?php while( has_sub_field('contacts') ) : ?>
            <li class="<?php the_sub_field('info_type_contact'); ?>">
              <a href="<?php the_sub_field('contact_link'); ?>"><?php the_sub_field('texte_lien_de_contact'); ?></a>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>


        <?php setlocale(LC_TIME, ''); ?>
        <p class="date">Date de l'interview : <?php  echo strftime("%A %#d %B %Y", strtotime(get_field('date_itw'))); ?></p>
      </section>
      <div class="large-6 columns">
       <section class="intro">
        <h3 class="itw-t">Introduction</h3>
         <p>introduction Paragraphe</p>
        </section>

        <h3 class="itw-t">Interview</h3>

        <p class="question"><span>[interlocuteur question]</span>Question</p>
        <p><span>[interlocuteur réponse]</span>Réponse</p>
        <p>[AUTRE interlocuteur réponse]Réponse</p>
        <p>[pas d'interlocuteur précisé] Réponse</p>

      </div><!-- /.large-6 large-offset-3 columns -->

      <aside class="large-3 columns">
        <blockquote class="pull">
          <p>"citation”</p>
        </blockquote>
      </aside>

    </div><!-- /.block -->

    <div class="row">
      
      <div class="large-6 large-offset-3 columns">
       
        <p class="question"><span>[interlocuteur question]</span>Question</p>
        <p><span>[interlocuteur réponse]</span>Réponse</p>
        <p>Réponse</p>
        <p>Réponse</p>

      </div><!-- /.large-6 large-offset-3 columns -->
      
      <div class="large-6 large-offset-3 columns">
       
        <p class="question"><span>[interlocuteur question]</span>Question</p>
        <p><span>[interlocuteur réponse]</span>Réponse</p>
        <p>Réponse</p>
        <p>Réponse</p>

      </div><!-- /.large-6 large-offset-3 columns -->

      <div class="large-6 large-offset-3 columns">
       
        <p class="question"><span>[interlocuteur question]</span>Question</p>
        <p><span>[interlocuteur réponse]</span>Réponse</p>
        <p>Réponse</p>
        <p>Réponse</p>

      </div><!-- /.large-6 large-offset-3 columns -->

      <aside class="large-3">
        <blockquote>
          <p>"citation relou”</p>
        </blockquote>
      </aside>

    </div><!-- /.block -->


    <div class="row screenshot">
      <div class="columns large-12">
        <figure>
          <img src="http://lorempixel.com/1400/400" alt="" class="screenshot of new Microsoft.com homepage">
          <figcaption>légende</figcaption>
        </figure>
      </div><!-- /.col12 -->

      <aside class="columns large-3">
        <figure>
          <img src="http://lorempixel.com/400/400" alt="fictitious advertisement for New Adventures Conference newspaper">
          <figcaption>légende</figcaption>
        </figure>
      </aside>
    </div><!-- /.block -->
  </section>    
</div>