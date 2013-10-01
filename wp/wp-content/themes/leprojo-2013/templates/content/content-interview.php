<div>
  <section id="content" class="content content-itw">
    <div class="row">
      
      <section class="about large-3 column">
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

        <p class="date">Date de l'interview : <?php  echo locale_date('date_itw'); ?></p>
      </section>

      <!-- introduction -->
      <?php if( get_field('introduction') ): ?>
        <section class="intro large-9 column">
          <h3 class="itw-t">Introduction</h3>
          <p><?php the_field('introduction'); ?></p>
        </section>
      <?php endif; ?>

      <!-- interview -->
      <?php if( get_field('block_interview') ): ?>
      
        <header class="block-itw-first">
          <h3 class="itw-t">Interview</h3>
        </header>        
        <?php $i = 1; ?>
        <?php  while( has_sub_field('block_interview') ) : ?>
        
        <!-- question/réponse -->
        <?php if(get_sub_field('la_question')): ?>     
          
          <?php if ($i == 1): ?>
            <section class="block-itw-first">
          <?php else : ?>
            <section class="block-itw">
          <?php endif ?>   
          
          <p class="question">
            <span class="asker">[ <?php the_sub_field('asker'); ?> ]</span>
            <?php the_sub_field('la_question'); ?>
          </p>
          <?php endif; ?>
        
          <?php        
          if( get_sub_field('reponse_pg') ):
            while( has_sub_field('reponse_pg') ) :
              if(get_sub_field('answerer')):
                $answerer = '<p class="answer"><span>[ ' . get_sub_field('answerer') . ' ] </span>';
                $answer = str_replace('<p>', $answerer, get_sub_field('texte_paragraphe_reponse') ); 
              else :
                $answer = str_replace('<p>', '<p class="answer">', get_sub_field('texte_paragraphe_reponse') ); 
              endif;            
                echo $answer;
          ?>

        <?php
          $i++;
          endwhile;
        endif;
        ?>
        </section>
        <!-- fin de la question -->

        <?php if (get_sub_field('citation')): ?>
        <aside class="cite-itw">
          <blockquote>
            <p><?php the_sub_field('citation'); ?></p>
          </blockquote>
        </aside>        
        <?php endif;?>

        <?php if (get_sub_field('image')): ?>
        <?php $image = get_sub_field('image'); ?>
        <figure class="img-itw">
          <img src="<?php echo $image[sizes]['portrait-small']; ?>" alt="<?php echo $image[alt]; ?>" data-interchange="
          [<?php echo $image[sizes]['portrait-medium']; ?>, (small)], 
          [<?php echo $image[sizes]['portrait-large']; ?>, (medium)],
          [<?php echo $image[sizes]['portrait-medium-retina']; ?>, (large)],
          [<?php echo $image[sizes]['portrait-large-retina']; ?>, (retina)]">
            <figcaption><?php echo $image[caption]; ?></figcaption>
        </figure>
        <?php endif;?>
      <?php endwhile; ?>
        

    <?php endif; ?>
    
    </div>
  </section>    
</div>