<?php
function glossary_term_permalink($post_link, $post, $leavename, $sample) {

//enable insertion of the %term% taxonomy in the $post_link
// ie Transform :
  // http://mysite.com/nos-realisations/   %my_taxonomy%   /realisation-amenagement/
// Into:   
  // http://mysite.com/nos-realisations/   amenagement-de-lespace   /realisation-amenagement/

  if ( false != strpos( $post_link, '%my_taxonomy%' ) ) {
      $glossary_letter = get_the_terms( $post->ID, 'my_term' );
      if ($glossary_letter){
        $post_link = str_replace( '%my_taxonomy%', array_pop( $glossary_letter )->slug, $post_link );         
        return $post_link;
    }
  }
  else {
    return $post_link;
  }
}
add_filter('post_type_link', 'glossary_term_permalink', 10, 4);