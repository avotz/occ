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
 *
 * @package occ
 */

get_header();
?>

<div class="main">

      <div class="banner">

           <div class="banner-slider">
               
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner1.jpg')">
                        <h2 class="animated fadeIn">breathe the luxury</h2>
                     </div>
                   
                     <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner4.jpg')">
                      <h2 class="animated fadeIn">RELAX & ENJOY</h2>
                    </div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner3.jpg')"><h2 class="animated fadeIn">WE WILL TAKE CARE OF THE REST</h2></div>
                    <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner5.jpg')">
                      <!-- <h2 class="animated fadeIn">TOP QUALITY MANAGEMENT</h2> -->
                    </div>
                     <div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banner2.jpg')">
                      <h2 class="animated fadeIn">TOP QUALITY MANAGEMENT</h2>
                    </div>
                   
                   
                 
            </div>
          <div class="banner-container">
             <!-- <div class="banner-img"></div> -->
             
            <div class="banner-info">
             
              
              <div class="banner-links">
                  <!-- <a href="#" class="btn-dark">About Us</a>
                  <a href="./properties.html" class="btn-dark">Our Properties</a>
                  <a href="#" class="btn-dark">Get a quote</a>
                  <a href="#" class="btn-dark">Other</a> -->
                  <?php
                  wp_nav_menu(array(
                    'theme_location' => 'home-menu',
                    'menu_id' => 'home-menu',
                    'container' => 'nav',
                    'container_class' => 'home-menu',
                    'container_id' => '',
                    'menu_class' => 'home-menu-ul',
                  ));
                  ?>
              </div>
           
            </div>
            
          </div> 
          
      </div>

     
   </div>

<?php

get_footer();
