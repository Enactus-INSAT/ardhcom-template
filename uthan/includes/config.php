<?php
/**
 * Theme config file.
 *
 * @package UTHAN
 * @author  ThemeKalia
 * @version 1.0
 * changed
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['uthan_main_header'][] 	= array( 'uthan_preloader', 98 );
$config['default']['uthan_main_header'][] 	= array( 'uthan_main_header_area', 99 );

$config['default']['uthan_main_footer'][] 	= array( 'uthan_preloader', 98 );
$config['default']['uthan_main_footer'][] 	= array( 'uthan_main_footer_area', 99 );

$config['default']['uthan_sidebar'][] 	    = array( 'uthan_sidebar', 99 );

$config['default']['uthan_banner'][] 	    = array( 'uthan_banner', 99 );


return $config;
