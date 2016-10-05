<?php
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

global $post, $woocommerce, $product, $woosvi, $woosvi_class;


$props = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
$image = get_the_post_thumbnail($post->ID, apply_filters('single_product_large_thumbnail_size', 'shop_single'), array(
    'title' => $props['title'],
    'alt' => $props['alt'],
    'full' => wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0],
    'thumb' => wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail')[0],
    'img_thumb' => wp_get_attachment_image(get_post_thumbnail_id(), apply_filters('single_product_small_thumbnail_size', 'shop_thumbnail'), 0, $attr = array(
        'title' => $props['title'],
        'alt' => $props['alt'],
    ))
        ));
?>
<a href="#" class="woocommerce-main-image svihidden" data-o_href="#">
    <?php echo $image; ?>
</a>
<div id="woosvi_strap" class="images woosvi_images svihidden">
    <div id="woosvimain"></div>
    <div id="woosvithumbs"></div>

</div>