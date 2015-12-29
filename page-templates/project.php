<?php get_header();
/*
Template Name: Project Page
*/?>
  <div class="row">
    <div style="background-image: none; margin-bottom: -55px;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%; margin-top: -30px;"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-md-push-1"><img class="img-thumbnail" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"></div>
    <div class="col-md-5 col-md-push-1">
      <p>
	      <?php
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
  <div class="row">
    <div style="background-image: none; margin-bottom: -55px;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%; margin-top: 14px;">Recent Posts</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-push-1">
      <?php query_posts( array ( 'category_name' => $pagename, 'posts_per_page' => 3 ) ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
         <div style="padding-left: 20px;">
           <small>Posted on <?php the_time('F jS, Y @ g:i a'); ?> by <?php the_author(); ?></small><br><br>
           <?php the_content(); ?>
         </div><hr>
      <?php endwhile; ?>
      <?php else: ?>
        <h2>Nothing posted yet! Must be busy building more robot :)</h2>
      <?php endif; ?>
      <div class="navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
      </div><!-- /.navigation -->
    </div>
  </div>
<?php get_footer(); ?>
