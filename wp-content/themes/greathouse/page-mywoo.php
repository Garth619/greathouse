<?php
/**
 * Template Name: My Woo
 *

 */

get_header(); ?>

		
		
<div class="product_wrapper">
	
	<div class="inner_product_wrapper">
	
	<?php get_template_part( 'loop', 'page' ); ?>
	
	</div><!-- inner_product_wrapper -->
			
	</div><!-- product_wrapper -->


<?php get_footer(); ?>