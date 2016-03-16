<?
/**
 * Template Name: Member Projects Page
 */

get_header(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
        </div>
      </div>

<? get_footer(); ?>
