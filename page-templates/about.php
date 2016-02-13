<?
/**
 * Template Name: About
 */

get_header(); ?>
<div class="container content-area">
  <div class="row">
    <div class="col-md-5 col-md-push-1">
    	<img style="background-color: transparent; border: 0px;" class="img-thumbnail" src="<? echo get_stylesheet_directory_uri() ?>/images/keypeople.png">
		<p>
			<?
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
					<img src="http://osurobotics.club/wp-content/uploads/2015/12/Nick-150x150.jpg" class="border" style="" alt="Nick">
					<br>
					<a href="mailto:mccombn@onid.oregonstate.edu">Nick McComb</a><br>
					President
				</td>
				<td>
					<img src="http://osurobotics.club/wp-content/uploads/2015/12/Dylan-150x150.jpg" class="border" style="" alt="Dylan ">
					<br>
					<a href="mailto:dylanthrush1@gmail.com">Dylan Thrush</a><br>
					Vice-President
				</td>
				<td>
					<img src="http://osurobotics.club/wp-content/uploads/2015/12/Corwin-150x150.jpg" class="border" style="" alt="Corwin">
					<br>
					<a href="mailto:caperren@gmail.com">Corwin Perren</a><br>
					Treasurer
				</td>
			</tr>
			<tr>
				<td>
					<img src="http://osurobotics.club/wp-content/uploads/2015/12/Billy-150x150.jpg" class="border" style="" alt="Billy">
					<br>
					<a href="mailto:rycoske@gmail.com">Billy Edwards</a><br>
					Secretary <br>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
  </div>

<?
get_footer();
