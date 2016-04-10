<?php
/**
 * Template Name: Store Calendar
 */

$upload_dir = wp_upload_dir();
$calendar_dir = $upload_dir["basedir"] . "/store/calendar/";

$basedir = content_url() . "uploads/store/calendar/";

foreach ( glob($calendar_dir.'*') as $filename ) {
  $images[] = basename($filename);
  list($width, $height) = getimagesize( $filename );
  $dimensions[] = ($width >= $height);
}

$imgs_array = json_encode($images);
$dims_array = json_encode($dimensions);
echo "<script>
        var images = " . $imgs_array . ";
        var dimensions = " . $dims_array . ";
        var basedir = \"" . content_url() . "/uploads/store/calendar/\";
      </script>";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='<?php echo get_stylesheet_directory_uri() ?>/css/clab-calendar.min.css' rel='stylesheet' />
    <link href='<?php echo get_stylesheet_directory_uri() ?>/css/fullcalendar.css' rel='stylesheet' />
    <script src='<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js'></script>
    <script src='<?php echo get_stylesheet_directory_uri() ?>/js/moment.min.js'></script>
    <script src='<?php echo get_stylesheet_directory_uri() ?>/js/fullcalendar.min.js'></script>
    <script src='<?php echo get_stylesheet_directory_uri() ?>/js/gcal.js'></script>
    <script src='<?php echo get_stylesheet_directory_uri() ?>/js/clab-calendar.js'></script>
  </head>
  <body>

    <div class="wrapper">
    	<div id='loading'>loading...</div>
    	<div id="image-loader">
    		<div id="banner">
          <div>
            <img class='logo' src="<?php echo get_stylesheet_directory_uri() ?>/images/clab-calendar/logo.png"></img>
          </div>
          <div>
            <span id="date"></span>
          </div>
          <div id="time">
            <span></span>
          </div>
        </div>
    		<div id="splash">
          <div class="posts">
            <?/* Displays WordPress posts for the page */
              while ( have_posts() ) : the_post();
                the_content();
              endwhile; ?>
          </div>
        </div>
    	</div>
    	<div id='calendar'></div>
    </div>

  </body>
</html>
