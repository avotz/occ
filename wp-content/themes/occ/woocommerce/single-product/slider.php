
<?php

/**
 * Custom Stats
 *
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();

if ( $attachment_ids && has_post_thumbnail() ) :  ?>

    	<section class="property-slider">
          <div class="slider">
<?php

    foreach ( $attachment_ids as $attachment_id ) :

        $item_banner = wp_get_attachment_image_src($attachment_id, 'item-banner');
        ?>

                
                <div class="slider-item" style="background-image: url('<?php echo esc_url($item_banner[0]) ?>');"></div>
                
         
<?php
   endforeach ?>
            </div>
          
      </section>
<?php endif  ?>