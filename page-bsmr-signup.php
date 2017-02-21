<?php/*** Template Name: BSMR signup */?>
<?php get_header(); ?>
  <body class="bsmr-signup">
    <main id="bsmr-signup-main" class="main">
      <div class="bsmr-signup-sidebar">
        <h3>Run An Empire Training Challenge</h3>
        <p class="first-paragraph">The Run An Empire training challenge is open to all students. To get started just fill in your details below and we'll send you a link with how to download the app. The email address you enter will need to be the one you use for Run An Empire account.</p>
        <?php echo do_shortcode('[contact-form-7 id="515" title="Bloomberg Square Mile"]' ); ?>
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
    <a href="mailto:?subject=Join the Run An Empire Training Challenge&body=Here is the link to sign up to the Run An Empire Training Challenge http://www.runanempire.com/bsmr/sign-up/" class="bsmr-email-button">Email To Teammates</a>
<?php get_footer(); ?>
    
