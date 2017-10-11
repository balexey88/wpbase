<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	wp_deregister_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', get_template_directory_uri() . '/js/comment-reply.js', '', '', $in_footer );
	}

	// Loads JavaScript file with functionality specific.
	// wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'base-script', get_template_directory_uri() . '/js/jquery.main.js', array( 'jquery' ), '', $in_footer );

	// Loads our main stylesheet.
	wp_enqueue_style( 'base-style', get_stylesheet_uri(), array() );

	// Implementation stylesheet.
	wp_enqueue_style( 'base-theme', get_template_directory_uri() . '/theme.css', array() );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'base-ie', get_template_directory_uri() . '/css/ie.css' );
	wp_style_add_data( 'base-ie', 'conditional', 'lt IE 9' );

	wp_enqueue_style( 'pacifico-font', '//fonts.googleapis.com/css?family=Pacifico|Open+Sans:300,400,700,800' );
	wp_enqueue_style( 'wpbase-main', get_template_directory_uri() . '/css/main.css' );
	// wp_enqueue_script( 'wpbase-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );
