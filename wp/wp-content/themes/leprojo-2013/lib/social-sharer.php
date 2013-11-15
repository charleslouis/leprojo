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
  $my_tweet  .=  shortlink_by_id($post_id);
  $my_tweet  .= " " . social_excerpt($post_id);
  $my_tweet  = (strlen($my_tweet) > $max_char) ? substr($my_tweet,0,$max_char-3).'...' : $my_tweet;
  $my_tweet  = urlencode($my_tweet);
  $output  = 'http://twitter.com/home?status='. $my_tweet;

  return $output;
}

function viadeo_this($post_id){
  $output = "";
  $max_char           = 140;

  $my_share_url     .=  urlencode(shortlink_by_id($post_id));
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

  $my_share_url    .= urlencode(shortlink_by_id($post_id));
  $my_share_url    .= '&title=';
  $my_share_title  .=  ' A lire sur leprojo.com : '. get_the_title($post_id);
  $my_share_title   = urlencode((strlen($my_share_title) > $max_char) ? substr($my_share_title,0,$max_char-3).'...' : $my_share_title);
  $my_share         =  $my_share_url . $my_share_title;
  $output           = 'http://www.linkedin.com/shareArticle?mini=true&url='. $my_share;

  return $output;
}

function googleplus_this($post_id){
  $output = "";
  $my_share_url         .= urlencode(get_permalink($post_id)) . '&hl=fr';
  $output                = 'https://plus.google.com/share?url='. $my_share_url;
  return $output;
}


function pinterest_this($post_id){
  // mind that you can only pin stuffs with an image bigger than 80 x 80px and that you need a minimum of text content (up to 500chars)
  $output = "";
  $url_before = 'class="social-sharing btn" rel="nofollow"';
  $url_after = 'target="_blank" title="Partager sur Google +"';
  //if not pineable : disable the button and provide no href attribute
  $disbled_output = 'class="social-sharing btn disabled" rel="nofollow" title="Vous ne pouvez pas"';

  $max_char            = 500;

  $miniature       = get_field( "miniature", $post_id );
  $image           = get_field( "image", $post_id );
  
  $extrait_long    = get_field( "extrait_long", $post_id );
  $extrait_court   = get_field( "extrait_court", $post_id );
  $contenu         = get_field( "contenu", $post_id );

  if ( $image ) {
    $media = $image;
  }
  elseif ( $miniature ) {
    $media = $miniature;
  }
  else {
    return $disbled_output;
  }

  if ( $extrait_long ) {
    $description = $extrait_long;
  }
  elseif ( $contenu ) {
    $description = $contenu;
  }
  elseif ( $extrait_court ) {
    $description = $extrait_court;
  }
  else {
    return $disbled_output;
  }

  $my_share_url     .= urlencode(shortlink_by_id($post_id));
  $my_share_url     .= '&media=';
  $my_share_url     .= urlencode(get_post( $media )->guid);
  $my_share_url     .= '&description=';
  $my_share_desc    .=  ' Sur Jaicost.com : '.  $description;
  $my_share_desc    = urlencode((strlen($my_share_desc) > $max_char) ? substr($my_share_desc,0,$max_char-3).'...' : $my_share_desc);
  $my_share_url     .= $my_share_desc;
  $my_share_url           = 'href="http://www.pinterest.com/shareArticle?mini=true&url='. $my_share_url .'"';
  $output = $url_before . $my_share_url .  $url_after;
  return $output;
}