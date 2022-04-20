<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="main" class="d-flex align-items-center">
	<div class="container-fluid ">
		<div class="row py-3 px-5 align-items-center justify-content-between">
			<div class="logo p-0 me-3">
				<a href="<?php echo site_url(); ?>" class="d-block">
					<?php echo the_custom_logo(); ?>
				</a>
			</div>	

			<div class="callout w-auto d-flex align-items-center">
				<div class="left">
					Call today for a<br /> <strong>free</strong> consultation
				</div>
				<div class="right">
					<span class="number"><?php echo phoneNumber(); ?></span><br />
					<span class="schedule">24 Hours a Day/7 Days a Week</span>
				</div>
			</div>

			<div class="d-flex align-items-center d-lg-none mobile-menu-button w-auto ms-auto">
				<div class="hamburger"></div>
			</div>		
		</div>	

		<div class="row navigation-main-menu pe-5 d-none d-lg-flex justify-content-end align-items-center">
			<?php wp_nav_menu( array(
		        'theme_location' 	=> 'main-menu',
		        'menu_id'        	=> 'primary-menu',
		        'container'			=> false,
		        'menu_class'      	=> 'list-style-none nav-links d-flex align-items-center justify-content-end',
		        'fallback_cb'		=> 'menuFallback'
		      ) ); ?>	
	     </div>			

		<div class="row d-md-none px-3">
			<div class="col d-flex flex-column px-0">
				<a href="tel:<?php echo phoneNumber(); ?>" class="btn btn-primary">Call Us <?php echo phoneNumber(); ?></a>
				<a href="sms:<?php echo phoneNumber('phone_number_2'); ?>" class="btn btn-secondary">Text Us Now</a>
			</div>
		</div>

		<div class="espanol-button">
			<span>Se Habla Espa&ntilde;ol</span>
		</div>		
	</div>	
</header>


<div class="mobile-menu-wrapper">
	<?php wp_nav_menu( array(
	    'theme_location' 	=> 'mainmenu',
	    'menu_id'        	=> 'mobile-menu',
	    'menu_class'      	=> 'list-style-none nav-links d-flex flex-column align-items-start',
	    'container'       	=> 'div',
	    'container_class' 	=> 'navigation-mobile-menu d-lg-none',
		'fallback_cb'		=> 'menuFallback'
	  ) ); ?>		
	  <div class="close-menu-button">Close</div>
</div>
<div class="page-overlay"></div>

