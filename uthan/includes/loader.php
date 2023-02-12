<?php

define( 'UTHAN_ROOT', get_template_directory() . '/' );

require_once get_template_directory() . '/includes/functions/functions.php';
include_once get_template_directory() . '/includes/classes/base.php';
include_once get_template_directory() . '/includes/classes/dotnotation.php';
include_once get_template_directory() . '/includes/classes/header-enqueue.php';
include_once get_template_directory() . '/includes/classes/options.php';
include_once get_template_directory() . '/includes/classes/ajax.php';
include_once get_template_directory() . '/includes/classes/common.php';
include_once get_template_directory() . '/includes/classes/bootstrap_walker.php';
include_once get_template_directory() . '/includes/library/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/includes/library/hook.php';

// Merlin demo import.
require_once get_template_directory() . '/demo-import/class-merlin.php';
require_once get_template_directory() . '/demo-import/merlin-config.php';
require_once get_template_directory() . '/demo-import/merlin-filters.php';

add_action( 'after_setup_theme', 'uthan_wp_load', 5 );

function uthan_wp_load() {

	defined( 'UTHAN_URL' ) or define( 'UTHAN_URL', get_template_directory_uri() . '/' );
	define(  'UTHAN_KEY','!@#uthan');
	define(  'UTHAN_URI', get_template_directory_uri() . '/');

	if ( ! defined( 'UTHAN_NONCE' ) ) {
		define( 'UTHAN_NONCE', 'uthan_wp_theme' );
	}

	( new \UTHAN\Includes\Classes\Base )->loadDefaults();
	( new \UTHAN\Includes\Classes\Ajax )->actions();

}
add_action( 'init', 'uthan_bunch_theme_init');
function uthan_bunch_theme_init()
{
	$bunch_exlude_hooks = include_once get_template_directory(). '/includes/resource/remove_action.php';
	

}
