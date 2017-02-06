<?php
/**
* Template Name: Contact */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
get_header(); ?>

<div class="containment">

<h3 class="contact-heading"><?php the_title();?></h3>

<div class="contact-box">
<div class="contact-box-left contact-sub-box">
<img src="<?php bloginfo('url'); ?>/wp-content/themes/society-custom/images/footer-logo.png">
<div class="contact-content">
<p>We will respond to your inquiry within one business day</p>
<p>We are also available by phone<br>(206) 420-3500</p>
<p>901 104th Ave NE<br>Bellevue, WA 98004</p>
</div>

</div><div class="contact-box-right contact-sub-box">

<?php echo do_shortcode( '[contact-form-7 id="554" title="Contact Page Form"]' ); ?>

	</div> <!-- contact box right -->
</div>

</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
