<?php get_header(); 
/*
Template Name: Project Page
*/?>
  <div class="row">
    <div style="background-image: none;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%;"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<?php echo get_stylesheet_directory_uri() ?>/images/mars.png"></div>
    <div class="col-md-5 col-md-push-1">
      <p>
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
	  	</p>
    </div>
  </div>
<?php get_footer(); ?>