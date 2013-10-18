<?php

add_action( 'after_setup_theme', 'terms_of_taxo', 10 );
function terms_of_taxo() { 
  $term = term_exists('term-one', 'domaine_intervention');
  if ($term == 0 && $term == null) {
    wp_insert_term(
      'Term one name', // the term 
      'taxonomy', // the taxonomy
      array(
        'description'=> '',
        'slug' => 'term-one'
      )
    );
  }  
  $term = term_exists('term-two', 'domaine_intervention');
  if ($term == 0 && $term == null) {
    wp_insert_term(
      'Term two name', // the term 
      'taxonomy', // the taxonomy
      array(
        'description'=> '',
        'slug' => 'term-two'
      )
    );
  }
}