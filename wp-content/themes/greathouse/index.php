<?php
/**
 * Main template file
 *
 */

get_header(); ?>

		
<?php include('banner.php');?>


<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	
	
	<?php get_sidebar('blog'); ?>
	
	
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>

