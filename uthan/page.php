<?php
/**
 * Default Template Main File.
 *
 * @package UTHAN
 * @author  template_path
 * @version 1.0
 */

get_header();
$data  = \UTHAN\Includes\Classes\Common::instance()->data( 'single' )->get();
$layout = $data->get( 'layout' );
$sidebar = $data->get( 'sidebar' );
$class = ( $data->get( 'layout' ) != 'full' ) ? 'col-xs-12 col-sm-12 col-md-12 col-lg-8' : 'col-xs-12 col-sm-12 col-md-12';
?>

	<section class="page-title p_relative pt_150 pb_180 centred" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/background/page-title.jpg');?>);">
		<div class="pattern-layer p_absolute" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-2.png');?>);"></div>
		<div class="auto-container">
			<div class="content-box">
				<h1 class="d_block fs_70 lh_70 mb_20 color_white"><?php if( $data->get( 'title' ) ) echo wp_kses( $data->get( 'title' ), true ); else( wp_title( '' ) ); ?></h1>
			</div>
		</div>
	</section>
	<section class="sidebar-page-container p_relative blog-classic pt_140 pb_150 mr_page">
		<div class="auto-container">
			<div class="row clearfix">
            <div class="wp-style content-side col-lg-12 col-md-12 col-sm-12">
				   <div class="blog-details-content ">
                    <div class=" text">
                        <?php while ( have_posts() ): the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
		<?php wp_link_pages(array('before'=>'<div class="paginate_links">'.esc_html__('Pages: ', 'uthan'), 'after' => '</div>', 'link_before'=>'', 'link_after'=>'')); ?>
	
                    <?php comments_template() ?>
				</div>	   
             </div>       
            </div>
        </div>
    </section> 
    <!--End blog area--> 

<?php get_footer(); ?>
