<?php
// Add post type 'Attorney'
function al_attorney_post_type() {
	$slug = 'attorney';
	if ( class_exists( 'ACF' ) ) :
		$archiveID = get_field('attorney_archive_page', 'option');
		if ($archiveID) :
			$slug = get_post_field( 'post_name', $archiveID);
		endif;
	endif;


	register_post_type('attorney',
		array(
			'labels' 			=> array(
										'name'          => __('Attorneys'),
										'singular_name' => __('Attorney'),
										'add_new'		=> __('Add Attorney'),
										'add_new_item'	=> __('Add New Attorney'),
										'edit_item'		=> __('Edit Attorney'),
										'new_item'		=> __('New Attorney'),
										'view_item'		=> __('View Attorney'),
										'all_items'		=> __('All Attorneys')
									),
			'description' 		=> __('attorney'),
			'public'      		=> true,
			'show_in_nav_menus' => true,
			'has_archive' 		=> false,
			'hierarchical'		=> true,
			'rewrite'			=> array( 'slug' => $slug ),
			'menu_position'     => 20.3,
			'menu_icon'			=> 'dashicons-admin-users',
			'supports'			=> array( 'title', 'editor', 'thumbnail', 'page-attributes' )
		)
	);
};

add_action('init', 'al_attorney_post_type');



/*
 * Add post state to Attorney archive page
  */
add_filter( 'display_post_states', 'al_add_post_state', 10, 2 );

function al_add_post_state( $post_states, $post ) {

	$staff_page = get_post_field( 'post_name', get_field('attorney_archive_page', 'option'));

	if( $post->post_name == $staff_page ) {
		$post_states[] = 'Attorney Page';
	}

	return $post_states;
}


/**
 * Meta boxes
 */
include('custom-meta-boxes.php');