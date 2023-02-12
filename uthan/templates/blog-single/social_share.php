<?php 

$options = uthan_WSH()->option();
$allowed_html = wp_kses_allowed_html(); ?>


<div class="post-share-option clearfix p_relative d_block mb_90">

	<?php if($options->get('single_post_tag' ) ): ?>

	<ul class="post-tag clearfix pull-left">
		<li class="p_relative d_iblock mr_10"><h4 class="fs_20 lh_35 fw_medium"><?php esc_html_e( 'Tags: ', 'uthan' ); ?></h4></li>
		<li class="p_relative d_iblock mr_5"><?php the_tags(' ', ' ', ''); ?></li>
	</ul>
	
	<?php endif; ?>
	<?php if($options->get('single_post_share' ) ): ?>
	<ul class="share-links clearfix pull-right">
		<li class="p_relative d_iblock float_left mr_10"><h4 class="fs_20 lh_35 fw_medium"><?php esc_html_e( 'Share:', 'uthan' ); ?></h4></li>
		<?php foreach ( $options->get( 'single_social_share' ) as $k => $v ) {
			if ( $v == '' ) {
				continue;
			} ?>
			<?php do_action('uthan_social_share_output', $k ); ?>
		<?php } ?>
	</ul>
	<?php endif; ?>
</div>