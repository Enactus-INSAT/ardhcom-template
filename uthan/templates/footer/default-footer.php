<?php
/**
 * Footer Template  File
 *
 * @package UTHAN
 * @author  Tona Theme
 * @version 1.0
 */

$options = uthan_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
?>

<footer class="main-footer p_relative">
	<div class="footer-logo p_relative d_block pb_50 centred">
		<figure class="logo p_relative d_iblock">
			<div class="shape p_absolute" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-13.png');?>);"></div>
			<a href="#"><img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/footer-logo.png');?>" alt=""></a>
		</figure>
	</div>
	<div class="widget-section p_relative pt_65 pb_70">
		<div class="pattern-layer">
			<div class="pattern-1 p_absolute" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-14.png');?>);"></div>
			<div class="pattern-2 p_absolute" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-15.png');?>);"></div>
		</div>
		<div class="auto-container">
			<div class="row clearfix">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</div>
		</div>
	</div>
	<div class="footer-bottom pt_30 pb_30">
		<div class="auto-container">
			<div class="bottom-inner clearfix">
				<div class="copyright pull-left">
					<p class="fs_15"><a href="#">UThan</a> &copy; 2022 All Right Reserved.</p>
				</div>
				<ul class="footer-nav pull-right clearfix">
					<li class="float_left mr_30 p_relative d_iblock fs_15"><a href="#">Terms of Service</a></li>
					<li class="float_left p_relative d_iblock fs_15"><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>