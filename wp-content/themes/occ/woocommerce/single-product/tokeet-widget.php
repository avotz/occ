
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

               <?php echo rwmb_meta('rw_tokeet_widget') ?>
               
            <?php endif; ?>

    </div>

    <div id="inquiry-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <div class="popup-container">
          
           <h2> Inquiry </h2>
            <?php echo do_shortcode('[contact-form-7 id="788" title="Inquiry Property"]'); ?> 
         </div>
         
              
        
    </div>
    
   
   
    
</section>