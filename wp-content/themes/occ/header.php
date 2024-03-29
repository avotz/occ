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
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/icons/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="theme-color" content="#ffffff">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/brands.js" integrity="sha384-G/XjSSGjG98ANkPn82CYar6ZFqo7iCeZwVZIbNWhAmvCF2l+9b5S21K4udM7TGNu" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
	<script>
		FontAwesomeConfig = {
			searchPseudoElements: true
		};
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
				<a href="http://occ-consultores.com/safety-cleaning-protocols/" class="owner-link covid-link"><img src="<?php echo get_template_directory_uri(); ?>/img/covid.png" alt="OCC" width="30" height="30" style="vertical-align: middle;"> <span class="text">Covid-19</span></a>
				<a href="https://www.rentalsbyocc.com/owner-login" class="owner-link" target="_blank"><i class="fas fa-user"></i> <span class="text">Owner´s Portal</span></a>
				<a href="#contact-popup" class="owner-link contact-link contact-popup-link" data-title="Contact Us"><i class="fas fa-phone"></i> <span class="text">Contact Us</span> </a>
				<div class="header-btn-menu">
					<button id="btn-menu" class="nav-btn-menu">
						<i class="fas fa-bars open"></i>
						<i class="fas fa-times close"></i>
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