<?php
/**
 * Comment callback and labels.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment-item', $comment ); ?>>
		<article class="comment-body">
			<header class="comment-meta">
				<strong><?php echo esc_html( get_comment_author( $comment ) ); ?></strong>
				<a href="<?php echo esc_url( get_comment_link( $comment ) ); ?>">
					<time datetime="<?php echo esc_attr( get_comment_time( 'c', $comment ) ); ?>"><?php echo esc_html( get_comment_date( 'Y.m.d', $comment ) ); ?></time>
				</a>
			</header>
			<?php if ( '0' === $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'textstack' ); ?></p>
			<?php endif; ?>
			<div class="comment-content"><?php comment_text(); ?></div>
			<?php
			comment_reply_link(
				array_merge(
					$args,
					array(
						'add_below' => 'comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
					)
				)
			);
			?>
		</article>
	</li>
	<?php
}
