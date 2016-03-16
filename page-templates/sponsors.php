<?
/**
 * Template Name: Sponsors Page
 */

get_header(); ?>
      <div class="container content-area">
        <style type="text/css">
          ul#nav li > ul {
          display: none;
          position: absolute;
          top:115px;
          left:20px;
          }

          ul#nav li:hover > ul, ul#nav li > ul:hover {
          display: inline;
          }

          ul#nav li > ul li a {
          background-image: none !important;
          text-indent: 0 !important;
          width:100px;
          }

          .sponsor {
          clear: none;
          float: left;
          width:300px;
          height:250px;
          margin-right:100px;
        }

        </style>
        <div class="row">
          <div class="col-md-12">
            <h3><? echo $post->post_title ?></h3>
          </div>
        </div>

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
