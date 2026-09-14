<?php
/**
 * Small reusable template helpers.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_primary_category( $post_id = null ) {
	$categories = get_the_category( $post_id );
	return ! empty( $categories ) ? $categories[0] : null;
}

function textstack_posted_on( $post_id = null ) {
	return get_the_date( 'Y.m.d', $post_id );
}

function textstack_reading_time( $post_id = null ) {
	$content = get_post_field( 'post_content', $post_id ?: get_the_ID() );
	$content = wp_strip_all_tags( strip_shortcodes( $content ) );
	$length  = function_exists( 'mb_strlen' ) ? mb_strlen( $content ) : strlen( $content );
	$minutes = max( 1, (int) ceil( $length / 500 ) );

	/* translators: Estimated reading time in minutes. */
	return sprintf( _n( '%s min', '%s mins', $minutes, 'textstack' ), number_format_i18n( $minutes ) );
}

function textstack_excerpt( $post_id = null, $words = 42 ) {
	$post_id = $post_id ?: get_the_ID();
	if ( has_excerpt( $post_id ) ) {
		return wp_strip_all_tags( get_the_excerpt( $post_id ) );
	}

	$content = get_post_field( 'post_content', $post_id );
	$content = strip_shortcodes( $content );
	$content = preg_replace( '/<(p|h[1-6]|li|blockquote|figcaption|pre)\b/i', ' $0', $content );
	$content = preg_replace( '/<\/(p|h[1-6]|li|blockquote|figcaption|pre)>/i', ' $0', $content );
	return wp_trim_words( wp_strip_all_tags( $content ), $words, '…' );
}

function textstack_heading_entries( $content ) {
	$entries = array();
	$seen    = array();

	preg_match_all( '/<h([23])([^>]*)>(.*?)<\/h\1>/is', $content, $matches, PREG_SET_ORDER );
	foreach ( $matches as $match ) {
		$text = trim( wp_strip_all_tags( $match[3] ) );
		if ( '' === $text ) {
			continue;
		}

		$id = '';
		if ( preg_match( '/\bid=["\']([^"\']+)["\']/i', $match[2], $id_match ) ) {
			$id = sanitize_title( $id_match[1] );
		}
		if ( '' === $id ) {
			$id = sanitize_title( $text );
		}
		if ( '' === $id ) {
			$id = 'section';
		}

		$base_id = $id;
		$count   = 1;
		while ( isset( $seen[ $id ] ) ) {
			$count++;
			$id = $base_id . '-' . $count;
		}
		$seen[ $id ] = true;

		$entries[] = array(
			'level' => (int) $match[1],
			'id'    => $id,
			'text'  => $text,
		);
	}

	return $entries;
}

function textstack_article_index( $post_id = null ) {
	$content = get_post_field( 'post_content', $post_id ?: get_the_ID() );
	$entries = textstack_heading_entries( $content );

	if ( empty( $entries ) ) {
		return '<p class="index-empty">' . esc_html__( 'This article has no section headings.', 'textstack' ) . '</p>';
	}

	$html = '<ol class="article-index-list">';
	foreach ( $entries as $entry ) {
		$class = 3 === $entry['level'] ? ' class="is-subsection"' : '';
		$html .= '<li' . $class . '><a href="#' . esc_attr( $entry['id'] ) . '">' . esc_html( $entry['text'] ) . '</a></li>';
	}
	$html .= '</ol>';

	return $html;
}

function textstack_pagination() {
	$links = paginate_links(
		array(
			'type'      => 'array',
			'prev_text' => __( '← Newer', 'textstack' ),
			'next_text' => __( 'Older →', 'textstack' ),
		)
	);

	if ( empty( $links ) ) {
		return;
	}

	echo '<nav class="pagination" aria-label="' . esc_attr__( 'Posts pagination', 'textstack' ) . '"><div class="page-links">';
	foreach ( $links as $link ) {
		echo wp_kses_post( $link );
	}
	echo '</div></nav>';
}

function textstack_breadcrumb_items() {
	$items = array(
		array(
			'label' => get_bloginfo( 'name' ),
			'url'   => home_url( '/' ),
		),
	);

	if ( is_home() ) {
		$items[] = array( 'label' => __( 'Latest posts', 'textstack' ) );
	} elseif ( is_singular( 'post' ) ) {
		$category = textstack_primary_category();
		if ( $category ) {
			$items[] = array( 'label' => $category->name, 'url' => get_category_link( $category ) );
		}
		$items[] = array( 'label' => get_the_title() );
	} elseif ( is_page() ) {
		$items[] = array( 'label' => get_the_title() );
	} elseif ( is_category() || is_tag() || is_tax() ) {
		$items[] = array( 'label' => single_term_title( '', false ) );
	} elseif ( is_search() ) {
		$items[] = array( 'label' => sprintf( __( 'Search: %s', 'textstack' ), get_search_query() ) );
	} elseif ( is_404() ) {
		$items[] = array( 'label' => __( 'Not found', 'textstack' ) );
	} else {
		$items[] = array( 'label' => wp_get_document_title() );
	}

	return $items;
}

function textstack_render_breadcrumb( $class = 'path' ) {
	echo '<nav class="' . esc_attr( $class ) . '" aria-label="' . esc_attr__( 'Breadcrumb', 'textstack' ) . '">';
	foreach ( textstack_breadcrumb_items() as $item ) {
		echo '<span>';
		if ( ! empty( $item['url'] ) ) {
			echo '<a href="' . esc_url( $item['url'] ) . '">' . esc_html( $item['label'] ) . '</a>';
		} else {
			echo esc_html( $item['label'] );
		}
		echo '</span>';
	}
	echo '</nav>';
}
