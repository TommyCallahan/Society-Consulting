<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header" style="border-top:0px;">
	</header><!-- .page-header -->

	<div class="page-content notfound-mobile">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="not-found"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentysixteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>


			<p class="not-found"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentysixteen' ); ?></p>

		<?php else : ?>

			<p class="not-found"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.<br>Try searching again, or <a href="/Blog">return</a> to our Blog page.', 'twentysixteen' ); ?></p>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
