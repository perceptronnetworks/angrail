<?php
/**
 * angrail custom theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package angrail_custom_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
 
if ( ! function_exists( 'angrail_custom_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function angrail_custom_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on angrail custom theme, use a find and replace
		 * to change 'angrail-custom-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'angrail-custom-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'angrail-custom-theme' ),
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
				'angrail_custom_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'angrail_custom_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function angrail_custom_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'angrail_custom_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'angrail_custom_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function angrail_custom_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'angrail-custom-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'angrail-custom-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'angrail_custom_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function angrail_custom_theme_scripts() {
	wp_enqueue_style( 'angrail-custom-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'angrail-custom-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'angrail-custom-theme-accorsions', get_template_directory_uri() . '/js/jquery.backtotop.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'angrail-bootstrapmin', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'angrail-plugin-custom', get_template_directory_uri() . '/js/jquery.mobilemenu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'angrail-plugin-custom', get_template_directory_uri() . '/js/jquery.script.js', array(), _S_VERSION, true );
	wp_register_style(
		'angrail-font-awesome',
		get_theme_file_uri( '/resources/assets/src/css/font-awesome.css' ),
		false,
		_S_VERSION
	);
	wp_enqueue_style( 'angrail-font-awesome' );

	
	wp_register_style(
		'angrail-bootstrap',
		get_theme_file_uri( '/resources/assets/src/css/bootstrap.min.css' ),
		false,
		_S_VERSION
	);
	wp_enqueue_style( 'angrail-bootstrap' );

	
	wp_register_style(
		'angrail-stylecss',
		get_theme_file_uri( '/resources/assets/src/css/style.css' ),
		false,
		_S_VERSION
	);
	wp_enqueue_style( 'angrail-stylecss' );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'angrail_custom_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
 
add_filter( 'nav_menu_link_attributes', 'menu_add_class', 10, 4 );

function menu_add_class( $atts, $item, $args ) {
	if( $args->theme_location == 'footer' ) {
    $class = 'drop'; // or something based on $item
    $atts['class'] = $class;
    
	}
	return $atts;
}
function is_register_my_menus() {
register_nav_menus(
array(
  'mobile' => __( 'Mobile Menu' ) ,
  'footer' => __( 'Footer Menu' )  
)
);
}
add_action( 'init', 'is_register_my_menus' ); 

if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}