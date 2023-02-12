<?php
/**
 * Banner Template
 *
 * @package    WordPress
 * @subpackage Tona Theme
 * @author     Tona Theme
 * @version    1.0
 */

if ( $data->get( 'enable_banner' ) AND $data->get( 'banner_type' ) == 'e' AND ! empty( $data->get( 'banner_elementor' ) ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'banner_elementor' ) );

	return false;
}

?>

<?php if ( $data->get( 'enable_banner' ) ) : ?>

	<?php if ( $data->get( 'banner' ) ) : ?>
	<section class="page-title p_relative pt_150 pb_180 centred">
		<div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(<?php echo esc_url( $data->get( 'banner' ) ); ?>);"></div>
	<?php else : ?>
	<section class="page-title p_relative pt_150 pb_180 centred">
	<?php endif; ?>	
	
		<div class="pattern-layer p_absolute" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-2.png');?>);"></div>
		<div class="auto-container">
			<div class="content-box">
				<h1 class="d_block fs_70 lh_70 mb_20 color_white"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
			</div>
		</div>
	</section>
	
<?php endif; ?>