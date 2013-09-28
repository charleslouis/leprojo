<?php 
// custom-post-realisations.php
function c_post_realisations(){
  $labels = array(
    'name' => 'Réalisations',
    'singular_name' => 'Réalisation',
    'add_new' => 'Nouvelle réalisation',
    'add_new_item' => 'Nouvelle réalisation',
    'edit_item' => 'Editer la réalisation',
    'new_item' => 'Nouvelle réalisation',
    'all_items' => 'Toutes les réalisations',
    'view_item' => 'Voir la réalisation',
    'search_items' => 'Chercher parmis les réalisations',
    'not_found' =>  'Aucune réalisation trouvée',
    'not_found_in_trash' => 'Aucune réalisation dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'Réalisations',
  );
  $args = array(
    'labels' => $labels,
    'exclude_from_search' => false,
    'public' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'realisations', 'with_front'=>false),
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => 'realisations', 
    'hierarchical' => false,
    'menu_position' => 6,
    'taxonomies' => array('domaine_intervention'),
    'supports' => array( 'title', 'editor', 'author' )
  );   
  return register_post_type( 'realisations', $args );
}