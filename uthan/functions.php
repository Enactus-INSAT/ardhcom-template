<?php

require_once get_template_directory() . '/includes/loader.php';

add_action( 'after_setup_theme', 'uthan_setup_theme' );
add_action( 'after_setup_theme', 'uthan_load_default_hooks' );


function uthan_setup_theme() {

	load_theme_textdomain( 'uthan', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'custom-background' );
	add_theme_support('woocommerce');
	add_theme_support('wc-product-gallery-lightbox');
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );


	// Set the default content width.
	$GLOBALS['content_width'] = 525;
	
	/*---------- Register image sizes ----------*/
	
	//Register image sizes
	add_image_size( 'uthan_370x310', 370, 310, true ); //'uthan_370x310 Our Services'
	add_image_size( 'uthan_70x70', 70, 70, true ); //'uthan_70x70 Our Testimonials'
	add_image_size( 'uthan_370x290', 370, 290, true ); //'uthan_370x290 Latest News'
	add_image_size( 'uthan_440x305', 440, 305, true ); //'uthan_440x305 Our Team'
	add_image_size( 'uthan_310x305', 310, 305, true ); //'uthan_310x305 Our Team V2'
	add_image_size( 'uthan_1170x440', 1170, 440, true ); //'uthan_1170x440 Our Blog'
	/*---------- Register image sizes ends ----------*/
	
	
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main_menu' => esc_html__( 'Main Menu', 'uthan' ),
		'main_menu_two' => esc_html__( 'Main Menu Two', 'uthan' ),
		'onepage_menu' => esc_html__( 'OnePage Menu', 'uthan' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'      => 250,
		'height'     => 250,
		'flex-width' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style();
	add_action( 'admin_init', 'uthan_admin_init', 2000000 );
}

/**
 * [uthan_admin_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */


function uthan_admin_init() {
	remove_action( 'admin_notices', array( 'ReduxFramework', '_admin_notices' ), 99 );
}

/*---------- Sidebar settings ----------*/

/**
 * [uthan_widgets_init]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
function uthan_widgets_init() {

	global $wp_registered_sidebars;

	$theme_options = get_theme_mod( 'uthan' . '_options-mods' );

	register_sidebar( array(
		'name'          => esc_html__( 'Default Sidebar', 'uthan' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'uthan' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="fs_30 lh_40">',
		'after_title'   => '</h3>',
	) );
	register_sidebar(array(
		'name' => esc_html__('Footer Widget', 'uthan'),
		'id' => 'footer-sidebar',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'uthan'),
		'before_widget'=>'<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>'
	));
	if ( class_exists( '\Elementor\Plugin' )){
	register_sidebar(array(
		'name' => esc_html__('RTL Footer Widget', 'uthan'),
		'id' => 'footer-sidebar-2',
		'description' => esc_html__('Widgets in this area will be shown in Footer Area.', 'uthan'),
		'before_widget'=>'<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 footer-column"><div id="%1$s" class="footer-widget single-footer-widget %2$s">',
		'after_widget'=>'</div></div>',
		'before_title' => '<div class="title"><h3>',
		'after_title' => '</h3></div>'
	));
	register_sidebar(array(
		'name' => esc_html__('Services Widget', 'uthan'),
		'id' => 'service-sidebar',
		'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'uthan' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="sidebar-title"><h2>',
		'after_title'   => '</h2></div>',
	));
	}
	register_sidebar(array(
	  'name' => esc_html__( 'Blog Listing', 'uthan' ),
	  'id' => 'blog-sidebar',
'description'   => esc_html__( 'Widgets in this area will be shown on the right-hand side.', 'uthan' ),
		'before_widget' => '<div id="%1$s" class="mrwidget widget sidebar-widget single-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title"><h3>',
		'after_title'   => '</h3></div>',
	));
	if ( ! is_object( uthan_WSH() ) ) {
		return;
	}

	$sidebars = uthan_set( $theme_options, 'custom_sidebar_name' );

	foreach ( array_filter( (array) $sidebars ) as $sidebar ) {

		if ( uthan_set( $sidebar, 'topcopy' ) ) {
			continue;
		}

		$name = $sidebar;
		if ( ! $name ) {
			continue;
		}
		$slug = str_replace( ' ', '_', $name );

		register_sidebar( array(
			'name'          => $name,
			'id'            => sanitize_title( $slug ),
			'before_widget' => '<div id="%1$s" class="%2$s widget single-sidebar">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title"><h3>',
			'after_title'   => '</h3></div>',
		) );
	}

	update_option( 'wp_registered_sidebars', $wp_registered_sidebars );
}

add_action( 'widgets_init', 'uthan_widgets_init' );

/*---------- Sidebar settings ends ----------*/

/*---------- Gutenberg settings ----------*/

function uthan_gutenberg_editor_palette_styles() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'strong yellow', 'uthan' ),
            'slug' => 'strong-yellow',
            'color' => '#f7bd00',
        ),
        array(
            'name' => esc_html__( 'strong white', 'uthan' ),
            'slug' => 'strong-white',
            'color' => '#fff',
        ),
		array(
            'name' => esc_html__( 'light black', 'uthan' ),
            'slug' => 'light-black',
            'color' => '#242424',
        ),
        array(
            'name' => esc_html__( 'very light gray', 'uthan' ),
            'slug' => 'very-light-gray',
            'color' => '#797979',
        ),
        array(
            'name' => esc_html__( 'very dark black', 'uthan' ),
            'slug' => 'very-dark-black',
            'color' => '#000000',
        ),
    ) );
	
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => esc_html__( 'Small', 'uthan' ),
			'size' => 10,
			'slug' => 'small'
		),
		array(
			'name' => esc_html__( 'Normal', 'uthan' ),
			'size' => 15,
			'slug' => 'normal'
		),
		array(
			'name' => esc_html__( 'Large', 'uthan' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => esc_html__( 'Huge', 'uthan' ),
			'size' => 36,
			'slug' => 'huge'
		)
	) );
	
}
add_action( 'after_setup_theme', 'uthan_gutenberg_editor_palette_styles' );

