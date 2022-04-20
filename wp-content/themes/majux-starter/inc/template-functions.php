<?php

	// Disable support for comments and trackbacks in post types
	function df_disable_comments_post_types_support() {
		$post_types = get_post_types();
		foreach ($post_types as $post_type) {
			if(post_type_supports($post_type, 'comments')) {
				remove_post_type_support($post_type, 'comments');
				remove_post_type_support($post_type, 'trackbacks');
			}
		}
	}
	add_action('admin_init', 'df_disable_comments_post_types_support');
	// Close comments on the front-end
	function df_disable_comments_status() {
		return false;
	}
	add_filter('comments_open', 'df_disable_comments_status', 20, 2);
	add_filter('pings_open', 'df_disable_comments_status', 20, 2);
	// Hide existing comments
	function df_disable_comments_hide_existing_comments($comments) {
		$comments = array();
		return $comments;
	}
	add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);
	// Remove comments page in menu
	function df_disable_comments_admin_menu() {
		remove_menu_page('edit-comments.php');
	}
	add_action('admin_menu', 'df_disable_comments_admin_menu');
	// Redirect any user trying to access comments page
	function df_disable_comments_admin_menu_redirect() {
		global $pagenow;
		if ($pagenow === 'edit-comments.php') {
			wp_redirect(admin_url()); exit;
		}
	}
	add_action('admin_init', 'df_disable_comments_admin_menu_redirect');
	// Remove comments metabox from dashboard
	function df_disable_comments_dashboard() {
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	}
	add_action('admin_init', 'df_disable_comments_dashboard');
	// Remove comments links from admin bar
	function df_disable_comments_admin_bar() {
		if (is_admin_bar_showing()) {
			remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
		}
	}
	add_action('init', 'df_disable_comments_admin_bar');




	function menuFallback() {
		echo '<a href="' . site_url() . '/wp-admin/nav-menus.php?action=edit&menu=0">Add Menu</a>';
	}




function youTubeEmbed($videoURL) {
	$yt_string = '~(?#!js YouTubeId Rev:20160125_1800)
	        # Match non-linked youtube URL in the wild. (Rev:20130823)
	        https?://          # Required scheme. Either http or https.
	        (?:[0-9A-Z-]+\.)?  # Optional subdomain.
	        (?:                # Group host alternatives.
	          youtu\.be/       # Either youtu.be,
	        | youtube          # or youtube.com or
	          (?:-nocookie)?   # youtube-nocookie.com
	          \.com            # followed by
	          \S*?             # Allow anything up to VIDEO_ID,
	          [^\w\s-]         # but char before ID is non-ID char.
	        )                  # End host alternatives.
	        ([\w-]{11})        # $1: VIDEO_ID is exactly 11 chars.
	        (?=[^\w-]|$)       # Assert next char is non-ID or EOS.
	        (?!                # Assert URL is not pre-linked.
	          [?=&+%\w.-]*     # Allow URL (query) remainder.
	          (?:              # Group pre-linked alternatives.
	            [\'"][^<>]*>   # Either inside a start tag,
	          | </a>           # or inside <a> element text contents.
	          )                # End recognized pre-linked alts.
	        )                  # End negative lookahead assertion.
	        [?=&+%\w.-]*       # Consume any URL (query) remainder.
	        ~ix';
	$check 	= preg_match( $yt_string, $videoURL);
	$url 	= preg_replace($yt_string, 'http://www.youtube.com/embed/$1',
	        $videoURL);

	if ($check) :
		$video = '<iframe src="' . $url . '" frameborder="0" allowfullscreen autoplay="0"></iframe>';
	else :
		$video = '<video controls><source src="' . $url . '"></video>';
	endif;

	return $video;
}

	?>