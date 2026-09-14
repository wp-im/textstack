<?php
/**
 * Search result card.
 *
 * @package TextStack
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card search-card' ); ?>>
	<div class="post-card-head">
		<div class="meta"><span class="tag soft"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></span><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( textstack_posted_on() ); ?></time></div>
		<h2 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<div class="post-card-body"><p><?php echo esc_html( textstack_excerpt() ); ?></p><a class="more-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read entry', 'textstack' ); ?></span><span aria-hidden="true">→</span></a></div>
</article>
