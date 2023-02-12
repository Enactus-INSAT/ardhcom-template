<?php
/**
 * 404 page file
 *
 * @package    WordPress
 * @subpackage Uthan
 * @author     template_path
 * @version    1.0
 */

$text = sprintf(__('It seems we can\'t find what you\'re looking for. Perhaps searching can help ', 'uthan'), esc_url(home_url('/')));
$allowed_html = wp_kses_allowed_html( 'post' );
?>
<?php get_header();
$data = \UTHAN\Includes\Classes\Common::instance()->data( '404' )->get();
do_action( 'uthan_banner', $data );
$options = uthan_WSH()->option();

if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
	?>
	

<section class="error-page-section centred p_relative pt_140 pb_150">
	<div class="auto-container">
		<div class="inner-box p_relative d_block">
		
		
			<?php if($options->get('404_title' ) ): ?>
			<h1 class="fw_bold mb_20 p_relative d_block"><?php echo wp_kses( $options->get( '404_title'), $allowed_html ); ?></h1>
			<?php else: ?>	
			<h1 class="fw_bold mb_20 p_relative d_block"><?php esc_html_e( '404', 'uthan' ); ?></h1>
			<?php endif; ?>	
			
			<?php if($options->get('404_page_title' ) ): ?>	
			<h2 class="p_relative d_block fs_30 lh_40 mb_40 fw_sbold"><?php echo wp_kses( $options->get( '404_page_title'), $allowed_html ); ?></h2>
			<?php else: ?>
			<h2 class="p_relative d_block fs_30 lh_40 mb_40 fw_sbold"><?php esc_html_e( 'Oops! Page Not Found!', 'uthan' ); ?></h2>
			<?php endif; ?>
			
			<?php if($options->get('back_home_btn' ) ): ?>		
			<?php if($options->get('back_home_btn_label' ) ): ?>
			
			<a href="<?php echo( home_url( '/' ) ); ?>" class="theme-btn btn-one"><?php echo wp_kses( $options->get( 'back_home_btn_label'), $allowed_html ); ?></a>
			
			<?php else: ?>
			
			<a href="<?php echo( home_url( '/' ) ); ?>" class="theme-btn btn-one"><?php esc_html_e( 'Back to Home', 'uthan' ); ?></a>

			<?php endif; ?>		
			<?php endif; ?>
		</div>
	</div>
</section>
	
  
<?php
}
get_footer(); ?>
