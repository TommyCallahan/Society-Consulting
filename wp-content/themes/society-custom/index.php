<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>

	
<?php
get_header();
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>



						<section class="se-container">
				
				<div class="se-slope" style="background-image: url(images/pike-place.jpg);">
					<article class="se-content">
						<h1>Delight Built By Data</h1>
						<p class="hero-text">Society is a full service consulting firm that creates strong <span class="text-bold">customer experience</span> through <span class="text-bold">big data</span> and <span class="text-bold">analytics.</span>
						
						<div class="button-container full-width-button-container hero-btn">
							<a href="#" class="button yellow-bg">Watch the video</a></p>
						</div>
					</article>
				</div>

				<div class="se-slope" style="background-image: url(images/bldg.jpg);">
					<article class="se-content">
					<div class="home-section-content-box">	
						<div class="home-main-col">
						<h3><span class="text-bold">Big Data</span> is the beginning</h3>
						<div class="home-section-graphic">
							<div class="faux-graphic-text">Design</div>
							<div class="faux-graphic-text">Build</div>
							<div class="faux-graphic-text">Operate</div>
							</div>
						<p>Pellentesque sit amet semper libero. Vivamus lacinia mauris nec tortor viverra tristique. Maecenas sit amet ante vitae nisi feugiat elementum. Phasellus magna nibh, dignissim in mi id, sodales ullamcorper justo. Curabitur aliquam feugiat pharetra. Aliquam erat volutpat.</p>

						<div class="button-container">
							<a href="#" class="button yellow-bg">Learn More &gt;</a>
						</div>
					
					</div>

					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>



				<div class="se-slope" style="background-image: url(images/office.jpg);">
					<article class="se-content">
					<div class="home-section-content-box">
						<div class="home-main-col off-col">
						</div>
					
						<div class="home-main-col">
							<div class="home-content-left-side">
							<h3><span class="text-bold">Analytics</span> provide the insights</h3>
							<div class="home-section-graphic transparent-yellow-bg">
							<div class="faux-graphic-text">Implement</div>
							<div class="faux-graphic-text">Analyze</div>
							<div class="faux-graphic-text">Optimize</div>
							</div>
							<p>aecenas porttitor vel orci ac fermentum. Integer elementum, magna vel blandit dictum, nisl ante vestibulum tellus, vitae suscipit arcu velit in justo. Aliquam pulvinar tincidunt dolor, a pulvinar ipsum mollis at. Nunc hendrerit luctus felis, nec placerat nulla.</p>

							<div class="button-container">
								<a href="#" class="button dark-bg">Learn More &gt;</a>
							</div>
							</div>
						</div>
					</div>
					</article>
				</div>



				<div class="se-slope" style="background-image: url(images/phone.jpg);">
					<article class="se-content">
					<div class="home-section-content-box">
					<div class="home-main-col">
							<h3><span class="text-bold">customer experience</span> is the result</h3>
							<div class="home-section-graphic">
							<div class="faux-graphic-text">Research</div>
							<div class="faux-graphic-text">Strategize</div>
							<div class="faux-graphic-text">Support</div>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum pellentesque mauris, a pharetra mauris faucibus vel. Cras ac ligula eget dui dictum molestie. Pellentesque sit amet semper libero. Vivamus lacinia mauris nec tortor viverra tristique. Maecenas sit amet ante vitae nisi feugiat elementum. Phasellus magna nibh, dignissim in mi id, sodales ullamcorper justo. Curabitur aliquam feugiat pharetra. Aliquam erat volutpat.</p>

							<div class="button-container">
								<a href="#" class="button yellow-bg">Learn More &gt;</a>
							</div>
					</div>
					
					<div class="home-main-col off-col">
					</div>
					</div>
					</article>
				</div>
				


		</div> <!--end container -->
			





			<div class="full-width home-insight">
					<div class="half-width home-insight-image">
					</div>
					
					<div class="half-width">
						<div class="home-insight-content">
						<div class="button yellow-bg home-post-icon"><span>insight</span></div>
						<h3 class="bold-heading">Big Data Is Here and You Didn't Notice</h3>
						<p class="home-post-byline">October 15, 2015 | by John Doe</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum pellentesque mauris, a pharetra mauris faucibus vel. Cras ac ligula eget dui dictum molestie. Pellentesque sit amet semper libero.</p><p>Curabitur aliquam feugiat pharetra. Aliquam erat volutpat. </p>
						<div class="home-post-link"><div class="circle">+</div><a href="#">Read More</a></div>
						</div>
					</div>
				
			</div>




	
				<div class="full-width home-results">
					<h3 class="bold-heading">See the results</h3>

					<div class="home-results-container">


						<a href="#" class="square square-bg" style="background-image: url(images/results-box.jpg);">
 						   <div class="square-content">
 						       <div class="square-table">
  						           <div class="square-table-cell">
    						          Bringing Analytics to Office
									  <div class="square-table-image"><img src="images/microsoft.svg"></div>
    						          <div class="square-table-link">Read More &gt;</div>
      						      </div>
  						      </div>
 						   </div>
						</a>
	

						<a href="#" class="square square-bg" style="background-image: url(images/results-box.jpg);">
  						  <div class="square-content">
  						      <div class="square-table">
  						           <div class="square-table-cell">
    						          Bringing Analytics to Office
									  <div class="square-table-image"><img src="images/microsoft.svg"></div>
    						          <div class="square-table-link">Read More &gt;</div>
      						      </div>
 						       </div>
 						   </div>
						</a>


						<a href="#" class="square square-bg" style="background-image: url(images/results-box.jpg);">
  						  <div class="square-content">
   						     <div class="square-table">
   						         <div class="square-table-cell">
    						          Bringing Analytics to Office
									  <div class="square-table-image"><img src="images/microsoft.svg"></div>
    						          <div class="square-table-link">Read More &gt;</div>
      						      </div>
      						      
     						   </div>
						    </div>
						</a>

					</div>
					
				<div class="clear-fix"></div>
		
				</div>



				<div class="full-width trusted-clients">
					Trusted by the best
						<ul class="clients">
							<li>T-Mobile</li>
							<li>Microsoft</li>
							<li>NBC</li>
							<li>Verizon</li>
							<li>at&amp;t</li>
							<li>Sephora</li>
						</ul>
				</div>


			
				<div class="who-society">
					<div class="home-main-col off-col who-off-col">
					</div>
					
					<div class="home-main-col who-on-col">
						<h3 class="whois-header">Who Is Society?</h3>
						<p>Pellentesque sit amet semper libero. Vivamus lacinia mauris nec tortor viverra tristique. Maecenas sit amet ante vitae nisi feugiat elementum. Phasellus magna nibh, dignissim in mi id, sodales ullamcorper justo. Curabitur aliquam feugiat pharetra. Aliquam erat volutpat.</p>

						<div class="button-container full-width-button-container">
							<a href="#" class="button yellow-bg">Learn More &gt;</a>
						</div>

					</div>
				</div>



<?php // get_sidebar(); ?>
<?php get_footer(); ?>
