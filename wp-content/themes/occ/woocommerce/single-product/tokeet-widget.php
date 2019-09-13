
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
        <p>Check the availability in the calendar below and book by clicking on this button &nbsp; &nbsp; &nbsp;<a href="#inquiry-popup" class="btn-success inquiry-popup-link" data-title="<?php the_title() ?>">Inquiry</a></p>

        



            <?php if(rwmb_meta('rw_tokeet_widget')) : ?>

            <a class="tokeet-calendar-widget" href="https://www.tokeet.com"
            data-calendar-endpoint="https://calendars.tokeet.com"
            data-rental-id="<?php echo rwmb_meta('rw_tokeet_widget') ?>"
            data-rental-account="1547323561.4938"
            data-calendar-months="3"
            data-available-color="#ffffff"
            data-unavailable-color="#69aebc"
            data-font-family="Arial"
            data-font-size="14px"
            data-sunday-first="true">Tokeet Calendar</a>
            <script src="https://widgets.tokeet.com/bcalendar_setup.min.js"></script>

               <?php /*echo rwmb_meta('rw_tokeet_widget')*/ ?>

            <?php endif; ?>

    </div>

    <div id="inquiry-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <div class="popup-container">
          
           <h2> Inquiry </h2>
            <?php echo do_shortcode('[contact-form-7 id="788" title="Inquiry Property"]'); ?> 
         </div>
         
              
        
    </div>
    
   
   
    
</section>