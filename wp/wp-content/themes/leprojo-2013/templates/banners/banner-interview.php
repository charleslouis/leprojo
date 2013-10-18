    <?php $photo = get_field('photo'); ?>
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
        <h1 class="entry-title" style="text-align: <?php the_field('alignement_du_titre'); ?>;"><?php the_title(); ?></h1>
    </header><!-- banner -->
