<?
/**
 * Template Name: Contact
 */

get_header(); ?>
      <div class="container content-area">
        <div class="row">
          <div class="col-md-12">
            <h3><? echo $post->post_title ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>
                    <?
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
                      </p>
          </div>
          <div class="col-md-6"><? echo do_shortcode( '[contact-form-7 id="130" title="OSURC Contact"]' ); ?></div>
        </div>
      </div>

<? get_footer(); ?>
