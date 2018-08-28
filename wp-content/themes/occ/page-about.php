<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Page About 
 * @package occ
 */

get_header();
?>

	<div class="main">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php
			while (have_posts()) :
				the_post(); ?>

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
					
					
				<div class="about-block">
					<div class="property-specs-info-container">
						
						<?php
							the_content(); ?>
						
						
					</div>
				</div>


			<?php 
			 endwhile; // End of the loop.
			?>
			<hr>
			<div class="about-block timeline">
				<div class="inner">
					
						<?php get_template_part('template-parts/timeline'); ?>
				
				</div>
			</div>
			<hr>
			 <div class="about-block">
				<div class="inner">
					
						<?php get_template_part('template-parts/foundation-team'); ?>
				
				</div>
			</div>
			<hr>
			<div class="about-block">
				<div class="property-specs-info-container">
				
						<?php get_template_part('template-parts/administrative-staff'); ?>
				
					
				</div>
			</div>
			<hr>
			<div class="about-block">
				<div class="property-specs-info-container">
				
						<?php get_template_part('template-parts/about-solutions'); ?>
				
					
				</div>
			</div>
			<hr>
			<div class="about-block">
				<div class="inner">
				
						<?php get_template_part('template-parts/about-management'); ?>
				
					
				</div>
			</div>
			<hr>
			<div class="about-block">
				<div class="inner">
				
						<?php get_template_part('template-parts/about-contact'); ?>
				
					
				</div>
			</div>

			
			
		</article>	

			
	</div><!-- #main -->

<?php
//get_sidebar();
get_footer();
