<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package occ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/brands.js" integrity="sha384-G/XjSSGjG98ANkPn82CYar6ZFqo7iCeZwVZIbNWhAmvCF2l+9b5S21K4udM7TGNu" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	
	<?php wp_head(); ?>
	<script>
		FontAwesomeConfig = { searchPseudoElements: true };
	</script>
</head>

<body <?php body_class(); ?>>

<header class="header">
          <div class="header-container ">
              
			  <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="OCC"></a>
			  <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo white"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="OCC"></a>
              <!-- <div class="header-links">
                  <a href="#" >Beach Front</a>
                  <a href="#" >Villas</a>
                  <a href="#" >Apartments</a>

                </div> -->
              <div class="header-right flex-container-sb">
				<a href="#" class="owner-link">Owner´s Portal</a>
				<a href="#contact-popup" class="owner-link contact-link">Contact Us</a>
                <div class="header-btn-menu">
                   <button id="btn-menu" class="nav-btn-menu">
					   <i class="fas fa-bars"></i>
                   </button>
                </div>
              </div>
              
          </div>
          
      </header>
      <div class="nav-container">
         <?php
			wp_nav_menu(array(
				'theme_location' => 'nav-menu',
				'menu_id' => 'nav-menu',
				'container' => 'nav',
				'container_class' => 'nav-menu',
				'container_id' => '',
				'menu_class' => 'nav-menu-ul',
			));
			?>
        
      </div>

