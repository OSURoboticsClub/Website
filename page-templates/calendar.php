<?php
/**
 * Template Name: Calendar
 */

get_header(); ?>
<div class="container content-area">
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/calendar.css' rel='stylesheet' />
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo get_stylesheet_directory_uri() ?>/css/fullcalendar.print.css' rel='stylesheet' media='print' />
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
			var seconds = 2;
			var ms = seconds * 1000;
			$("#image-loader").css({
				"height": height - parseInt($("#calendar").css("margin-bottom")),
				"margin-bottom": parseInt($("#calendar").css("margin-bottom")),
			});
		}

	});

</script>

  <div class="row">
    <div class="col-md-12">
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
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

    	<div id='loading'>loading...</div>
    	<div id='calendar'></div>

    </div>
  </div>

<?php
get_footer();
