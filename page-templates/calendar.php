<?
/**
 * Template Name: Calendar
 */
get_header(); ?>
    <div class="container">
      <!-- POSTS -->
      <div class="row">
        <div class="col-md-12">
          <h3><? echo $post->post_title ?></h3>
          <?/* Displays WordPress posts for the Calendar page */
            while ( have_posts() ) : the_post();
              the_content();
            endwhile; ?>
        </div>
      </div>
      <!-- END POSTS -->
      <!-- CALENDAR -->
      <div id="calendar-wrapper" class="row">
        <div class="col-md-12">
          <div id='loading'>loading...</div>
          <div id='calendar'></div>
        </div>
      </div>
      <!-- END CALENDAR -->
    </div>
<?
get_footer();
