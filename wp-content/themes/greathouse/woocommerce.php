<?php
/**
 * Shop
 *

 */

get_header(); ?>

		
		
<div class="product_wrapper">
	
	
	
	
	
		<div class="myfilter_wrapper">
	
			<?php if ( is_active_sidebar('my-product-search-filter')):?>
	
				<h2 class="my_filter_title">Filter By</h2>

					<ul>
					
						<?php dynamic_sidebar('my-product-search-filter');?>
					
					</ul>
				<?php endif; ?>
	
	
		</div><!-- myfilter_wrapper -->
		
	
	
		<?php woocommerce_content(); ?>
	
	
	
	
	
			
	</div><!-- product_wrapper -->


<?php get_footer(); ?>