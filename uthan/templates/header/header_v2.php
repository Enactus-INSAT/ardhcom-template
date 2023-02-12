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

        <!-- main header -->
        <header class="main-header style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
							<?php echo uthan_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
							</figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
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
                        </div>
							
                        <div class="nav-right">
						<?php if( $options->get( 'shop_show_v1')):?>
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
							$count = WC()->cart->cart_contents_count;
							?>
						
						
							<?php 
							if ( $count > 0 ) {
								?>
						
						
                            <div class="cart-box"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="icon-1"><?php echo esc_html( $count ); ?></i></a></div>
							
							
							<?php
							}
								?>
							
							
							<?php } ?>
								<?php endif; ?>	
							<?php if( $options->get( 'button_show_v2')):?>
							<?php if( $options->get( 'button_v2')):?>
							
                            <div class="btn-box"><a href="<?php echo wp_kses( $options->get( 'button_link_v2'), $allowed_html ); ?>" class="theme-btn btn-one"><?php echo wp_kses( $options->get( 'button_v2'), $allowed_html ); ?></a></div>
							
							<?php endif; ?>
							<?php endif; ?>
						
                        </div>
						
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo">
							
							<?php echo uthan_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?>
							
							</figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
						
							<?php if( $options->get( 'shop_show_v1')):?>
                        <div class="nav-right">
						
							<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
							$count = WC()->cart->cart_contents_count;
							?>
						
						
							<?php 
							if ( $count > 0 ) {
								?>
						
						
                            <div class="cart-box"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="icon-1"><?php echo esc_html( $count ); ?></i></a></div>
							
							
							<?php
							}
								?>
							
							
							<?php } ?>
							
							<?php if( $options->get( 'button_show_v2')):?>
							<?php if( $options->get( 'button_v2')):?>
							
                            <div class="btn-box"><a href="<?php echo wp_kses( $options->get( 'button_link_v2'), $allowed_html ); ?>" class="theme-btn btn-one"><?php echo wp_kses( $options->get( 'button_v2'), $allowed_html ); ?></a></div>
							
							<?php endif; ?>
							<?php endif; ?>
							
                        </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo">
				
				
				<?php echo uthan_logo( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?>
				
				
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
				
					<?php if( $options->get( 'address_title_v1')):?>
				
                    <h4><?php echo wp_kses( $options->get( 'address_title_v1'), $allowed_html ); ?></h4>
					
					<?php endif; ?>
					
                    <ul>
					
						<?php if( $options->get( 'address2nd_v1')):?>
					
                        <li><?php echo wp_kses( $options->get( 'address2nd_v1'), $allowed_html ); ?></li>
						
						<?php endif; ?>
						
						<?php if( $options->get( 'phone_v1')):?>
						
                        <li><a href="tel:<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></li>
						
						<?php endif; ?>
						
						<?php if( $options->get( 'email_v1')):?>
						
                        <li><a href="<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></li>
						
						<?php endif; ?>
						
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->