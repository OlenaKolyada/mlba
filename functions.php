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
	define( '_S_VERSION', '1.0.1' );
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
    wp_enqueue_style( 'mlba-module', get_template_directory_uri() . '/assets/css/module.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-header', get_template_directory_uri() . '/assets/css/header.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-footer', get_template_directory_uri() . '/assets/css/footer.css', array(), _S_VERSION );
    wp_enqueue_style( 'mlba-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'mlba-page', get_template_directory_uri() . '/assets/css/page.css', array(), _S_VERSION );
	wp_enqueue_style( 'mlba-form', get_template_directory_uri() . '/assets/css/form.css', array(), _S_VERSION );

	wp_enqueue_script( 'mlba-jquery-3.7.1.min', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-swiper-bundle.min', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-magnific-popup.min', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'mlba-form-handler', get_template_directory_uri() . '/assets/js/form-handler.js', array(), _S_VERSION, true );
	
	if ( is_front_page() ) {
    	wp_enqueue_script( 'mlba-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
	}

    if (is_page('inscription')) {
        wp_enqueue_script('mlba-inscription', get_template_directory_uri() . '/assets/js/form.js', array('jquery'), '1.0', true);
    }


//
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
}
add_action( 'wp_enqueue_scripts', 'mlba_scripts' );

// Переменные для AJAX
function localize_script() {
    wp_localize_script('mlba-form-handler', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'main_page_nonce' => wp_create_nonce('main_page_form_nonce'),
        'admission_page_nonce' => wp_create_nonce('admission_page_form_nonce'),
        'admission_section_nonce' => wp_create_nonce('admission_section_form_nonce'),
        'contact_nonce' => wp_create_nonce('contact_form_nonce'),
        'inscription_nonce' => wp_create_nonce('inscription_form_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'localize_script');

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

// Main Page Form
add_action('wp_ajax_main_page_form', 'handle_main_page_form');
add_action('wp_ajax_nopriv_main_page_form', 'handle_main_page_form');

function handle_main_page_form() {

    if (!wp_verify_nonce($_POST['main_page_nonce'], 'main_page_form_nonce')) {
        wp_die('Erreur de sécurité');
    }

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $dance_class = sanitize_text_field($_POST['dance-class']);
    $dance_classes = array(
        'enfants_classique' => 'Enfants-Ado Classique',
        'enfants_contemporain' => 'Ado Contemporain',
        'adultes_classique' => 'Adultes Classique',
        'adultes_contemporain' => 'Adultes Contemporain'
    );

    $dance_class_name = isset($dance_classes[$dance_class]) ? $dance_classes[$dance_class] : $dance_class;
    $comment = sanitize_textarea_field($_POST['comment']);

    $to = get_option('admin_email');
    $subject = 'Demande cours d\'essai';

    $message = "
    <div style='font-family: Arial, sans-serif; max-width: 600px;'>
        <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Demande cours d'essai</h3>
        <p><strong>Prénom:</strong> $first_name</p>
        <p><strong>Nom:</strong> $last_name</p>
        <p><strong>Téléphone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Cours choisi:</strong> $dance_class_name</p>
        <p><strong>Commentaire:</strong><br>$comment</p>
    </div>
    ";

    $headers = array(
        'From: MLBA.fr <contact@mlba.fr>',
        'Content-Type: text/html; charset=UTF-8'
    );

    $mail_sent = wp_mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        wp_die('success');
    } else {
        wp_die('error');
    }
}

// Admission Page Form
add_action('wp_ajax_admission_page_form', 'handle_admission_page_form');
add_action('wp_ajax_nopriv_admission_page_form', 'handle_admission_page_form');

function handle_admission_page_form() {
    if (!wp_verify_nonce($_POST['admission_page_nonce'], 'admission_page_form_nonce')) {
        wp_die('Erreur de sécurité');
    }

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $comment = sanitize_textarea_field($_POST['comment']);

    $to = get_option('admin_email');
    $subject = 'Demande d\'admission';

    $message = "
    <div style='font-family: Arial, sans-serif; max-width: 600px;'>
        <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Demande d'admission</h3>
        <p><strong>Prénom:</strong> $first_name</p>
        <p><strong>Nom:</strong> $last_name</p>
        <p><strong>Téléphone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Commentaire:</strong><br>$comment</p>
    </div>
    ";

    $headers = array(
        'From: MLBA.fr <contact@mlba.fr>',
        'Content-Type: text/html; charset=UTF-8'
    );

    $mail_sent = wp_mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        wp_die('success');
    } else {
        wp_die('error');
    }
}

// Admission Section Form
add_action('wp_ajax_admission_section_form', 'handle_admission_section_form');
add_action('wp_ajax_nopriv_admission_section_form', 'handle_admission_section_form');

function handle_admission_section_form() {
    if (!wp_verify_nonce($_POST['admission_section_nonce'], 'admission_section_form_nonce')) {
        wp_die('Erreur de sécurité');
    }

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $comment = sanitize_textarea_field($_POST['comment']);

    $to = get_option('admin_email');
    $subject = 'Demande d\'admission';

    $message = "
    <div style='font-family: Arial, sans-serif; max-width: 600px;'>
        <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Demande d'admission</h3>
        <p><strong>Prénom:</strong> $first_name</p>
        <p><strong>Nom:</strong> $last_name</p>
        <p><strong>Téléphone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Commentaire:</strong><br>$comment</p>
    </div>
    ";

    $headers = array(
        'From: MLBA.fr <contact@mlba.fr>',
        'Content-Type: text/html; charset=UTF-8'
    );

    $mail_sent = wp_mail($to, $subject, $message, $headers);

    if ($mail_sent) {
        wp_die('success');
    } else {
        wp_die('error');
    }
}

// Contact Page Form
add_action('wp_ajax_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_contact_form', 'handle_contact_form');

function handle_contact_form() {
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Erreur de sécurité');
    }

    $first_name = sanitize_text_field($_POST['first_name']);
    $last_name = sanitize_text_field($_POST['last_name']);
    $phone = sanitize_text_field($_POST['phone']);
    $email = sanitize_email($_POST['email']);
    $comment = sanitize_textarea_field($_POST['comment']);

    $to = get_option('admin_email');
    $subject = 'Nouveau message Contact';
    $message = "
    <div style='font-family: Arial, sans-serif; max-width: 600px;'>
        <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Message de contact</h3>
        <p><strong>Prénom:</strong> $first_name</p>
        <p><strong>Nom:</strong> $last_name</p>
        <p><strong>Téléphone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$comment</p>
    </div>
    ";

    $headers = array(
        'From: MLBA.fr <contact@mlba.fr>',
        'Content-Type: text/html; charset=UTF-8'
    );

    wp_mail($to, $subject, $message, $headers);

    wp_die('success');
}

// Inscription Form
add_action('wp_ajax_inscription_form', 'handle_inscription_form');
add_action('wp_ajax_nopriv_inscription_form', 'handle_inscription_form');

function handle_inscription_form() {
   if (!wp_verify_nonce($_POST['inscription_nonce'], 'inscription_form_nonce')) {
       wp_die('Erreur de sécurité');
   }

   if (!isset($_POST['consent']) || $_POST['consent'] !== 'on') {
       wp_die('Consent required');
   }

   $first_name = sanitize_text_field($_POST['first_name']);
   $last_name = sanitize_text_field($_POST['last_name']);
   $phone = sanitize_text_field($_POST['phone']);
   $email = sanitize_email($_POST['email']);

   $message = "
   <div style='font-family: Arial, sans-serif; max-width: 600px;'>
       <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Demande d'inscription</h3>
       <p><strong>Prénom:</strong> $first_name</p>
       <p><strong>Nom:</strong> $last_name</p>
       <p><strong>Téléphone:</strong> $phone</p>
       <p><strong>Email:</strong> $email</p>";

   $participant_count = 1;
   while (true) {
       $first_key = 'first_name_participant_' . $participant_count;
       $last_key = 'last_name_participant_' . $participant_count;
       $age_key = 'participant_age_' . $participant_count;

       if (!isset($_POST[$first_key]) || empty($_POST[$first_key])) break;

       $participant_first = sanitize_text_field($_POST[$first_key]);
       $participant_last = sanitize_text_field($_POST[$last_key]);
       $participant_age = sanitize_text_field($_POST[$age_key]);

       $message .= "
       <h3 style='color: #333; border-top: 2px solid #00CCBD; border-bottom: 2px solid #00CCBD; padding: 10px 0; font-size: 18px;'>Information d'élève №$participant_count</h3>
       <p><strong>Prénom:</strong> $participant_first</p>
       <p><strong>Nom:</strong> $participant_last</p>
       <p><strong>Âge:</strong> $participant_age</p>";

       $schedule_key = 'schedule_' . $participant_count;
       $schedules = isset($_POST[$schedule_key]) ? $_POST[$schedule_key] : [];
       if (!empty($schedules)) {
           $message .= "<p><strong>Créneaux choisis:</strong><br>";
           foreach ($schedules as $slot) {
               $message .= "- " . sanitize_text_field($slot) . "<br>";
           }
           $message .= "</p>";
       }

       $participant_count++;
   }

   $message .= "</div>";

   $headers = array(
       'From: MLBA.fr <contact@mlba.fr>',
       'Content-Type: text/html; charset=UTF-8'
   );

   $to = get_option('admin_email');
   $subject = 'Demande d\'inscription';

   wp_mail($to, $subject, $message, $headers);
   wp_die('success');
}