<?php 

wp_enqueue_style( 'base-styles', 		get_template_directory_uri() . '/assets/css/dev/base.css', 		array(), MAJUX_VERSION );
wp_enqueue_style( 'header-styles', 		get_template_directory_uri() . '/assets/css/dev/header.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'nav-styles', 		get_template_directory_uri() . '/assets/css/dev/nav.css', 		array(), MAJUX_VERSION );
wp_enqueue_style( 'sidebar-styles', 	get_template_directory_uri() . '/assets/css/dev/sidebar.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'masthead-styles', 	get_template_directory_uri() . '/assets/css/dev/masthead.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'footer-styles', 		get_template_directory_uri() . '/assets/css/dev/footer.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'section-styles', 	get_template_directory_uri() . '/assets/css/dev/sections.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'pages-styles', 		get_template_directory_uri() . '/assets/css/dev/pages.css', 	array(), MAJUX_VERSION );
wp_enqueue_style( 'custom-styles', 		get_stylesheet_uri(), 											array(), MAJUX_VERSION );
