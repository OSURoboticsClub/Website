<?
/**
 * Template Name: About
 */

get_header(); ?>
      <div id="about" class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Key People</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
          <div class="col-md-6">
            <ul>
              <li>
                <p><img src="http://osurobotics.club/wp-content/uploads/2015/12/Nick-150x150.jpg"></p>
                <p><a href="mailto:mccombn@onid.oregonstate.edu">Nick McComb</a></p>
                <p>President</p>
              </li>
              <li>
                <p><img src="http://osurobotics.club/wp-content/uploads/2015/12/Dylan-150x150.jpg"></p>
                <p><a href="mailto:dylanthrush1@gmail.com">Dylan Thrush</a></p>
                <p>Vice-President</p>
              </li>
              <li>
                <img src="http://osurobotics.club/wp-content/uploads/2015/12/Corwin-150x150.jpg"></p>
                <p><a href="mailto:caperren@gmail.com">Corwin Perren</a></p>
                <p>Treasurer</p>
              </li>
              <li>
                <p><img src="http://osurobotics.club/wp-content/uploads/2015/12/Billy-150x150.jpg"></p>
                <p><a href="mailto:rycoske@gmail.com">Billy Edwards</a></p>
                <p>Secretary</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
<? get_footer();
