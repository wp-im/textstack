<?php
/**
 * Author archive template.
 *
 * @package TextStack
 */

get_header();
$author = get_queried_object();
?>
<div class="site-layout has-sidebar">
	<main id="primary" class="content-panel">
		<header class="archive-intro author-intro">
			<p class="eyebrow"><?php esc_html_e( 'Author', 'textstack' ); ?></p>
			<h1><?php echo esc_html( get_the_author_meta( 'display_name', $author->ID ) ); ?></h1>
			<?php if ( get_the_author_meta( 'description', $author->ID ) ) : ?><div class="archive-description"><?php echo wp_kses_post( wpautop( get_the_author_meta( 'description', $author->ID ) ) ); ?></div><?php endif; ?>
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
