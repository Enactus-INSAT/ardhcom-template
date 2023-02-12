<?php
$options = uthan_WSH()->option();
$allowed_html = wp_kses_allowed_html();

/**
 * Blog Content Template
 *
 * @package    WordPress
 * @subpackage UTHAN
 * @author     Tona Theme
 * @version    1.0
 */

if ( class_exists( 'Uthan_Resizer' ) ) {
	$img_obj = new Uthan_Resizer();
} else {
	$img_obj = array();
}
$allowed_tags = wp_kses_allowed_html('post');
global $post;
?>
<div <?php post_class(); ?>>


	<div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
		<div class="inner-box p_relative d_block b_radius_5 bg_white mb_70">
			<figure class="image-box p_relative d_block theme_bg">
				<a href="<?php echo esc_url(get_permalink(get_the_id()));?>">
					<?php the_post_thumbnail(); ?>
				</a>
			</figure>
			<div class="lower-content p_relative d_block pt_35">

				<h2 class="p_relative d_block fs_30 lh_40 mb_2 fw_medium"><a href="<?php echo esc_url( the_permalink( get_the_id() ) );?>" class="d_iblock hov_color"><?php the_title(); ?></a></h2>
				
				<?php if($options->get('blog_post_author' ) ): ?>
				<ul class="post-info p_relative d_block mb_15 clearfix">
				
				
					
					<li class="p_relative d_iblock float_left fs_15 mr_25"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>" class="fw_medium hov_color"><?php the_author(); ?></a></li>
					
					
					<?php if($options->get('blog_post_comment' ) ): ?>
					<li class="p_relative d_iblock float_left fs_15"><?php comments_number(); ?></li>
					<?php endif;?>
					<?php if($options->get('blog_post_date' ) ): ?>
					<li class="listed_li"><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
						<?php endif;?>
				</ul>
				<?php endif;?>
				
				<div class="fs_15 lh_26 mb_20"><?php the_excerpt(); ?></div>
				
				<?php if($options->get('blog_post_readmore' ) ): ?>						
				<?php if($options->get('blog_post_readmoretext' ) ): ?>		
				
				<div class="btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-two"><?php echo wp_kses( $options->get( 'blog_post_readmoretext'), $allowed_html ); ?><i class="far fa-long-arrow-right"></i></a>
				</div>
				
				
				<?php else: ?>
				
				<div class="btn-box">
					<a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="theme-btn btn-two"><?php esc_html_e('Read More', 'uthan');?><i class="far fa-long-arrow-right"></i></a>
				</div>
						
				<?php endif; ?>	
				<?php endif;?>
				
			</div>
		</div>
	</div>
    
</div>