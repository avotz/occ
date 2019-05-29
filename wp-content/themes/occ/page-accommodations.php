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
 * Template Name: Page Accommodations 
 * @package occ
 */

get_header();
?>

	<div class="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );


		endwhile; // End of the loop.
		?>
		<hr>
        <?php get_template_part('template-parts/testimonials', 'accommodations'); ?>
	
	</div><!-- #main -->

<?php
//get_sidebar();
get_footer();
