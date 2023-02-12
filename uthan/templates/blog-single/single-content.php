<?php
/**
* Single Post Content Template
*
* @package    WordPress
* @subpackage UTHAN
* @author     Tona Theme
* @version    1.0
*/
?>
<?php global $wp_query;

$options = uthan_WSH()->option();
$allowed_html = wp_kses_allowed_html();

$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();

$gallery = get_post_meta( $page_id, 'uthan_gallery_images', true );

$video = get_post_meta( $page_id, 'uthan_video_url', true );


$audio_type = get_post_meta( $page_id, 'uthan_audio_type', true );

?>


<div class="blog-details-content p_relative d_block mr_20">
	<div class="blog-post">
		<div class="news-block-one">
			<div class="inner-box p_relative d_block b_radius_5 bg_white mb_35">
				<figure class="image-box p_relative d_block theme_bg">
					<?php the_post_thumbnail(); ?>
				</figure>
				<div class="lower-content p_relative d_block pt_35 mr_contentb">
					<ul class="post-info p_relative d_block mb_10 clearfix mr_post_ul">
						<?php if($options->get('single_post_author' ) ): ?>	
						<li class="listed_li">
						<a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID') )); ?>" class="hov_color"><?php the_author(); ?></a>
						</li>
						<?php endif; ?>
						<?php if($options->get('single_post_comments' ) ): ?>
						<li class="listed_li"><?php comments_number(); ?></li>
						<?php endif; ?>	
						
					
						<li class="listed_li"><a href="<?php echo get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ); ?>"><?php echo get_the_date(); ?></a></li>
				
						
			
					</ul>
					<div class="text">
						<?php the_content(); ?>
						<div class="clearfix"></div>
						<?php wp_link_pages(array('before'=>'<div class="paginate_links">'.esc_html__('Pages: ', 'uthan'), 'after' => '</div>', 'link_before'=>'', 'link_after'=>'')); ?>
					</div>
				</div>
			</div>
		</div>
		
		<?php uthan_template_load( 'templates/blog-single/social_share.php', compact( 'options', 'data' ) ); ?>
		
		<?php comments_template(); ?> 
		
	</div>
</div>