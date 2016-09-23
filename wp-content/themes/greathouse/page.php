<?php
/**
 * Template for displaying all pages
 *

 */

get_header(); ?>

		<?php include('banner.php');?>
		
		
		

		<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	<?php get_sidebar(); ?>
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>
