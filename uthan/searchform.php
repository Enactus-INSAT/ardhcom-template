<?php
/**
 * Search Form template
 *
 * @package UTHAN
 * @author template_path
 * @version 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}
?>


	<div class="single-sidebar_search_box">
		<div class="sidebar-search-box">
			<form  method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input name="s" placeholder="<?php echo esc_attr__( 'Keyword...', 'uthan' ); ?>" type="text">
				<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>
