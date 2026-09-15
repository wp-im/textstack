<?php
/**
 * Textstack theme bootstrap.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'TEXTSTACK_VERSION', '1.0.2' );

$textstack_inc = get_template_directory() . '/inc';

require_once $textstack_inc . '/setup.php';
require_once $textstack_inc . '/assets.php';
require_once $textstack_inc . '/customizer.php';
require_once $textstack_inc . '/navigation.php';
require_once $textstack_inc . '/template-tags.php';
require_once $textstack_inc . '/template-functions.php';
require_once $textstack_inc . '/comments.php';
