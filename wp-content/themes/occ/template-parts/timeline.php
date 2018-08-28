
 <?php rewind_posts(); ?>
        <?php query_posts('post_type=page&page_id=211'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title('<h2 class="block-title">', '</h2>'); ?>
                    <?php the_content(); ?>

                    <div class="timeline-mobile">
                      <?php  $items = rwmb_meta('rw_page_block');

                        foreach ($items as $index => $item) : ?>
                                
                                <div class="timeline-block timeline-block-<?= $index ?>">
                                    <?php echo $item; ?>
                                </div>
                            <?php endforeach; ?>
                    </div>
                

            <?php endwhile; ?>
            <!-- post navigation -->
            
        <?php endif; ?>


 