<?php 
// custom-post-job_offers.php
function c_post_job_offers(){
  $labels = array(
    'name' => 'Offres d\'emploi',
    'singular_name' => 'Offre d\'emploi',
    'add_new' => 'Nouvelle offre d\'emploi',
    'add_new_item' => 'Nouvelle offre d\'emploi',
    'edit_item' => 'Editer l\' offre d\'emploi',
    'new_item' => 'Nouvelle offre d\'emploi',
    'all_items' => 'Toutes les offres d\'emploi',
    'view_item' => 'Voir l\' offre d\'emploi',
    'search_items' => 'Chercher parmis les offres d\'emploi',
    'not_found' =>  'Aucune offre d\'emploi trouvée',
    'not_found_in_trash' => 'Aucune offre d\'emploi dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'Offres d\'emploi',
  );
  $args = array(
    'labels' => $labels,
    'exclude_from_search' => false,
    'public' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'offres-demploi', 'with_front'=>false),
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => 'offres-demploi', 
    'hierarchical' => false,
    'menu_position' => 7,
    'supports' => array( 'title', 'editor', 'author' )
  ); 
  return register_post_type( 'offres-demploi', $args );
}