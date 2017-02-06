<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

			<footer>
					<div class="footer containment">
					<div class="max-width">	
					<div class="footer-logo">
						<img class="footer-logo-desktop" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/society-custom/images/footer-logo.png">
						<img class="footer-logo-mobile" src="<?php bloginfo('url'); ?>/wp-content/themes/society-custom/images/footer-icon.png">

					</div>

					<div class="footer-links-box">
						<ul class="footer-links">
              <li><a href="/Analytics">Analytics</a></li>
              <li><a href="/Big-Data">Big Data</a></li>
							<li><a href="/Customer-Experience">Customer<span class="foot-break"> </span>Experience</a></li>					
							<li><a href="/Results">Results</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="/Blog">Blog</a></li>
						</ul>

						<ul class="footer-links">
							<li><a href="/Culture">Culture</a></li>
							<li><a href="/Leadership">Leadership</a></li>
							<li><a href="/Locations">Locations</a></li>
							<li><a href="/Partners">Partners</a></li>
							<li><a href="/History">History</a></li>
							<li><a href="/Conteact">Contact</a></li>
              <li><a href="/Privacy-Policy">Privacy Policy</a></li>
						</ul>
					 </div>
					</div>
				</div>
				</footer>



<script type="text/javascript">
    (function(a,b,c,d){
    a='//tags.tiqcdn.com/utag/societyconsulting/societyconsulting.com/dev/utag.js';
    b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
    a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
    })();
</script>

<script>


      $(function() {
              var selectBox = $("select").selectBoxIt();
            });


$(document).ready(function(){
/* Mobile Menu Slide-in */
$( ".mobile-toggle" ).click(function() {
  $( ".navigation" ).toggleClass( "block" );
  $( ".navigation" ).toggleClass( "extend" );
});


/* Hamburger Menu Animation */
$('#nav-icon3').click(function(){
	$(this).toggleClass('open');
});




$('.toggle').click(function(){
	$('#nav-icon3').toggleClass('arrow');
	$('.arrow-btn').toggleClass('arrow-btn-open');
});

$('.arrow-btn').click(function(){
	$('#drop-1').attr('checked', false);
	$('#drop-2').attr('checked', false);
	$(this).removeClass('arrow-btn-open');
	$('#nav-icon3').removeClass('arrow');
});

});


 $(document).ready(function() {
		$('.icon-full').connections();
		var connections = $('connection, inner');
		setInterval(function() { connections.connections('update') }, 100);
	});



// $(document).ready(function(){       
//             var scroll_pos = 0;
//             $(document).scroll(function() { 
//                 scroll_pos = $(this).scrollTop();
//                  if(scroll_pos > 50) {
//                     $("nav").not( ".inside nav" ).addClass("nav-bg");
//                 } else {
//                     $("nav").removeClass("nav-bg");
//                 }
//             });
//         });






  function debounce(func, wait, immediate) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};



$( function() {
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows'
  });
  // filter functions
  var filterFns = {

  };
  // bind filter button click
  $('.filters-button-group').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
  
});





    $(document).ready(function() {
     
      var owl = $("#owl-demo");
     
      owl.owlCarousel({
          items : 6, //10 items above 1000px browser width
          autoPlay : 2000,
          itemsDesktop : [1000,6], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,4], // betweem 900px and 601px
          itemsTablet: [600,3], //2 items between 600 and 0
          itemsMobile : [400,2] // itemsMobile disabled - inherit from itemsTablet option
      });
     
     
    });





$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});


$(document).ready(function() {
  $('.popup-vimeo').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
});

    
</script>

<?php wp_footer(); ?>
</div>

</body>
</html>
