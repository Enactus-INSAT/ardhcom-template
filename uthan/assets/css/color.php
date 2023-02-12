<?php


/** Set ABSPATH for execution */
define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
define( 'WPINC', 'wp-includes' );


/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr($str) {return $str;}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
function is_admin() {return true;}

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
/**
 * @ignore
 */
function json_encode() {}
endif;



/* Convert hexdec color string to rgb(a) string */
 
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

$color = $_GET['main_color'];

ob_start(); ?>
/*========== Color ====================*/

.main-menu .navigation > li.current > a, .main-menu .navigation > li:hover > a,
.main-header .nav-right .cart-box a,
.feature-block-one .inner-box .icon-box,
.sec-title .sub-title,
.content_block_2 .content-box .single-item .icon-box,
.service-block-one .inner-box .icon-box,
.service-block-one .inner-box h3 a:hover,
.service-block-one .inner-box .link-box .overlay-btn,
.project-section .filter-tabs li.active, .project-section .filter-tabs li:hover,
.project-block-one .inner-box .content-box .icon-box,
.theme_color,
.hov_color:hover,
.theme-btn.btn-two,
.banner-section.style-three .banner-carousel .owl-nav button,
.cta-section .theme-btn,
.testimonial-section .owl-nav button,
.project-block-one .inner-box .content-box .icon-box i,
.service-sidebar .category-widget .category-list a:hover, .service-sidebar .category-widget .category-list a.current, .default-sidebar .category-widget .category-list a:hover, .default-sidebar .category-widget .category-list a.current,
.blog-sidebar .post-widget .post h5 a:hover,
.widget ul li a:hover

{
	color:#<?php echo esc_attr( $color ); ?>!important;
}

/*==============================================
   Theme Background Css
===============================================*/

.header-top,
.main-header .search-box-outer .dropdown-menu,
.theme-btn.btn-one,
.product_number,
.feature-block-one .inner-box .icon-box:before,
.icon_overlay:before,
.project-section .filter-tabs li:before,
.project-block-one .inner-box .image-box,
.funfact-section:before,
.theme_bg,
.hov_bg:hover,
.parallax-bg:before,
.scroll-top,
.banner-carousel .owl-nav button:hover,
.testimonial-section .owl-nav button:hover,
.handle-preloader,
.feature-section .single-item .inner-box .icon-box:before,
.dots-style-one .owl-dots .owl-dot span,
.pricing-style-two .tab-btns li.active-btn, .pricing-style-two .tab-btns li:hover,
.history-section .inner-box .year:before,
.history-section .inner-content:before,
span.page-numbers.current,
.pagination li a:hover, .pagination li a.current,
.progress-box .bar-inner,
.team-details .content-box .social-links li a:hover,
.career-sidebar .download-widget a i,
.accordion-box .acc-content .list li:before,
.project-details-content .list li:before,
.woocommerce #place_order, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
.woocommerce nav.woocommerce-pagination ul li:hover a,
.service-details-content .list li:before,
.service-sidebar .download-widget a i,
.wp-block-search .wp-block-search__inside-wrapper button,
.blog-sidebar .post-widget .post .post-thumb,
p.wp-block-tag-cloud a:hover,
.blog-details-content .post-share-option .share-links li a i:hover,
.blog-details-content .post-share-option .post-tag li a:hover

{
	background: #<?php echo esc_attr( $color ); ?>!important;
	background-color:#<?php echo esc_attr( $color ); ?>!important;
}


/*==============================================
   Theme Border Color Css
===============================================*/


.post-social-link ul li a:hover,
.theme-btn.btn-two:hover,
.default-form .form-group input:focus, .default-form .form-group textarea:focus,
.theme-btn.btn-two,
.dots-style-one .owl-dots .owl-dot span:before,
.pricing-style-two .tab-btns li.active-btn, .pricing-style-two .tab-btns li:hover,
span.page-numbers.current,
.pagination li a:hover, .pagination li a.current,
.team-details .content-box .social-links li a:hover,
.career-sidebar .download-widget a:hover,
.woocommerce nav.woocommerce-pagination ul li:hover a,
.service-sidebar .download-widget a:hover,
p.wp-block-tag-cloud a:hover,
.blog-details-content blockquote,
.blog-details-content .post-share-option .share-links li a i:hover,
.blog-details-content .post-share-option .post-tag li a:hover

{
    border-color: #<?php echo esc_attr( $color ); ?>!important;  
}

/*==============================================
   RGB
===============================================*/

.video-galler-outer-bg:before {
    background-color: <?php echo esc_attr( hex2rgba($color, 0.9));?>!important;
}
.main-slider .content h3:before{
    background: <?php echo esc_attr( hex2rgba($color, 0.4));?>!important;
}




<?php 

$out = ob_get_clean();
$expires_offset = 31536000; // 1 year
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
header('Vary: Accept-Encoding'); // Handle proxies
header('Content-Encoding: gzip');

echo gzencode($out);
exit;