<?php
/**
 * Theme setup and widget areas.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_setup() {
	load_theme_textdomain( 'textstack', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f2f2ef',
		)
	);
	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'search-form',
			'script',
			'style',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 320,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	register_nav_menus(
		array(
			'primary'   => __( 'Primary Menu', 'textstack' ),
			'secondary' => __( 'Secondary Menu', 'textstack' ),
			'footer'    => __( 'Footer Menu', 'textstack' ),
			'filter'    => __( 'Category Filter Menu', 'textstack' ),
		)
	);

	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 760;
	}
}
add_action( 'after_setup_theme', 'textstack_setup' );

function textstack_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'textstack' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'The right column on blog, archive, search, and article pages.', 'textstack' ),
			'before_widget' => '<section id="%1$s" class="widget side-block %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title side-id">',
			'after_title'   => '</h2>',
		)
	);

	for ( $column = 1; $column <= 3; $column++ ) {
		register_sidebar(
			array(
				/* translators: Footer column number. */
				'name'          => sprintf( __( 'Footer Column %d', 'textstack' ), $column ),
				'id'            => 'footer-' . $column,
				'description'   => __( 'A footer widget column.', 'textstack' ),
				'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

	register_sidebar(
		array(
			'name'          => __( 'Footer Bottom', 'textstack' ),
			'id'            => 'footer-bottom',
			'description'   => __( 'A full-width footer widget area.', 'textstack' ),
			'before_widget' => '<section id="%1$s" class="widget footer-bottom-widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'textstack_widgets_init' );
