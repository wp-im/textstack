<?php
/**
 * The footer.
 *
 * @package TextStack
 */
?>
		<footer class="site-footer">
			<div class="footer-widgets">
				<?php for ( $column = 1; $column <= 3; $column++ ) : ?>
					<?php if ( is_active_sidebar( 'footer-' . $column ) ) : ?>
						<div class="footer-column">
							<?php dynamic_sidebar( 'footer-' . $column ); ?>
						</div>
					<?php endif; ?>
				<?php endfor; ?>
			</div>
			<?php if ( is_active_sidebar( 'footer-bottom' ) ) : ?>
				<div class="footer-bottom-widgets">
					<?php dynamic_sidebar( 'footer-bottom' ); ?>
				</div>
			<?php endif; ?>
			<div class="footer-meta">
				<div>
					<p class="footer-site-name"><?php bloginfo( 'name' ); ?></p>
					<?php if ( get_bloginfo( 'description' ) ) : ?><p class="footer-description"><?php bloginfo( 'description' ); ?></p><?php endif; ?>
				</div>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer menu', 'textstack' ); ?>">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'menu', 'container' => false, 'fallback_cb' => 'textstack_footer_menu_fallback', 'depth' => 1 ) ); ?>
				</nav>
			</div>
			<p class="footer-credit"><?php echo esc_html( sprintf( __( 'Published with %s.', 'textstack' ), 'Text Stack' ) ); ?></p>
		</footer>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
