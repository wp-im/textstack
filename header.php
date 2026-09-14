<?php
/**
 * The header.
 *
 * @package TextStack
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'textstack' ); ?></a>
	<div class="site-shell">
		<header class="site-header">
			<div class="topbar">
				<div class="site-branding">
					<?php if ( has_custom_logo() ) : ?>
						<?php the_custom_logo(); ?>
					<?php else : ?>
						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
					<span class="menu-toggle-label"><?php esc_html_e( 'Menu', 'textstack' ); ?></span>
					<span class="menu-toggle-icon" aria-hidden="true"><i></i><i></i><i></i></span>
				</button>

				<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'textstack' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'menu',
							'fallback_cb'     => 'textstack_primary_menu_fallback',
							'container'       => false,
							'depth'           => 2,
						)
					);
					?>
				</nav>
			</div>
			<?php if ( has_nav_menu( 'secondary' ) ) : ?>
				<nav class="secondary-navigation" aria-label="<?php esc_attr_e( 'Secondary menu', 'textstack' ); ?>">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'menu', 'container' => false, 'depth' => 1 ) ); ?>
				</nav>
			<?php endif; ?>
			<?php textstack_render_breadcrumb(); ?>
		</header>
