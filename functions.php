<?php
/**
 * Utah functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Utah
 */

if ( ! function_exists( 'utah_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function utah_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Utah, use a find and replace
		 * to change 'utah' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'utah', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'utah' ),
			'menu-2' => esc_html__( 'Footer', 'utah' ),
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
		add_theme_support( 'custom-background', apply_filters( 'utah_custom_background_args', array(
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
add_action( 'after_setup_theme', 'utah_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function utah_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'utah_content_width', 640 );
}
add_action( 'after_setup_theme', 'utah_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function utah_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'utah' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'utah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Left', 'utah' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'utah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Center', 'utah' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'utah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Right', 'utah' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'utah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Bottom Centar', 'utah' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'utah' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'utah_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function utah_scripts() {
	wp_enqueue_style( 'utah-style', get_stylesheet_uri() );

	wp_enqueue_script( 'utah-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'utah-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'utah_scripts' );

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

/**
 * Implement Title 
 */
function titleTag() {
	add_theme_support( 'title_tag' );
}
add_action ('title', 'titleTag');

/**
 * Implement Logo 
 */
function logo_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'logo', 'logo_setup' );

/**
* Excerpt
*/
function new_excerpt_more($more) {
	global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo; </a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
* TGM
*/
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mytheme_require_plugins' );

function mytheme_require_plugins() {
 
    $plugins = array (
    	array (
    		'name' => 'CustomPostTypeUI',
    		'slug' => 'custom-post-type-ui',
    		'require' => true,
    		'source' => get_template_directory() . '/TGM-Plugin-Activation-2.6.1/plugins/custom-post-type-ui.zip',
    		'force_activation' => true
    	),
    	array (
    		'name' => 'AdvanceCustomFields',
    		'slug' => 'advanced-custom-fields',
    		'require' => true,
    		'source' => get_template_directory() . '/TGM-Plugin-Activation-2.6.1/plugins/advanced-custom-fields.zip',
    		'force_activation' => true
    	),
    	array (
    		'name' => 'ContactForm7',
    		'slug' => 'contact-form-7',
    		'require' => true,
    		'source' => get_template_directory() . '/TGM-Plugin-Activation-2.6.1/plugins/contact-form-7.5.0.1.zip',
    		'force_activation' => true
    	),
    	array (
    		'name' => 'YoastSEO',
    		'slug' => 'wordpress-seo',
    		'require' => true,
    		'source' => get_template_directory() . '/TGM-Plugin-Activation-2.6.1/plugins/wordpress-seo.7.4.2.zip',
    		'force_activation' => true
    	)
    );
    $config = array (
    	'id'           => 'localhost', // your unique TGMPA ID
	    'default_path' => '', // default absolute path
	    'menu'         => 'Primary', // menu slug
	    'has_notices'  => true, // Show admin notices
	    'dismissable'  => false, // the notices are NOT dismissable
	    'dismiss_msg'  => 'Plese, install all necessary plugin! Thanks.', // this message will be output at top of nag
	    'is_automatic' => true, // automatically activate plugins after installation
	    'message'      => 'Welcome to Utah. ', // message to output right before the plugins table
	    'strings'      => array () // The array of message strings that TGM Plugin Activation uses
    );
 
    tgmpa( $plugins, $config );
 
}