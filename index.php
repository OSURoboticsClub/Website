<?php get_header(); ?>
  <div class="row">
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<?php echo get_stylesheet_directory_uri() ?>/images/tyler.jpg"></div>
    <div class="col-md-5 col-md-push-1">
      <p>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome.png"><br><br>
        <?php get_sidebar( 'home-page-intro' ); ?>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-push-1">
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          // Include the page content template.
          the_content();

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      ?>
    </div>
  </div>
<?php get_footer(); ?>