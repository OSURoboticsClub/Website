<?php get_header(); 
/*
Template Name: Home Page
*/?>
  <div class="row">
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<?php echo get_stylesheet_directory_uri() ?>/images/tyler.jpg"></div>
    <div class="col-md-5 col-md-push-1">
      <p>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/welcome.png"><br><br>
        <?php get_sidebar( 'home-page-intro' ); ?>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-push-1">
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
    </div>
  </div>
  <div class="row">
    <div style="background-image: none;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%;">Featured Projects:</h1>
            <div class="sectThree" id="aerial"><p>The Autonomous Aerial team was formed in 2009 and competes in the International Aerial Robotics Competition. For the 2013 competition, the vehicle must navigate through a building, remove a flash drive from a table, and replace it with a new one. </p><a href="aerial">Visit here for more</a>.</div>
            <div class="sectThree" id="mars"><p>The Mars Rover team has competed in the University Rover Challenge since 2008, when they took first place. The teleoperated rover must perform a variety of tasks, including locating bacteria, locating a distressed astronaut, and manipulating a control panel. </p><a href="mars">Visit here for more</a>.</div>
            <div class="sectThree" id="water"><p>OSURC is participating for the first time in an autonomous underwater vehicle competition in San Diego this summer. The team is designing a small underwater robot to navigate a course of buoys, pipes, and hydrophcurrents. Some of the subsystems include underwater acoustics, propulsion, cameras, and pressure vessels.</p><a href="underwater">Visit here for more</a>.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>