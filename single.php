<?php
/**
 * Single post template.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
			<?php the_post_navigation( array( 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous', 'textstack' ) . '</span><span>%title</span>', 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next', 'textstack' ) . '</span><span>%title</span>' ) ); ?>
			<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
		<?php endwhile; ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
