<?php
/**
 * Empty state.
 *
 * @package TextStack
 */
?>
<section class="empty-state">
	<p class="eyebrow"><?php esc_html_e( 'No entries', 'textstack' ); ?></p>
	<h2><?php esc_html_e( 'Nothing matched this view.', 'textstack' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search, category, or a new note.', 'textstack' ); ?></p>
	<?php if ( is_search() ) : ?><div class="search-inline"><?php get_search_form(); ?></div><?php endif; ?>
</section>
