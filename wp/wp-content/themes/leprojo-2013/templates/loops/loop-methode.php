<!-- loop used in page-methode -->
<?php $pageSource ? null : $pageSource->ID; ?>
<?php $pageSourceID = $pageSource->ID;?>

      <section class="li-block columns">
        <div class="li-block-header">
          <h2 class="li-title"><?php the_field('list_title', $pageSourceID); ?></h2>            
        </div>
        <ul class="li-block-list unstyled">
          
          <?php $i = 1; $c = 1; ?>
          <?php if (get_field('liste', $pageSourceID)): ?>
            <?php while (has_sub_field('liste', $pageSourceID)): ?>               
              
              <?php if ($c == 1 || $i == 1) : ?>
                <div class="row listing-row">
              <?php endif; ?>        
              
                  <li class="columns large-6 small-12">
                    <article class="method-el"> 
                      <h3 class="li-el-title"><?php the_sub_field('element_title'); ?></h3>
                      <p class="icon-<?php the_sub_field('icon'); ?>"><?php the_sub_field('element_content');?></p>
                    </article>
                  </li>          
              
              <?php if ($c == 2 || sizeof(get_field('liste', $pageSourceID))-$i == 0 ) : $c = 0; ?>
                </div><!-- /.row -->
              <?php endif; ?>
              <?php $i++; $c++; ?>
            
            <?php endwhile //!has_sub_field?>
          <?php endif; //get_sub_field ?>        
        
        </ul>
      </section><!-- /.li-block -->

<?php $pageSourceID = null; ?>