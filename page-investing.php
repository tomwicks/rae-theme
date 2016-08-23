<?php /* Template Name: Press Template */ ?>
<?php get_header(); ?>
  <body class="investing">
    <main id="investing-main" class="main">
      <div class="invest-sidebar">
        <h3>Run An Empire</h3>
        <h2>Pre register to invest</h2>
        <p>In September we will be launching a crowdfunding round and offering our community another opportunity to own a part of Run An Empire. The funds we raise will help us scale up and launch around the world. Using this form you can preregister your interest, be the first to get news about the round and priority access once it goes live.</p>
        <p>Remember as with any investment your capital is at risk.</p>
        <div class="button-holders">
          <a class="js-invest-button invest-button active" data-invest-option="invest-one">I'm interested in Investing</a>
         <a class="js-invest-button invest-button active" data-invest-option="invest-two">I’m unsure - keep me updated</a>
        </div>
      </div>
      <div class="invest-draw invest-one" data-invest-option="invest-one">
        <h3 class="invest-title">Great, We're glad to have you with us!</h3>
        <div class="invest-form">
          <?php echo do_shortcode('[contact-form-7 id="471" title="investing"]' ); ?>
        </div>
      </div>
      <div class="invest-draw invest-two" data-invest-option="invest-two">
        <h3 class="invest-title">Great, we’ll keep you updated.</h3>
        <div class="invest-form second-investment">
           <?php echo do_shortcode('[contact-form-7 id="460" title="I dont want to invest"]' ); ?>
        </div>
      </div>
      <a class="js-invest-button mobile-back-button" data-invest-option="invest-zero">Back To Investing</a>
    </main>
<?php include 'mini-footer.php'; ?>
    
