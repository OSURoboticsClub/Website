<?
/**
 * Template Name: Store Page
 */

$lux_state = file_get_contents('http://osurobotics.club/web_scripts/lux.bool');
$lux = "";

if ( $lux_state == "1\n" ) {
  $lux = "<div id='lux' class='col-md-12 open'>open</span>";
} else {
  $lux = "<div id='lux' class='col-md-12 closed'>closed</span>";
}

get_header(); ?>
      <div id="store" class="content container">
        <!-- IoT Light Sensor -->
        <div class="row">
            <? echo $lux; ?>
          </div>
        </div>
        <!-- SPLASH IMAGE -->
        <div class="splash row">
          <div class="col-md-12">
            <div id="store-splash">
              <span id="credit">Pictured: OSU Robotics Club Store Entrance</span>
            </div>
          </div>
        </div>
        <!-- PAGE TITLE -->
        <div class="row">
            <div class="header col-md-12">
              <p><span>OSU</span> Robotics Club Store</p>
            </div>
        </div>
        <!-- END PAGE TITLE -->
        <!-- END SPLASH IMAGE -->
        <!-- POSTS -->
        <div class="row">
          <div class="col-md-6">
            <h3>About</h3>
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
          <div class="col-md-6">
            <h3>Hours</h3>
            <div id="calendar"></div>
          </div>
        </div>

        <div id="inventory" class="row">
          <div class="col-md-12">
            <h3>Inventory</h3>
          </div>
          <div class="col-md-6">
            <h4>Request Parts</h4>
            <p>If you cannot find the part you are looking for and would like to suggest that we carry
            it, please fill out the request form.</p>
            <br>
            <h4>What We Carry</h4>
            <!--<p>Here is a generic list of what the OSU Robotics Club Store carries.If you are searching
            for a specific part, please review the PDF <a href="#" target="_blank">here.</a></p>-->
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li>Arduinos</li>
                  <li>Passive Components</li>
                  <li>Discrete Transistors</li>
                  <li>Logic ICs</li>
                  <li>Microcontrollers</li>
                  <li>Amplifier ICs</li>
                  <li>LEDs</li>
                  <li>Switches</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li>Motors</li>
                  <li>Connectors</li>
                  <li>Arduino</li>
                  <li>Teensy</li>
                  <li>Dev Boards</li>
                  <li>Breakout Boards</li>
                  <li>Motor Controllers</li>
                  <li>Fuses</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h4>Request Form</h4>
            <? echo do_shortcode( '[contact-form-7 id="219" title="Part Request"]' ); ?>
          </div>
        </div>
        <!--<div class="row">
          <div class="col-md-12">
            <h1 class="banner">Get Involved</h1>
            <p>There are many ways to get involved with the OSU Robotics Club and the OSU Robotics
            Club store. For information on how to get involved, review the "How to Join" section on
            the <a href="">homepage.</a></p>
          </div>
        </div>-->
      </div>

<? get_footer();
