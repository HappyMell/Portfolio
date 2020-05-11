<?php
/**
 * Theme functions and definitions
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {
 	// Add default posts and comments RSS feed links to head.
 	add_theme_support( 'automatic-feed-links' );

 	/*
 	 * Let WordPress manage the document title.
 	 * By adding theme support, we declare that this theme does not use a
 	 * hard-coded <title> tag in the document head, and expect WordPress to
 	 * provide it for us.
 	 */
 	add_theme_support( 'title-tag' );

 	/*
 	 * Enable support for Post Thumbnails on posts and pages.
 	 *
 	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 	 */
 	add_theme_support( 'post-thumbnails' );

  // Enable custom menus
  // =======================
  add_theme_support( 'menus' );
  

  
 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
    // Example
 		//'header-main-menu' => esc_html__( 'Main Menu', 'ben-theme' ),
 	) );

 	/*
 	 * Switch default core markup for search form, comment form, and comments
 	 * to output valid HTML5.
 	 */
 	add_theme_support( 'html5', array(
 		'search-form',
 		'comment-form',
 		'comment-list',
 		'gallery',
 		'caption',
 	) );

 	// Add theme support for selective refresh for widgets.
 	add_theme_support( 'customize-selective-refresh-widgets' );
 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
   // Example with external URL
   // wp_enqueue_style( 'flickityCSS', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
   // Example with internal file
   wp_enqueue_style( 'bootstrapCSS', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
   wp_enqueue_style( 'font-awesomeCSS', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css' );
   wp_enqueue_style( 'flickityCSS', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.min.css' );
   wp_enqueue_style( 'slickCSS', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css' );
   wp_enqueue_style( 'resumeCSS', get_template_directory_uri() . '/css/resume.min.css' );
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/css/style.min.css' );




 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
   // Example with external URL
   wp_enqueue_script( 'flickityjs', get_template_directory_uri() . '/node_modules/flickity/dist/flickity.pkgd.min.js', array('jquery'), '', true);
   wp_enqueue_script( 'flickityLazyjs', get_template_directory_uri() . '/node_modules/flickity-bg-lazyload/bg-lazyload.js', array('jquery'), '', true);


   wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js', array('jquery'), '', true);


   wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array('jquery'), '', true);

   wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js', true);
   wp_enqueue_script( 'bootstrapJS', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true);
   wp_enqueue_script( 'resumeJS', get_template_directory_uri() . '/js/resume.min.js', array('jquery'), '', true);
   wp_enqueue_script( 'mainsjs', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true);
   wp_enqueue_script( 'carousalJS', get_template_directory_uri() . '/js/carousel.js', array('jquery'), '', true);

	wp_enqueue_script( 'scrollReveal', 'https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js', false );


 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';


/**
 * Register Blocks
 */
require get_template_directory() . '/inc/register-blocks.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
* Where to edit login page and dashboard logo
*/
require get_template_directory() . '/inc/theme-appearance.php';


//Options Page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Header Settings'),
            'menu_title'    => __('Header Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

 // Remove the default gutenberg block
  // https://rudrastyh.com/gutenberg/remove-default-blocks.html

  add_filter('allowed_block_types', 'stretchline_allowed_block_types');

  function stretchline_allowed_block_types($allowed_blocks)
  {

     return array(

		'acf/heading',
		'acf/experience',
		'acf/skills',
		'acf/examples',
		'acf/education',
		'acf/interests'
        
     );
  }


  /**
 * Add Theme Support for wide and full-width images.
 *
 * Add this to your theme's functions.php, or wherever else 
 * you are adding your add_theme_support() functions.
 * 
 * @action after_setup_theme
 */
function jr3_theme_setup() {
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'jr3_theme_setup' );
