<?php
/**
* Template Name: Partners Page */
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

	<?php if( have_rows('partner') ):
    while ( have_rows('partner') ) : the_row(); ?>


						<a class="third-col" target="_blank" href="<?php the_sub_field('partner_link');?>">
 						 
									<div class="partner_image"><img src="<?php the_sub_field('partner_image');?>"></div>
    						          <div class="partner_name"><?php the_sub_field('partner_name');?></div>
   						          <div class="partner_text"><?php the_sub_field('partner_text');?></div>
						</a>



				<?php  endwhile; endif; ?>	

	
		</div>

	</div>






<?php // get_sidebar(); ?>
<?php get_footer(); ?>
