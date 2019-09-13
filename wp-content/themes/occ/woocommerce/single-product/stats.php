<?php

/**
 * Custom Stats
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

?>
<span><strong><?php echo $product->get_attribute('bedrooms'); ?> </strong> BEDROOMS </span>
<span><strong><?php echo $product->get_attribute('guests'); ?></strong> GUESTS </span>
<span><strong><?php echo $product->get_attribute('location'); ?></strong> </span>
<!-- <span>STARTING AT <strong>
    <?php 
    /*$currency = get_woocommerce_currency_symbol();

    echo $currency;

    if (get_post_meta(get_the_ID(), '_wc_display_cost', true))
        echo get_post_meta(get_the_ID(), '_wc_display_cost', true);
    else
        echo get_post_meta(get_the_ID(), '_wc_booking_cost', true)
*/
    ?>
</strong></span> -->
<?php if($product->get_attribute('minimum-stay')): ?>
    <span class="minimum-stay">MINIMUM STAY: <strong><?php echo $product->get_attribute('minimum-stay'); ?></strong> NIGHTS</span>
<?php endif; ?>