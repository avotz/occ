

        <?php rewind_posts(); ?>
        <?php query_posts('post_type=page&page_id=180'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title('<h2 class="block-title">', '</h2>'); ?>
                    <?php the_content(); ?>
                

            <?php endwhile; ?>
            <!-- post navigation -->
            
        <?php endif; ?>


        <?php
        $args = array(
            'post_type' => 'team',
            'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'posts_per_page' => 3,
            

        );


        $items = new WP_Query($args);

        if ($items->have_posts()) {
            ?>
              <div class="team-container flex-container-sa">
              <?php while ($items->have_posts()) {
                    $items->the_post();

                    ?>
                   
                     <div class="team-item">
                        <?php if (has_post_thumbnail()) :

                            $id = get_post_thumbnail_id($post->ID);
                        $thumb_url = wp_get_attachment_image_src($id, 'large', true);

                        ?>
                                
                            <div class="team-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div>
                                
                                    
                                
                            <?php endif; ?>
                        <div class="team-item-info">
                            <h3> <?php the_title() ?></h3>
                             <?php the_excerpt() ?>
                             <a href="#team-popup-<?php echo $post->ID ?>" class="team-popup-link btn-success">Read More</a>
                              <div id="team-popup-<?php echo $post->ID ?>" class="request-popup white-popup mfp-hide mfp-with-anim">
                                  <div class="team-popup-container popup-container flex-container-sb">
                                       <div class="team-popup-img">
                                        <?php if (has_post_thumbnail()) :

                                                $id = get_post_thumbnail_id($post->ID);
                                            $thumb_url = wp_get_attachment_image_src($id, 'large', true);

                                            ?>
                                            
                                    <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="<?php the_title() ?>">
                                            
                                                
                                            
                                        <?php endif; ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="OCC ">
                                    </div>
                                  <div class="team-popup-info">
                                      <h2><?php the_title() ?></h2>
                                        <?php the_content() ?>
                                  </div>

                                  </div>
                                 
                                
                                    
                                
                            </div>
                        </div>
                        
                    </div>
                   
                   
                    
                                
                                <?php

                            } ?>
                </div>
                
           


                  <?php 
                }


                ?>

