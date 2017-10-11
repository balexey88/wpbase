<?php
// Theme functions
add_action('wp_head', 'wpb_add_meta');

function wpb_add_meta() {
  echo '<meta content="telephone=no" name="format-detection">';
}

add_filter('body_class', 'wpb_body_class');

function wpb_body_class($classes) {
  if ( is_front_page() ) {
    $classes[] = 'main-page';
  }

  return $classes;
}
