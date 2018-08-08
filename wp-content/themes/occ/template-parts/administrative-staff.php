 <?php rewind_posts(); ?>
        <?php query_posts('post_type=page&page_id=187'); ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_title('<h2 class="block-title">', '</h2>'); ?>
                    <?php the_content(); ?>
                

            <?php endwhile; ?>
            <!-- post navigation -->
            
        <?php endif; ?>

        <?php $images = rwmb_meta('rw_page_banner', 'type=image&size=item-banner');

        if ($images) : ?>
									
					<section class="page-slider administrative-slider">
							<div class="slider">
				
						<?php foreach ($images as $image) { ?>

			
							<div class="slider-item" style="background-image: url('<?php echo esc_url($image['url']) ?>');"></div>
						<?php 
    } ?>
						</div>
					</section>
			<?php endif ?>