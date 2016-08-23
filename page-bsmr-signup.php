<?php/*** Template Name: BSMR signup */?>
<?php get_header(); ?>
  <body class="bsmr-signup">
    <main id="bsmr-signup-main" class="main">
      <div class="bsmr-signup-sidebar">
        <h3>Run An Empire Training Challenge</h3>
        <p class="first-paragraph">The Run An Empire training challenge is open to all registered members of the Bloomberg Square Mile Relay. To get started just fill in your details below and we'll send you a link with how to download the app. The email address you enter will need to be the one you use for Run An Empire account.</p>
        <?php echo do_shortcode('[contact-form-7 id="515" title="Bloomberg Square Mile"]' ); ?>
        <ul class="bsmr-logo-strip">
        	<li class="partner-logos"><a class="cc-logo" href="https://www.crowdcube.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/cc-logo.png"></a>
        	<li class="partner-logos"><a class="rae-logo" href="http://www.runanempire.com" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/rae-logo.png"></a></li>
        	<li class="partner-logos"><a class="bsmr-logo" href="https://www.squaremilerelay.com/london/" target="_blank"><img src="<?php echo get_bloginfo('template_directory');?>/images/bsmr/bsmr-logo.png"></a></li>
        </ul>
    </div>
	<div class="bsmr-signup-draw">
	    <h3 class="bsmr-signup-title">Great, Let's Get Started</h3>
	    <div class="draw-holder">
			<p>Now all you have to do is install the app and create an account. Your runs will count towards your team score on the league page. When you create your Run An Empire account, make sure to use the email address you gave us:</p>
			<h2 class="bsmr-email-address"></h2>
			<p>We've also emailed you these details.</p>
			<a href="https://itunes.apple.com/gb/app/run-empire-strategy-running/id1073986257?mt=8" class="bsmr-signup-button" data-invest-option="invest-one">Download The App</a>
		</div>
	</div>
    </main>
    <a href="<?php echo site_url(); ?>/investing" class="investing-popup">
        <h3>We’re raising funds this autumn</h3>
        <h5>Learn More</h5>
    </a>
    <a href="mailto:?subject=Join the Run An Empire Training Challenge&body=Here is the link to sign up to the Run An Empire Training Challenge http://www.runanempire.com/bsmr/sign-up/" class="bsmr-email-button">Email To Teammates</a>
<?php get_footer(); ?>
    
