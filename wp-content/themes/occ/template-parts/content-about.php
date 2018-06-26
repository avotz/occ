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
    <div class="inner">

        <div class="page-intro">
            <h1>Welcome</h1>
            <h2>Lorem ipsum dolor sit amet consectetur</h2>
        </div>
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
            <div class="about-content-container flex-container-sb">
                <div class="entry-content">
                    <?php
                    the_content();


                    ?>
                </div><!-- .entry-content -->
                 <div class="side-content">
                   <div class="side-content-item">
                       <h2>Lorem ipsum dolor</h2>
                       <p>sit, amet consectetur adipisicing elit.sit, amet consectetur adipisicing elit. </p>
                   </div>
                   <div class="side-content-item">
                       <h2>Lorem ipsum dolor</h2>
                       <p>sit, amet consectetur adipisicing elit.sit, amet consectetur adipisicing elit. </p>
                   </div>
                </div><!-- .entry-content -->
            </div>
        </section>
        <section class="about-contact">
            <div class="about-contact-container flex-container-sb">
                <div class="about-contact-content">
                    999 999 9999<br>
                    HELLO@OCC.COM<br>
                    OCC.COM
                    <br> <br>
                    Lorem ipsum dolor<br>
                    dolor<br>
                    Lorem dolor<br>

                    <div class="social">
                        <h2>Connect</h2>
                        <div class="social-items">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-google-plus"></i></a>
                        </div>
                    </div>
                </div><!-- .entry-content -->
                 <div class="about-contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" frameborder="0"></iframe>
                </div><!-- .entry-content -->
            </div>
        </section>
	
    
    </div>
    

</article><!-- #post-<?php the_ID(); ?> -->
