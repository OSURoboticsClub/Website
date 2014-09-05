<?php get_header(); 
/*
Template Name: Gallery Page
*/?>
  <div class="row">
    <div style="background-image: none;" class="contMain">
      <div class="main">
        <div class="left" style="margin:0px 0 0 0;">
          <div class="section">
            <h1 style="width: 150%; margin-left: -50%; padding-left: 50%; margin-top: -30px;"><?php the_title() ?></h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-push-1">
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
$media_query = new WP_Query(
    array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
    )
);
$list = array();
foreach ($media_query->posts as $post) {
    $list[] = [wp_get_attachment_image_src( $post->ID, 'thumbnail' )[0], wp_get_attachment_url( $post->ID )];
}
foreach ($list as $imageurl) { ?>
    <a href='<?php echo $imageurl[1]; ?>'><img src='<?php echo $imageurl[0]; ?>' style="width: 150px; height: 150px;"></a>
<?php } ?>
    </div>
  </div>
<?php get_footer(); ?>

