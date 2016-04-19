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
          <div id="elected-officers" class="col-md-6">
            <ul>
              <li>
                <p><img src="<? echo $img . "nick.jpg" ?>"></p>
                <p><a href="mailto:mccombn@oregonstate.edu">Nick McComb</a></p>
                <p>President</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "dylan.jpg" ?>"></p>
                <p><a href="mailto:dylanthrush1@gmail.com">Dylan Thrush</a></p>
                <p>Vice-President</p>
              </li><!--
           --><li>
                <img src="<? echo $img . "corwin.jpg" ?>"></p>
                <p><a href="mailto:caperren@gmail.com">Corwin Perren</a></p>
                <p>Treasurer</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Project Team Leadership</h3>
          </div>
        </div>
        <div id="team-leads" class="row">
          <div class="col-md-6">
            <p>These are the people who manage our large scale "project teams" within the club. These
              teams range in mission from building underwater ROVs to aerial vehicles. These particular
              OSURC members are the best people to contact for general interest in their projects, as
              they would all be happy to share information about their teams. For more information
              about the teams, please navigate to their project pages above.</p>
            <br>
          </div>
          <div class="col-md-6">
            <ul>
              <li>
                <p><img src="<? echo $img . "billy.jpg" ?>"></p>
                <p><a href="mailto:edwardwi@oregonstate.edu">Billy Edwards</a></p>
                <p>Mars Rover Lead</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "noavatar.jpg" ?>"></p>
                <p><a href="mailto:hiebl@oregonstate.edu">Levi Hieb</a></p>
                <p>Aerial Lead</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "daniel.png" ?>"></p>
                <p><a href="mailto:knottd@oregonstate.edu">Daniel Knott</a></p>
                <p>Underwater Lead</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Appointed Officers</h3>
          </div>
        </div>
        <div id="appointed-officers" class="row">
          <div class="col-md-12">
            <ul>
              <li>
                <p><img src="<? echo $img . "griffin.png" ?>"></p>
                <p><a href="mailto:cervag@oregonstate.edu">Griffin Cerva</a></p>
                <p>3D Printing</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "ryan.png" ?>"></p>
                <p><a href="mailto:domresr@oregonstate.edu">Ryan Domres</a></p>
                <p>Hardware Developer</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "jason.png" ?>"></p>
                <p><a href="#">Jason Lemieux</a></p>
                <p>Club Accountant</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "jennifer.jpg" ?>"></p>
                <p><a href="mailto:jlplynne@gmail.com">Jennifer</a></p>
                <p>FLL Manager</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "arduino.jpg" ?>"></p>
                <p><a href="mailto:audrina1313@gmail.com">Audrina Hahn</a></p>
                <p>FTC Manager</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "jonathan.jpg" ?>"></p>
                <p><a href="mailto:nutterj@oregonstate.edu">Jonathan Nutter</a></p>
                <p>FRC Manager</p>
              </li><!--
           --><li>
                <p><img src="<? echo $img . "harlan.jpg" ?>"></p>
                <p><a href="mailto:waldroha@oregonstate.edu">Harlan James</a></p>
                <p>Web Developer</p>
              </li>
            </ul>
            <br>
          </div>
        </div>
      </div>
<? get_footer();
