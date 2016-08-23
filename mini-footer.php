    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
      var polyfilter_scriptpath = "<?php echo get_template_directory_uri(); ?>/js/css-filters-polyfill/lib/";
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/css-filters-polyfill/lib/cssParser.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/css-filters-polyfill/lib/css-filters-polyfill.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.ba-throttle-debounce.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyfit.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/navbar.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookiebar.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.responsivesticky.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      if(jQuery.cookieBar('cookies')){
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-55396614-1', 'auto');
          ga('send', 'pageview');
      }
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
