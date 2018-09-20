<?php
/**
 * Leckertheme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Leckertheme
 */

if ( ! function_exists( 'leckertheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function leckertheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Leckertheme, use a find and replace
	 * to change 'leckertheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'leckertheme', get_template_directory() . '/languages' );

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

	if ( function_exists( 'add_image_size') ) add_theme_support( 'post-thumbnails');
	if( function_exists( 'add_image_size') ) {
		add_image_size( 'lecker_post-thumb', 200, 200, true);
		add_image_size( 'lecker_big-thumb', 640, 480, true );
		add_image_size( 'lecker_post_big', 900, 9999, true );
		add_image_size( 'lecker_extra_big', 1200, 9999, true );
	}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'leckertheme' ),
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
	add_theme_support( 'custom-background', apply_filters( 'leckertheme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'leckertheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function leckertheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leckertheme_content_width', 940 );
}
add_action( 'after_setup_theme', 'leckertheme_content_width', 0 );

/*
 * Excerpt length
 */
function leckertheme_excerpt_length($length) {
	return 13;
}
add_filter('excerpt_length', 'leckertheme_excerpt_length');



/*
* HTML in Title
*/


function leckertheme_modified_post_title ($title) {
if( $title == '' ){
  $title = esc_html__( 'Untitled', 'leckertheme' );
}
return $title;
}
add_filter( 'the_title', 'leckertheme_modified_post_title');

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
	'primary' => esc_html__( 'Primary', 'leckertheme' ),
) );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function leckertheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'leckertheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'leckertheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'leckertheme_widgets_init' );

/*
Register Fonts
*/
function lecker_studio_fonts_url() {
    $font_url = '';
    
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'leckertheme' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Bree Serif|Lato|Monoton' ), "http://fonts.googleapis.com/css" );
    }
    return $font_url;
}
/*
Enqueue scripts and styles.
*/
function lecker_studio_scripts() {
    wp_enqueue_style( 'lecker-studio-fonts', lecker_studio_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'lecker_studio_scripts' );


/**
 * Load CSS
 */
function lecker_theme_styles()  {  
	wp_enqueue_style( 'lecker-library', get_template_directory_uri() . '/css/lecker_library.css', array(), '1.0');
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/fonts/themify-icons.css', array());
	wp_enqueue_style( 'fontawesome-icons', get_template_directory_uri() . '/fonts/css/font-awesome.min.css', array());
	wp_enqueue_style( 'lecker_selima', get_template_directory_uri() . '/fonts/selima/stylesheet.css', array());
	wp_enqueue_style( 'lecker_introrust', get_template_directory_uri() . '/fonts/introrust/stylesheet.css', array());
	
  if ( class_exists( 'WooCommerce' ) ) {
		wp_enqueue_style( 'lecker-woo-commerce', get_template_directory_uri() . '/css/woocommerce.css', array());
	}
	
  wp_enqueue_style( 'lecker-main-styles', get_template_directory_uri() . '/css/lecker_style.css', array());
}
add_action( 'wp_enqueue_scripts', 'lecker_theme_styles' );


/**
 * Enqueue scripts and styles.
 */
function lecker_scripts() {
	wp_enqueue_style( 'lecker-style', get_stylesheet_uri() );
	wp_enqueue_script( 'lecker-library', get_template_directory_uri() . '/js/lecker_library.js', array('jquery'), '1.0', true );
	
	if( function_exists('fw_get_db_settings_option') && !is_admin() ) { 
		wp_enqueue_script( 'lecker-fw-form-helpers', fw_get_framework_directory_uri() . '/static/js/fw-form-helpers.js', array(), '2.4.4', true );
		 wp_localize_script('fw-form-helpers', 'fwAjaxUrl', admin_url( 'admin-ajax.php', 'relative' ));
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'lecker-main-scripts', get_template_directory_uri() . '/js/lecker_script.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'lecker_scripts' );

/**
 * Themify Icons
 */

require_once get_template_directory() .'/inc/icons.php';

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


/*TGM Plugin*/
require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'lecker_require_plugins' );
 
function lecker_require_plugins() {
    $dir = get_template_directory() . '/framework-customizations/plugins/';
    $plugins = array(     
          array(
            'name'      => esc_html__( 'Unyson', 'leckertheme' ),
            'slug'      => 'unyson',
            'required'  => true,
          ),
          array(
            'name'      => esc_html__( 'WP Editor', 'leckertheme' ),
            'slug'      => 'wp-editor',
            'required'  => true,
          ),
    );
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'leckertheme' ),
            'menu_title'                      => __( 'Install Plugins', 'leckertheme' ),
            'installing'                      => __( 'Installing Plugin: %s', 'leckertheme' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'leckertheme' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'leckertheme'), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'leckertheme' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'leckertheme' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'leckertheme' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'leckertheme' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'leckertheme' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'leckertheme' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'leckertheme' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
 
    tgmpa( $plugins, $config );
}
