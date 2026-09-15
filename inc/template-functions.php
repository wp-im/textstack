<?php
/**
 * Content filters and layout helpers.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_add_heading_ids( $content ) {
	if ( is_admin() || ! is_singular() || ! in_the_loop() || ! is_main_query() ) {
		return $content;
	}

	$seen = array();
	return preg_replace_callback(
		'/<h([23])([^>]*)>(.*?)<\/h\1>/is',
		function ( $match ) use ( &$seen ) {
			if ( preg_match( '/\bid=["\']([^"\']+)["\']/i', $match[2] ) ) {
				return $match[0];
			}

			$text = trim( wp_strip_all_tags( $match[3] ) );
			$id   = sanitize_title( $text ) ?: 'section';
			$base = $id;
			$count = 1;
			while ( isset( $seen[ $id ] ) ) {
				$count++;
				$id = $base . '-' . $count;
			}
			$seen[ $id ] = true;

			return '<h' . $match[1] . $match[2] . ' id="' . esc_attr( $id ) . '">' . $match[3] . '</h' . $match[1] . '>';
		},
		$content
	);
}
add_filter( 'the_content', 'textstack_add_heading_ids', 20 );

function textstack_archive_heading() {
	if ( is_category() ) {
		return single_cat_title( '', false );
	}
	if ( is_tag() ) {
		return single_tag_title( '', false );
	}
	if ( is_author() ) {
		return get_the_author();
	}
	if ( is_search() ) {
		return sprintf( __( 'Search results for “%s”', 'textstack' ), get_search_query() );
	}
	return get_the_archive_title();
}
