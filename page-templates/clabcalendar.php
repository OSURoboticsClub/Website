<?php
/**
 * Template Name: CLAB Calendar
 */

$upload_dir = wp_upload_dir();
$calendar_dir = $upload_dir["basedir"] . "/calendar/";

foreach ( glob($calendar_dir.'*') as $filename ) {
  $images[] = basename($filename);
}

$js_array = json_encode($images);
echo "<script>var images = ". $js_array . "; var basedir = \"" . content_url() . "/uploads/calendar/\";</script>"; ?>

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

  	<div id='loading'>loading...</div>
  	<div id="image-loader">
  		<div id="banner">
        <div>
          <img class='logo' src="<?php echo get_stylesheet_directory_uri() ?>/images/clab-calendar/logo.png"></img>
        </div>
        <div>
          <span id="date">DATE</span>
        </div>
        <div>
          <span id="time"></span>
        </div>
      </div>
  		<div id="splash"></div>
  	</div>
  	<div id='calendar'></div>

  </body>
</html>
