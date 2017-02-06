<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>



<section class="widget">

<div class="widget-section">
		<h2 class="widget-title">Categories</h2>
		<ul style="position:relative;">
			<li class="blog-category-link insigts-blog-cat"><a href="/category/insight/">Insights</a></li>
			<li class="blog-category-link news-blog-cat"><a href="/category/news/">News</a></li>
			<li class="blog-category-link downloads-blog-cat"><a href="/category/downloads/">Downloads</a></li>
		</ul>
</div>

<?php $orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args=array(
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=>3, // Number of related posts that will be shown.
'caller_get_posts'=>1
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {

echo '<div class="widget-section"><div id="relatedposts"><h2 class="widget-title">Related Posts</h2><ul id="relatedul">';
while( $my_query->have_posts() ) {
$my_query->the_post(); ?>
<li>
<div class="relatedcontent">
<center><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><div class="comments_text"><?php the_title(); ?></div></center></a>
</div>
</li>
<? }
echo '</ul></div></div></section>';
}
}
$post = $orig_post;
wp_reset_query(); ?>

	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
