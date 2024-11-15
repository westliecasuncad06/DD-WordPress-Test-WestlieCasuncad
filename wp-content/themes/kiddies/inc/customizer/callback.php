<?php

if (!function_exists('kiddies_is_top_bar_enabled')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_top_bar_enabled($control)
    {

        if ($control->manager->get_setting('kiddies_options[enable_top_bar]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_is_todays_date_enabled')) :
    /**
     * Check if Todays Date is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_todays_date_enabled($control)
    {

        if ($control->manager->get_setting('kiddies_options[enable_topbar_date]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_is_show_preloader')) :
    /**
     * Check if top bar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_show_preloader($control)
    {

        if ($control->manager->get_setting('kiddies_options[show_preloader]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_is_dark_mode_enabled')) :
    /**
     * Check if Dark mode is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_dark_mode_enabled($control)
    {

        if ($control->manager->get_setting('kiddies_options[enable_dark_mode]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_is_progressbar_enabled')) :
    /**
     * Check if progressbar is enabled
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_progressbar_enabled($control)
    {

        if ($control->manager->get_setting('kiddies_options[show_progressbar]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;



/*select page for slider*/
if ( ! function_exists( 'kiddies_is_select_page_slider' ) ) :

    /**
     * Check if slider section page/post is active.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function kiddies_is_select_page_slider( $control ) {

        if ($control->manager->get_setting('kiddies_options[select_slider_from]')->value() === 'from-page') {
            return true;
        } else {
            return false;
        }

    }

endif;

/*select cat for slider*/
if ( ! function_exists( 'kiddies_is_select_cat_slider' ) ) :

    /**
     * Check if slider section form page/post is active.
     *
     * @since 1.0.0
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     */
    function kiddies_is_select_cat_slider( $control ) {

        if ($control->manager->get_setting('kiddies_options[select_slider_from]')->value() === 'from-category') {
            return true;
        } else {
            return false;
        }

    }

endif;



if (!function_exists('kiddies_is_related_posts_enabled')) :
    /**
     * Check if related Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_related_posts_enabled($control)
    {
        if ($control->manager->get_setting('kiddies_options[show_related_posts]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_is_author_posts_enabled')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_is_author_posts_enabled($control)
    {
        if ($control->manager->get_setting('kiddies_options[show_author_posts]')->value() === true) {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_archive_poost_meta_1')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_archive_poost_meta_1($control)
    {
        if ($control->manager->get_setting('kiddies_options[archive_style]')->value() === 'archive_style_1') {
            return true;
        } else {
            return false;
        }
    }
endif;

if (!function_exists('kiddies_archive_poost_meta_2')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_archive_poost_meta_2($control)
    {
        if ($control->manager->get_setting('kiddies_options[archive_style]')->value() === 'archive_style_2') {
            return true;
        } else {
            return false;
        }
    }
endif;


if (!function_exists('kiddies_archive_poost_meta_3')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_archive_poost_meta_3($control)
    {
        if ($control->manager->get_setting('kiddies_options[archive_style]')->value() === 'archive_style_3') {
            return true;
        } else {
            return false;
        }
    }
endif;


if (!function_exists('kiddies_archive_poost_meta_4')) :
    /**
     * Check if author Posts is active.
     *
     * @param WP_Customize_Control $control WP_Customize_Control instance.
     *
     * @return bool Whether the control is active to the current preview.
     * @since 1.0.0
     *
     */
    function kiddies_archive_poost_meta_4($control)
    {
        if ($control->manager->get_setting('kiddies_options[archive_style]')->value() === 'archive_style_4') {
            return true;
        } else {
            return false;
        }
    }
endif;