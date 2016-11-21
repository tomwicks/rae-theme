<?php get_header(); ?>

  <body>
    <?php get_template_part('header-menu'); ?>
    <main id="front-page" class="main">
      <section id="introduction">
<!--         <div class="ribbon-box">
  <div class="ribbon-wrapper">
        <a href="https://www.crowdcube.com/investment/run-an-empire-20682" target="_blank"> <p> we are crowdfunding<br>invest in run an empire now!<br>capital at risk</p></a>
  </div>
</div> -->
        <div class="container">
          <div class="g--third">
            <!-- <div class="logo">
             <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/logo-run-an-empire-white.svg" alt="Run an Empire logo">
            </div> -->
            <h1>A real world <br/> strategy running game</h1>
            <p class="explanation">Race against others to control the most territory in your local environment</p>
            <div class="buttons-holder">
              <?php
                if ($GLOBALS['loc'] == 'nz') { // If New Zealand ?>  

                  <a href="http://j.mp/raenz" class="link-app-store download-image">
              
              <?php } else if ($GLOBALS['loc'] == 'gb') {  // If Great Britain ?>
                  <a href="https://appsto.re/gb/rR7aab.i" class="link-app-store download-image">
                  
                <?php } else if ($GLOBALS['loc'] == 'us') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'de') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'br') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'ru') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'ca') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'es') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'au') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                <?php } else if ($GLOBALS['loc'] == 'pt') {  // If big territory we haven't launched in ?>
                <a href="#territory" class="button-link button-red">Keep Me Updated</a>
                
                <?php } else { ?>
                <a href="https://itunes.apple.com/app/run-empire-strategy-running/id1073986257?mt=8" class="link-app-store download-image"> 
                <?php   }?>
              <a href="https://twitter.com/RunAnEmpire" class="link-twitter"></a>
              <a href="https://www.facebook.com/RunAnEmpire/" class="link-facebook"></a>
            <!-- <div class="centered mobilehide"><a class="button-link button-green" href="#newsletter">Keep me updated</a></div> -->
            </div>
          </div>
          <div class="g--third g--last">
            <div class="iphone-bg">
                <div class="image"></div>
            </div>
          </div>
          <a class="link-scoll-down">View Trailer</a>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="game-trailer">
        <div class="container">
          <div class="g--two--third">
            <div class="video-holder">
              <iframe src="https://www.youtube.com/embed/vwq9u1JjX0c" width="1280" height="720" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="social-holder">
              <a target="_blank" href="https://www.facebook.com/dialog/share?app_id=87741124305&href=https%3A//www.youtube.com/attribution_link%3Fa%3Dvu4yDdce6Jo%26u%3D%252Fwatch%253Fv%253Dvwq9u1JjX0c%2526feature%253Dshare&display=popup&redirect_uri=https://www.youtube.com/facebook_redirect" class="link-btn-one fb-blue">Share On Facebook</a>
              <a target="_blank" href="https://twitter.com/intent/tweet?url=https%3A//youtu.be/vwq9u1JjX0c&text=Run%20An%20Empire%20-%20The%20Strategy%20Running%20Game&via=YouTube&related=YouTube,YouTubeTrends,YTCreators" class="link-btn-one twitter-blue">Share On Twitter</a>
            </div>
          </div>
        </div>
      </section>
      <section id="game-features" class="slide-small mobile">
        <div class="container">
          <h1 class="centered mobilehide">Walk, jog or run <br /> around an area to capture it</h1>
          <div class="mobile-slider">
            <div class="g--third">
              <div class="feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-scout.svg" alt="Scout" id="scout">
                </div>
                <h2>Scout</h2>
                <p>Claim new land <br /> in the name of your empire</p>
              </div>
            </div>
            <div class="g--third">
              <div class="feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-skirmish.svg" alt="Skirmish" id="skirmish">
                </div>
                <h2>Skirmish</h2>
                <p>Invade neighbouring lands <br /> to expand your own borders</p>
              </div>
            </div>
            <div class="g--third g--last">
              <div class="feature last-feature">
                <div class="hexagon">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/icon-secure.svg" alt="Secure" id="secure">
                </div>
                <h2>Secure</h2>
                <p>Keep opponents from stealing <br /> your territory by reinforcing it</p>
              </div>
            </div>
          </div>
          <div class="mobile-nav">
            <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev.svg" alt="Previous"></div>
            <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next.svg" alt="Next"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>
      <section id="demos" class="mobile">
        <div id="map"></div>
        <div class="hex-map"></div>
        <div class="mobile-slider">
          <section id="demo1" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-1">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="300">
                    <h2>Real Strategy</h2>
                    <p>All the careful planning of a strategy game...</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="300">
                    <h2>Real World</h2>
                    <p>...played through physical activity in the real world.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </section>
          <section id="demo2" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-2">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="400">
                    <h2>Accessible</h2>
                    <p>Not just for gifted athletes - determination wins against natural ability</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="400">
                    <h2>Simple</h2>
                    <p>Pure fun - no fiddly controls, no convoluted rules</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </section>
          <section id="demo3" class="demo slide-large">
            <div class="phone-screenshots" id="screenshot-3">
              <div class="container">
                <div class="prettyfit-content">
                  <div class="g--third demo-text-left wow fadeInLeft" data-wow-offset="300">
                    <h2>Compete Against Others</h2>
                    <p>Take on your friends and neighbours</p>
                  </div>
                  <div class="g--third"></div>
                  <div class="g--third g--last demo-text-right wow fadeInRight" data-wow-offset="300">
                    <h2>Upgrade Your Crest</h2>
                    <p>Celebrate your victories and show the world what you can do</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="mobile-nav">
          <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev-white.svg" alt="Previous"></div>
          <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next-white.svg" alt="Next"></div>
        </div>
      </section>
      <!-- <section id="build-status" class="slide-medium">
        <div class="container">
          <div class="g--two--third g--centered">
            <h1>Build status</h1>
            <ul>
              <li>
                <h3>Concept</h3>
                <div class="build-status-hexagon build-status-complete">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
                </div>
              </li>
              <li>
                <h3>Design</h3>
                <div class="build-status-hexagon build-status-complete">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
                </div>
              </li>
              <li>
                <h3>Build</h3>
                <div class="build-status-hexagon build-status-complete">
		<img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-complete.svg">
               </div>
	      </li>
              <li>
                <h3>Test</h3>
                <div class="build-status-hexagon build-status-building">
                </div>
              </li>
              <li>
                <h3>Deploy</h3>
                <div class="build-status-hexagon build-status-cross">
                  <img src="http://runanempire.com/wp-content/themes/rae-theme/images/svg/buildstatus-cross.svg">
                </div>
              </li>
            </ul>
            <h3>Key dates</h3>
            <p><strong>Private Beta</strong></p>
            <p>iPhone - Live</p>
            <p>Android - TBA</p>
            <p class="publiclaunch"><strong>Public Launch</strong></p>
            <p>iPhone - Spring 2016</p>
            <p>Android - TBA</p>
          </div>
        </div>
      </section> -->

      <section id="blog" class="slide-large mobile">
        <div class="container">
          <h1>Latest news</h1>
            <?php
              // The Query
              $query_args = array(
                'post_type'=>'blogpost',
                'posts_per_page' => 3
              );

              $the_query = new WP_Query( $query_args );

              $count;

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post();

                  $count++;

              ?>
                <div class="g--third <?php if ($count == 3) {echo 'g--last';}?>">
                  <div class="post-container">
                    <a href="<?php the_permalink(); ?>">
                      <?php 
                        if ( has_post_thumbnail() ) { 
                          the_post_thumbnail('blog-thumbnail-image'); 
                        }
                      ?>
                    </a>
                      <div class="post-text">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words( get_the_content(), 20, '' ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="full-post-link">Read more</a>
                      </div>
                    </div>
                  </div>
                <?php
                  }
              } else {
                // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
            ?>
          <div class="clearfix"></div>
          <div class="centered push-up"><a class="button-link button-red" href="<?php echo Site_url(); ?>/blog">View the blog</a></div>
        </div>
      </section>
      <section id="territory" class="slide-large my-territory">
        <div class="container">
          <div class="g--third g--centered form">
            <div id="mc_embed_signup">
                <div class="newsletter-box">
                  <h2>When Can I Play?</h2>
                  <p>Run An Empire is currently live in the UK and New Zealand for iOS. If you'd like to know when it's coming to your territory or platform fill out the form and we'll keep you updated.</p>
                  <?php echo do_shortcode('[contact-form-7 id="882" title="When Can I Play"]'); ?>
                </div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
          <div class="g--third g--centered">
             <h3>Follow us on social media</h3>
              <ul class="social">
                <li>
                 <a href="https://twitter.com/RunAnEmpire" class="link-twitter"></a>
                </li>
                <li>
                 <a href="https://www.instagram.com/runanempire/" class="link-instagram"></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/RunAnEmpire/" class="link-facebook"></a>
                </li>
              </ul>
          </div>
        </div>
      </section>
      <section id="testimonies" class="slide-medium mobile">
        <div class="container">
          <h1>What people are saying</h1>
          <div class="mobile-slider">
            <div class="g--third">
              <div class="post-container">
                <a href="http://www.fastcodesign.com/3028503/alternate-reality-game-will-turn-you-into-a-fitness-maniac" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-fast-company.png" alt="Fast Company"></img>
                </a>
                <p>“Run an Empire challenges you to conquer territory and defend it from rivals, rather like the classic strategy game Risk”</p>
              </div>
            </div>
            <div class="g--third">
              <div class="post-container">
                <a href="http://www.polygon.com/2014/4/15/5594332/mobile-ar-game-run-an-empire-brings-strategy-to-the-streets" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-polygon.png" alt="Polygon"></img>
                </a>
                <p>“Run An Empire offers mobile gamers the opportunity to turn their local neighborhood into their own fiefdom”</p>
              </div>
            </div>
            <div class="g--third g--last">
              <div class="post-container">
                <a href="http://www.runnersworld.com/electronics/first-look-at-run-an-empire" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-runners.png" alt="Runners"></img>
                </a>
                <p>“Level up your running with a new app that brings tactical gaming to the real world”</p>
              </div>
            </div>
          </div>
          <div class="mobile-nav">
            <div class="mobile-nav-prev"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-prev-white.svg" alt="Previous"></div>
            <div class="mobile-nav-next"><img src="<?php echo get_bloginfo('template_url') ?>/images/svg/ui-arrow-next-white.svg" alt="Next"></div>
          </div>
        </div>
      </section>
      <!-- <section id="faq" class="slide-large">
        <div class="container">
          <h1>FAQ</h1>
          <div class="g--third g--last g--centered">
            <ul class="dynamic-list">
              
                // The Query
                $args_faq = array(
                  'post_type' => 'faq',
                  'posts_per_page' => 6
                );

                $query_faq = new WP_Query( $args_faq );

                $oddRow = array();
                $evenRow = array();

                $count = 0;

                // The Loop
                if ( $query_faq->have_posts() ) {
                  while ( $query_faq->have_posts() ) {
                    $query_faq->the_post();
                    $count++;

                    
                      <li>
                        <h4> echo get_the_title();</h4>
                        <p> echo get_the_content();</p>
                      </li>
                    
                  }

                } else {
                  // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata(); 
              
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="centered push-up"><a class="button-link button-red" href="<?php echo Site_url(); ?>/faq">View all FAQ</a></div>
        </div>
      </section>
      -->
      <section id="team" class="slide-small mobile">
        <div class="container">
          <h1>Brought to you by</h1>
            <div class="g--fifth">
            <div class="post-container">
             


    <?php
                if ($GLOBALS['loc'] == 'nz') {
                  // If NZ
              ?>  
              
              <a href="http://www.fcbinferno.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-fcb.png" alt="FCB"></img>
              </a> 
                  <!--  <a class="link-app-store" href="http://www.google.com"></a> -->
              <?php
                } else {
                  // If anywhere else
              ?>
                    <a href="http://panstudio.co.uk/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-pan.svg" alt="PAN Studio"></img>
              </a> 
              <?php
                }
              ?>        
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="https://www.crowdcube.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-crowd.png" alt="Crowd Cube"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="http://www.tseffect.com/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-tse.png" alt="Tom Sawyer Effect"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth">
            <div class="post-container">
              <a href="https://www.geovation.org.uk/">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-geovation.png" alt="Geovaction"></img>
              </a>
            </div>
          </div>
          <div class="g--fifth g--last">
            <div class="post-container">
              <a href="https://www.kickstarter.com">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo/logo-kickstarter.png" alt="Kickstarter"></img>
              </a>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </section>

      <script>
    L.mapbox.accessToken = 'pk.eyJ1IjoicnVuYW5lbXBpcmUiLCJhIjoiQURYc3gyVSJ9.e1_Z7yOMvCAnPNm7SkBWKQ';
    var map = L.mapbox.map('map', 'runanempire.jepgcln5')
        .setView([51.51, -0.12], 17);

        // Disable drag and zoom handlers.
        map.dragging.disable();
        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.keyboard.disable();

        // Disable tap handler, if present.
        if (map.tap) map.tap.disable();
    </script>

<?php get_footer(); ?>
