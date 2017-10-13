<?php
// Theme menus

register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'base' ),
	'footer' => __( 'Footer Menu', 'base' ),
) );

add_filter('nav_menu_css_class', 'li_custom_menu_class', 10, 3);

function li_custom_menu_class($classes, $item, $args) {
	$classes[] = 'nav-item';
	return $classes;
}

add_filter('nav_menu_link_attributes', 'li_nav_menu_link_class', 10, 4);

function li_nav_menu_link_class($atts, $item, $args, $depth) {
    $atts['class'] = 'nav-link';
    return $atts;
}
