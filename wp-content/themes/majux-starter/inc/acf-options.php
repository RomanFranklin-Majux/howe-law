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

	// Practice Areas
	acf_add_options_page(array(
		'page_title' 	=> 'Global Sections',
		'menu_title'	=> 'Global Sections',
		'menu_slug' 	=> 'global_sections',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '22.2',
		'icon_url' 		=> 'dashicons-hammer',
	));
}




add_filter('acf/location/rule_values/page_type', 'acf_location_rule_values_type');

function acf_location_rule_values_type( $choices ) {

	$attorneys_page = get_field('attorneys_archive_page', 'option');

	// Return default choices if attorneys Page is not defined
	if (empty($attorneys_page)) return $choices;

	// Add attorneys Page option to location values
	$newChoices = 	array_slice($choices, 0, 2, true) +
	            	array('attorneys_page' => 'Attorneys Page') +
	            	array_slice($choices, 2, NULL, true);	

    return $newChoices;
}



add_filter('acf/location/rule_match/page_type', 'acf_location_rule_match_page_type', 10, 4);
function acf_location_rule_match_page_type( $match, $rule, $options, $field_group )
{
    $post_id = $options['post_id'];

    if ($rule['value'] != 'attorneys_page') return $match;

    if ($rule['operator'] == "==") {
    	$match = false;
    	if ( $post_id == get_field('attorneys_archive_page', 'option') ) : 
    		$match = true; 
    	endif;
    } elseif ($rule['operator'] == "!=") {
    	$match = false;
    	if ( $post_id != get_field('attorneys_archive_page', 'option') ) :
			$match = true;
		endif;
    }

    return $match;
}


?>