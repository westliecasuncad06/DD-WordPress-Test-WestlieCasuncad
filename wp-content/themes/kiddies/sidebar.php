<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kiddies
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
if ( class_exists( 'WooCommerce' ) ) {
    if ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() || is_product() ) {
        return;
    }
}

?>

<aside id="secondary" class="widget-area theme-sticky-component">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
