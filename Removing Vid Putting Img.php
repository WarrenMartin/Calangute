<?php get_header(); ?>

<div id="site-homepage-widgets">
  <div id="wp-custom-header" class="wp-custom-header">
    <style>
      .video-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%; /* 16:9 aspect ratio (change this value if needed) */
      }

      .video-container video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    </style>

    <div class="video-container">
      <video autoplay muted loop playsinline>
        <source src="https://edi.xux.mybluehostin.me/wp-content/uploads/2023/05/Rec-0013.mp4" type="video/mp4">
        <source src="https://edi.xux.mybluehostin.me/wp-content/uploads/2023/05/Rec-0013.webm" type="video/webm">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
  <div class="site-section-wrapper wrapper-homepage-content-widgets">
    <?php dynamic_sidebar('homepage-content-widgets'); ?>
  </div><!-- .site-section-wrapper .wrapper-homepage-content-widgets -->
</div><!-- #site-homepage-widgets -->

<main id="site-main">
  <div class="site-section-wrapper site-section-wrapper-main">
    <div id="site-page-columns">
      <?php
      // Function to display the SIDEBAR (if not hidden)
      ilovewp_helper_display_page_sidebar_column(); ?>
      <!-- ws fix -->
      <div id="site-column-main" class="site-column site-column-main">
        <div class="site-column-main-wrapper">
          <?php
          // Function to display the START of the content column markup
          ilovewp_helper_display_page_content_wrapper_start();

          if (have_posts()) {
            $i = 0;

            if (is_home() && !is_front_page()) { ?>
              <h1 class="page-title archives-title"><?php single_post_title(); ?></h1>
            <?php } ?>
            <?php if (is_home()) { ?>
              <p class="widget-title"><?php echo esc_html(get_theme_mod('theme-homepage-posts-heading', __('Recent Posts', 'city-hall'))); ?></p>
            <?php } ?>
            <?php get_template_part('loop');
          }

          // Function to display the END of the content column markup
          ilovewp_helper_display_page_content_wrapper_end();

          // Function to display the SECONDARY SIDEBAR (if not hidden)
          ilovewp_helper_display_page_sidebar_secondary(); ?>
        </div><!-- .site-column-wrapper .site-content-wrapper -->
      </div><!-- #site-column-main .site-column .site-column-main -->
    </div><!-- #site-page-columns -->
  </div><!-- .site-section-wrapper .site-section-wrapper-main -->
</main><!-- #site-main -->

<?php get_footer(); ?>
