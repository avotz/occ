<?php

// soporte para woocommerce del template
function woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');


//quitamos el sidebar de woocomerce
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//quitamos el related products
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

//quitamos los tabs
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

//quitamos titulo de summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

//quitamos precio de summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);




