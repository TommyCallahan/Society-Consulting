<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


	<div class="blog-top-space"></div>



		
				<h1 class="max-width page-title blog-page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
		
	<div class="blog-spacer"></div>

	<div class="blog-contain max-width">

							<div class="blog-left-col">

		<main id="main" class="site-main" role="main">

		<div class="blog-left-col">

			<section class="error-404 not-found">
				<header class="page-header" style="border-top:0px;">
				</header><!-- .page-header -->

				<div class="page-content" style="margin-left:0px; margin-right:0px;">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search? Or you can', 'twentysixteen' ); ?><a style="cursor:pointer;" onclick="window.history.back()"> return to the previous page.</a></p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>

		</main><!-- .site-main -->

</div>

<div class="blog-right-col">
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
