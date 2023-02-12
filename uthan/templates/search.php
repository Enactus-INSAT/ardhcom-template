<?php
$options = uthan_WSH()->option();
$allowed_html = wp_kses_allowed_html();
$search_image    = $options->get( 'search_image' );
$search_image    = uthan_set( $search_image, 'url', UTHAN_URI . 'assets/images/search.jpg' );

?>
<section class="search_area_df">
<div class="container">		 
		<div class="row clearfix">			
			
			<div class="col-md-8 col-sm-12 col-xs-8 mr_center">
			<div class="search_tx_box">
		<!-- search Title -->	
			<?php if($options->get('search_page_title' ) ): ?>
		
				<h1 class="search_title">
				<?php echo wp_kses( $options->get( 'search_page_title'), $allowed_html ); ?>
				
				</h1>
				<?php else : ?>
				<h1 class="search_title">
				<?php esc_html_e( 'Oops! Search not Found', 'uthan' ); ?>
				</h1>
			<?php endif; ?>	
		<!-- search Text -->		
				<?php if($options->get('search_page_text' ) ): ?>
				
				<div class="search_text">	
				<?php echo(wp_kses($options->get('search_page_text' ), $allowed_html )) ?>
				</div>
			<?php else : ?>
				<div class="search_text">	
				<p><?php esc_html_e( '1. Check the Spelling ', 'uthan' ); ?>
				</p>
				<p><?php esc_html_e( '2. Check the Caps Lock', 'uthan' ); ?>
				</p>      
				<p><?php esc_html_e( '3. Press Enter correctly or Press F5', 'uthan' ); ?>
				</p> 
				</div>
			<?php endif; ?>	
		<!--  Search form -->
	 
				<?php echo get_search_form(); ?>
	
		<!--  Back to Home -->
	
		  	
			<div class="search-block">
			
			
				<div class="btn-box"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-one"><?php esc_html_e( 'Back To Home', 'uthan' ); ?></a></div>
			
				
			</div>
			
			</div>
			</div>

		
	</div>
</div>
</section>	
