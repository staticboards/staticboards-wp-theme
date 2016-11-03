<?php

function staticboards_woocommerce_short_description() {
	  the_excerpt();
}

function staticboards_woocommerce_template_loop_product_title_begin () {
	echo '<div class="product-title-wrapper woocommerce">';
}

function staticboards_woocommerce_template_loop_product_title_end () {
	echo '</div">';
}

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 ) ;

//add_action   ( 'woocommerce_shop_loop_item_title', 	'staticboards_woocommerce_template_loop_product_title_begin', 		1 );
//add_action   ( 'woocommerce_shop_loop_item_title', 	'staticboards_woocommerce_template_loop_product_title_end', 		99 );
//add_action( 'woocommerce_after_shop_loop_item_title', 'staticboards_woocommerce_short_description', 15 );

//remove_action ( 'woocommerce_before_shop_loop' , 'woocommerce_result_count',20);
//remove_action ( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering',30);
//add_action ( 'woocommerce_before_shop_loop' , 'woocommerce_result_count' , 30 );
//add_action ( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering' , 20 );

//remove_action ( 'woocommerce_after_shop_loop_item_title' , 'woocommerce_template_loop_rating' , 5 ) ;

//add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_before_shop_loop_item_title', 	'woocommerce_show_product_loop_sale_flash', 		10 );
remove_action( 'woocommerce_before_main_content', 	'woocommerce_breadcrumb', 					20, 0 );

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}


?>
