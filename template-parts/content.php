<?php
/**
 * Post card.
 *
 * @package TextStack
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<div class="post-card-head">
		<div class="meta">
			<?php $category = textstack_primary_category(); if ( $category ) : ?><a class="tag" href="<?php echo esc_url( get_category_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a><?php endif; ?>
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( textstack_posted_on() ); ?></time>
			<span aria-hidden="true">·</span>
			<span><?php echo esc_html( textstack_reading_time() ); ?></span>
		</div>
		<h2 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>
	<?php if ( has_post_thumbnail() ) : ?><a class="post-card-image" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?></a><?php endif; ?>
	<div class="post-card-body">
		<p><?php echo esc_html( textstack_excerpt() ); ?></p>
		<a class="more-link" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read entry', 'textstack' ); ?></span><span aria-hidden="true">→</span></a>
	</div>
</article>
