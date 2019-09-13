
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
<?php if(rwmb_meta('rw_property_map')) : ?>
<section class="property-specs">
    <div class="property-specs-container">
        <h2>Neighborhood</h2>
    </div>
    <hr>
    <div class="property-specs-info-container">
      
        <iframe style="border: 0;" src="<?php echo rwmb_meta('rw_property_map') ?>" width="800" height="600" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
        
    </div>

   
    
</section>
<?php endif; ?>