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
		'position' 		=> '21',
		'icon_url'		=> 'dashicons-images-alt2',
	));

	// Testimonials
	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials',
		'capability'	=> 'activate_plugins',
		'redirect'		=> false,
		'position' 		=> '21.2',
		'icon_url' 		=> 'dashicons-format-quote',
	));

	// Global Sections
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
	            	array(
	            		'attorneys_page' => 'Attorneys Page', 
	            		'practice_areas' => 'Practice Areas Page', 
	            		'single_practice_area' => 'Single Practice Area Page'
	            		) +
	            	array_slice($choices, 2, NULL, true);	

    return $newChoices;
}



add_filter('acf/location/rule_match/page_type', 'acf_location_rule_match_page_type', 10, 4);
function acf_location_rule_match_page_type( $match, $rule, $options, $field_group )
{
    $post_id = $options['post_id'];

	switch($rule['value']) :
		case 'attorneys_page' : 
			$match = false;
		    if ($rule['operator'] == "==") {
		    	if ( $post_id == get_field('attorneys_archive_page', 'option') ) : 
		    		$match = true; 
		    	endif;
		    } elseif ($rule['operator'] == "!=") {
		    	if ( $post_id != get_field('attorneys_archive_page', 'option') ) :
					$match = true;
				endif;
		    }		
		break;
		case 'practice_areas' : 
			$match = false;
		    if ($rule['operator'] == "==") {
		    	if ( $post_id == get_field('practice_areas_parent', 'option') ) : 
		    		$match = true; 
		    	endif;
		    } elseif ($rule['operator'] == "!=") {
		    	if ( $post_id != get_field('practice_areas_parent', 'option') ) :
					$match = true;
				endif;
		    }			
		break;
		case 'single_practice_area' : 
			$match = false;
			$post_id = wp_get_post_parent_id($post_id);
			print_r($post_id);
		    if ($rule['operator'] == "==") {
		    	if ( $post_id == get_field('practice_areas_parent', 'option') ) : 
		    		$match = true; 
		    	endif;
		    } elseif ($rule['operator'] == "!=") {
		    	if ( $post_id != get_field('practice_areas_parent', 'option') ) :
					$match = true;
				endif;
		    }		
		break;
	endswitch;

	return $match;
}






?>