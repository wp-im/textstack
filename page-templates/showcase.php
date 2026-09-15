<?php
/**
 * Template Name: Textstack Showcase
 * Template Post Type: page
 *
 * A full-width, content-led page for a theme showcase or product guide.
 * Keep the copy in the WordPress page so the template remains reusable.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout no-sidebar showcase-layout">
	<main id="primary" class="content-panel showcase-panel">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-entry page-entry showcase-entry' ); ?>>
				<header class="entry-header showcase-hero">
					<p class="eyebrow"><?php esc_html_e( 'Showcase', 'textstack' ); ?></p>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content prose showcase-content">
					<?php the_content(); ?>
				</div>
				<?php wp_link_pages( array( 'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Pages', 'textstack' ) . '"><span>' . esc_html__( 'Pages', 'textstack' ) . '</span>', 'after' => '</nav>', 'separator' => ' ' ) ); ?>
				<?php edit_post_link( __( 'Edit page', 'textstack' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
			</article>
		<?php endwhile; ?>
	</main>
</div>
<?php get_footer(); ?>
