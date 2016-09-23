<!-- Banners for the Inner Staic Pages. Blog and Posts are located on the index.php and other post temlplates -->

<?php if(get_field('inner_page_banners')): ?>

	<?php $innerbanner = wp_get_attachment_image_src(get_field('inner_page_banners'), 'innerbanner'); ?>
	<div class="banner" style="background:url(<?php echo $innerbanner[0]; ?>) top center no-repeat;background-size:cover;">

<?php else:?>

	<div class="banner">


<?php endif;?>

<!-- Below is changing the color options for the banner text on inner pages -->

	<?php if( get_field('banner_font_color') == 'Black' ): ?>

		<span style="color:#000;"><?php the_title();?></span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color') == 'White' ): ?>

		<span style="color:#fff"><?php the_title();?></span>
		
	<?php endif;?>
	
	<?php if( get_field('banner_font_color') == 'Blue' ): ?>

		<span style="color:#79b7c0"><?php the_title();?></span>
		
	<?php endif;?>
	
</div><!-- banner -->

