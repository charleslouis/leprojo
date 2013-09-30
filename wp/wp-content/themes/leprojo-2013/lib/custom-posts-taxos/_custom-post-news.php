<?php 
function c_post_news(){

//POST TYPE ACTUALITES//  
  $labels = array(
    'name' => 'Actualités',
    'singular_name' => 'Actualité',
    'add_new' => 'Nouvelle actualité',
    'add_new_item' => 'Nouvelle actualité',
    'edit_item' => 'Editer l\'actualité',
    'new_item' => 'Nouvelle actualité',
    'all_items' => 'Toutes les actualités',
    'view_item' => 'Voir l\'actualité',
    'search_items' => 'Chercher parmis les actualités',
    'not_found' =>  'Aucune actualité trouvée',
    'not_found_in_trash' => 'Aucune actualité dans la corbeille', 
    'parent_item_colon' => '',
    'menu_name' => 'Actualités',
  );

  // $description = 'Le post qui ecrit des innovations de folie';

  $args = array(
    'labels' => $labels,
    'exclude_from_search' => false,
    'public' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'actualites/%domaine_intervention%', 'with_front'=>false),
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => 'actualites', 
    'hierarchical' => false,
    'menu_position' => 5,
    'taxonomies' => array('domaine_intervention'),
    'supports' => array( 'title', 'editor', 'author' )
  ); 
  //#!POST TYPE ACTUALITES//  

  return register_post_type( 'actualites', $args );
}