<?php
/**
* WP Post Template: Results */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>




		<section class="se-container">
				
				<div class="se-slope" style="background-image: url(../images/blue-transparency.png), url(<?php the_post_thumbnail_url();?>); transform:rotate(0deg)">
					<article class="se-content container-thirteen" style="transform:rotate(0deg);">
						<div class="result-header result-contain">
						<?php if(get_field('post_logo'))
										{ ?>
											<div class="result-header-image"><img src="<?php echo the_field('post_logo'); ?>"></div>
										<?php }?>
						<h1 class="bold-heading"><?php the_title();?></h1>
						<p><?php echo the_field('post_snippet'); ?></p>
						</div>
					</article>
				</div>







		<div class="se-slope" style="background-color:#F8F8F8; height:290px;"></div>


			<div class="result-contain result-content result-position">
			<?php wp_reset_postdata(); ?>
			<?php the_content(); ?>


 
<hr />

<div class="next-in-cat-link">
<?php next_post_link( '%link', 'Read Next Result ›', TRUE ); ?>
</div>

						</div>




		</div> <!--end container -->
				



	</div>






<?php get_footer(); ?>
