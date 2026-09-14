<?php
/**
 * Theme assets.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_enqueue_assets() {
	wp_enqueue_style( 'textstack-style', get_stylesheet_uri(), array(), TEXTSTACK_VERSION );
	wp_enqueue_script(
		'textstack-navigation',
		get_template_directory_uri() . '/assets/js/navigation.js',
		array(),
		TEXTSTACK_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_add_inline_style( 'textstack-style', textstack_customizer_css() );
}
add_action( 'wp_enqueue_scripts', 'textstack_enqueue_assets' );
