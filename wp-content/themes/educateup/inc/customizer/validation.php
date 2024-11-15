<?php
/**
 * Validation functions
 *
 * @package Educateup
 */

if ( ! function_exists( 'educateup_validate_excerpt_length' ) ) :
	function educateup_validate_excerpt_length( $validity, $value ) {
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'educateup' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_no_of_words', esc_html__( 'Minimum no of words is 1', 'educateup' ) );
		} elseif ( $value > 200 ) {
			$validity->add( 'max_no_of_words', esc_html__( 'Maximum no of words is 200', 'educateup' ) );
		}
		return $validity;
	}
endif;

if ( ! function_exists( 'educateup_validate_blog_count' ) ) :
	function educateup_validate_blog_count( $validity, $value ) {
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'educateup' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'educateup' ) );
		} elseif ( $value > 12 ) {
			$validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'educateup' ) );
		}
		return $validity;
	}
endif;

if ( ! function_exists( 'educateup_validate_counter_count' ) ) :
	function educateup_validate_counter_count( $validity, $value ) {
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'educateup' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'educateup' ) );
		} elseif ( $value > 4 ) {
			$validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 4', 'educateup' ) );
		}
		return $validity;
	}
endif;

if ( ! function_exists( 'educateup_validate_course_count' ) ) :
	function educateup_validate_course_count( $validity, $value ) {
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'educateup' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'educateup' ) );
		} elseif ( $value > 12 ) {
			$validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'educateup' ) );
		}
		return $validity;
	}
endif;

if ( ! function_exists( 'educateup_validate_team_count' ) ) :
	function educateup_validate_team_count( $validity, $value ) {
		$value = intval( $value );
		if ( empty( $value ) || ! is_numeric( $value ) ) {
			$validity->add( 'required', esc_html__( 'You must supply a valid number.', 'educateup' ) );
		} elseif ( $value < 1 ) {
			$validity->add( 'min_no_of_posts', esc_html__( 'Minimum no of posts is 1', 'educateup' ) );
		} elseif ( $value > 12 ) {
			$validity->add( 'max_no_of_posts', esc_html__( 'Maximum no of posts is 12', 'educateup' ) );
		}
		return $validity;
	}
endif;
