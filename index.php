<?php
/**
 * The main template file.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel">
		<?php if ( is_search() || is_archive() ) : ?>
			<header class="archive-intro">
				<p class="eyebrow"><?php esc_html_e( 'Index', 'textstack' ); ?></p>
				<h1><?php echo esc_html( textstack_archive_heading() ); ?></h1>
				<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
			</header>
		<?php endif; ?>
		<div class="loop-bar">
			<span><?php esc_html_e( 'Entries', 'textstack' ); ?></span>
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
