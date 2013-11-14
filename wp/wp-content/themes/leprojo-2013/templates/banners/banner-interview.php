    <?php $photo = get_field('photo'); ?>
    
    <?php if( get_field('reglage_du_titre') ): ?>
      <?php while( has_sub_field('reglage_du_titre') ) :
       
            if( get_sub_field('h_alignment') ):
              $custom_style .= get_sub_field('h_alignment') . ': 0; ';
            endif;
            if( get_sub_field('marge_haute') ):
              $custom_style .= 'padding-top:' . get_sub_field('marge_haute') . '; ';
            endif;
            if( get_sub_field('marge_droite') ):
              $custom_style .= 'padding-right:' . get_sub_field('marge_droite') . '; ';
            endif;
            if( get_sub_field('marge_basse') ):
              $custom_style .= 'padding-bottom:' . get_sub_field('marge_basse') . '; ';
            endif;
            if( get_sub_field('marge_gauche') ):
              $custom_style .= 'padding-left:' . get_sub_field('marge_gauche') . '; ';
            endif;
            if( get_sub_field('font_size') ):
              $custom_style .= 'font-size: ' . get_sub_field('font_size') . '; ';
            endif;
            if( get_sub_field('v_alignment') ):
              if( get_sub_field('v_alignment') == 'middle'):
              $custom_style .= 'top: 0; padding-top: 25%; ';
              // $custom_style .= 'margin-top: -1em; ';
              else :
              $custom_style .= get_sub_field('v_alignment') .': 0; ';
              endif;
            endif;

      endwhile; ?>
    <?php endif; ?>
    <?php 
    // $photo_sizes = $photo[sizes]; ?>
    <header class="banner">
        <figure class="portrait">
          <img src="<?php echo $photo[sizes]['portrait-small']; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="
          [<?php echo $photo[sizes]['portrait-small-retina']; ?>, (small)], 
          [<?php echo $photo[sizes]['portrait-medium']; ?>, (medium)],
          [<?php echo $photo[sizes]['portrait-large']; ?>, (large)],
          [<?php echo $photo[sizes]['portrait-large-retina']; ?>, (retina)]">
          <figcaption class="photo-credit"><?php the_field('credits_photo'); ?></figcaption>      
        </figure>
        <h1 class="entry-title" style="<?php echo $custom_style; ?>;"><?php the_title(); ?></h1>
    </header><!-- banner -->
