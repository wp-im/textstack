<?php
/**
 * The blog index.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout <?php echo textstack_has_sidebar() ? 'has-sidebar' : 'no-sidebar'; ?>">
	<main id="primary" class="content-panel">
		<header class="home-intro">
			<p class="eyebrow"><?php esc_html_e( 'Personal notebook', 'textstack' ); ?></p>
			<h1><?php bloginfo( 'name' ); ?></h1>
			<?php if ( get_bloginfo( 'description' ) ) : ?><p class="site-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
		</header>
		<div class="filter-row">
			<span class="filter-label"><?php esc_html_e( 'Filter', 'textstack' ); ?></span>
			<?php textstack_filter_menu(); ?>
		</div>
		<div class="loop-bar">
			<span><?php esc_html_e( 'Latest entries', 'textstack' ); ?></span>
			<span><?php echo esc_html( number_format_i18n( $wp_query->found_posts ) ); ?></span>
		</div>
		<?php if ( have_posts() ) : ?>
			<div class="post-list">
				<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; ?>
			</div>
			<?php textstack_pagination(); ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
