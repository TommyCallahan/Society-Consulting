<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="blog-top-space"></div>


		<?php if ( have_posts() ) : ?>

		
				<h1 class="max-width page-title blog-page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		
	<div class="blog-spacer"></div>

	<div class="blog-contain max-width">

							<div class="blog-left-col">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();?>


								<div class="blog-entry-block">
									<div class="blog-entry-img">
									<img src="<?php echo the_post_thumbnail_url() ?>" />	
									</div>

									<div class="se-slope" style="background-color:#fff;">
										
									</div>

									<div class="blog-entry-content">
										<article class="se-content">
										<h3><?php echo the_title(); ?></h3>
										<p class="by">By <?php echo the_field('post_author'); ?> | <?php echo the_field('publishing_date'); ?></p>

										<p><?php echo the_content(); ?></p>
										<a class="yellow-text" href="<?php echo the_permalink(); ?>">Read More &#8250;</a>
										</article>
									</div>

								</div>


		<?php	// End the loop.
			endwhile;

	

		// If no content, include the "No posts found" template.
		else : ?>





		
				<h1 class="max-width page-title blog-page-title">Nothing Was Found</h1>
		
	<div class="blog-spacer"></div>

	<div class="blog-contain max-width">

							<div class="blog-left-col">

<?php get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>




							<div class="blog-right-col">
								<?php get_sidebar(); ?>
							</div>

						</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
