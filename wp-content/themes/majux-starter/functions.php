<?php

if ( ! defined( 'MAJUX_VERSION' ) ) {
  define( 'MAJUX_VERSION', '0.0.32' );
}

function majux_theme_setup() {
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  // Title tag
  add_theme_support( 'title-tag' );

  // Featured Image
  add_theme_support( 'post-thumbnails' );

  // Custom Logo
  add_theme_support( 'custom-logo' );

  add_theme_support( 'widgets' );
  add_theme_support( 'widgets-block-editor' );

  // Menus
  register_nav_menus(
    array(
      'main-menu'       => 'Main Menu',
      'sidebar-menu-1'  => 'Sidebar Menu',
      'footer-menu'     => 'Footer Menu'
    )
  );
}

add_action('after_setup_theme', 'majux_theme_setup');


/**
 * Add stylesheet to the page
 */
function majux_enqueue_styles() {
  /* CSS
  ---------------------------- */

  // Boostrap CSS
  wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');

  // Swiper CSS
  wp_enqueue_style( 'swiper-css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );

  // Font Awesome
  // wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css');

  // Main fonts
  wp_enqueue_style('majux-fonts', 'https://use.typekit.net/nwz0uxm.css');

  // Style
  if ( defined( 'WP_ENV' ) && WP_ENV === 'dev') :
    include('inc/enqueue/development.php');
  else :
    include('inc/enqueue/production.php');
  endif;



  /* JS
  ---------------------------- */

  // Swiper JS
  wp_register_script( 'swiper-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js' );

  // Main JS
  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), MAJUX_VERSION, true);

  // Swiper Inits
  // wp_register_script('swiper-inits', get_template_directory_uri() . '/assets/js/swipers.js', array(), MAJUX_VERSION, true);
  
  wp_enqueue_script('jquery'); 
  wp_enqueue_script('swiper-js');
  wp_enqueue_script('main-js'); 
  wp_enqueue_script('swiper-inits');

}
add_action( 'wp_enqueue_scripts', 'majux_enqueue_styles', 20 );


/**
 * Add stylesheet to admin
 */
function majux_add_admin_stylesheet() {
  wp_enqueue_style( 'admin-styles', get_stylesheet_directory_uri() . '/assets/css/admin/admin-styles.css', array(), MAJUX_VERSION );
}
add_action( 'admin_enqueue_scripts', 'majux_add_admin_stylesheet', 20 );




/**
 * Widgets
 */
include get_template_directory() . '/inc/widgets.php';

/**
 * Template Tags
 */
include get_template_directory() . '/inc/template-tags.php';

/**
 * Template Functions
 */
include get_template_directory() . '/inc/template-functions.php';

/**
 * Custom Post Types
 */
include get_template_directory() . '/inc/custom-post-types.php';

/**
 * ACF Options Pages
 */
if (class_exists('ACF')) :
  include get_template_directory() . '/inc/acf-options.php';
endif;

?>