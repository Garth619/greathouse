<?php if(get_field('blog_page_banners','option')): ?>

	<?php $innerbanner = wp_get_attachment_image_src(get_field('blog_page_banners','option'), 'innerbanner'); ?>
	<div class="banner" style="background:url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

<?php else:?>

	<div class="banner">


<?php endif;?>


<!-- Below is changing the color options for the banner text on blog posts -->


	<?php if( get_field('banner_font_color_blog','option') == 'Black' ): ?>

		<span style="color:#000;">Blog</span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color_blog','option') == 'White' ): ?>

		<span style="color:#fff">Blog</span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color_blog','option') == 'Blue' ): ?>

		<span style="color:#79b7c0">Blog</span>
		
	<?php endif;?>
	

</div><!-- banner -->


