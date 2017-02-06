<?php
/**
* Template Name: Careers Page */
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



<div class="content-wrap container career-wrap">

				<div style="margin: 0 auto; min-height:130px; border-bottom:0px solid #839096; position:relative; display:block; color:#202A36;">
				<h3>View open positions below</h3>
				</div>
			</div>

				<div class="filter-text">Filter By Location:</div>

<div class="button-group filters-button-group">
  <button class="button yellow-bg is-checked" data-filter="*">Show All</button><button class="button yellow-bg" data-filter=".Bellevue">Bellevue, WA</button><button class="button yellow-bg" data-filter=".Chicago">Chicago, IL</button><button class="button yellow-bg" data-filter=".Austin">Austin, TX</button><button class="button yellow-bg" data-filter=".NY">New York, NY</button><button class="button yellow-bg" data-filter=".SF">San Francisco, CA</button><button class="button yellow-bg" data-filter=".LA">Los Angeles, CA</button>

</div>



<div class="grid js-isotope"
  data-isotope-options='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 200 } }'>


<?php query_posts('cat=8');
while (have_posts()) : the_post();
$tags = wp_get_post_tags($post->ID);
  if ($tags) {
    foreach($tags as $tag) {
      
    }
  }






?>




<div class="<?php echo $tag->name; ?> grid-item" data-category="<?php echo $tag->name; ?>">
	<h2><?php the_title();?></h2>
 	<div class="job-location"> 
 		<?php
if ($tag->name == "SF") {
	$city = "San Francisco, CA";
}
elseif ($tag->name == "LA") {
	$city = "Los Angeles, CA";
}
elseif ($tag->name == "NY") {
	$city = "New York, NY";
}
elseif ($tag->name == "Austin") {
	$city = "Austin, TX";
}
elseif ($tag->name == "Chicago") {
	$city = "Chicago, IL";
}
elseif ($tag->name == "Bellevue") {
	$city = "Bellevue, WA";
}
else {
	$city = $tag->name;
}

 	 echo $city; ?> </div>
	<p><?php the_content();?></p>
	<a target="_blank" class="button dark-bg linkedin-link" href="<?php echo the_field('job_posting_link');?>">View Job on LinkedIn</a>
</div>

<?php endwhile; ?>



</div>

	
		</div>

	</div>


					
				






		</div> <!--end container -->
				







<?php // get_sidebar(); ?>
<?php get_footer(); ?>
