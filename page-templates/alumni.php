<?
/**
 * Template Name: Alumni
 */

get_header(); ?>
      <div class="container content-area">
        <div class="row">
          <div class="col-md-12">
            <h3><? echo $post->post_title ?></h3>
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
        </div>
      </div>

<? get_footer();
