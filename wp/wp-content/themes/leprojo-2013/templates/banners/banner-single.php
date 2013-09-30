    <?php $photo = get_field('photo'); ?>
    <?php 
    // $photo_sizes = $photo[sizes]; ?>
    <header class="banner">
        <figure class="portrait">
          <img src="<?php echo $photo[sizes]['portrait-small']; ?>" alt="<?php echo $photo_sizes[alt]; ?>" data-interchange="[<?php echo $photo[sizes][portrait-large]; ?>, (large))]">
        </figure>
        <h1 class="entry-title" style="text-align: <?php the_field('alignement_du_titre'); ?>;"><?php the_title(); ?></h1>
    </header><!-- banner -->
