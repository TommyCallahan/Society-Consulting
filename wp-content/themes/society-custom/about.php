<?php
/**
* Template Name: About Page */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>

<section class="se-container">

<?php if( have_rows('about_top_section_1') ):
    while ( have_rows('about_top_section_1') ) : the_row(); ?>

	
				
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







<?php if( have_rows('about_top_section_2') ):
    while ( have_rows('about_top_section_2') ) : the_row(); ?>


				<div class="se-slope" style="background-image: url(<?php the_sub_field('section_2_background');?>);">
					<article class="se-content container-thirteen">
					<div class="home-section-content-box">
					<div class="home-main-col">

							<h2><span class="text-bold bold-heading"><?php the_sub_field('section_2_heading');?></span></h2>
							<p>
							<?php $herotxt = get_sub_field('section_2_text');
									echo strip_tags($herotxt, '<strong>');
							?></p>

							<div class="button-container">
								<a href="https://vimeo.com/76973272" class="popup-vimeo button yellow-bg">Watch the Video</a>
							</div>
					</div>
					
					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>
				

<?php  endwhile; endif; ?>



				

<div class="sub-diagonal-content">

	

	<div class="full-width interior-content" style="padding-bottom:300px;">
				

		<?php

		if( have_rows('about_bullet_points') ):

	 	   while ( have_rows('about_bullet_points') ) : the_row(); 
	 	    $namelink = get_sub_field('bullet_point_heading');
						$namelink = str_replace(' ', '', $namelink);
						echo "<a name='".$namelink."'></a>"; ?>
					
					<div class="max-width interior-content-section">
		
						<div class="ics-half ics-left">
						<img class="img-mask" src="<?php bloginfo('url'); ?>/wp-content/uploads/right-cover.svg"/>
						<img class="icon-full" src="<?php echo the_sub_field('bullet_point_icon');?>" />
						</div>
		
						<div class="ics-half ics-right">
						<div class="ics-right-sub">
							<h3 class="ics-header"><?php the_sub_field('bullet_point_heading');?></h3>
							<p class="ics-content">
							<?php $txt = get_sub_field('bullet_point_text');
									echo strip_tags($txt, '<strong>');
							?></p>
						</div>
						</div>
					</div>
						
					
		<?php endwhile; endif;?>

	</div>
				
	</div>



<div class="inside-sub-diagonals" style="margin-top:-275px;">





		<?php 
		if( have_rows('video_section_1') ):
		    while ( have_rows('video_section_1') ) : the_row(); ?>

						
						<div class="se-slope2">
							<article class="se-content2 container-thirteen">
								<h3 class="text-bold bold-heading"><?php the_sub_field('video_1_heading');?></h3>
								<p class="subtext">
									<?php $herotxt = get_sub_field('video_1_text');
											echo strip_tags($herotxt, '<strong>');
									?></p>
									<?php the_sub_field('video_1_embed');?>
							</article>
						</div>
					

		<?php  endwhile; endif; ?>







<?php if( have_rows('awards_and_recognition') ): ?>

	<div class="se-slope2">
	<article class="se-content2 container-thirteen">
	<h3 class="text-bold bold-heading">Awards And Recognition</h3>
	<div class="award-section">
<?php while ( have_rows('awards_and_recognition') ) : the_row(); ?>

		<div class="award-block">
						<a class="awards" href="<?php the_sub_field('link');?>">
							<div class="award-left">
								<img src="<?php the_sub_field('image');?>">
							</div>
							<div class="award-right">
								<strong><?php the_sub_field('text');?></strong><br>
									<?php $herotxt = get_sub_field('about'); echo strip_tags($herotxt, '<strong>'); ?>
							</div>
						</a>
		</div>
			
<?php  endwhile; ?>
	</div>
	</article>
	</div>
 <?php endif; ?>








<?php if( have_rows('benefits_and_compensation') ): ?>
<?php while ( have_rows('benefits_and_compensation') ) : the_row(); ?>

		<div class="se-slope2" style="background-image: url(<?php the_sub_field('background_image');?>);">
<article class="se-content2 container-thirteen">

						

	<h3 class="text-bold bold-heading">Benefits And Compensation</h3>
	<p class="subtext">
		<?php $herotxt = get_sub_field('subtext'); echo strip_tags($herotxt, '<strong>');?>
	</p>
	
<?php endwhile; ?>


<?php if( have_rows('list_columns') ): ?>						
<?php while ( have_rows('list_columns') ) : the_row(); ?>
	<div class="third-list-col"><p class="faux-graphic-text">Benefits</p><?php the_sub_field('column_1');?></div>
	<div class="third-list-col"><p class="faux-graphic-text">Compensation</p><?php the_sub_field('column_2');?></div>
	<div class="third-list-col"><p class="faux-graphic-text">Amenities</p><?php the_sub_field('column_3');?></div>
<?php  endwhile; ?>
<?php endif; ?>



</article>
		</div>
 <?php endif; ?>







<?php if( have_rows('video_section_2') ):
    while ( have_rows('video_section_2') ) : the_row(); ?>

				<div class="se-slope2">
					<article class="se-content2 container-thirteen">
						<h3 class="text-bold bold-heading"><?php the_sub_field('video_2_heading');?></h3>
						<p class="subtext">
							<?php $herotxt = get_sub_field('video_2_text'); echo strip_tags($herotxt, '<strong>');?>
						</p>
							<?php the_sub_field('video_2_embed');?>
					</article>
				</div>
	

<?php  endwhile; endif; ?>





<?php if( have_rows('video_section_2') ):
    while ( have_rows('video_section_2') ) : the_row(); ?>

				<div class="se-slope2" style="background-image: url(../images/jobbg.jpg);">
					<article class="se-content2 container-thirteen">
						<h3 class="weightfour">Ready to join the team?</h1>
						<p>
							<a class="button dark-bg" href="/Careers">View Open Positions &#8250;</a> 
						</p>
					</article>
				</div>
	

<?php  endwhile; endif; ?>


</div>

</section>






<?php // get_sidebar(); ?>
<?php get_footer(); ?>
