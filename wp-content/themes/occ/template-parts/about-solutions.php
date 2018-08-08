
<!-- <h2 class="block-title">It is not only about <span class="who">who we are</span>,<br> but who do we find <span class="sol">solutions</span> for?</h2> -->
<h2 class="block-title">Management at its Best</h2>

 <?php
$args = array(
    'post_type' => 'solution',
    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
    'posts_per_page' => 10,


);


$items = new WP_Query($args);

if ($items->have_posts()) {
    ?>
              <div class="solutions-container flex-container-sb">
              <?php while ($items->have_posts()) {
                    $items->the_post();

                    ?>
                   
                     <div class="solutions-item">
                        <?php if (has_post_thumbnail()) :

                            $id = get_post_thumbnail_id($post->ID);
                            $thumb_url = wp_get_attachment_image_src($id, 'team-thumb', true);

                        ?>
                            <div class="solutions-img-icon">

                                <div class="solutions-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div>
                            </div>
                                
                                    
                                
                            <?php endif; ?>
                        <div class="solutions-item-info">
                            <h3> <?php the_title() ?></h3>
                             <?php the_excerpt() ?>
                        </div>
                        
                    </div>
                   
                   
                    
                                
                                <?php

                            } ?>
                </div>
        
           


                  <?php 
                }


                ?>