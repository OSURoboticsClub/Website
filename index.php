<? get_header();
/*
Template Name: Home Page
*/?>
<div class="container wrapper">
  <div class="row">
    <div class="col-md-5 col-md-push-1">
      <img class="img-thumbnail" src="<? echo get_stylesheet_directory_uri() ?>/images/tyler.jpg">
    </div>
    <div class="col-md-5 col-md-push-1">
      <p>
        <img src="<? echo get_stylesheet_directory_uri() ?>/images/welcome.png"><br><br>
        <? dynamic_sidebar( 'home-page-intro' ); ?>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-push-1">
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
    </div>
  </div>
  <div class="row">
    <div id="projects" class="wrapper">
      <div class="main section">
        <h1>Featured Projects:</h1>
        <div class="sectThree project" id="aerial">
          <p>The OSU Robotics Club Aerial Team is focused on building custom, autonomous UAV’s. Currently the club has designed indoor and outdoor UAV’s with high payload capacities, full autonomy, and long battery life. The team works towards furthering the understanding of aerial vehicle technologies.</p><a href="<? echo esc_url( home_url( '/' ) ); ?>/aerial">Visit here for more</a>.
        </div>
        <div class="sectThree project" id="mars">
          <p>The OSU Mars Rover Team is a distinguished robotics team within the OSURC that creates Mars Rover-like robots to compete in international robotics competitions, namely NASA’s Sample Return Robot Challenge and the Mars Society’s University Rover Challenge.</p><a href="<? echo esc_url( home_url( '/' ) ); ?>/rover">Visit here for more</a>.
        </div>
        <div class="sectThree project" id="water">
          <p>The OSURC Underwater Team is engineering for the 2015-16 MATE competition. The team will build a small, tethered ROV that can be used to solve today’s problems in the Ocean: re-fitting undersea cable, repair broken oil wellheads, retrieving Cube Satellites, and surveying.</p><a href="<? echo esc_url( home_url( '/' ) ); ?>/underwater">Visit here for more</a>.
        </div>
      </div>
    </div>
  </div>
<? get_footer(); ?>
