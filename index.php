<? get_header();
/*
Template Name: Home Page
*/?>
<div class="container content-area">
  <div class="row">
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<? echo get_stylesheet_directory_uri() ?>/images/tyler.jpg"></div>
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
    <div class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%;">Featured Projects:</h1>
            <div class="sectThree" id="aerial"><p>The Autonomous Aerial team was formed in 2009 and competes in the International Aerial Robotics Competition. For the 2013 competition, the vehicle must navigate through a building, remove a flash drive from a table, and replace it with a new one. </p><a href="<? echo esc_url( home_url( '/' ) ); ?>/aerial">Visit here for more</a>.</div>
            <div class="sectThree" id="mars"><p>The OSU Mars Rover Team is a distinguished robotics team within the OSURC that creates Mars Rover-like robots to compete in international robotics competitions, namely NASA’s Sample Return Robot Challenge and the Mars Society’s University Rover Challenge.</p><a href="<? echo esc_url( home_url( '/' ) ); ?>/rover">Visit here for more</a>.</div>
            <div class="sectThree" id="water"><p>The OSURC Underwater Team is engineering for the 2015-16 MATE competition. The team will build a small, tethered ROV that can be used to solve today’s problems in the Ocean: re-fitting undersea cable, repair broken oil wellheads, retrieving Cube Satellites, and surveying.</p><a href="<? echo esc_url( home_url( '/' ) ); ?>/underwater">Visit here for more</a>.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
<? get_footer(); ?>
