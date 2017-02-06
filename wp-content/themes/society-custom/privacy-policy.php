<?php
/**
* Template Name: Privacy Policy */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>



		<section class="se-container">
				
				<div class="se-slope" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
					<article class="se-content container-thirteen">
						<h1><?php the_title();?></h1>
						<?php wp_reset_postdata(); ?>
			
						<p class="hero-text">
							<?php echo the_field('excerpt');?>
							</p>
						
					</article>
				</div>










					<div class="se-slope" style="background-color:#F8F8F8; height:310px;">
				
				

					</div>


			<div class="blog-contain max-width">

							<div class="privacy-policy">	

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php  the_content();?>
<?php  endwhile; endif; ?>
							
								</div>




							

						</div>


		</div> <!--end container -->
				



	</div>






<?php get_footer(); ?>
