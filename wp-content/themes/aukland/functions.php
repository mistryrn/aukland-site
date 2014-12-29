<?php
/**
 * Aukland functions and definitions
 *
 * @package Aukland
 */

/**
 * Lets start off by cleaning up the output of wp_head()
 */
 // Remove the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links_extra', 3 );
// Remove the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'feed_links', 2 );
// Remove the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'rsd_link' );
// Remove the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'wlwmanifest_link' );
// Remove index link
remove_action( 'wp_head', 'index_rel_link' );
// Remove prev link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
// Remove start link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
// Remove relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
// Remove the XHTML generator that is generated on the wp_head hook, WP version
remove_action( 'wp_head', 'wp_generator' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'aukland_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aukland_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Aukland, use a find and replace
	 * to change 'aukland' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'aukland', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'aukland' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aukland_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // aukland_setup
add_action( 'after_setup_theme', 'aukland_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function aukland_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'aukland' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'ContactSidebar', 'aukland' ),
		'id'            => 'contact-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'aukland_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aukland_scripts() {
	wp_enqueue_style( 'aukland-style', get_stylesheet_uri() );

	/* Add Foundation CSS */
	wp_enqueue_style( 'foundation-normalize', get_stylesheet_directory_uri() . '/foundation/css/normalize.css' );
	wp_enqueue_style( 'foundation-icons', get_stylesheet_directory_uri() . '/foundation-icons.css' );
	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/foundation/css/foundation.css' );
	
	/* Add Custom CSS */
	wp_enqueue_style( 'aukland-custom-style', get_stylesheet_directory_uri() . '/custom.css', array(), '1' );

	/* Add Foundation JS */
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-modernizr-js', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array( 'jquery' ), '1', true );

    /* Foundation Init JS */
    wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

    /* Viewport Units Buggyfill JS */
    wp_enqueue_script( 'viewport-units-buggyfill-js', get_template_directory_uri() . '/viewport-units-buggyfill.js', array( 'jquery' ), '1', true );

	/* Menu Toggle JS */
	wp_enqueue_script( 'menu-toggle-js', get_template_directory_uri() . '/menuToggle.js', array( 'jquery' ), '1', true );

	/* Menu Scroll JS */
	wp_enqueue_script( 'menu-scroll-js', get_template_directory_uri() . '/menuScroll.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'aukland-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'aukland-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aukland_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

// Add SoundCloud oEmbed
function add_oembed_soundcloud(){
	wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}
add_action('init','add_oembed_soundcloud');

function register_cpt_album() {

    $labels = array( 
        'name' => _x( 'Albums', 'album' ),
        'singular_name' => _x( 'Album', 'album' ),
        'add_new' => _x( 'Add New', 'album' ),
        'add_new_item' => _x( 'Add New Album', 'album' ),
        'edit_item' => _x( 'Edit Album', 'album' ),
        'new_item' => _x( 'New Album', 'album' ),
        'view_item' => _x( 'View Album', 'album' ),
        'search_items' => _x( 'Search Albums', 'album' ),
        'not_found' => _x( 'No albums found', 'album' ),
        'not_found_in_trash' => _x( 'No albums found in Trash', 'album' ),
        'parent_item_colon' => _x( 'Parent Album:', 'album' ),
        'menu_name' => _x( 'Albums', 'album' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Albums and Singles released by Aukland',
        'supports' => array( 'title', 'custom-fields' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array("slug" => "albums"), // permalink structure
        'capability_type' => 'post'
    );

    register_post_type( 'album', $args );
}

add_action( 'init', 'register_cpt_album' );

function register_cpt_video() {

    $labels = array( 
        'name' => _x( 'Videos', 'video' ),
        'singular_name' => _x( 'Video', 'video' ),
        'add_new' => _x( 'Add New', 'video' ),
        'add_new_item' => _x( 'Add New Video', 'video' ),
        'edit_item' => _x( 'Edit Video', 'video' ),
        'new_item' => _x( 'New Video', 'video' ),
        'view_item' => _x( 'View Video', 'video' ),
        'search_items' => _x( 'Search Videos', 'video' ),
        'not_found' => _x( 'No videos found', 'video' ),
        'not_found_in_trash' => _x( 'No videos found in Trash', 'video' ),
        'parent_item_colon' => _x( 'Parent Video:', 'video' ),
        'menu_name' => _x( 'Videos', 'video' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Music videos released by Aukland',
        'supports' => array( 'title', 'custom-fields' ),
        
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array("slug" => "videos"), // permalink structure
        'capability_type' => 'post'
    );

    register_post_type( 'video', $args );
}

add_action( 'init', 'register_cpt_video' );

// Content limit
function content($limit) {
  $content = apply_filters('the_content', get_the_content()); 
  $content = str_replace(']]>', ']]&gt;', $content);
  $content = explode(' ', $content, $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  return $content;
}