<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

  <div class="row">
    <div class="col-md-5 col-md-push-1">
    	<img style="background-color: none; border: none;" class="img-thumbnail" src="<?php echo get_stylesheet_directory_uri() ?>/images/keypeople.png">
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
    <div class="col-md-5 col-md-push-1"><?php get_sidebar( 'about-page-officers' ); ?></div>
  </div>

<?php
get_sidebar();
get_footer();
