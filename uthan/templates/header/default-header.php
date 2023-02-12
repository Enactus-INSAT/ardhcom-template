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
        <header class="main-header">           
			<?php if( $options->get( 'top_header_show_v1')):?>
            <div class="header-top">
                <div class="shape" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-16.png');?>);"></div>
                <div class="auto-container">
                    <div class="top-inner clearfix">
					
						<?php if( $options->get( 'header_social_show_v1')):?>
					
                        <div class="left-column pull-left">
						

                            <ul class="social-links clearfix">
							
								<?php if( $options->get( 'socialtitle_v1')):?>
                                <li><p><?php echo wp_kses( $options->get( 'socialtitle_v1'), $allowed_html ); ?></p></li>
								<?php endif; ?>
								
							                <?php echo wp_kses( $options->get( 'social_profile'), $allowed_html ); ?>
								
                            </ul>
					
							
                        </div>
						
						<?php endif; ?>
						
                        <div class="right-column pull-right">
                            <ul class="info-box clearfix">
							
								<?php if( $options->get( 'header_search_show_v1')):?>
							
                                <li class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
                                        <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                            <div class="form-container">
                                                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                    <div class="form-group">
                                                        <input type="search" name="s" value="" placeholder="<?php echo wp_kses( $options->get( 'search_text_v1'), $allowed_html ); ?>" required="">
                                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								
								<?php endif; ?>
								
								<?php if( $options->get( 'phone_v1')):?>
								
                                <li>
                                    <div class="icon-box"><i class="fas fa-phone"></i></div>
                                    <p><?php echo wp_kses( $options->get( 'phone_title_v1'), $allowed_html ); ?> <a href="tel:<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></p>
                                </li>
								
								<?php endif; ?>
								
								<?php if( $options->get( 'email_v1')):?>
								
                                <li>
                                    <div class="icon-box"><i class="fas fa-envelope"></i></div>
                                    <p><?php echo wp_kses( $options->get( 'email_title_v1'), $allowed_html ); ?> <a href="<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></p>
                                </li>
								
								<?php endif; ?>
								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
			<?php endif; ?>
			
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <div class="shape" style="background-image: url(<?php echo esc_url(get_template_directory_uri().'/assets/images/shape/shape-1.png');?>);"></div>
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
									<ul class="navigation scroll-nav clearfix">
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
						
						
                           <div class="cart-box"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="icon-1"></i><span class="product_number"><?php echo esc_html( $count ); ?></span></a></div>
							
							
							<?php
							}
								?>
							
							
							<?php } ?>
							
							
							<?php endif; ?>
							
							<?php if( $options->get( 'button_show_v1')):?>
							<?php if( $options->get( 'button_v1')):?>
							
                            <div class="btn-box"><a href="<?php echo wp_kses( $options->get( 'button_link_v1'), $allowed_html ); ?>" class="theme-btn btn-one"><?php echo wp_kses( $options->get( 'button_v1'), $allowed_html ); ?></a></div>
							
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
						
						
							<div class="cart-box"><a href="<?php echo WC()->cart->get_cart_url(); ?>"><i class="icon-1"></i><span class="product_number"><?php echo esc_html( $count ); ?></span></a></div>
							
							
							<?php
							}
								?>
							
							
							<?php } ?>
							
							<?php if( $options->get( 'button_show_v1')):?>
							<?php if( $options->get( 'button_v1')):?>
							
                            <div class="btn-box"><a href="<?php echo wp_kses( $options->get( 'button_link_v1'), $allowed_html ); ?>" class="theme-btn btn-one"><?php echo wp_kses( $options->get( 'button_v1'), $allowed_html ); ?></a></div>
							
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
						
                        <li><a href="<?php echo wp_kses( $options->get( 'phone_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'phone_v1'), $allowed_html ); ?></a></li>
						
						<?php endif; ?>
						
						<?php if( $options->get( 'email_v1')):?>
						
                        <li><a href="<?php echo wp_kses( $options->get( 'email_link_v1'), $allowed_html ); ?>"><?php echo wp_kses( $options->get( 'email_v1'), $allowed_html ); ?></a></li>
						
						<?php endif; ?>
						
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->