<?php

require get_template_directory() . '/inc/init.php';
require get_template_directory() . '/inc/structure.php';

if ( is_woocommerce_activated() ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


?>
