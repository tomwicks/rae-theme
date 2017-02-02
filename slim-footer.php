    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>/wp-content/plugins/rae-voting/rae-voting.js" type="text/javascript"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55396614-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
      // Find all YouTube videos
      var $allVideos = $("iframe[src^='//www.youtube.com']"),

          // The element that is fluid width
          $fluidEl = $("body");

      // Figure out and save aspect ratio for each video
      $allVideos.each(function() {

        $(this)
          .data('aspectRatio', this.height / this.width)

          // and remove the hard coded width/height
          .removeAttr('height')
          .removeAttr('width');

      });

      // When the window is resized
      $(window).resize(function() {

        var newWidth = $fluidEl.width();

        // Resize all videos according to their own aspect ratio
        $allVideos.each(function() {

          var $el = $(this);
          $el
            .width(newWidth)
            .height(newWidth * $el.data('aspectRatio'));

        });

      // Kick off one resize to fix all videos on page load
      }).resize();
    </script>
  </body>
</html>
