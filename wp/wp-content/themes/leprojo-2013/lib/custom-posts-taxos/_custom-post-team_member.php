<?php
// custom-post-team_member.php
function c_post_team_member(){
  $labels = array(
    'name' => 'Team members',
    'singular_name' => 'Team member',
    'menu_name' => 'Team members',
    'add_new' => 'Nouveau team member',
    'add_new_item' => 'Nouveau team member',
    'edit_item' => 'Editer le team member',
    'new_item' => 'Nouveau team member',
    'all_items' => 'Touts les team members',
    'view_item' => 'Voir le team member',
    'search_items' => 'Chercher parmis les team members',
    'not_found' =>  'Aucun team member trouvé',
    'not_found_in_trash' => 'Aucun team member dans la corbeille', 
    'parent_item_colon' => '',
  );
  $args = array(
    'labels' => $labels,
    'exclude_from_search' => false,
    'public' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'qui-nous-sommes', 'with_front'=>false ),
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'has_archive' => 'team-members', 
    'hierarchical' => false,
    'menu_position' => 4,
    'taxonomies' => array('team-members'),
    'supports' => array( 'title', 'editor', 'author' ),
    'page-slug' => 'qui-nous-sommes'
  );
  return register_post_type( 'team-member', $args );
}