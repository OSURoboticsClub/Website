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
    <div style="background-image: none; margin-bottom: -55px;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%; margin-top: -30px;"><? the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-push-1">
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
  </div>

<? get_footer(); ?>
