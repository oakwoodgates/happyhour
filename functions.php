<?php
/**
 * happyhour functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package happyhour
 */

if ( ! function_exists( 'happyhour_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function happyhour_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on happyhour, use a find and replace
	 * to change 'happyhour' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'happyhour', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'happyhour' ),
		'footer'  => esc_html__( 'Footer Menu', 'happyhour' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'happyhour_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // happyhour_setup
add_action( 'after_setup_theme', 'happyhour_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function happyhour_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'happyhour_content_width', 1200 );
}
add_action( 'after_setup_theme', 'happyhour_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function happyhour_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'happyhour' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'happyhour' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'happyhour_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function happyhour_scripts() {
	$query_args = array(
		'family' => 'Anton:400|Lato:400,100,300,300italic,400italic,700,700italic,900,100italic',
		'subset' => 'latin,latin-ext,cyrillic',
	);
	wp_enqueue_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	// CDN ftw
	wp_enqueue_style( 'happyhour-fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_script( 'happyhour-facebook', '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4' );
	if ( is_okc() ) {
		$site = 'okc';
	} else {
		$site = 'tulsa';
	}
	wp_enqueue_style( 'happyhour-bootstrap', get_template_directory_uri() . '/assets/css/style-' . $site . '.css' );

//	wp_enqueue_style( 'happyhour-style', get_stylesheet_uri() );

//	wp_enqueue_script( 'happyhour-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

//	wp_enqueue_script( 'happyhour-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
//	wp_enqueue_script( 'happyhour-holder', '//cdnjs.cloudflare.com/ajax/libs/holder/2.8.1/holder.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'happyhour-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyA_wjmyCYdfeRV-17SNsa6SEJvhB8lN-Lk&sensor=false', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'happyhour-js', get_template_directory_uri() . '/assets/js/bootstrap-' . $site . '.min.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'happyhour_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Launch the Hybrid Core framework. */
require_once( trailingslashit( get_template_directory() ) . 'hybrid-core/hybrid.php' );
new Hybrid();

/* Just load the stuff for now until we finalize it */
require get_template_directory() . '/oakwood-happyhour/hybrid/template.php';
require get_template_directory() . '/oakwood-happyhour/hybrid/attr.php';

require get_template_directory() . '/oakwood-happyhour/extras/cpt.php';
// require get_template_directory() . '/oakwood-happyhour/extras/cmb2_post_search_field.php';
// require get_template_directory() . '/oakwood-happyhour/extras/google_data_markup.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/attached-posts.php';

require get_template_directory() . '/oakwood-happyhour/cmb2-options/settings.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/settings-boobtube.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/settings-kitchen.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/settings-permanent.php';
// require get_template_directory() . '/oakwood-happyhour/cmb2-options/settings-location.php';

require get_template_directory() . '/oakwood-happyhour/cmb2-options/metaboxes-events.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/metaboxes-promos.php';
require get_template_directory() . '/oakwood-happyhour/cmb2-options/metaboxes-venue.php';

remove_filter( 'the_excerpt', 'wpautop' );

// remove modern tribe json markup and use our own, for now
add_filter( 'tribe_google_data_markup_json', 'oak_tribe_remove_json', $data );
function oak_tribe_remove_json( $data ){
	$data = '';
	return $data;
}
