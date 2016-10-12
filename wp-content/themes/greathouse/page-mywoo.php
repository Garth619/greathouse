<?php
/**
 * Template Name: My Woo
 *

 */

get_header(); ?>



		
		
<div class="product_wrapper">

	<div class="inner_product_wrapper">
		
		<?php if(is_page(12)):?>

		<a href="<?php bloginfo('url');?>/cart" class="back_to_cart"><< Back to Cart</a>

		<?php endif;?>
	
		<?php get_template_part( 'loop', 'page' ); ?>
	
	</div><!-- inner_product_wrapper -->
			
	</div><!-- product_wrapper -->


<?php get_footer(); ?>