<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package occ
 */

?>


	<section class="title">
        <div class="title-wrapper">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        	<?php get_template_part('template-parts/title-links'); ?>
        </div>
        
      </section>
   

        <!-- <div class="page-intro">
            <h1>Welcome</h1>
            <h2>Lorem ipsum dolor sit amet consectetur</h2>
        </div> -->
	<?php $images = rwmb_meta('rw_page_banner', 'type=image&size=item-banner');

    if ($images) : ?>
                        
                <section class="page-slider">
                        <div class="slider">
            
                    <?php foreach ($images as $image) { ?>

        
                        <div class="slider-item" style="background-image: url('<?php echo esc_url($image['url']) ?>');"></div>
                    <?php 
    } ?>
                    </div>
                </section>
        <?php else : ?>

            <?php if (has_post_thumbnail()) :

            $id = get_post_thumbnail_id($post->ID);
        $thumb_url = wp_get_attachment_image_src($id, 'item-banner', true);

        ?>
                        <section class="page-slider">
                            <div class="slider">
                                <div class="slider-item" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div>
                        
                            </div>
                        
                        </section>
                        
                <?php endif; ?>

                    
                        
            <?php endif; ?>
        
        
        <?php /*occ_post_thumbnail();*/ ?>
        <section class="about-content">
            <div class="inner">
                <div class="entry-content">
                    <?php
                    the_content();


                    ?>
                </div><!-- .entry-content -->
                 
            </div>
        </section>
        
       
	
    
