<?php
/**
 * Menu fallbacks and category navigation.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_menu_link( $label, $url, $current = false ) {
	$class = $current ? ' class="current-menu-item"' : '';
	return '<li' . $class . '><a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a></li>';
}

function textstack_primary_menu_fallback() {
	$archive = get_post_type_archive_link( 'post' );
	if ( ! $archive ) {
		$archive = home_url( '/' );
	}

	echo '<ul id="primary-menu" class="menu">';
	echo textstack_menu_link( __( 'Home', 'textstack' ), home_url( '/' ), is_front_page() );
	echo textstack_menu_link( __( 'Archive', 'textstack' ), $archive, is_home() || is_archive() );
	echo textstack_menu_link( __( 'Feed', 'textstack' ), get_feed_link(), false );
	echo '</ul>';
}

function textstack_secondary_menu_fallback() {
	echo '<ul id="secondary-menu" class="menu">';
	echo textstack_menu_link( __( 'Home', 'textstack' ), home_url( '/' ), is_front_page() );
	echo textstack_menu_link( __( 'Archive', 'textstack' ), get_post_type_archive_link( 'post' ) ?: home_url( '/' ), is_archive() );
	echo textstack_menu_link( __( 'RSS', 'textstack' ), get_feed_link(), false );
	echo '</ul>';
}

function textstack_footer_menu_fallback() {
	echo '<ul class="menu">';
	echo textstack_menu_link( __( 'Home', 'textstack' ), home_url( '/' ), false );
	echo textstack_menu_link( __( 'Archive', 'textstack' ), get_post_type_archive_link( 'post' ) ?: home_url( '/' ), false );
	echo textstack_menu_link( __( 'Feed', 'textstack' ), get_feed_link(), false );
	echo '</ul>';
}

function textstack_filter_menu() {
	$categories = get_categories(
		array(
			'hide_empty' => true,
			'orderby'    => 'name',
			'order'      => 'ASC',
		)
	);

	if ( has_nav_menu( 'filter' ) ) {
		wp_nav_menu(
			array(
				'theme_location' => 'filter',
				'container'      => 'nav',
				'container_class' => 'filter-menu',
				'container_aria_label' => __( 'Categories', 'textstack' ),
				'menu_class'     => 'menu',
				'depth'          => 1,
			)
		);
		return;
	}

	echo '<nav class="filter-menu" aria-label="' . esc_attr__( 'Categories', 'textstack' ) . '"><ul class="menu">';
	echo textstack_menu_link( __( 'All', 'textstack' ), home_url( '/' ), is_home() && ! is_category() );
	foreach ( $categories as $category ) {
		echo textstack_menu_link( $category->name, get_category_link( $category ), is_category( $category->term_id ) );
	}
	echo '</ul></nav>';
}
