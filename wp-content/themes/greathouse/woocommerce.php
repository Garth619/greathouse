<?php
/**
 * Shop
 *

 */

get_header(); ?>

		
		
<div class="product_wrapper">
	
	
	
	<div class="myfilter_wrapper">
	
	<?php if ( is_active_sidebar('my-product-search-filter')):?>

		<?php dynamic_sidebar('my-product-search-filter');?>
			
		<?php endif; ?>
	
	
	</div><!-- myfilter_wrapper -->
	
	
	
	
	
	<?php woocommerce_content(); ?>
			
	</div><!-- product_wrapper -->


<?php get_footer(); ?>