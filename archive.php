<?php
/**
 * Archive template.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel">
		<header class="archive-intro">
			<p class="eyebrow"><?php esc_html_e( 'Archive', 'textstack' ); ?></p>
			<h1><?php echo esc_html( textstack_archive_heading() ); ?></h1>
			<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
		</header>
		<div class="loop-bar"><span><?php esc_html_e( 'Entries', 'textstack' ); ?></span><span><?php echo esc_html( number_format_i18n( $wp_query->found_posts ) ); ?></span></div>
		<?php if ( have_posts() ) : ?>
			<div class="post-list"><?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; ?></div>
			<?php textstack_pagination(); ?>
		<?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
