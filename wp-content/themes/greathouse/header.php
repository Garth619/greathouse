<?php
/**

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/slick/slick/slick-theme.css"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
				
	
	
			
			
			<header>
				
				<div class="inner_header">
					
					<div class="header_special_deal">
					
						
						<span class="mobile_deal emphasis">GET UP TO 25% off with code <span style="color:#fff">megasale</span></span>
						<span class="tablet_deal">Buy More, Save MorE <span class="emphasis">&nbsp;GET UP TO 25% off with code <span style="color:#fff">megasale</span></span></span>
						
					
					</div><!-- header_special_deal -->
					
					<div class="header_options">
						
						<div class="header_options_inner">
						
							<img class="search_img" src="<?php bloginfo('template_directory');?>/images/search.png"/>
						
							<div class="cart_signin_wrapper">
							
								<span>Cart</span>
								<span>Sign In</span>
							
							</div><!-- header_options_inner -->
							
						</div><!-- cart_signin_wrapper -->
						
					</div><!-- header_options -->
					
					<div class="header_logo_nav_wrapper">
						
						
						<div class="logo_wrapper">
						
							<a href="">
								<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
							</a>
						
						</div><!-- logo_wrapper -->
				
						<div class="mobile_menu_wrapper">
							
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							
						</div><!-- mobile_menu_wrapper -->
						
						
						<div class="desktop_menu_wrapper">
						
							<div class="desktop_menu">
								
								<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
							
							</div><!-- desktop_menu -->
							
							<div class="cart_signin_wrapper">
								
							</div><!-- cart_signin_wrapper -->
						
						</div><!-- desktop_menu_wrapper -->
						
					</div><!-- header_logo_nav_wrapper -->
				
					
				</div><!-- inner_header -->
				
			</header>
			
			<section class="main">
 
