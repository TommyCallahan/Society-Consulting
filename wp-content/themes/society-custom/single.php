<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>



	<div class="blog-top-space" style="height:145px;"></div>	

	<div class="blog-spacer"></div>

			<div class="blog-contain max-width">

							<div class="blog-left-col">	


			
								<div class="blog-entry-block">
									<div class="blog-entry-img">
									<img src="<?php echo the_post_thumbnail_url() ?>" />	
									</div>

									<div class="se-slope" style="background-color:#fff;">
										
									</div>

									<div class="blog-entry-content">
										<article class="se-content container-thirteen">
										<h1 class="max-width page-title blog-page-title"><?php echo the_title(); ?></h1>
										<p class="by" style="margin-top:-10px;">By <?php echo the_field('post_author'); ?> | <?php echo the_field('publishing_date'); ?></p>
										
										<?php echo the_content(); ?>
										</article>
									</div>

								</div>
								
					
							
								</div>




							<div class="blog-right-col">
								<?php get_sidebar(); ?>
							</div>

						</div>

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
