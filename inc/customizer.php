<?php
/**
 * Small set of presentation controls.
 *
 * @package TextStack
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function textstack_color_settings() {
	return array(
		'accent'     => array(
			'label'   => __( 'Ink color', 'textstack' ),
			'default' => '#111111',
			'property' => '--accent',
		),
		'background' => array(
			'label'   => __( 'Page background', 'textstack' ),
			'default' => '#f2f2ef',
			'property' => '--bg',
		),
		'paper'     => array(
			'label'   => __( 'Content surface', 'textstack' ),
			'default' => '#fffefa',
			'property' => '--paper',
		),
		'line'      => array(
			'label'   => __( 'Rule color', 'textstack' ),
			'default' => '#d2d2cc',
			'property' => '--line',
		),
	);
}

function textstack_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'textstack_colors',
		array(
			'title'       => __( 'Text Stack Colors', 'textstack' ),
			'description' => __( 'Adjust the quiet four-color palette used by the theme.', 'textstack' ),
			'priority'    => 40,
		)
	);

	foreach ( textstack_color_settings() as $key => $setting ) {
		$id = 'textstack_' . $key;
		$wp_customize->add_setting(
			$id,
			array(
				'default'           => $setting['default'],
				'sanitize_callback' => 'sanitize_hex_color',
				'transport'         => 'refresh',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				$id,
				array(
					'label'   => $setting['label'],
					'section' => 'textstack_colors',
				)
			)
		);
	}
}
add_action( 'customize_register', 'textstack_customize_register' );

function textstack_customizer_css() {
	$rules = array();

	foreach ( textstack_color_settings() as $key => $setting ) {
		$value = get_theme_mod( 'textstack_' . $key, $setting['default'] );
		$value = sanitize_hex_color( $value );
		if ( $value ) {
			$rules[] = $setting['property'] . ':' . $value;
		}
	}

	return $rules ? ':root{' . implode( ';', $rules ) . '}' : '';
}
