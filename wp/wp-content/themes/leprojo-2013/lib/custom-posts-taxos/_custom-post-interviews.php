<?php 
function c_post_interview(){

//POST TYPE INTERVIEW//  
  $labels = array(
    'name' => 'interviews',
    'singular_name' => 'interview',
    'add_new' => 'Nouvelle interview',
    'add_new_item' => 'Nouvelle interview',
    'edit_item' => 'Editer l\'interview',
    'new_item' => 'Nouvelle interview',
    'all_items' => 'Toutes les interviews',
    'view_item' => 'Voir l\'interview',
    'search_items' => 'Chercher parmis les interviews',
    'not_found' =>  'Aucune interview trouvée',
    'not_found_in_trash' => 'Aucune interview dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'interviews',
  );

  // $description = 'Le post qui ecrit des innovations de folie';

  $args = array(
    'labels' => $labels,
    'exclude_from_search' => false,
    'public' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'interviews/%domaine_intervention%', 'with_front'=>false),
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => 'interviews', 
    'hierarchical' => false,
    'menu_position' => 5,
    'taxonomies' => array('domaine_intervention'),
    'supports' => array( 'title', 'editor', 'author' )
  ); 
  //#!POST TYPE INTERVIEW//  

  return register_post_type( 'interviews', $args );
}
