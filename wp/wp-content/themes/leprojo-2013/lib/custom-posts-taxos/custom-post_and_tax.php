<?php 

function custom_post_types_search(){
  // the post types allowed in search
  $post_types = array(
      'team-member'
    );
  return $post_types;
}

require_once locate_template('lib/custom-posts-taxos/_custom-tax-team_member.php');
require_once locate_template('lib/custom-posts-taxos/_custom-post-team_member.php');
require_once locate_template('lib/custom-posts-taxos/_custom-post-realisations.php');
// require_once locate_template('lib/custom-posts-taxos/_define-terms-of-taxo.php');

function basement_custom_post_init() {

  c_tax_team_member();
  c_post_team_member();
  c_post_realisations();

  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}//basement_custom_post_init
add_action( 'after_setup_theme', 'basement_custom_post_init', 10);