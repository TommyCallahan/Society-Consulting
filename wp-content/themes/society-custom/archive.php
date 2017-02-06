<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

		<div class="blog-top-space"></div>	



		<?php if ( have_posts() ) : ?>

		
				<?php
					the_archive_title( '<h1 class="max-width page-title blog-page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
		
		
<div class="blog-spacer"></div>




			<div class="blog-contain max-width">

							<div class="blog-left-col">	


			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
			
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
										<?php echo the_content(); ?>
										<a class="yellow-text" href="<?php echo the_permalink(); ?>">Read More &#8250;</a>
										</article>
									</div>

								</div>
								
					<?php endwhile; ?>
							
	<?php
		

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

							
								</div>




							<div class="blog-right-col">
								<?php get_sidebar(); ?>
							</div>

						</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
