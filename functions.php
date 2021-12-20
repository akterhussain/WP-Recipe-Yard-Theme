<?php
/**
 * Recipe Yard functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Recipe_Yard
 */

if ( ! function_exists( 'recipe_yard_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function recipe_yard_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Recipe Yard, use a find and replace
		 * to change 'recipe-yard' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'recipe-yard', get_template_directory() . '/languages' );

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


		add_image_size( 'my_post_image', 510, 270, true);


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary-1', 'recipe-yard' ),
			'menu-2' => esc_html__( 'Primary-2', 'recipe-yard' ),
			'menu-3' => esc_html__( 'Primary-3', 'recipe-yard' ),
			'menu-4' => esc_html__( 'Primary-4', 'recipe-yard' ),
			'fmenu-1' => esc_html__( 'Footer-1', 'recipe-yard' ),
			'fmenu-2' => esc_html__( 'Footer-2', 'recipe-yard' ),
			'footer-m' => esc_html__( 'Footer-Button', 'recipe-yard' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'recipe_yard_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'recipe_yard_setup' );


//Popular Post
function count_post_visits() {
	if( is_single() ) {
		global $post;
		$views = get_post_meta( $post->ID, 'my_post_viewed', true );
		if( $views == '' ) {
			update_post_meta( $post->ID, 'my_post_viewed', '1' );	
		} else {
			$views_no = intval( $views );
			update_post_meta( $post->ID, 'my_post_viewed', ++$views_no );
		}
	}
}
add_action( 'wp_head', 'count_post_visits' );



// Custom excerpt function
function custom_excerpt_length( $length ) {
        return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


 function custom_excerpt_more( $more ) {
    return '';//you can change this to whatever you want
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );







/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function recipe_yard_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'recipe_yard_content_width', 640 );
}
add_action( 'after_setup_theme', 'recipe_yard_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function recipe_yard_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'recipe-yard' ),
		'id'            => 'right_sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'recipe-yard' ),
		'before_widget' => '<div id="%1$s" class="right-widget-content %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="right-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'recipe_yard_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function recipe_yard_scripts() {

	wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '1.0.0', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min_v4.1.3.css', array(), '4.1.3', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome_v5.5.0/css/all.min.css', array(), '5.5.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min_v3.7.0.css', array(), '3.7.0', 'all');
	wp_enqueue_style('bootstrap3', 'http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '3.3.6', 'all');
	wp_enqueue_style('awesome.min4', 'http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0', 'all');
	wp_enqueue_style('ken-burns', get_template_directory_uri() . '/assets/css/ken-burns.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fonts.googleapis', 'https://fonts.googleapis.com/css?family=Roboto:300', array(), '1.0.0', 'all');
	wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
	wp_enqueue_style( 'recipe-yard-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrapcdn', 'http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array('jquery'), '3.6.0', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min_v4.1.3.js', array('jquery'), '4.1.3', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'recipe_yard_scripts' );

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

