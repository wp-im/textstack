<?php
/**
 * Page template.
 *
 * @package TextStack
 */

get_header();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel">
		<?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'page' ); if ( comments_open() || get_comments_number() ) : comments_template(); endif; endwhile; ?>
	</main>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
