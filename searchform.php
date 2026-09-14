<?php
/**
 * Search form.
 *
 * @package TextStack
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'textstack' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder', 'textstack' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	</label>
	<button class="search-submit" type="submit"><?php esc_html_e( 'Search', 'textstack' ); ?></button>
</form>
