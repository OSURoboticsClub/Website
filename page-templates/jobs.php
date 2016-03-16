<?
/**
 * Template Name: Jobs Page
 */
get_header(); ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3><? echo $post->post_title ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
          <div class="col-md-6">
            <? echo do_shortcode( '[contact-form-7 id="189" title="Job Postings"]' ); ?>
          </div>
        </div>
      </div>

<? get_footer();
