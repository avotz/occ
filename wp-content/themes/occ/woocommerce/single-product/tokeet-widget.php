
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
        <h2>Reservation</h2>
    </div>
    <hr>
    <div class="property-specs-info-container">
        <!-- <div style="width:900px; width:100%!important;"
            data-website-id="c32770b4-7b3e-4ee7-a70b-6792e166751e"
            data-tokeet-widget="booking"
            data-booking-domain="https://occ.trustbookers.com"
            data-account-id="1547323561.4938"
            data-rental-id="b114865a-2444-4a9b-8a0c-2eac85d428bf"
            data-orientation="horizontal"
            data-style-widget-background="#F8F8F8"
            data-style-button-bg="#00bcd3"
            data-style-button-color="#FFF"
            data-style-label-color="#00bcd3"
            data-style-label-size="14"
            data-date-format="DD-MM-YYYY"
            data-style-blocked-dates-bg="#b63e3e"
            data-style-selected-dates-bg="#299082"
            data-style-selected-dates-color="#FFF"
            data-booking-widget-css=".booking-widget { font-family: Arial }
            .label.required:after{ color: #FABC3C; }"
            class="booking-widget"></div>
            <script data-tokeet-widget-loader="booking" async
            src="https://s3.amazonaws.com/widgets.tokeet.com/widgets/booking/widget-loader.js"></script> -->

            <?php if(rwmb_meta('rw_tokeet_widget')) : ?>

                <iframe src="<?php echo rwmb_meta('rw_tokeet_widget') ?>" class="w-full h-screen" frameborder="0"></iframe>
            <?php endif; ?>

    </div>
    
  
   
    
    
</section>