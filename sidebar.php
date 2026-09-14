<?php
/**
 * The sidebar.
 *
 * @package TextStack
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) :
	?>
	<aside id="secondary" class="sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'textstack' ); ?>">
		<section class="side-block">
			<h2 class="side-id"><?php esc_html_e( 'About this site', 'textstack' ); ?></h2>
			<p><?php echo esc_html( get_bloginfo( 'description' ) ?: __( 'A quiet place for notes, links, and longer thoughts.', 'textstack' ) ); ?></p>
		</section>
		<section class="side-block">
			<h2 class="side-id"><?php esc_html_e( 'Explore', 'textstack' ); ?></h2>
			<ul class="side-list">
				<?php wp_list_categories( array( 'title_li' => '', 'show_count' => true, 'number' => 8 ) ); ?>
			</ul>
		</section>
		<section class="side-block">
			<h2 class="side-id"><?php esc_html_e( 'Archives', 'textstack' ); ?></h2>
			<ul class="side-list"><?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6, 'show_post_count' => true ) ); ?></ul>
		</section>
	</aside>
	<?php
	return;
endif;
?>
<aside id="secondary" class="sidebar" aria-label="<?php esc_attr_e( 'Sidebar', 'textstack' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
