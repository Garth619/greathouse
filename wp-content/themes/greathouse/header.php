<?php
/**

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
				
	
	<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			
			
			<header>
				
				<div class="inner_header">
					
					<div class="header_special_deal">
					
						<span>Buy More, Save MorE<br/><span class="emphasis">GET UP TO 25% off with code <span style="color:#fff">megasale</span></span></span>
					
					</div><!-- header_special_deal -->
					
					<div class="header_options">
						
						<img class="search_img" src="<?php bloginfo('template_directory');?>/images/search.png"/>
						
						<div class="cart_signin_wrapper">
							
							<span>Cart</span>
							<span>Sign In</span>
							
						</div><!-- cart_signin_wrapper -->
						
					</div><!-- header_options -->
					
					<div class="header_logo_nav_wrapper">
						
						<a href="">
							<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"/>
						</a>
				
						<div class="mobile_menu_wrapper">
							
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							
						</div><!-- mobile_menu_wrapper -->
						
					</div><!-- header_logo_nav_wrapper -->
					
				</div><!-- inner_header -->
				
			</header>

