<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

				
<?php include('banner-blog.php');?>
		

<div class="container_wrapper">
	
	<div class="container">
		
		<div id="content">
			
			<h1 class="page-title" style="margin-top:15px;"><?php
					printf( __( 'Category Archives: %s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

							get_template_part( 'loop', 'category' );
				?>
			
		</div><!-- content -->
		
	</div><!-- container -->
	
	
	
	<?php get_sidebar('blog'); ?>
	
	
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>