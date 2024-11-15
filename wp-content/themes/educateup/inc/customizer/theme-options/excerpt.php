<?php
/**
 * Excerpt
 *
 * @package EducateUp
 */

$wp_customize->add_section(
	'educateup_excerpt_options',
	array(
		'panel' => 'educateup_theme_options',
		'title' => esc_html__( 'Excerpt', 'educateup' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'educateup_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'educateup_sanitize_number_range',
		'validate_callback' => 'educateup_validate_excerpt_length',
	)
);

$wp_customize->add_control(
	'educateup_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'educateup' ),
		'description' => esc_html__( 'Note: Min 1 & Max 200. Please input the valid number and save. Then refresh the page to see the change.', 'educateup' ),
		'section'     => 'educateup_excerpt_options',
		'settings'    => 'educateup_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 1,
			'max'  => 200,
			'step' => 1,
		),
	)
);

// Excerpt - Read More Text.
$wp_customize->add_setting(
	'educateup_excerpt_more_text',
	array(
		'default'           => esc_html__( 'Read More', 'educateup' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'educateup_excerpt_more_text',
	array(
		'label'    => esc_html__( 'Read More Text', 'educateup' ),
		'section'  => 'educateup_excerpt_options',
		'settings' => 'educateup_excerpt_more_text',
		'type'     => 'text',
	)
);
