<?php
/**
 * Not found template.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel narrow-panel">
		<section class="not-found">
			<p class="eyebrow">404</p>
			<h1><?php esc_html_e( 'Nothing here yet.', 'textstack' ); ?></h1>
			<p><?php esc_html_e( 'The page may have moved, or the address may have been typed differently.', 'textstack' ); ?></p>
			<?php get_search_form(); ?>
			<p><a class="button-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Return home', 'textstack' ); ?></a></p>
		</section>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
