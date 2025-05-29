<?php
/**
 * mlba functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mlba
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mlba_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on mlba, use a find and replace
		* to change 'mlba' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mlba', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Menu Header', 'mlba' ),
            'menu-footer-1' => esc_html__( 'Menu Footer 1', 'mlba' ),
            'menu-footer-2' => esc_html__( 'Menu Footer 2', 'mlba' ),
            'menu-footer-3' => esc_html__( 'Menu Footer 3', 'mlba' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mlba_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mlba_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mlba_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mlba_content_width', 640 );
}
add_action( 'after_setup_theme', 'mlba_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mlba_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mlba' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mlba' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mlba_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mlba_scripts() {
	wp_enqueue_style( 'mlba-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'mlba-swiper-bundle.min', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-magnific-popup.min', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-magnific-popup-effects', get_template_directory_uri() . '/assets/css/magnific-popup-effects.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-global', get_template_directory_uri() . '/assets/css/global.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-layout', get_template_directory_uri() . '/assets/css/layout.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-header', get_template_directory_uri() . '/assets/css/header.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'mlba-page', get_template_directory_uri() . '/assets/css/page.css', array(), _S_VERSION );
	wp_enqueue_style( 'mlba-form', get_template_directory_uri() . '/assets/css/form.css', array(), _S_VERSION );

	wp_enqueue_script( 'mlba-jquery-3.7.1.min', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-swiper-bundle.min', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-magnific-popup.min', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );
	
	if ( is_front_page() ) {
    	wp_enqueue_script( 'mlba-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	}


//     if ( is_page('inscription') ) {
//         wp_enqueue_script('mlba-form-js', get_template_directory_uri() . '/assets/js/form.js', array('jquery'), _S_VERSION, true);
//     }
//
//     if ( is_page('enfants-classique') ) {
//         wp_enqueue_script('mlba-enfants-ado-classique-js', get_template_directory_uri() . '/assets/js/enfants-ado-classique.js', array('jquery'), _S_VERSION, true);
//     }
//
//     if ( is_page('section-pro') ) {
//         wp_enqueue_script('mlba-section-pro-js', get_template_directory_uri() . '/assets/js/section-pro.js', array('jquery'), _S_VERSION, true);
//     }
//
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
}
add_action( 'wp_enqueue_scripts', 'mlba_scripts' );

/**
 * Global Options
 */
require get_template_directory() . '/inc/mlba-options.php';

/**
 * Add class to menu links with children
 */
function add_menu_link_class($atts, $item, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $atts['class'] = 'open-submenu';
        $atts['onclick'] = 'return false;';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 10, 3);


