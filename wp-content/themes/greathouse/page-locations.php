<?php
/**
 * Template Name: Locations
 
 */

get_header(); ?>


<?php include('banner.php');?>


<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			
			<div class="locations_wrapper">
				
				<div class="location">
					
					<div class="location_content">
					
						<span class="large_header">San Diego</span>
						<a class="sub_header" href="https://www.google.com/maps/place/9050+Kenamar+Dr,+San+Diego,+CA+92121/@32.8870034,-117.1580989,17z/data=!4m5!3m4!1s0x80dbf8b3f559e50b:0xf8969d11a3f3e4a!8m2!3d32.8869989!4d-117.1559049">9050 KENAMAR DRIVE<br/>SAN DIEGO, CA 92121</a>
						<a class="locations_phone" href="tel:8582719400">858.271.9400</a>
						<a href="https://www.google.com/maps/place/9050+Kenamar+Dr,+San+Diego,+CA+92121/@32.8870034,-117.1580989,17z/data=!4m5!3m4!1s0x80dbf8b3f559e50b:0xf8969d11a3f3e4a!8m2!3d32.8869989!4d-117.1559049" class="locations_directions">Get Directions</a><!-- locations_directions -->
					
					</div><!-- location_content -->
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.422218078332!2d-117.15809894926842!3d32.887003385582815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbf8b3f559e50b%3A0xf8969d11a3f3e4a!2s9050+Kenamar+Dr%2C+San+Diego%2C+CA+92121!5e0!3m2!1sen!2sus!4v1474912883743" frameborder="0" style="border:0" allowfullscreen></iframe>
					
					
					
				</div><!-- location -->
				
				
				<div class="location">
					
					<div class="location_content">
					
						<span class="large_header">La Costa</span>
						<a class="sub_header" href="https://www.google.com/maps/place/7720+El+Camino+Real,+Carlsbad,+CA+92009/@33.0834457,-117.2686628,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0b61c94063b3:0xa2e40bb5cdce4feb!8m2!3d33.0834412!4d-117.2664688">7720 El camino Real<br/>carlsbad, CA 92009</a>
						<a class="locations_phone" href="tel:7604540013">760.454.0013</a>
						<a href="https://www.google.com/maps/place/7720+El+Camino+Real,+Carlsbad,+CA+92009/@33.0834457,-117.2686628,17z/data=!3m1!4b1!4m5!3m4!1s0x80dc0b61c94063b3:0xa2e40bb5cdce4feb!8m2!3d33.0834412!4d-117.2664688" class="locations_directions">Get Directions</a><!-- locations_directions -->
					
					</div><!-- location_content -->
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3342.974872272116!2d-117.26866284957953!3d33.083445675511754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc0b61c94063b3%3A0xa2e40bb5cdce4feb!2s7720+El+Camino+Real%2C+Carlsbad%2C+CA+92009!5e0!3m2!1sen!2sus!4v1474913243894" frameborder="0" style="border:0" allowfullscreen></iframe>
					
				</div><!-- location -->
				
			</div><!-- locations_wrapper -->
			
			<span class="hours_title">Store Hours</span>
			<span class="hours">mon - sun &nbsp;|&nbsp;  10am - 6pm</span>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	<?php get_sidebar(); ?>
	
</div><!-- container_wrapper -->

<section class="form_wrapper">
	
	<div class="form_inner">
		
		<span class="sub_header">ask us anything</span>
		<span class="large_header">We are here to help</span>
		
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
		
	</div><!-- form_inner -->
	
</section><!-- form_banner -->

		
<?php get_footer(); ?>
