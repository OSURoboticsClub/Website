<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

  <div class="row">
    <div class="col-md-5 col-md-push-1">
    	<img style="background-color: transparent; border: 0px;" class="img-thumbnail" src="<?php echo get_stylesheet_directory_uri() ?>/images/keypeople.png">
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
    <div class="col-md-5 col-md-push-1">
    	<table class="officersTable" style="" cellpadding="10">
			<tbody><tr>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/billy.jpg" class="border" style="" alt="Billy">
					<br>
					<a href="mailto:rycoske@gmail.com">Billy Edwards</a><br>
					President
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/nick.jpg" class="border" style="" alt="Nick">
					<br>
					<a href="mailto:mccombn@onid.oregonstate.edu">Nick McComb</a><br>
					Vice President <br>
					<span style="font-size:.9em;text-align:center;">Web Developer</span>
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/corwin.jpg" class="border" style="" alt="Corwin">
					<br>
					<a href="mailto:caperren@gmail.com">Corwin Perren</a><br>
					Treasurer
				</td>
			</tr>
			<tr>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/question.jpg" class="border" style="" alt="John">
					<br>
					<a href="mailto:johnlzeller@gmail.com">John Zeller</a><br> 
					Secretary
				</td>
				<td>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/question.jpg" class="border" style="" alt="Nathan">
					<br>
					<a href="mailto:brahmstn@onid.oregonstate.edu">Nathan Brahmstad</a><br> 
					Hardware Developer
				</td>
			</tr>
			</tbody>
		</table>
		<?php get_sidebar( 'about-page-officers' ); ?>
	</div>
  </div>

<?php
get_sidebar();
get_footer();
