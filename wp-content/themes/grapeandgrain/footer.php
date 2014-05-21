    <div class="row">
    	<p class="birdseed">The Grape and Grain Festival (Bristol) Ltd Co No: 08436626 15 Orchard Street, Bristol BS1 5EH</p>
    </div><!-- /row -->
  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="javascripts/jquery.foundation.forms.js"></script>
  <script src="javascripts/jquery.event.move.js"></script>
  <script src="javascripts/jquery.event.swipe.js"></script>
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  <script src="javascripts/jquery.placeholder.js"></script>
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
  
  <!-- Flexslider JS -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/jquery.flexslider-min.js"></script>
  <script type="text/javascript" charset="utf-8">
    jQuery(window).load(function() {
      jQuery('.flexslider').flexslider();
    });
  </script>

  <!-- Images JS -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/imagesloaded.pkgd.min.js"></script>

  <!-- Headroom JS -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/jQuery.headroom.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/headroom.min.js"></script>
  <script>
    $(".headroom-wrap").headroom({
        tolerance: 5,
        offset : 75,
    });

  </script>

  <!-- masonry JS -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/masonry.pkgd.min.js"></script>
  <script>
  $('.masonry-container').imagesLoaded( function(){
    var $container = $('.masonry-container');
      // initialize
      $container.masonry({
      isAnimated: true,
      itemSelector: '.masonry-item'
    });
  });
    
  </script>

  <!-- MMenu -->
  <script src="<?php bloginfo('template_directory'); ?>/js/plugins/jquery.mmenu.min.all.js"></script>
  <script>
    $("#nav").mmenu({

    });
  </script>

  <!-- Main JS -->
  <script>
/*
      $('.flexslider').flexslider({
        after: function(slider){
          currHeight = $('.slides > li').eq(slider.currentSlide).outerHeight(true);
          $('.flexslider').height(currHeight);
        }
      });
*/
      
      $('.ticket-scroll').click(function (e) {
        $('html, body').animate({
        	scrollTop: $(".scroll-tickets").offset().top
        }, 1000);
      });
      
      $('.involved-scroll').click(function (e) {
        $('html, body').animate({
        	scrollTop: $(".scroll-involved").offset().top
        }, 1000);
      });
/*

      $(document).ready(function() {
          var maxHeight = -1;
          var currHeight = -1;
          var prodDescHeight = -1;
          var diffHeight = -1;
          // get the max height of the list items
          $('.sponsorship .three.columns').each(function() {
              maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
          });
          // set max height to all items 
          $('.sponsorship .three.columns').each(function() {
              $(this).height(maxHeight);
          });
      });
*/
  </script>