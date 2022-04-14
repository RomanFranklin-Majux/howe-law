<?php 

wp_enqueue_style( 'main-styles',      get_template_directory_uri() . '/assets/css/dist/all.min.css', array(), MAJUX_VERSION );
wp_enqueue_style( 'custom-styles',    get_stylesheet_uri(),                                          array(), MAJUX_VERSION );