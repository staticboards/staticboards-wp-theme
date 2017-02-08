<?php

require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/structure.php';

if ( is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// disable the shop
//remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
//remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
?>
