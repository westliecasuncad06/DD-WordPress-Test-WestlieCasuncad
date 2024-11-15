<?php 
/**
 * Theme Options.
 *
 * @package Kids Education Bell
 */

$default = kids_education_bell_get_default_theme_options();

// Single Page Setting Section starts
$wp_customize->add_section('section_single_page', 
	array(    
	'title'       => __('Single Page Option', 'kids-education-bell'),
	'panel'       => 'theme_option_panel'    
	)
);

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'default'           => $default['single_page_header_image_as_header_image_enable'],
	'sanitize_callback' => 'kids_education_bell_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_as_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image As Header Image', 'kids-education-bell' ),
	'description' => __('If this option is Enable then Display Header Image as Header Image Otherwise display Featured Image as Header Image  ', 'kids-education-bell'),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_title_enable]', array(
	'default'           => $default['single_page_header_title_enable'],
	'sanitize_callback' => 'kids_education_bell_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_title_enable]', array(
	'label'             => esc_html__( 'Enable Header Title', 'kids-education-bell' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );
// Add Single Header Image enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_header_image_enable]', array(
	'default'           => $default['single_page_header_image_enable'],
	'sanitize_callback' => 'kids_education_bell_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_header_image_enable]', array(
	'label'             => esc_html__( 'Enable Header Image', 'kids-education-bell' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_video_enable]', array(
	'default'           => $default['single_page_video_enable'],
	'sanitize_callback' => 'kids_education_bell_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_video_enable]', array(
	'label'             => esc_html__( 'Enable Featured Video', 'kids-education-bell' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );

// Add category enable setting and control.
$wp_customize->add_setting( 'theme_options[single_page_image_enable]', array(
	'default'           => $default['single_page_image_enable'],
	'sanitize_callback' => 'kids_education_bell_sanitize_checkbox',
) );

$wp_customize->add_control( 'theme_options[single_page_image_enable]', array(
	'label'             => esc_html__( 'Enable Featured Image', 'kids-education-bell' ),
	'section'           => 'section_single_page',
	'type'              => 'checkbox',

) );