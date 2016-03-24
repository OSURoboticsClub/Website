<? get_header();
  /*
   * Template Name: Home Page
   **/
?>
    <!-- CONTENT -->
    <div id="content" class="container wrapper">
      <!-- SPLASH IMAGE -->
      <div class="splash row">
        <div class="col-md-12">
          <div id="splash">
            <span id="credit">Pictured: Dylan Thrush, Billy Edwards, OSU President Ed Ray, Nick McComb, Matthew Shuman</span>
          </div>
        </div>
      </div>
        <!-- PAGE TITLE -->
        <div class="row">
            <div class="header col-md-12">
              <p><span>Welcome</span> to the OSU Robotics Club Website!</p>
            </div>
        </div>
        <!-- END PAGE TITLE -->
        <!-- END SPLASH IMAGE -->
        <!-- POSTS -->
        <div class="row">
          <div class="posts col-md-12">
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
        <!-- END POSTS -->
        <!-- FEATURED PROJECTS BANNER -->
        <div class="row">
          <div class="col-md-12">
            <h1 class="banner">Featured Projects</h1>
          </div>
        </div>
        <!-- END FEATURED PROJECTS BANNER -->
        <section id="projects" class="wrapper">
          <!-- PROJECTS IMAGES -->
          <div class="images row">
            <div class="aerial image col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>aerial"></a>
            </div>
            <div class="rover image col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>rover"></a>
            </div>
            <div class="underwater image col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>underwater"></a>
            </div>
          </div>
          <!-- END PROJECTS IMAGES -->
          <!-- PROJECTS BLURBS -->
          <div class="blurbs row">
            <div class="col-md-4">
              <span class="lquote">&ldquo;</span>
              The OSU Robotics Club Aerial Team is focused on building custom, autonomous UAV’s.
              Currently the club has designed indoor and outdoor UAV’s with high payload capacities,
              full autonomy, and long battery life. The team works towards furthering the understanding
              of aerial vehicle technologies <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
            </div>
            <div class="col-md-4">
              <span class="lquote">&ldquo;</span>
              The OSU Mars Rover Team is a distinguished robotics team within the OSURC that creates
              Mars Rover-like robots to compete in international robotics competitions, namely NASA’s
              Sample Return Robot Challenge and the Mars Society’s University Rover Challenge
               <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
            </div>
            <div class="col-md-4">
              <span class="lquote">&ldquo;</span>
              The OSURC Underwater Team is engineering for the 2015-16 MATE competition. The team will
               build a small, tethered ROV that can be used to solve today’s problems in the Ocean:
               re-fitting undersea cable, repair broken oil wellheads, retrieving Cube Satellites, and
                surveying <span class="ellipsis">[ . . . ]</span> <span class="rquote">&rdquo;</span>
            </div>
          </div>
          <!-- END PROJECTS BLURBS -->
          <!-- PROJECTS LINKS -->
          <div class="links row">
            <div class="col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>aerial">Visit here for more.</a>
            </div>
            <div class="col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>rover">Visit here for more.</a>
            </div>
            <div class="col-md-4">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>underwater">Visit here for more.</a>
            </div>
          </div>
          <!-- END PROJECTS LINKS -->
        </section>
        <!-- END PROJECTS -->
        <!-- OFFICERS
        <div id="meet-the-leaders">
          <div class="row">
            <div class="col-md-12">
              <h1 class="banner">Meet the Leaders</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
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
        <!-- END OFFICERS -->
      <!-- END INDEX -->
  </div>
  <!-- END CONTENT -->
<? get_footer();
  /*
   * Template Name: Home Page
   **/
?>
