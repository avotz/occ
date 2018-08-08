<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package occ
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="title">
        <div class="title-wrapper">
          <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        	<?php get_template_part('template-parts/title-links'); ?>
        </div>
        
      </section>
	<?php $images = rwmb_meta('rw_page_banner', 'type=image&size=item-banner');

	if ($images) : ?>
					
			<section class="page-slider">
          			<div class="slider">
		
				<?php foreach ($images as $image) { ?>

					
					<div class="slider-item" style="background-image: url('<?php echo esc_url($image['url']) ?>');">
					   <?php if($image['caption']) : ?>
						<div class="caption">
							<?php echo $image['caption'] ?>
						</div>
						<?php endif; ?>
				    </div>
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
    <section class="page-block">
        <div class="inner2">
          <div class="entry-content">
				<?php
					the_content();

                $services = rwmb_meta('rw_page_block');

                foreach ($services as $index => $item) : ?>
                        
                        <div class="services-block services-block-<?= $index ?>">
                            <?php echo $item; ?>
                        </div>
                    <?php endforeach; 
			?>
			</div><!-- .entry-content -->
          </div>
      </section>
	

</article><!-- #post-<?php the_ID(); ?> -->
