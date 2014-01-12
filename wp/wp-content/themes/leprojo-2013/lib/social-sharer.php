<?php
// social sharer
function social_excerpt($post_id) {
    $sous_titre      = get_the_title( "sous_titre", $post_id );
    $extrait_long    = get_field( "introduction", $post_id );
    $extrait_court   = get_field( "introduction", $post_id );

  
  if ($extrait_court){
    $excerpt = $extrait_court;
  }
  elseif ($sous_titre){
    $excerpt = $sous_titre;
  }
  elseif ($introduction){
    $excerpt = $extrait_long;
  }
  else {
    $excerpt = get_the_title($post_id);
  }
  return $excerpt;
}

function tweet_this($post_id){
  $output = "";
  $max_char        = 140;

  $my_tweet  .= "A lire sur leprojo.com : ";
  $my_tweet  .=  get_permalink($post_id);
  $my_tweet  .= " " . social_excerpt($post_id);
  $my_tweet  = (strlen($my_tweet) > $max_char) ? substr($my_tweet,0,$max_char-3).'...' : $my_tweet;
  $my_tweet  = urlencode($my_tweet);
  $output  = 'http://twitter.com/home?status='. $my_tweet;

  return $output;
}

function viadeo_this($post_id){
  $output = "";
  $max_char           = 140;

  $my_share_url     .=  urlencode(get_permalink($post_id));
  $my_share_url     .=  '&title=';
  $my_share_title   .=  ' A lire sur leprojo.com : '. social_excerpt($post_id);
  $my_share_title    = (strlen($my_share_title) > $max_char) ? substr($my_share_title,0,$max_char-3).'...' : $my_share_title;
  $my_share          = $my_share_url . $my_share_title;
  $output             = 'http://www.viadeo.com/shareit/share/?url='. $my_share;

  return $output;
}

function linkedin_this($post_id){
  $output = "";
  $max_char            = 100;

  $my_share_url    .= urlencode(get_permalink($post_id));
  $my_share_url    .= '&title=';
  $my_share_title  .=  ' A lire sur leprojo.com : '. get_the_title($post_id);
  $my_share_title   = urlencode((strlen($my_share_title) > $max_char) ? substr($my_share_title,0,$max_char-3).'...' : $my_share_title);
  $my_share         =  $my_share_url . $my_share_title;
  $output           = 'http://www.linkedin.com/shareArticle?mini=true&url='. $my_share;

  return $output;
}

function pinterest_this($post_id){
  // mind that you can only pin stuffs with an image bigger than 80 x 80px and that you need a minimum of text content (up to 500chars)
  $output = "";
  $url_before = 'class="social-link" rel="nofollow"';
  $url_after = 'target="_blank" title="Partager sur Pinterest"';
  //if not pineable : disable the button and provide no href attribute
  $disabled_output = 'class="social-link disabled" rel="nofollow" title="Vous ne pouvez pas poster ceci sur Pinterest"';

  $max_char   = 500;

  $image      = get_field( "photo", $post_id );
  
  $contenu    = get_field( "titre_about", $post_id );
  $contenu    .= " ";
  $contenu    .= get_field( "paragraphe_about", $post_id );

  if ( $image ) {
    $media = $image;
  }
  else {
    return $disabled_output;
  }

  if ( $contenu ) {
    $description = $contenu;
  }
  else {
    return $disabled_output;
  }

  $my_share_url     .= urlencode(get_permalink($post_id));
  $my_share_url     .= urlencode('http://leprojo.com/wp/');
  $my_share_url     .= '&media=';
  $my_share_url     .= urlencode(get_post( $media )->guid);
  $my_share_url     .= '&description=';
  $my_share_desc    .=  ' Sur LeProjo.com : '.  $description;
  $my_share_desc    = urlencode((strlen($my_share_desc) > $max_char) ? substr($my_share_desc,0,$max_char-3).'...' : $my_share_desc);
  $my_share_url     .= $my_share_desc;
  $my_share_url           = 'href="http://www.pinterest.com/shareArticle?mini=true&url='. $my_share_url .'"';
  $output = $url_before . $my_share_url .  $url_after;
  return $output;
}