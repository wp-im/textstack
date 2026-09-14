<?php
/**
 * Single post content.
 *
 * @package TextStack
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-entry' ); ?>>
	<header class="entry-header">
		<div class="meta">
			<?php $category = textstack_primary_category(); if ( $category ) : ?><a class="tag dark" href="<?php echo esc_url( get_category_link( $category ) ); ?>"><?php echo esc_html( $category->name ); ?></a><?php endif; ?>
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( textstack_posted_on() ); ?></time>
			<span aria-hidden="true">·</span><span><?php echo esc_html( textstack_reading_time() ); ?></span>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( has_excerpt() ) : ?><p class="entry-lead"><?php echo esc_html( get_the_excerpt() ); ?></p><?php endif; ?>
	</header>
	<div class="entry-tools">
		<details class="article-index">
			<summary><?php esc_html_e( 'In this entry', 'textstack' ); ?></summary>
			<?php echo wp_kses_post( textstack_article_index() ); ?>
		</details>
	</div>
	<div class="entry-content prose"><?php the_content(); ?></div>
	<?php wp_link_pages( array( 'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Pages', 'textstack' ) . '"><span>' . esc_html__( 'Pages', 'textstack' ) . '</span>', 'after' => '</nav>', 'separator' => ' ' ) ); ?>
	<footer class="entry-footer">
		<?php the_tags( '<div class="entry-tags"><span>' . esc_html__( 'Filed under', 'textstack' ) . '</span>', ' ', '</div>' ); ?>
		<?php edit_post_link( __( 'Edit entry', 'textstack' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>
</article>
