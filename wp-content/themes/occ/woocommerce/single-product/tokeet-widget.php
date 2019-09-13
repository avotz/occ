
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
        <p>Check the availability in the calendar below and book by clicking on this button</p>

        <a href="#inquiry-popup" class="btn-success inquiry-popup-link" data-title="<?php the_title() ?>">Inquiry</a>



            <?php if(rwmb_meta('rw_tokeet_widget')) : ?>

                <iframe src="<?php echo rwmb_meta('rw_tokeet_widget') ?>" class="w-full h-screen" frameborder="0" height="900"></iframe>
            <?php endif; ?>

    </div>
    
   
   
    
</section>