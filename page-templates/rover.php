<? get_header();
/*
Template Name: Rover
*/?>
      <div id="projects" class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><? echo $post->post_title ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <!-- Why do in 4 lines, what Bootstrap can do in 40? -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover00.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover01.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover02.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover03.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover04.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover05.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover06.jpg">
                </div>
                <div class="item">
                  <img src="http://osurobotics.club/wp-content/uploads/rover/rover07.jpg">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <br>
            <!--<img class="img-thumbnail" src="<? echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>">-->
          </div>
          <div class="col-md-6">
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
        </div>
      </div>
<? get_footer();
