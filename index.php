<? get_header();
  /*
   * Template Name: Home Page
   **/
?>
    <!-- CONTENT -->
    <div class="container wrapper">
      <div class="row">
          <div class="header col-md-12">
            <p><span>Welcome</span> to the OSU Robotics Club website!</h1>
          </div>
      </div>
      <!-- SPLASH IMAGE -->
      <div class="splash row">
        <div class="col-md-12">
          <div id="splash"></div>
        </div>
      </div>
      <!-- END SPLASH IMAGE -->
      <div class="row">
        <div class="col-md-12">
          <?
            /* Add each post */
            while ( have_posts() ) : the_post();
              /* nclude the page content template */
              the_content();
              /* If comments are open or we have at least one comment load up the comment template */
              if ( comments_open() || get_comments_number() ) {
                comments_template();
              }
            endwhile;
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h1 class="banner">Featured Projects:</h1>
        </div>
      </div>
      <div id="projects" class="row">
        <div class="aerial col-md-4">
          <div class="image">
            <a href="<? echo esc_url( home_url( '/' ) ); ?>aerial"><!-- IMAGE --></a>
          </div>
          <p class="text">
            <span class="lquote">&ldquo;</span>
            The OSU Robotics Club Aerial Team is focused on building custom, autonomous UAV’s.
            Currently the club has designed indoor and outdoor UAV’s with high payload capacities,
            full autonomy, and long battery life. The team works towards furthering the understanding
            of aerial vehicle technologies <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
          </p>
          <p><a href="<? echo esc_url( home_url( '/' ) ); ?>aerial">Visit here for more.</a></p>
        </div>
        <div class="rover col-md-4">
          <p class="image">
            <a href="<? echo esc_url( home_url( '/' ) ); ?>aerial"><!-- IMAGE --></a>
          </p>
          <p class="text">
            <span class="lquote">&ldquo;</span>
            The OSU Mars Rover Team is a distinguished robotics team within the OSURC that creates
            Mars Rover-like robots to compete in international robotics competitions, namely NASA’s
            Sample Return Robot Challenge and the Mars Society’s University Rover Challenge
             <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
          </p>
          <p><a href="<? echo esc_url( home_url( '/' ) ); ?>rover">Visit here for more.</a></p>
        </div>
        <div class="underwater col-md-4">
          <p class="image">
            <a href="<? echo esc_url( home_url( '/' ) ); ?>underwater"><!-- IMAGE --></a>
          </p>
          <p class="text">
            <span class="lquote">&ldquo;</span>
            The OSURC Underwater Team is engineering for the 2015-16 MATE competition. The team will
             build a small, tethered ROV that can be used to solve today’s problems in the Ocean:
             re-fitting undersea cable, repair broken oil wellheads, retrieving Cube Satellites, and
              surveying <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
          </p>
          <p><a href="<? echo esc_url( home_url( '/' ) ); ?>underwater">Visit here for more.</a></p>
        </div>
      </div>
    <!-- END INDEX -->
<? get_footer();
  /*
   * Template Name: Home Page
   **/
?>
