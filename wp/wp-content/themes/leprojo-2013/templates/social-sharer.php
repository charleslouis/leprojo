<?php
//social_sharer.php
$post_id = $post->ID;
?>
<section id="sharer-block-container" class="sharer-block-container active">
    <div id="dislay-sharer-wrapper" class="dislay-sharer-wrapper">
        <i aria-hidden="true" class="icon-display-sharer-wrapper"></i>             
    </div><!-- dislay-sharer-wrapper -->
    <div class="sharer-outer-wrapper">            
        <div id="sharer-inner-wrapper" class="sharer-inner-wrapper clearfix">        

            <ul class="social-list">
                <li>
                    <a class="social-link" rel="nofollow" href="<?php echo tweet_this($post_id); ?>" target="_blank" title="Twitter l'article">
                        <i aria-hidden="true" class="micon-twitter"></i>
                    </a>
                </li>

                <li>
                    <a class="social-link" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" title="Partager sur facebook">
                        <i aria-hidden="true" class="micon-facebook"></i>
                    </a>
                </li>

                <li>
                    <a class="social-link" rel="nofollow" href="<?php echo viadeo_this($post_id); ?>" target="_blank" title="Partager sur Viadéo">
                        <i aria-hidden="true" class="micon-viadeo"></i>
                    </a>
                </li>

                <li>
                    <a class="social-link" rel="nofollow" href="<?php echo linkedin_this($post_id); ?>" target="_blank" title="Partager sur LinkedIn">
                        <i aria-hidden="true" class="micon-linkedin"></i>
                    </a>
                </li>

                <li>
                    <a <?php echo pinterest_this($post_id); ?> >
                        <i aria-hidden="true" class="micon-pinterest"></i>
                    </a>
                </li>
            </ul><!-- !.social-list  -->

        </div><!-- sharer-inner-wrapper -->
    </div><!-- sharer-outer-wrapper -->
</section>