/*---------- Gutenberg settings ends ----------*/

/*---------- Enqueue Styles and Scripts ----------*/

function uthan_enqueue_scripts() {

	
    //styles
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'jquery-bootstrap-touchspin', get_template_directory_uri() . '/assets/css/jquery.bootstrap-touchspin.css' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css' );
	wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css' );
	wp_enqueue_style( 'elpath', get_template_directory_uri() . '/assets/css/elpath.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'font-awesome-all', get_template_directory_uri() . '/assets/css/font-awesome-all.css' );
	wp_enqueue_style( 'jquery-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css' );
	wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css' );
	wp_enqueue_style( 'uthan-color-panel', get_template_directory_uri() . '/assets/temp/color-panel.css' );
	wp_enqueue_style( 'uthan-main', get_stylesheet_uri() );
	wp_enqueue_style( 'uthan-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'uthan-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );	
	wp_enqueue_style( 'uthan-error', get_template_directory_uri() . '/assets/css/theme/error.css' );
	wp_enqueue_style( 'uthan-rtl', get_template_directory_uri() . '/assets/css/rtl.css' );	
	wp_enqueue_style( 'uthan-fixing', get_template_directory_uri() . '/assets/css/theme/fixing.css' );
	wp_enqueue_style( 'uthan-gutenberg', get_template_directory_uri() . '/assets/css/theme/gutenberg.css' );
	wp_enqueue_style( 'uthan-sidebar', get_template_directory_uri() . '/assets/css/theme/sidebar.css' );
	wp_enqueue_style( 'uthan-tut', get_template_directory_uri() . '/assets/css/theme/tut.css' );			
    //scripts
	wp_enqueue_script( 'jquery-ui-core');
	wp_enqueue_script( 'appear', get_template_directory_uri().'/assets/js/appear.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'popper-min', get_template_directory_uri().'/assets/js/popper.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-bootstrap-touchspin', get_template_directory_uri().'/assets/js/jquery.bootstrap-touchspin.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/isotope.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-nice-select-min', get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-paroller-min', get_template_directory_uri().'/assets/js/jquery.paroller.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/assets/js/jquery-ui.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'owl', get_template_directory_uri().'/assets/js/owl.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'pagenav', get_template_directory_uri().'/assets/js/pagenav.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'scrollbar', get_template_directory_uri().'/assets/js/scrollbar.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow.js', array( 'jquery' ), '2.1.2', true );	
	//wp_enqueue_script( 'parallax.min', get_template_directory_uri().'/assets/js/parallax.min.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'parallax-scroll', get_template_directory_uri().'/assets/js/parallax-scroll.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'jquery-cookie', get_template_directory_uri().'/assets/temp/jquery.cookie.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'themepanel', get_template_directory_uri().'/assets/temp/themepanel.js', array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'uthan-main-script', get_template_directory_uri().'/assets/js/script.js', array(), false, true );
	if( is_singular() ) wp_enqueue_script('comment-reply');
	
}
add_action( 'wp_enqueue_scripts', 'uthan_enqueue_scripts' );

/*---------- Enqueue styles and scripts ends ----------*/

/*---------- Google fonts ----------*/

function uthan_fonts_url() {
	
	$fonts_url = '';

		$font_families['Montserrat']      = 'Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
		
		$font_families['Prata']      = 'Prata:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';

		$font_families = apply_filters( 'REXAR/includes/classes/header_enqueue/font_families', $font_families );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$protocol  = is_ssl() ? 'https' : 'http';
		$fonts_url = add_query_arg( $query_args, $protocol . '://fonts.googleapis.com/css' );

		return esc_url_raw($fonts_url);

}

function uthan_theme_styles() {
    wp_enqueue_style( 'uthan-theme-fonts', uthan_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'uthan_theme_styles' );
add_action( 'admin_enqueue_scripts', 'uthan_theme_styles' );

/*---------- Google fonts ends ----------*/

/*---------- More functions ----------*/

// 1) uthan_set function

/**
 * [uthan_set description]
 *
 * @param  array $data [description]
 *
 * @return [type]       [description]
 */
if ( ! function_exists( 'uthan_set' ) ) {
	function uthan_set( $var, $key, $def = '' ) {
		//if( ! $var ) return false;

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} elseif ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} elseif ( $def ) {
			return $def;
		} else {
			return false;
		}
	}
}

// 2) uthan_add_editor_styles function

function uthan_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'uthan_add_editor_styles' );

// 3) Add specific CSS class by filter body class.

$options = uthan_WSH()->option(); 
if( uthan_set($options, 'boxed_wrapper') ){

	add_filter( 'body_class', function( $classes ) {
		$classes[] = 'boxed_wrapper';
		return $classes;
	} );
}

function uthan_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
/**
 * product per page
 */
add_filter( 'loop_shop_per_page', 'uthan_loop_shop_per_page', 20 );

function uthan_loop_shop_per_page( $cols ) {
		$options     = uthan_WSH()->option();		
		$shop_product = esc_attr( $options->get( 'shop_product') );	
		
  // $cols contains the current number of products per page based on the value stored on Options –> Reading
  // Return the number of products you wanna show per page.
  $cols =  $shop_product;
  return $cols;
}

