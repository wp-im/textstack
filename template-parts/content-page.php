<?php
/**
 * Page content.
 *
 * @package TextStack
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-entry page-entry' ); ?>>
	<header class="entry-header"><p class="eyebrow"><?php esc_html_e( 'Page', 'textstack' ); ?></p><h1 class="entry-title"><?php the_title(); ?></h1></header>
	<div class="entry-content prose"><?php the_content(); ?></div>
	<?php wp_link_pages( array( 'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Pages', 'textstack' ) . '"><span>' . esc_html__( 'Pages', 'textstack' ) . '</span>', 'after' => '</nav>', 'separator' => ' ' ) ); ?>
	<?php edit_post_link( __( 'Edit page', 'textstack' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article>
