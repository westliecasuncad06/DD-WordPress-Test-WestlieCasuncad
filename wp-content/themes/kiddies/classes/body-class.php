<?php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kiddies_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
    $header_style = kiddies_get_option('header_style');
    $classes[] = ' kiddies-'.$header_style;
    // Get the color mode of the site.
    $enable_dark_mode = kiddies_get_option( 'enable_dark_mode' );
    if ( $enable_dark_mode ) {
        $classes[] = 'kiddies-dark-mode';
    } else {
        $classes[] = 'kiddies-light-mode';
    }

    if ( class_exists( 'WooCommerce' ) ) {
        // Check if the current page is related to WooCommerce
        if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_product() ) {
            if ( ! is_active_sidebar( 'shop-sidebar' ) ) {
                $classes[] = 'no-sidebar';
            } else {
                $page_layout = kiddies_get_page_layout();
                if('no-sidebar' != $page_layout ){
                    $classes[] = 'has-sidebar '.esc_attr($page_layout);
                }
            }
        }elseif(is_active_sidebar( 'sidebar-1' )  && !is_page_template( 'template-parts/front-page-template.php' )) {
            // Get appropriate class for the sidebar layout to work
            $page_layout = kiddies_get_page_layout();
            if('no-sidebar' != $page_layout ){
                $classes[] = 'has-sidebar '.esc_attr($page_layout);
            }else{
                $classes[] = esc_attr($page_layout);
            }
        }
    } else {
        if (is_active_sidebar( 'sidebar-1' )  && !is_page_template( 'template-parts/front-page-template.php' )) {
            // Get appropriate class for the sidebar layout to work
            $page_layout = kiddies_get_page_layout();
            if('no-sidebar' != $page_layout ){
                $classes[] = 'has-sidebar '.esc_attr($page_layout);
            }else{
                $classes[] = esc_attr($page_layout);
            }
        }
    }

	return $classes;
}
add_filter( 'body_class', 'kiddies_body_classes' );
