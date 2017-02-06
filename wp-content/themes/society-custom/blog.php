<?php
/**
* Template Name: Blog */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>


<?php 
// check if the repeater field has rows of data
if( have_rows('offerings_top_section_1') ):

 	// loop through the rows of data
    while ( have_rows('offerings_top_section_1') ) : the_row(); ?>

		<section class="se-container">
				
				<div class="se-slope" style="background-image: url(<?php the_sub_field('section_1_background');?>);">
					<article class="se-content container-thirteen">
						<h1><?php the_sub_field('section_1_heading');?></h1>
						<p class="hero-text">
							<?php $herotxt = get_sub_field('section_1_text');
									echo strip_tags($herotxt, '<strong>');
							?></p>
					</article>
				</div>


<?php  endwhile; endif; ?>







					<div class="se-slope" style="background-color:#F8F8F8; height:310px;">
				
				

					</div>


			<div class="blog-contain max-width">

							<div class="blog-left-col">	


								<?php 

							$the_query = new WP_Query( 'cat=2&posts_per_page=500' ); ?>

							<?php if ( $the_query->have_posts() ) : ?>

			
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				

								<div class="blog-entry-block">
									<div class="blog-entry-img">
									<img src="<?php echo the_post_thumbnail_url() ?>" />	
									</div>

									<div class="se-slope">
										
									</div>

									<div class="blog-entry-content">
										<article class="se-content container-thirteen">
										<h3><?php echo the_title(); ?></h3>
										



										<p class="by">By <?php echo the_field('post_author'); ?> | <?php echo the_field('publishing_date'); ?></p>




										<?php echo the_content(); ?>
										<a class="yellow-text" href="<?php echo the_permalink(); ?>">Read More &#8250;</a>
										</article>
									</div>

								</div>
								


								<?php 
								wp_reset_postdata();
								endwhile; ?>

							<?php endif; ?>



							
								</div>




							<div class="blog-right-col">
								<?php get_sidebar(); ?>
							</div>

						</div>


		</div> <!--end container -->
				



	</div>






<?php get_footer(); ?>
