<?php get_header(); ?>
<body>
  <?php get_template_part('header-menu'); ?>
    <main id="blog-full-article-main" class="main">
      <header class="header">
        <div class="container">
          <h1><a href="<?php echo Site_url(); ?>/blog">Blog</a></h1>
        </div>
      </header>
      <div class="container">
        <?php
          // Start the Loop.
          while ( have_posts() ) : the_post();
        ?>
        <div class="blog-post">
          <h1><?php the_title(); ?></h1>
          <h3><?php the_date(); ?> Posted By: <?php the_author_meta('nickname'); ?></h3>
          <div class="blog-post-image green-divider">
            <?php 
              if ( has_post_thumbnail() ) { 
                the_post_thumbnail('blog-featured-image'); 
              }
            ?>
            <div class="clearfix"></div>
          </div>
          <div class="blog-content">
            <div class="blog-post-text g--two--third">
              <?php the_content(); ?>
            </div>
            <div class="blog-post-social g--third g--last">
              <h3>Share</h3>
              <div class="social-btns">
                <ul>
                  <li>
                    <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" id="btn-twitter">
                      <img src="<?php echo get_bloginfo('template_url') ?>/images/svg/icon-twitter.svg" alt="Run An Empire twitter">
                    </a>
                  </li>
                  <li>
                    <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" id="btn-facebook">
                      <img src="<?php echo get_bloginfo('template_url') ?>/images/svg/icon-facebook.svg" alt="Run An Empire facebook">
                    </a>
                  </li>
                  <li>
                    <a href="mailto:?subject=Read this about Run An Empire <?php the_permalink(); ?>" id="btn-mail">
                      <img src="<?php echo get_bloginfo('template_url') ?>/images/svg/mail-icon.svg" alt="Run An Empire email">
                    </a>
                  </li>
                   <li>
                    <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" id="btn-linkedin">
                      <img src="<?php echo get_bloginfo('template_url') ?>/images/svg/linkedin-icon.svg" alt="Run An Empire linkedin">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <?php
          endwhile;
        ?>
      </div>
    </main>
    <?php get_footer(); ?>
