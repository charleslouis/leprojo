<?php
//social_sharer.php
$post_id = $post->ID;
?>
<section id="sharer-block-container" class="sharer-block-container">
    <div id="dislay-sharer-wrapper" class="dislay-sharer-wrapper">
        <i aria-hidden="true" class="icon-display-sharer-wrapper"></i>
        <p class="sharer-wrapper-label">               
           Partager 
        </p>                
    </div><!-- dislay-sharer-wrapper -->
    <div class="sharer-outer-wrapper">            
        <div id="sharer-wrapper" class="sharer-inner-wrapper clearfix">        
            <span class="sharer-wrapper-link-label">
              Lien direct :
            </span>
            <div class="sharer-wrapper-link">
                <div id="sharer-link" class="well well-small sharer-direct-link">
                    <i aria-hidden="true" class="sharer-direct-link-icon icone-well"></i>
                    <input id="direct-link" class="direct-link" value="<?php echo(get_permalink($post_id)); ?>"></input>
                </div>
            </div><!-- !#sharer-wrapper-link -->
            <span class="sharer-wrapper-link-label">
              Shortlink :
            </span>
            <div class="sharer-wrapper-link">
                <div id="sharer-shortlink" class="well well-small sharer-direct-link">
                    <i aria-hidden="true" class="sharer-direct-link-icon icone-well"></i>
                    <input id="direct-shortlink" class="direct-link" value="<?php echo shortlink_by_id($post_id); ?>"></input>
                </div><!-- !#well -->
            </div><!-- !#sharer-wrapper-link -->

            <span class="sharer-wrapper-link-label">
            Partagez sur les réseaux sociaux :   
            </span>

            <ul class="social-sharer clearfix">

                <li>
                    <a class="social-sharingGGG btn" rel="nofollow" href="<?php echo tweet_this($post_id); ?>" target="_blank" title="Share this article with your Twitter followers">
                        <i aria-hidden="true" class="social-iconGGG micon-twitter"></i>
                        <span>Twitter</span>
                    </a>
                </li>

                <li>
                    <a class="social-sharingGGG btn" rel="nofollow" href="<?php echo viadeo_this($post_id); ?>" target="_blank" title="Partager sur Viadéo">
                        <i aria-hidden="true" class="social-iconGGG micon-viadeo"></i>
                        <span>Viadeo</span>
                    </a>
                </li>

                <li>
                    <a class="social-sharingGGG btn" rel="nofollow" href="<?php echo linkedin_this($post_id); ?>" target="_blank" title="Partager sur LinkedIn">
                        <i aria-hidden="true" class="social-iconGGG micon-linkedin"></i>
                        <span>LinkedIn</span>
                    </a>
                </li>

                <li>
                    <a class="social-sharingGGG btn" rel="nofollow" href="<?php echo googleplus_this($post_id); ?>" target="_blank" title="Partager sur Google +">
                        <i aria-hidden="true" class="social-iconGGG micon-google_plus"></i>
                        <span>Google+</span>
                    </a>
                </li>

                <li>
                    <a <?php echo pinterest_this($post_id); ?> >
                        <i aria-hidden="true" class="social-iconGGG micon-pinterest"></i>
                        <span>Pinterest</span>
                    </a>
                </li>

            </ul><!-- !.social-sharer  -->

            <div class="mail-or-bookmark">
                <a id="link_send_by_mail" class="btn" href="mailto:?subject=Un article intéressant sur leprojo.com : <?php echo (get_the_title($id)); ?>&body=<?php echo social_excerpt($post_id);?> Consultez l'article complet : <?php the_permalink(); ?>">
                    <span>Envoyer par email</span>
                </a>                                        
                <a class="btn" href="javascript:bookmarksite(' <?php bloginfo( 'name' );echo(' - ');the_title(); ?>', '<?php echo(get_permalink($post_id)); ?>')">
                    <span>Ajouter aux favoris</span>
                </a>                        
            </div> <!-- !mail-or-bookmark -->
        </div><!-- sharer-inner-wrapper -->
    </div><!-- sharer-outer-wrapper -->
</section>