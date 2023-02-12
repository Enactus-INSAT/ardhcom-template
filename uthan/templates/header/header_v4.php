<?php
$options = uthan_WSH()->option(); 
$allowed_html = wp_kses_allowed_html( 'post' );

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$image_logo2 = $options->get( 'image_normal_logo2' );
$logo_dimension2 = $options->get( 'normal_logo_dimension2' );

$image_logo3 = $options->get( 'image_normal_logo3' );
$logo_dimension3 = $options->get( 'normal_logo_dimension3' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>

<!-- Main header-->
<header class="main-header header-style-one">

    <!--Start Header--> 
    <div class="header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="header-left">
                    <div class="logo">
                        <?php echo uthan_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
                    </div>
                </div>

                <div class="header-middle">
                    <div class="nav-outer style1 clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <div class="inner">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu style1 navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <?php wp_nav_menu( array( 'theme_location' => 'onepage_menu', 'container_id' => 'navbarSupportedContent',
									'container_class'=>'collapse navbar-collapse sub-menu-bar',
									'menu_class'=>'nav navbar-nav',
									'fallback_cb'=>false, 
									'add_li_class'  => 'nav-item',
									'items_wrap' => '%3$s', 
									'container'=>false,
									'depth'=>'3',
									'walker'=> new Bootstrap_walker()  
									) ); ?>
                                </ul>
                            </div>
                        </nav>                        
                        <!-- Main Menu End-->
                    </div>
                </div> 

                <div class="header-right">
					<?php if( $options->get( 'header_search_show_v4' ) ):?>
                    <div class="serach-button-style1">
                        <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                    </div>
					<?php endif; ?>
					
					<?php if( $options->get( 'shop_show_v4' ) ):?>
					
                    <div class="space-box1"></div>
					
		
                    <div class="shopping-cart-box">
					
						<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
						$count = WC()->cart->cart_contents_count;
						?>
					
                        <a href="<?php echo WC()->cart->get_cart_url(); ?>">
                        
						<i class="icon-shopping-bag"></i>
						
						<?php 
							if ( $count > 0 ) {
								?>
						
						<span class="count"><?php echo esc_html( $count ); ?></span>
						
						<?php
						}
							?>
						
						</a>
						
						<?php } ?>

                    </div>
					
					<?php endif; ?>
					
					
					<?php if( $options->get( 'button_show_v4' ) ):?>
					<?php if( $options->get( 'button_v4')):?>
                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="<?php echo wp_kses( $options->get( 'button_link_v2'), $allowed_html ); ?>">
                                <span class="txt"><?php echo wp_kses( $options->get( 'button_v2'), $allowed_html ); ?></span>
                            </a>
                        </div>
                    </div> 
					<?php endif; ?>
					<?php endif; ?>
					
					
                </div>

            </div>
        </div>    
    </div> 
    <!--End header-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container">
            <div class="clearfix">
                <!--Logo-->
                <div class="logo float-left">
                    <div class="img-responsive">
						<?php echo uthan_logo( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?>
					</div>
                </div>
                <!--Right Col-->
                <div class="right-col float-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>   
                </div>
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
    
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
        <nav class="menu-box">
            <div class="nav-logo">
				<?php echo uthan_logo( $logo_type, $image_logo3, $logo_dimension3, $logo_text, $logo_typography ); ?>
			</div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			
			<?php if( $options->get( 'header_social_show_v4' ) ):?>
            <!--Social Links-->
            <div class="social-links">
             
				<ul class="clearfix">
				                <?php echo wp_kses( $options->get( 'social_profile'), $allowed_html ); ?>
				</ul>
			
            </div>
			<?php endif; ?>
			
			
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>