<?php
/**
* Template Name: Results Page */
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
			





<?php $the_query = new WP_Query( 'cat=18&posts_per_page=1' ); ?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	

				<div class="se-slope result-latest" style="background-image: url(../images/blue-transparency.png), url(<?php echo the_post_thumbnail_url() ?>);">
					<article class="se-content container-thirteen">
					<div class="home-section-content-box">
					<div class="home-main-col">
							
							<?php if(get_field('post_logo'))
										{
											echo '<div class="result-header-image"><img src="' . get_field('post_logo') . '"></div>';
										}?>
							
							<h3><span class="text-bold"><?php the_title();?></h3>
							<p><?php echo the_field('post_snippet'); ?></p>

							<div class="button-container">
								<a href="<?php echo the_permalink();?>" class="button yellow-bg">Read More &#8250;</a>
							</div>
					</div>
					
					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>
				

<?php wp_reset_postdata(); endwhile; endif; ?>





		</div> <!--end container -->
				

	<div class="sub-diagonal-content results-grid-padding">
		<div class="max-width">

	<?php $query2 = new WP_Query( 'cat=3' ); ?>

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



				<?php } wp_reset_postdata();?>	

	
		</div>

	</div>






<?php // get_sidebar(); ?>
<?php get_footer(); ?>
