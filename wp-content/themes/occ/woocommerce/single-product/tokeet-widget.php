
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

        <a href="#inquiry-popup" class="btn-success contact-popup-link" data-title="<?php the_title() ?>">Inquiry</a>



            <?php if(rwmb_meta('rw_tokeet_widget')) : ?>

                <iframe src="<?php echo rwmb_meta('rw_tokeet_widget') ?>" class="w-full h-screen" frameborder="0" height="500"></iframe>
            <?php endif; ?>

    </div>
    
   
    <div id="inquiry-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
         <div class="popup-container">
          <?php rewind_posts(); ?>
              <?php query_posts('post_type=page&page_id=786'); ?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                     <?php 
                        the_title('<h2 class="contact-title">', '</h2>'); 
                        the_content(); 
                     ?>
                 
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  
              <?php endif; ?>
           <!-- <h2> Get a Quote </h2>
            <?php /*echo do_shortcode('[contact-form-7 id="20" title="Contact form"]');*/ ?> -->
         </div>
         
              
        
    </div>
    
</section>