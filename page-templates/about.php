<?
/**
 * Template Name: About
 */

$img = get_stylesheet_directory_uri() . "/images/officers/";

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
        <!--</div>
        <div style="padding-top: 10px" class="row">-->
          <div class="col-md-6">
            <ul>
              <li>
                <p><img src="<? echo $img . "nick.jpg" ?>"></p>
                <p><a href="mailto:mccombn@oregonstate.edu">Nick McComb</a></p>
                <p>President</p>
              </li>
              <li>
                <p><img src="<? echo $img . "dylan.jpg" ?>"></p>
                <p><a href="mailto:dylanthrush1@gmail.com">Dylan Thrush</a></p>
                <p>Vice-President</p>
              </li>
              <li>
                <img src="<? echo $img . "corwin.jpg" ?>"></p>
                <p><a href="mailto:caperren@gmail.com">Corwin Perren</a></p>
                <p>Treasurer</p>
              </li>
              <li>
                <p><img src="<? echo $img . "billy.jpg" ?>"></p>
                <p><a href="mailto:edwardwi@oregonstate.edu">Billy Edwards</a></p>
                <p>Rover Team Lead</p>
              </li><!--
              <li>
                <p><img src="<? echo $img . "evan.png" ?>"></p>
                <p><a href="mailto:gonnerme@oregonstate.edu">Evan Gonnerman</a></p>
                <p>Aerial Team Lead</p>
              </li>
              <li>
                <p><img src="<? echo $img . "daniel.png" ?>"></p>
                <p><a href="mailto:knottd@oregonstate.edu">Daniel Knott</a></p>
                <p>Underwater Team Lead</p>
              </li>
              <li>
                <p><img src="<? echo $img . "griffin.png" ?>"></p>
                <p><a href="mailto:cervag@oregonstate.edu">Griffin Cerva</a></p>
                <p>3D Printing</p>
              </li>
              <li>
                <p><img src="<? echo $img . "ryan.png" ?>"></p>
                <p><a href="mailto:domresr@oregonstate.edu">Ryan Domres</a></p>
                <p>Hardware Developer</p>
              </li>
              <li>
                <p><img src="<? echo $img . "jason.png" ?>"></p>
                <p><a href="#">Jason Lemieux</a></p>
                <p>Club Accountant</p>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
<? get_footer();
