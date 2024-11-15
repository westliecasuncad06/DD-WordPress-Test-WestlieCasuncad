<?php
/**
 * Front Page Options
 *
 * @package EducateUp
 */

$wp_customize->add_panel(
	'educateup_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'educateup' ),
		'priority' => 130,
	)
);

// Banner Section.
require get_template_directory() . '/inc/customizer/front-page-options/banner.php';

// Course Section.
require get_template_directory() . '/inc/customizer/front-page-options/course.php';

// Team Section.
require get_template_directory() . '/inc/customizer/front-page-options/team.php';

// Counter Section.
require get_template_directory() . '/inc/customizer/front-page-options/counter.php';

// Mission Section.
require get_template_directory() . '/inc/customizer/front-page-options/mission.php';

// Blog Section.
require get_template_directory() . '/inc/customizer/front-page-options/blog.php';

// Newsletter Section.
require get_template_directory() . '/inc/customizer/front-page-options/newsletter.php';
