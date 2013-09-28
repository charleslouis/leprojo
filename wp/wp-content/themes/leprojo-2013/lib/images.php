<?php 
if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'portrait', 320, 380, true ); //(cropped)
  add_image_size( 'portrait-retina', 740, 860, true ); //(cropped)
  add_image_size( 'square', 320, 320, true ); //(cropped)
  add_image_size( 'square-retina', 740, 740, true ); //(cropped)
}
 
add_filter('image_size_names_choose', 'basement_image_sizes');
function basement_image_sizes($sizes) {
  $addsizes = array(
          "portrait" => __( "Portrait"),
          "portrait-retina" => __( "Portrait Retina"),
          "square" => __( "Square mini Retina"),
          "square-retina" => __( "Square mini Retina")
          );
  $newsizes = array_merge($sizes, $addsizes);
  return $newsizes;
}