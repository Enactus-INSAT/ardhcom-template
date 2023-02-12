<?php
/**
 * Blog Post Main File.
 *
 * @package UTHAN
 * @author  template_path
 * @version 1.0
 */

get_header();
$data    = \UTHAN\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xl-8 col-lg-7 col-xs-12 col-sm-12';
$options = uthan_WSH()->option();

if ( class_exists( '\Elementor\Plugin' ) && $data->get( 'tpl-type' ) == 'e') {
	
	while(have_posts()) {
	   the_post();
	   the_content();
    }

} else {
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

<section class="sidebar-page-container p_relative blog-details pt_140 pb_150">
	<div class="auto-container">
		<div class="row clearfix">
			<?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'uthan_sidebar', $data );
				}
			?>
			<div class="wp-style content-side <?php echo esc_attr( $class ); ?>">
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php uthan_template_load( 'templates/blog-single/single-content.php', compact( 'options', 'data' ) ); ?>
				
				<?php endwhile; ?>
			</div>
			<?php
				if ( $data->get( 'layout' ) == 'right' ) {
					do_action( 'uthan_sidebar', $data );
				}
			?>
		</div>
	</div>
</section>

<?php
}
get_footer();
