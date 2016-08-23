<?php/*** Template Name: BSMR */?>
<?php get_header(); ?>
  <body class="bsmr-league">
    <main id="bsmr-league-main" class="main">
      <header>
        <div class="container">
          <h3>Run An Empire</h3>
          <a class="signup-btn" href="<?php echo site_url(); ?>/bsmr/sign-up" target="_blank">Sign Up To The Challenge</a>
        </div>
      </header>
      <section class="bsmr-hero">
        <div class="container">
          <div class="g--third">
            <h2>Bloomberg Square Mile Relay</h2>
            <h4>Powered by Run An Empire</h4>
          </div>
        </div>
      </section>
      <nav class="bsmr-nav">
        <div class="container">
         <!--  <ul> -->
            <!-- <li><a class="bsmr-menu-btn active">Summary</a></li> -->
            <!-- <li><a class="bsmr-menu-btn">Top Players</a></li>
            <li><a class="bsmr-menu-btn">Top Teams</a></li> -->
          <!-- </ul> -->
        </div>
      </nav>
      <article class="bsmr-main-section">
        <section class="bsrm-description">
          <div class="container">
            <div class="g--two--third">
              <h2>Welcome to the Run An Empire Training Challenge.</h2>
              <p>In the month building up to the Bloomberg Square Mile Relay, Run An Empire is offering you the chance to go head to head against other teams by competing to capture and control the most territory on your running route.</p><p>To join the Run An Empire Square Mile challenge, start by signing up using the <a href="<?php echo site_url(); ?>/bsmr/sign-up">form here.</a></p><p>All you have to do is use Run An Empire whilst you’re training between 22nd August and 22nd September. You can use it alongside your existing fitness app. Winning teams and individuals will be announced on the day.</p>
            </div>
            <div class="g--third g--last">
              <img class="bsmr-image" src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/gauntlet.png">
            </div>
          </div>
        </section>
        <section class="bsmr-coming-soon">
          <div class="container">
            <h3>league tables coming soon</h3>
          </div>
        </section>
      </article>
    </main>
<?php get_footer(); ?>
    
