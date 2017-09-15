<?php
/**
 * Hazleton Pumps functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Hazleton Pumps
 * @since Hazleton Pumps 1.0
 */


// custom post types function
function create_custom_post_types() {

	//create a case study custom post type 
	register_post_type (
		'case_studies',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __('Case Study')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'case-studies'
				),
			)
		);

	//create a awards custom post type 
	register_post_type (
		'awards',
		array(
			'labels' => array(
				'name' => __( 'Awards' ),
				'singular_name' => __('Award')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'awards'
				),
			)
		);

		//create a press releases custom post type 
	register_post_type (
		'press_releases',
		array(
			'labels' => array(
				'name' => __( 'Press Releases' ),
				'singular_name' => __('Press Release')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'press-releases'
				),
			)
		);

	//create a press clippings custom post type 
	register_post_type (
		'press_clip',
		array(
			'labels' => array(
				'name' => __( 'Press Clippings' ),
				'singular_name' => __('Press Clipping')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'press-clippings'
				),
			)
		);

	//create a pumping system custom post type 
	register_post_type (
		'pump_systems',
		array(
			'labels' => array(
				'name' => __( 'Pump Systems' ),
				'singular_name' => __('Pump System')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-systems'
				),
			)
		);

	//create a hippo submersible slurry pump range custom post type 
	register_post_type (
		'submersibles',
		array(
			'labels' => array(
				'name' => __( 'Submersible Slurry Pumps' ),
				'singular_name' => __('Submersible Slurry Pump')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-submersible-slurry-pump-range'
				),
			)
		);

	//create a hippo vertical slurry pump range custom post type 
	register_post_type (
		'verticals',
		array(
			'labels' => array(
				'name' => __( 'Vertical Slurry Pumps' ),
				'singular_name' => __('Vertical Slurry Pump')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-vertical-slurry-pump-range'
				),
			)
		);

	//create a hippo vertical slurry pump range custom post type 
	register_post_type (
		'hippo',
		array(
			'labels' => array(
				'name' => __( 'Hippo Slurry Pump Range' ),
				'singular_name' => __('Hippo Slurry Pump Range')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'hippo-range'
				),
			)
		);

	//create a pump curves custom post type 
	register_post_type (
		'pump_curves',
		array(
			'labels' => array(
				'name' => __( 'Pump Curves' ),
				'singular_name' => __('Pump Curves')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-curves'
				),
			)
		);
	
	//create a hippo lineup - frontpage custom post type 
	register_post_type (
		'pump_img',
		array(
			'labels' => array(
				'name' => __( 'Pump Image' ),
				'singular_name' => __('Pump Images')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'pump-img'
				),
			)
		);

	//front page experience by industry with the fa icons - frontpage custom post type 
	register_post_type (
		'experience',
		array(
			'labels' => array(
				'name' => __( 'Experience' ),
				'singular_name' => __('Experiences')
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array(
				'slug' => 'experience'
				),
			)
		);
}

add_action ('init', 'create_custom_post_types' );

function modify_attachment_link($markup) {
    return preg_replace('/^<a([^>]+)>(.*)$/', '<a\\1 target="_blank">\\2', $markup);
}
add_filter( 'wp_get_attachment_link', 'modify_attachment_link', 10, 6 );


function custom_excerpt_more($more) {
	return '...<div class="read-more"><a href="'. get_permalink() . '"></a></div>';
} 
add_filter('excerpt_more', 'custom_excerpt_more');


add_theme_support ( 'menus');

function hippo2018_register_theme_menus() {

	register_nav_menus (
		
		array(
			'primary-menu' => __( 'primary menu' ),
			)

		);
}

add_action('init', 'hippo2018_register_theme_menus');

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

	function hippo2018_theme_styles () {
		wp_enqueue_style ('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css' );

		wp_enqueue_style ('font_awesome_css', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );

		wp_enqueue_style ('bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.css' );

		wp_enqueue_style ('waves_css', get_template_directory_uri() . '/assets/css/waves.min.css' );

		wp_enqueue_style ('slicknav_css', get_template_directory_uri() . '/assets/css/slicknav.min.css' );

		wp_enqueue_style ('owl_carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

		wp_enqueue_style ('owl_theme_default_css', get_template_directory_uri() . '/assets/css/owl.theme.default.css' );

		wp_enqueue_style ('essential_css', get_template_directory_uri() . '/assets/css/essential.css' );

		wp_enqueue_style ('main_css', get_template_directory_uri() . '/assets/css/main.css' );

		wp_enqueue_style ('responsive_css', get_template_directory_uri() . '/assets/css/responsive.css' );

		wp_enqueue_style ('style_css', get_template_directory_uri() . '/style.css' );

	}

	add_action ( 'wp_enqueue_scripts', 'hippo2018_theme_styles' );

	function hippo2018_theme_js() {

		wp_enqueue_script ( 'modernizr_js', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js');

		wp_enqueue_script ( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js');

		wp_enqueue_script ( 'waves_js', get_template_directory_uri() . '/assets/js/waves.min.js');

		wp_enqueue_script ( 'slicknav_js', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js');

		wp_enqueue_script ( 'waypoints_js', get_template_directory_uri() . '/assets/js/waypoints.min.js');
	
		wp_enqueue_script ( 'isotope_js', get_template_directory_uri() . '/assets/js/isotope.min.js');

		wp_enqueue_script ( 'owl_carousel_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');

		wp_enqueue_script ( 'main_js', get_template_directory_uri() . '/assets/js/main.js');
	}

add_action ( 'wp_enqueue_scripts', 'hippo2018_theme_js');

/**
 * Register widget area.
 */
function hippo2018_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area'),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your contact page sidebar.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Widget Footer'),
		'id'            => 'sidebar-footer',
		'description'   => __( 'Add widgets here to appear in your footer page sidebar.' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div>',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'hippo2018_widgets_init' );


//Change the WordPress Login Page Logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
		height:201px;
		width:134px;
		background-size: 201px 134px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*
The size of your logo should be no bigger than 80 x 80 pixels (though even this can change with custom CSS). Adjust the above padding-bottom value to the spacing you want between your logo and the login form.

To change the link values so the logo links to your WordPress site, use the following WordPress hooks example; edit it and paste it below the previous in the functions.php:
*/

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


/* more function to customise the admin of the wordpress site */
// remove administration page header logo
function remove_admin_logo() {
	echo '<style>img#header-logo { display: none; }</style>';
}
add_action('admin_head', 'remove_admin_logo');


// change administration panel footer
function change_footer_admin() {
	echo 'For support, please <a href="mailto:hello@thedigitalfactory.nl">email</a> hello@thedigitalfactory.nl';
}
add_filter('admin_footer_text', 'change_footer_admin');



?>

