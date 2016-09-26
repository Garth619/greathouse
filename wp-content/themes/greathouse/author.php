<?php
/**
 * Template for displaying Author Archive pages
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
			
	<?php
	/*
	 * Queue the first post, that way we know who
	 * the author is when we try to get their name,
	 * URL, description, avatar, etc.
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

				<h1 style="margin-top:20px;" class="page-title author"><?php printf( __( 'Author Archives: %s', 'twentyten' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>



<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/*
	 * Run the loop for the author archive page to output the authors posts
	 * If you want to overload this in a child theme then include a file
	 * called loop-author.php and that will be used instead.
	 */
	get_template_part( 'loop', 'author' );
?>

			
		</div><!-- content -->
		
	</div><!-- container -->
	
	
	
	<?php get_sidebar('blog'); ?>
	
	
	
</div><!-- container_wrapper -->


		
<?php get_footer(); ?>
