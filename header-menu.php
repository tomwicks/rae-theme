
  <nav role="nav" class="nav">
    <div class="container">
      <a id="logo" href="<?php echo Site_url(); ?>/" class="nav-logo-link">RUN AN EMPIRE</a>
      

    <div class="local-selector">
      <a class="local-selected"><img src="<?php echo get_bloginfo('template_url') ?>/images/flags/<?php echo $GLOBALS['loc']; ?>.png" /><span><?php echo $GLOBALS['loc']; ?></span><span class="triangle"></span></a>
			<ul class="dropdown">
				<li><a href="?loc=global"><span>Global</span></a></li>
				<li><a href="?loc=nz"><span>NZ</span></a></li>
        <li><a href="?loc=gb"><span>GB</span></a></li>
			</ul>
		</div>

    <span class="menu-btn"><img src="http://devhok.nl/rae/icon-hamburger-menu.svg"></span>

    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
  </nav>
  <a href="<?php echo site_url(); ?>/investing" id="investing-popup" class="investing-popup full-width">
      <div class="container">
        <h3>We’re raising funds this autumn</h3>
        <h5>Learn More</h5>
        <div class="exit-btn"></div>
      </div>
  </a>
