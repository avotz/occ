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
			    ?>

                <div class="concierge-container flex-container-sb">
                 <?php
                $args = array(
                    'post_type' => 'concierge-service',
                    'orderby' => array('menu_order' => 'ASC', 'title' => 'ASC'),
                    'posts_per_page' => 10,


                );


                $items = new WP_Query($args);
               
                if ($items->have_posts()) {

                    while ($items->have_posts()) {
                        $items->the_post();

                        ?>
                    <div class="container-card">
                        <div class="card concierge-item">
                        
                        <div class="front"> 
                            <?php if (has_post_thumbnail()) :

                                $id = get_post_thumbnail_id($post->ID);
                            $thumb_url = wp_get_attachment_image_src($id, 'item-thumb', true);

                            ?>
                                
                                <div class="concierge-item-img" style="background-image: url('<?php echo esc_url($thumb_url[0]) ?>');"></div> 
                                <img src="<?php echo esc_url($thumb_url[0]) ?>" alt="Concierge <?php the_title() ?>">
                                    
                                
                            <?php endif; ?>
                            <p class="caption"><?php the_title() ?></p>
                        </div> 
                        <div class="back">
                            <div class="content">
                                  <div>
                                    <h3><?php the_title() ?></h3>
                                    <?php the_content() ?>
                                </div>
                            </div> 
                        </div> 
                    
                     </div>
                    </div>
                     
                    
                                
                                <?php
                               
                            }

                        }


                        ?>

                </div><!-- .concierge-conteiner -->

			</div><!-- .entry-content -->
          </div>
      </section>
	

</article><!-- #post-<?php the_ID(); ?> -->
