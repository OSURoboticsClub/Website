<?php get_header(); 
/*
Template Name: Default Template
*/?>
  <div class="row">
    <div style="background-image: none; margin-bottom: -55px;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%; margin-top: -30px;"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"></div>
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