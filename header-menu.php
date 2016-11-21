<div class="announcement-banner active">
    <div class="banner-header">
      <div class="container">
        <h4>Run An Empire <span>Announcement:</span></h4>
        <a class="exit-btn"></a>
      </div>
    </div>
    <div class="banner-body">
      <div class="container">
        <div class="g--two--third"> 
          <img class="banner-image" src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/gauntlet.png">
          <div class="banner-info">
            <h1>Invest in Run An Empire Today!</h1>
            <p>Become a shareholder in Run An Empire! Invest from as little as £10 on Crowdcube now.</p>
            <a class="link-btn-one">Invest In Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav role="nav" class="nav">
    <div class="container">
      <a id="logo" href="<?php echo Site_url(); ?>/" class="nav-logo-link">RUN AN EMPIRE</a>
    <div class="local-selector">
      <a class="local-selected"><img src="<?php echo get_bloginfo('template_url') ?>/images/flags/<?php echo $GLOBALS['loc']; ?>.png" /><span><?php echo $GLOBALS['loc']; ?></span><span class="triangle"></span></a>
      <ul class="dropdown">
        <li><a href="?loc=global"><span>Global</span></a></li>
        <li><a href="?loc=nz"><span>NZ</span></a></li>
        <li><a href="?loc=gb"><span>GB</span></a></li>
        <li><a href="?loc=us"><span>US</span></a></li>
      </ul>
    </div>

    <span class="menu-btn"><img src="http://devhok.nl/rae/icon-hamburger-menu.svg"></span>

    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </nav>