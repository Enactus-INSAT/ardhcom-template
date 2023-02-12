<?php
/**
 * Tag Main File.
 *
 * @package UTHAN
 * @author  template_path
 * @version 1.0
 */

get_header();
global $wp_query;
$data  = \UTHAN\Includes\Classes\Common::instance()->data( 'search' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$layout = ( $layout ) ? $layout : 'right';
$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
if (is_active_sidebar( $sidebar )) {$layout = 'right';} else{$layout = 'full';}
$class = ( !$layout || $layout == 'full' ) ? 'col-xs-12 col-sm-12 col-md-12' : 'col-xl-8 col-lg-7 col-xs-12 col-sm-12';
if ( class_exists( '\Elementor\Plugin' ) AND $data->get( 'tpl-type' ) == 'e' AND $data->get( 'tpl-elementor' ) ) {
	echo Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $data->get( 'tpl-elementor' ) );
} else {
	?>
	
<?php if ( class_exists( '\Elementor\Plugin' )):?>


	<?php do_action( 'uthan_banner', $data );?>
<?php else:?> 


		
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
			
	
<?php endif;?>


 <?php if( have_posts() ) : ?>    

	<section class="sidebar-page-container p_relative blog-classic pt_140 pb_150">
		<div class="auto-container">
			<div class="row clearfix">
                
                <!--Sidebar Start-->
                <?php
				if ( $data->get( 'layout' ) == 'left' ) {
					do_action( 'uthan_sidebar', $data );
				}
				?>
                
                <div class="content-side <?php echo esc_attr( $class ); ?>">
                    
                     <div class="blog-classic-content p_relative d_block mr_20">
                    
                        <?php
                            while ( have_posts() ) :
                                the_post();
                                uthan_template_load( 'templates/blog/blog.php', compact( 'data' ) );
                            endwhile;
                            wp_reset_postdata();
                        ?>
                        
                    </div>
                    
                    <!--Pagination-->
                    <div class="pagination-wrapper">
                    
						<?php uthan_the_pagination(); ?>
                    </div>
                    
                </div>
                
                <!--Sidebar Start-->
                <?php
				if ( $data->get( 'layout' ) == 'right' ) {
					do_action( 'uthan_sidebar', $data );
				}
				?>
                
            </div>
        </div>
    </section> 
    <!--End blog area--> 

<?php else : ?>  
<?php get_template_part('templates/search'); ?>	
<?php endif; ?>
<?php
}
get_footer();

