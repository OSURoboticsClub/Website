<?
/**
 * Template Name: Store Page
 */
get_header(); ?>
      <div id="store" class="content container">
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
                <p><span>OSU</span> Robotics Club Store</p>
              </div>
          </div>
          <!-- END PAGE TITLE -->
          <!-- END SPLASH IMAGE -->
          <!-- POSTS -->
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
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
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3>Inventory</h3>
            <? echo do_shortcode( '[contact-form-7 id="189" title="Job Postings"]' ); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h1 class="banner">Get Involved</h1>
          </div>
        </div>
      </div>

<? get_footer();
