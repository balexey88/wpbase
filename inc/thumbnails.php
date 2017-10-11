<?php
// Theme thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true ); // Normal post thumbnails
add_image_size( 'thumbnail_400x9999', 400, 9999, true );
add_image_size( 'logo-sm', 156, 37, false );
add_image_size( 'logo-xs', 41, 32, false );
