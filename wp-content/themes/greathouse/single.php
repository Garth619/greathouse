<?php
/**
 * Template for displaying all single posts
 *
 */

get_header(); ?>

<?php include('banner-blog.php');?>

		
<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	
	
	<?php get_sidebar('blog'); ?>
	
	
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>


