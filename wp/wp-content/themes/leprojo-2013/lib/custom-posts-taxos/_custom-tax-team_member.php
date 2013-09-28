<?php 
function c_tax_team_member(){
  $labels = array(
    'name'                => _x( 'Type de team member', 'taxonomy general name' ),
    'singular_name'       => _x( 'Type de team member', 'taxonomy singular name' ),
    'search_items'        => __( 'Chercher parmis les Type de team members' ),
    'all_items'           => __( 'Tous les Type de team members' ),
    'parent_item'         => __( 'Parent Domaine Type de team member' ),
    'parent_item_colon'   => __( 'Parent Type de team member:' ),
    'edit_item'           => __( 'Editer le profil du Type de team member' ), 
    'update_item'         => __( 'Mettre à jour le Type de team member' ),
    'add_new_item'        => __( 'Ajouter un nouveau Type de team member' ),
    'new_item_name'       => __( 'Nom du nouveau Type de team member' ),
    'menu_name'           => __( 'Type de team member' )
  );
  $args = array(
    'hierarchical'        => true,
    'labels'              => $labels,
    'capabilities'        => array('assign_terms'),
    'publicly_queryable' =>  true,
    'query_var'           => true,
    'rewrite'             => array( 'slug' => 'team-member-type', 'with_front' => true)
  );
  return register_taxonomy( 'team-member-type', 'team-member', $args );
}