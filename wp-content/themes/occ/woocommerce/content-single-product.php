<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
	<section class="title">
		<div class="title-wrapper">
			<?php woocommerce_get_template('single-product/title.php'); ?>
			<?php get_template_part('template-parts/title-links-properties'); ?>
		</div>
	
	</section>
	
	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
	 <section class="property-stats">
          <div class="property-stats-container">
             <?php woocommerce_get_template('single-product/stats.php'); ?>
          </div>
      </section>
      <section class="property-intro">
        <div class="inner2">
		   <?php woocommerce_get_template('single-product/tabs/description.php'); ?>
		   <?php if(rwmb_get_value( 'rw_other_video' )) : ?>
			<div class="txt-center">
				<a href="<?php echo rwmb_get_value( 'rw_other_video' ) ?>" class="btn-success video-link solution-media popup-video"><?php echo rwmb_meta( 'rw_other_video_desc' ) ? rwmb_meta( 'rw_other_video_desc' ) : 'Watch video' ?></a>
			</div>
			<?php endif; ?>
		  
		   
          </div>
      </section>

	<?php woocommerce_get_template('single-product/slider.php'); ?>

	<?php woocommerce_get_template('single-product/specs.php'); ?>
	<?php woocommerce_get_template('single-product/tokeet-widget.php'); ?>
	<?php woocommerce_get_template('single-product/map.php'); ?>
	 <div class="inner2">
		<div class="summary entry-summary">
			<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>	

	

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php get_template_part('template-parts/testimonials','properties'); ?>

<?php get_template_part('template-parts/other-properties'); ?>

<?php do_action( 'woocommerce_after_single_product' ); ?>
