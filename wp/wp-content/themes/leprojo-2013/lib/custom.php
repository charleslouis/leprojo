<?php
/*********************
Custom functions
*********************/
require_once locate_template('lib/custom-posts-taxos/custom-post_and_tax.php');
require_once locate_template('lib/images.php');


function shortlink_by_id( $post_id ) {
  return home_url().'/?p='.$post_id;
}

function locale_date($field_name, $format = "%A %#d %B %Y"){
	setlocale(LC_TIME, '');
	return strftime($format, strtotime(get_field($field_name)));
}


