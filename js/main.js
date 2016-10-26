jQuery(document).ready(function() {

    /* Store the window width */
    var windowWidth = $(window).width();

    var imagesLoaded = false;

    // Handle your resize only once total, after a one second calm.
    // This way it saves memory
    jQuery(window).resize($.debounce(1000, function() {

        // Check window width has actually changed and it's not just iOS triggering a resize event on scroll
        if ($(window).width() != windowWidth) {

            // Update the window width for next time
            windowWidth = $(window).width();

            // Do stuff here
            mobileFixes();

        }

    }));

    if(localStorage.blue !== '1') {
        
    } else {
        $("#investing-popup").hide();
    }

    $(document).on('click', '.exit-btn', function(){ 
        localStorage.blue='1'; 
        if(localStorage.blue !== '1') {
            $("#investing-popup").hide(); 
            alert('been-clicked');
        } else {
            $("#investing-popup").hide();
        }

        return false;
    });

    function mobileFixes() {

        // Reset the mobile style
        jQuery(".phone-screenshots").removeAttr("style");
        jQuery('.mobile-slider').removeAttr("style");
        jQuery('.mobile-slider .g--third').removeAttr("style");
        jQuery('.mobile-slider .demo').removeAttr("style");
        jQuery(".blog-post-social").removeAttr("style");

        //Pretty navbar
        $(window).scroll(function() {
            var winPos = $(window).scrollTop();
            if (winPos > 80) {
                $('.nav').addClass('small-menu');
            } else {
                $('.nav').removeClass('small-menu');
            }
        });


        // Check the browser size, execute
        if(Modernizr.mq('all and (max-width: 768px)')) {

            jQuery(".blog-post-social").responsivesticky({destroy: true});

            jQuery(".demo").prettyfit({
                bgImageHeight: 378, // The height of the background image
                bgEl: '.phone-screenshots', // The element where the background image is in
                contentEl: '.prettyfit-content', // The element that contains the top & bottom element
                topEl: '.demo-text-left', // The top element
                bottomEl: '.demo-text-right' // The bottom element
            });

            jQuery('.mobile-slider').each(function() {

                jQuery(this).cycle('destroy');

                jQuery(this).cycle({
                    timeout: 0,
                    fx: 'scrollHorz',
                    cleartypeNoBg: true,
                    speed: 300,
                    next:   jQuery(this).parent().find('.mobile-nav .mobile-nav-next'), 
                    prev:   jQuery(this).parent().find('.mobile-nav .mobile-nav-prev') 
                });

                jQuery(this).swipe({
                    swipeLeft:function(event, direction, distance, duration, fingerCount) {
                        jQuery(this).cycle("next");
                    },
                    swipeRight:function(event, direction, distance, duration, fingerCount) {
                        jQuery(this).cycle("prev");
                    },
                    //Default is 75px, set to 0 for demo so any distance triggers swipe
                    threshold:0
                });

            });

            imagesLoaded = true;
            
        } else if (Modernizr.mq('all and (min-width: 1025px)')) {

            // Add animations
            new WOW().init();

            //Make sharebuttons sticky use onload to be sure that the images are loaded
            if(!imagesLoaded) {
                window.addEventListener('load', function () {

                }, false);

                imagesLoaded = true;

            } else {
                stickyScroll();
            }

        } else {
            imagesLoaded = true;
            jQuery(".blog-post-social").responsivesticky({destroy: true});
        }

    }

    // Run the mobile fixes when you first open the page.
    mobileFixes();

    //Inputfield add class when it has text
    jQuery('input[type="text"], textarea').change(function() { 

        if( jQuery(this).val() ) {
            jQuery(this).addClass('filledin');
        } else {
            jQuery(this).removeClass();
        }

    });

    //FAQ hide and show
    jQuery('.dynamic-list h4').on( "click", function() {

        jQuery(this).parent().toggleClass('active');

        jQuery(this).next().slideToggle( "slow", function() {});

    });


    /// Localisation Dropdown

    $(document).on( "click", ".local-selected", function() {
      $('.dropdown').toggleClass('active');
      $(this).toggleClass('active');
    });

    /// Trailer Scroll Down
    $(document).on( "click", ".link-scoll-down", function() {
        $("html, body").animate({ scrollTop: $('#game-trailer').offset().top -50}, 800);
    });

    
    // Investing options

    $(document).on('click', '.js-invest-button', function(){
        // Get the category id
        var category = $(this).attr('data-invest-option');

        // Hide all other divs
        $('.invest-draw').removeClass('active');

         $('.js-invest-button').removeClass('active');

         $('.mobile-back-button').addClass('active');

        // Show clicked div
        $('.invest-draw[data-invest-option='+category+']').addClass('active');

        return false;
    });

    $(document).on('click', '.mobile-back-button', function(){
        $(this).removeClass('active'); 
        return false;
    });

    $(document).on('click', '.bsmr-league-switch', function(){

        var league = $(this).attr('data-league');
        var team = $(this).attr('data-team');
        var title = $(this).attr('title');
        
        $('.bsmr-'+team+' .bsmr-league-switch').removeClass('active');

        $('h4.'+team).html(title);

        $(this).addClass('active');

        $('.bsmr-'+team+' .league-table-container').removeClass('active');

        $('.'+league).addClass('active');

      return false;
    });

    $(document).on('click', '.bsmr-js-to-top', function(){
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });


    // Fire slider on submit button press BSMR 

$("input.wpcf7-validates-as-email")
  .keyup(function() {
    var value = $( this ).val();
    $( ".bsmr-email-address" ).text( value );
  })
  .keyup();
});
