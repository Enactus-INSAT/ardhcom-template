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

<!-- sidebar cart item -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget"><i class="flaticon-plus"></i></a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <?php echo uthan_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
                        </div>
						<?php if( $options->get( 'about_text_v5')):?>
                        <div class="text">
                            <h4><?php echo wp_kses( $options->get( 'about_title_v5'), $allowed_html ); ?></h4>
                            <p><?php echo wp_kses( $options->get( 'about_text_v5'), $allowed_html ); ?></p>
                        </div>
						<?php endif; ?>	
                        <div class="info-box">
							<?php if( $options->get( 'address_title_v5')):?>
                            <h4><?php echo wp_kses( $options->get( 'address_title_v5'), $allowed_html ); ?></h4>
							<?php endif; ?>
                            <ul class="info clearfix">
								<?php if( $options->get( 'address_v5')):?>
                                <li><i class="fa fa-map-marker"></i><?php echo wp_kses( $options->get( 'address_v5'), $allowed_html ); ?></li>
								<?php endif; ?>
								<?php if( $options->get( 'phone_v5')):?>
                                <li><?php echo wp_kses( $options->get( 'phone_title_v5'), $allowed_html ); ?> <i class="fa fa-phone"></i><a href="tel:<?php echo wp_kses( $options->get( 'phone_link_v5'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v5'), $allowed_html ); ?></a></li>
								<?php endif; ?>
								<?php if( $options->get( 'email_v5')):?>
                                <li><i class="fa fa-envelope"></i><a href="tel:<?php echo wp_kses( $options->get( 'email_link_v5'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v5'), $allowed_html ); ?></a></li>
								<?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END sidebar widget item -->


<!-- Main header-->
<header class="main-header header-style-two home_four">
    <?php if( $options->get( 'top_header_show_v5' ) ):?>
    <div class="header-top">
        <div class="auto-container">
            <div class="outer-box">
                
                <div class="header-top__left">
                    <div class="header-contact-info">
                        <ul>
							<?php if( $options->get( 'time_title_v5')):?>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-clock-o"></span>
                                </div>
                                <div class="text">
                                    <h6><?php echo wp_kses( $options->get( 'time_title_v5'), $allowed_html ); ?></h6>
                                </div>
                            </li>
							<?php endif; ?>
							<?php if( $options->get( 'email_v5')):?>
                            <li>
                                <div class="icon">
                                    <span class="fa fa-envelope-o"></span>
                                </div>
                                <div class="text">
                                    <h6><a href="<?php echo wp_kses( $options->get( 'email_link_v5'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v5'), $allowed_html ); ?></a></h6>
                                </div>
                            </li>
							<?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="header-top__right">
                    <div class="header-social-link">
						<?php if( $options->get( 'phone_v5')):?>
                        <div class="support-box">
                            <div class="icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="text">
                                <h6><?php echo wp_kses( $options->get( 'phone_title_v5'), $allowed_html ); ?> <a href="tel:<?php echo wp_kses( $options->get( 'phone_link_v5'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v5'), $allowed_html ); ?></a></h6>
                            </div>
                        </div>
						<?php endif; ?>
						<?php if( $options->get( 'socialtitle_v5')):?>
                        <div class="title">
                            <h6><?php echo wp_kses( $options->get( 'socialtitle_v5'), $allowed_html ); ?></h6>
                        </div>
						<?php endif; ?>
                        <?php
							$icons = $options->get( 'header_social_v5' );
							if ( ! empty( $icons ) ) :
						?>
						<div class="social-link">
                            <ul class="clearfix">
                                <?php
								foreach ( $icons as $h_icon ) :
								$header_social_icons = json_decode( urldecode( uthan_set( $h_icon, 'data' ) ) );
								if ( uthan_set( $header_social_icons, 'enable' ) == '' ) {
									continue;
								}
								$icon_class = explode( '-', uthan_set( $header_social_icons, 'icon' ) );
								?>
								<li><a href="<?php echo esc_url(uthan_set( $header_social_icons, 'url' )); ?>"><i class="fa <?php echo esc_attr( uthan_set( $header_social_icons, 'icon' ) ); ?>"></i></a></li>
								<?php endforeach; ?>
                            </ul>
                        </div>
						<?php endif; ?>
                    </div>
                </div>

            </div>    
        </div>
    </div>
   <?php endif; ?>

    <!--Start Header--> 
    <div class="header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="header-left">
                    <div class="logo logo--style2">
                        <div class="bg-box" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/home4-logo-shape.png');?>);"></div>
                        <?php echo uthan_logo( $logo_type, $image_logo3, $logo_dimension3, $logo_text, $logo_typography ); ?>
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
                                    <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbarSupportedContent',
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
					<?php if( $options->get( 'header_search_show_v1' ) ):?>
                    <div class="serach-button-style1">
                        <button type="button" class="search-toggler"><i class="icon-search"></i></button>
                    </div>
					<?php endif; ?>
					
					<?php if( $options->get( 'shop_show_v1' ) ):?>
					
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
					
					<div class="nav-btn nav-toggler navSidebar-button clearfix">
                        <div class="bar-box">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
			
					
					<?php if( $options->get( 'button_show_v5' ) ):?>
					<?php if( $options->get( 'button_v5')):?>
                    <div class="header-right_buttom">
                        <div class="btns-box">
                            <a class="btn-one" href="<?php echo wp_kses( $options->get( 'button_link_v5'), $allowed_html ); ?>">
                                <span class="txt"><?php echo wp_kses( $options->get( 'button_v5'), $allowed_html ); ?></span>
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
			
			<?php if( $options->get( 'header_social_v1')):?>
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