<?php 
if( function_exists('acf_add_options_page') ) {

	// Site Options
	acf_add_options_page(array(
		'page_title' 	=> 'Site Options',
		'menu_title'	=> 'Site Options',
		'menu_slug' 	=> 'site_options',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '160',
		'icon_url' 		=> 'dashicons-hammer',
	));
	
	// Results Cards
	acf_add_options_page(array(
		'page_title' 	=> 'Results Cards',
		'menu_title'	=> 'Results Cards',
		'menu_slug' 	=> 'results-cards',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '20.1',
		'icon_url'		=> 'dashicons-images-alt2',
	));

	// Testimonials
	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '20.2',
		'icon_url' 		=> 'dashicons-format-quote',
	));

	// Practice Areas
	acf_add_options_page(array(
		'page_title' 	=> 'Practice Areas',
		'menu_title'	=> 'Practice Areas',
		'menu_slug' 	=> 'practice_areas',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '22',
		'icon_url' 		=> 'dashicons-hammer',
	));
}

?>