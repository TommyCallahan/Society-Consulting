<?php
/**
* Template Name: Offerings */
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
							
							<a href="/Contact" class="button dark-bg mobile-cta">Learn More &#8250;</a>
					
					</article>
				</div>
			


<?php  endwhile; endif; ?>




<?php 
// check if the repeater field has rows of data
if( have_rows('offerings_top_section_2') ):

 	// loop through the rows of data
    while ( have_rows('offerings_top_section_2') ) : the_row(); ?>


				<div class="se-slope" style="background-image: url(<?php the_sub_field('section_2_background');?>);">
					<article class="se-content container-thirteen">
					<div class="home-section-content-box">
					<div class="home-main-col">

							<h3><span class="text-bold"><?php the_sub_field('section_2_heading');?></h3>
							<p><img src="<?php the_sub_field('section_2_image');?>"></p>
							<p><?php the_sub_field('section_2_text');?></p>

							<div class="button-container">
								<a href="<?php the_sub_field('section_2_link');?>" class="button yellow-bg">Learn More &#8250;</a>
							</div>
					</div>
					
					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>
				

<?php  endwhile; endif; ?>



		</div> <!--end container -->
				

	<div class="sub-diagonal-content">

		<div class="full-width section-menu">
			<ul class="container-thirteen">

				<?php

// check if the repeater field has rows of data
if( have_rows('offerings_bullet_points') ):

 	// loop through the rows of data
    while ( have_rows('offerings_bullet_points') ) : the_row(); ?>
	
	<?php $namelink = get_sub_field('bullet_point_heading');
	   	  $namelink = preg_replace('/\W+/', '_', $namelink); ?>


				<li><a href="#<?php echo $namelink;?>"><?php the_sub_field('bullet_point_heading');?></a></li>

<?php 

    endwhile;

endif;

?>



			</ul>
		</div>


		<div class="full-width interior-content">
			





<?php

// check if the repeater field has rows of data
if( have_rows('offerings_bullet_points') ):

 	// loop through the rows of data
    while ( have_rows('offerings_bullet_points') ) : the_row(); ?>
	
			
			<div class="max-width interior-content-section">

			<?php $namelink = get_sub_field('bullet_point_heading');
				$namelink = preg_replace('/\W+/', '_', $namelink);
				echo "<a class='namelink' name='".$namelink."'></a>"; ?>

				<div class="ics-half ics-left">
				<img class="img-mask" src="<?php bloginfo('url'); ?>/wp-content/uploads/right-cover.svg"/>
				<img class="icon-full" src="<?php echo the_sub_field('bullet_point_icon');?>" />
				</div>

				<div class="ics-half ics-right">
				<div class="ics-right-sub">
					<h3 class="ics-header"><?php the_sub_field('bullet_point_heading');?></h3>
					<p class="ics-content"><?php the_sub_field('bullet_point_text');?></p>
						<?php $imgcheck = get_sub_field('bullet_point_extra');
						 if( get_sub_field('bullet_point_extra') ): ?>

						 <?php 
						 if (strpos($imgcheck,'<img') !== false) {
 							   echo '<div>';
							} else {
 							   echo '<div class="ics-extra pull-box">';
							} ?>							
 							<?php the_sub_field('bullet_point_extra'); ?>
						</div>
						<?php endif; ?>
				</div>
				</div>
			</div>
					
				
<?php 

    endwhile;

endif;

?>




		</div>
				

			
		<div class="full-width containment dark-bg">
					<h3 class="bold-heading">Flexible Engagements</h3>
					<p class="sub-head flexible-engagement-sub">Choose from an array of options that work best for your business.</p>

				<div class="contain-width container-thirteen flexible-engagement">
				

					<?php 

					$the_query = new WP_Query( 'cat=4&posts_per_page=3' ); ?>

					<?php if ( $the_query->have_posts() ) : ?>

	
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
							<div class="third-width">
								<h4 class="yellow-text"><?php echo the_title(); ?></h4>
								<p><?php the_content(); ?></p>
							</div>



						<?php 
						wp_reset_postdata();
						endwhile; ?>


	


					<?php endif; ?>



				</div>
		</div>


		<div class="full-width yellow-bg containment offerings-form">
					<h3 class="weightfour">Contact Us to get started</h3>

					<div class="form-box">
						<?php echo do_shortcode( '[contact-form-7 id="557" title="Offerings Contact Form"]' ); ?>

					</div>
					</div>
		</div>

	</div>






<?php // get_sidebar(); ?>
<?php get_footer(); ?>
