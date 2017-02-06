<?php
/**
* Template Name: History Page */
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
							<?php $herotxt = get_the_content();
									echo strip_tags($herotxt, '<strong>');
							?>
						</p>
					</article>
				</div>
			







	

				<div class="se-slope result-latest" style="background-color:#F8F8F8;">
					<article class="se-content container-thirteen">
					</article>
				</div>

							<div class="sub-diagonal-content results-grid-padding">
		<div class="max-width about-spacing">
			<div class="history-contain">

<div class="history-text-block">
<?php if( have_rows('history_snippet') ):
    while ( have_rows('history_snippet') ) : the_row(); ?>

<div class="history-block">
 <div class="history-year"><?php the_sub_field('year');?></div>
    						
 <div class="history-text"><?php the_sub_field('history_text');?></div>
</div>
						

<?php  endwhile; endif; ?>
	</div>

<div class="history-image-block">

<?php if( have_rows('page_images') ):
    while ( have_rows('page_images') ) : the_row(); ?>

<img class="history-images" src="<?php the_sub_field('page_image');?>">

<?php  endwhile; endif; ?>
</div>
		</div>

	</div>


					
				






		</div> <!--end container -->
				







<?php // get_sidebar(); ?>
<?php get_footer(); ?>
