<?php
/**
 * Template Name: Basic Inner Page with Sidebar
 
 */

get_header(); ?>


<div class="banner">
	
	<span class="">Inner Page</span>
	
	
</div><!-- banner -->


<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	<div class="sidebar_wrapper">
		
		<div class="discount_wrapper">
			
			<a href="">
				
				<span class="sale_title">sale</span><!-- sale_title -->
				<div class="blue_box"></div><!-- blue_box -->
				<span class="discount_description">take 30% off bedding</span><!-- discount_description -->
				
				<span class="blue_shop">Shop Now</span>
			
			</a>
			
		</div><!-- discount_wrapper -->
		
		<div id="sidebar">
			
			<ul>
				<li><a href="">Patio</a></li>
				<li><a href="">Sofas</a></li>
				<li><a href="">Accessories</a></li>
				<li><a href="">Bedroom</a></li>
				<li><a href="">Dining Room</a></li>
				<li><a href="">Living Room</a></li>
				<li><a href="">Office</a></li>
				<li><a href="">Pool Tables</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
				<li><a href="">Rugs</a></li>
			</ul>
			
		</div><!-- sidebar -->
		
	</div><!-- sidebar_wrapper -->
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>