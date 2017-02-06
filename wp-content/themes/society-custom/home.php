<?php
/**
* Template Name: Home */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>




		<section class="se-container">
				
				<div class="se-slope hero" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
					<article class="se-content">
						<h1><?php echo the_field('hero_heading'); ?></h1>
						<?php echo the_field('hero_content'); ?>
						
						<div class="button-container full-width-button-container hero-btn">
							<a class="popup-vimeo button yellow-bg" href="http://vimeo.com/154261187">Watch the Video</a><br>
						</div>
					</article>
				</div>
				


<?php

// check if the repeater field has rows of data
if( have_rows('content_sections') ):

 	// loop through the rows of data
    while ( have_rows('content_sections') ) : the_row(); ?>



			<div class="se-slope" style="background-image: url(<?php the_sub_field('section_background');?>);">
					<article class="se-content">
					<div class="home-section-content-box container-thirteen">	
						<div class="home-main-col">
							<div class="home-direction-wrap">
						<h3 class="home-heading">
							<?php $homeh3 = get_sub_field('section_heading');
									echo strip_tags($homeh3, '<strong>');
							?>
						</h3>
						

						<p><?php the_sub_field('section_text'); ?></p>

						<div class="button-container">
							<a href="<?php the_sub_field('section_link');?>" class="button yellow-bg">Learn More &#8250;</a>
						</div>
					
					</div>
					</div>

					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>
<?php 

    endwhile;

endif;

?>

			


		</div> <!--end container -->
			
	



<?php 

$the_query1 = new WP_Query( 'cat=2&posts_per_page=1' ); ?>

<?php if ( $the_query1->have_posts() ) : ?>

	
	<?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?>
		

		<div class="full-width home-insight">
					<div class="half-width home-insight-image" style="background-image: url(<?php the_post_thumbnail_url();?>)">
					</div>
					
					<div class="half-width">


						<div class="home-insight-content">
						
					
						<div class="button yellow-bg home-post-icon"><span>Insight</span></div>
						


						<h3 class="bold-heading"><?php echo the_title(); ?></h3>
						<p class="home-post-byline"><?php echo the_field('post_author'); ?> | <?php echo the_field('publishing_date'); ?></p>


						<p><?php the_content(); ?></p>
						<div class="home-post-link"><a class="readmoreplus" href="<?php echo the_permalink(); ?>">Read More</a></div>
				

						</div>
					</div>
				
			</div>



	<?php 
	wp_reset_postdata();
	endwhile; ?>


	


<?php endif; ?>


				
		<div class="full-width home-results">
					<h3 class="bold-heading">See the results</h3>

					<div class="home-results-container">


		<?php $query2 = new WP_Query( 'cat=3&showposts=3' ); ?>


	

	
					<?php 
					while ( $query2->have_posts() ) {
					$query2->the_post(); ?>


						<a href="<?php echo the_permalink(); ?>" class="square square-bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
 						   <div class="square-content">
 						       <div class="square-table">
  						           <div class="square-table-cell">
    						          <?php echo the_title(); ?>
    						          <?php if(get_field('post_logo'))
										{
											echo '<div class="square-table-image"><img src="' . get_field('post_logo') . '"></div>';
										}?>
    						          <div class="square-table-link">Read More &#8250;</div>
      						      </div>
  						      </div>
 						   </div>
						</a>



				<?php }

					wp_reset_postdata();?>	


				</div>
					
				<div class="clear-fix"></div>
		
			</div>





				<div class="full-width trusted-clients">
					Trusted by Industry Leaders
						<div class="clients">
				<div id="owl-demo" class="owl-carousel owl-theme max-width">

					<?php
					if( have_rows('partner_logos') ):
					while ( have_rows('partner_logos') ) : the_row();
					?>
					     
  						<div class="item"><img src="<?php the_sub_field('company_logo'); ?>"/></div>

					<?php
					endwhile;
					endif;
					?>
</div>


						</div>
				</div>


			
				<div class="who-society">
					<div class="container-thirteen">
					<div class="home-main-col off-col who-off-col">
					</div>
					
					<div class="home-main-col who-on-col">
						<h3 class="whois-header"><?php echo the_field('pre-footer-heading'); ?></h3>
						<p><?php echo the_field('pre-footer_content'); ?></p>

						<div class="button-container full-width-button-container">
							<a href="<?php echo the_field('pre-footer_link')?>" class="button yellow-bg">Learn More &#8250;</a>
						</div>

					</div>
				</div>
				</div>






<?php // get_sidebar(); ?>
<?php get_footer(); ?>
