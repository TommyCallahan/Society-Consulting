<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
  <script src="<?php bloginfo('url'); ?>/js/jquery.selectBoxIt.min.js"></script>
  <script src="<?php bloginfo('url'); ?>/js/jquery.connections.js"></script>
  <script src="<?php bloginfo('url'); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('url'); ?>/js/jquery.magnific-popup.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#202a36">
  

</head>

<?php $templateNameBody = get_page_template_slug();
 $templateNameBodyClean = str_replace(".php","",$templateNameBody);
 if ($templateNameBodyClean !="home") {
  $insideclass="inside";
  } else {
  $insideclass="";} ?>
<body class="<?php echo $templateNameBodyClean." ".$insideclass; ?>">

  <div class="large-contain">

		<header>
			<nav>
        		<div class="arrow-btn"></div>
        		<div class="nav-bar">
        		<div class="mobile-menu">
        			<div class="mobile-toggle">
        				<div id="nav-icon3">
  							<span></span>
  							<span></span>
  							<span></span>
  							<span></span>
						</div>
        			</div>	
        			<a href="<?php bloginfo('url'); ?>" class="nav-logo"></a>
        		</div>
<div class="navigation-container">
        		<div class="navigation">
        			
  <label for="drop" class="toggle main-toggle">Menu</label>
  <input type="checkbox" id="drop" checked/>
  <ul class="menu">
    <li class="hasdrop"> 
      <label for="drop-1" class="toggle">Offerings</label>
      <a class="top-level" href="#">Offerings</a>
      <input type="checkbox" id="drop-1" autocomplete="on"/>
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/Analytics">Analytics</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Big-Data">Big Data</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Customer-Experience">Customer Experience</a></li>
      </ul>
    </li>
    <li><a href="/Results">Results</a></li>
    <li><a href="/Careers">Careers</a></li>
    <li><a href="/Blog">Blog</a></li>
    <li class="hasdrop">
      <label for="drop-2" class="toggle">About</label>
      <a class="top-level" href="#">About</a>
      <input type="checkbox" id="drop-2" autocomplete="on"/>
      <ul>
        <li><a href="<?php bloginfo('url'); ?>/Culture">Culture</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Leadership">Leadership</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Locations">Locations</a></li>
        <li><a href="<?php bloginfo('url'); ?>/History">History</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Partners">Partners</a></li>
        <li><a href="<?php bloginfo('url'); ?>/Contact">Contact</a></li>
      </ul>
    </li>
  </ul>

        	
        		</div>
</div>
        		</div>
        	</nav>

			
		</header><!-- .site-header -->

		<div id="content">
