
<?php

/**
 * Custom Specs
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;
?>
<section class="property-specs">
    <div class="property-specs-container">
        <h2>Specs</h2>
    </div>
    <hr>
    <?php
    $images = rwmb_meta('rw_specs_image', array( 'size' => 'large' ) );
    foreach ( $images as $image ) { ?>
        <div class="property-specs-img" style="background-image: url('<?php echo $image['url'] ?>');"></div>
    <?php
     } 
    ?>

    
    <div class="property-specs-info">
    <div class="property-specs-info-container">
        <div class="property-specs-info-item">
            <h6>Features</h6>
            <div class="property-specs-info-item-body">
               <?php echo rwmb_meta('rw_features') ?>
            </div>
        </div>
        <div class="property-specs-info-item">
            <h6>Specifications</h6>
            <div class="property-specs-info-item-body">
                 <?php echo rwmb_meta('rw_specifications') ?>
               
            </div>
        </div>
         <?php if(rwmb_meta('rw_options')) : ?>
        <div class="property-specs-info-item">
            <h6>Options</h6>
            <div class="property-specs-info-item-body">
                <?php echo rwmb_meta('rw_options') ?>
            </div>
        </div>
        <?php endif; ?>
        <!-- <div class="property-specs-info-item">
            <h6>Price</h6>
            <div class="property-specs-info-item-body">
                <h6>From:</h6>
                <span class="property-specs-info-item-price">
                    <?php /*
                    $currency = get_woocommerce_currency_symbol();

                    echo $currency;

                    if (get_post_meta(get_the_ID(), '_wc_display_cost', true))
                        echo get_post_meta(get_the_ID(), '_wc_display_cost', true);
                    else
                        echo get_post_meta(get_the_ID(), '_wc_booking_cost', true)
*/
                    ?>    

                </span>
            </div>
        </div> -->
    </div>
    </div>
</section>