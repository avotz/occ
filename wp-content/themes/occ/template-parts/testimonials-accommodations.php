
      <?php
        $args = array(
            'post_type' => 'testimonial',
            'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'posts_per_page' => 10,
            'tax_query' => array(

                array(
                    'taxonomy' => 'section',
                    'field' => 'slug',
                    'terms' => 'accommodations',

                ),


            )

        );


        $items = new WP_Query($args);

        if ($items->have_posts()) {
            ?>
             <section class="testimonials">
                <div class="testimonials-slider">
              <?php while ($items->have_posts()) {
                $items->the_post();

                ?>
                   
               
                    <div class="slide">
                       
                        <div class="testimonials-content">
                            <?php the_content() ?>
                        </div>
                        <div class="author">
                            
                            <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                            $thumb_url = wp_get_attachment_image_src($id, 'avatar-thumb', true);

                            ?>
                                
                                        <div class="author-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div>
                                
                                    
                                
                            <?php endif; ?>
                           
                            <div class="author-name">
                                <strong><?php echo rwmb_meta('rw_author_name') ?></strong>
                                 <?php echo rwmb_meta('rw_author_company') ?>
                            </div>
                        </div>
                         
                    </div>
                    
                                
                                <?php

                            } ?>
                </div>
        
            </section>


                  <?php      }


                        ?>
  