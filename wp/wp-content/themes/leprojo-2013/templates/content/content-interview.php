

      <!-- introduction -->
      <?php if( get_field('introduction') ): ?>
        <section class="intro-itw">
          <h3 class="itw-t"><?php the_field('titre_intro'); ?></h3>          
          <p><?php the_field('introduction'); ?></p>
        </section>
      <?php endif; ?>

      <!-- interview -->
      <?php if( get_field('block_interview') ): ?>
      
        <header class="block-itw-first">
          <h3 class="itw-t">L'entrevue</h3>
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
              $answer = get_sub_field('texte_paragraphe_reponse');
              if(get_sub_field('answerer')):

                if (strpos($answer,'<ul>') !== false) :
                  $answerer = '<p class="answer no-margin-bottom"><span>[ ' . get_sub_field('answerer') . ' ] </span><ul>';
                  $answer = str_replace('<ul>', $answerer, $answer );
                  $answer = str_replace('</ul>', '</ul></p>', $answer );

                else :
                  $answerer = '<p class="answer"><span>[ ' . get_sub_field('answerer') . ' ] </span>';
                  $answer = str_replace('<p>', $answerer, $answer );
                endif;
              else :
                $answer = str_replace('<p>', '<p class="answer">', $answer ); 
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
      
