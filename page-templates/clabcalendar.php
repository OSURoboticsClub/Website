<?php
/**
 * Template Name: CLAB Calendar
 */

$upload_dir = wp_upload_dir();
$calendar_dir = $upload_dir["basedir"] . "/calendar/";


foreach(glob($calendar_dir.'*') as $filename){
    $images[] = basename($filename);
}

$js_array = json_encode($images);
echo "<script>var images = ". $js_array . "; var basedir = \"" . content_url() . "/uploads/calendar/\";</script>";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/clab-calendar.css' rel='stylesheet' />
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo get_stylesheet_directory_uri() ?>/js/jquery.min.js'></script>
<script src='<?php echo get_stylesheet_directory_uri() ?>/js/moment.min.js'></script>
<script src='<?php echo get_stylesheet_directory_uri() ?>/js/fullcalendar.min.js'></script>
<script src='<?php echo get_stylesheet_directory_uri() ?>/js/gcal.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'agendaWeek',
			minTime: "08:00:00",
			googleCalendarApiKey: 'AIzaSyAmTElrUEA8l4HcvG-Nup46_Oq1uhbsSYE',

			// US Holidays
		  events: 'b8ths75dtv3jnkjja6ijq28jl8@group.calendar.google.com',


			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},

			loading: function(bool) {
				$('#loading').toggle(bool);

				if (bool) {
					var height = $("#calendar").height();
					var margin = $(document).height()-height-parseInt($("#calendar").css("margin-bottom"));
					set_height(margin);
				}
			}

		});

		function set_height(height) {
			var seconds = 30;
			var ms = seconds * 1000;
                        var refresh_ms = 21600*1000;
			$("#image-loader").css({
				"height": height - parseInt($("#calendar").css("margin-bottom")),
				"margin-bottom": parseInt($("#calendar").css("margin-bottom")),
			});
			$("#splash").css({
				"height": height - parseInt($("#calendar").css("margin-bottom")) - 100,
			});

      var i = 1;

      setInterval(function() {
        $("#splash").css({
          "background-image": "url("+basedir+images[i]+")",
        });
        if (i == images.length - 1) {
          i = 0;
        } else {
          ++i;
        }
      }, ms);

     setInterval(function() {
	location.reload();
     }, refresh_ms);
		}
	});
</script>
</head>
<body>

	<div id='loading'>loading...</div>
	<div id="image-loader">
		<div id="banner"><img class='logo' src="<?php echo get_stylesheet_directory_uri() ?>/images/clab-calendar/logo.png"></img></div>
		<div id="splash"></div>
	</div>
	<div id='calendar'></div>

</body>
</html>
