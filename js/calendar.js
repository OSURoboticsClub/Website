/* File: Calendar.js
 * Description: Handles the calendar from 'page-templates/calendar.php' which
 * uses a plugin called FullCalendar. To learn more about FullCalendar read the
 * documentation located at http://fullcalendar.io/docs/.
 */
jQuery = jQuery.noConflict();
jQuery( document ).ready( function($) {
  $('#calendar').fullCalendar( {
    /* Settings */
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    defaultView: 'agendaWeek',
    minTime: "08:00:00",
    googleCalendarApiKey: 'AIzaSyAmTElrUEA8l4HcvG-Nup46_Oq1uhbsSYE',
    events: 'b8ths75dtv3jnkjja6ijq28jl8@group.calendar.google.com',

    /* eventClick: Opens up events in a popup window */
    eventClick: function( event ) {
      window.open(event.url, 'gcalevent', 'width=700,height=600');
      return false;
    },

    /* loading: Handles calendar loading, calls set_height */
    loading: function( bool ) {
      $('#loading').toggle(bool);

      if (bool) {
        var height = $("#calendar").height();
        var margin = $(document).height()-height-parseInt($("#calendar").css("margin-bottom"));
        set_height(margin);
      }
    }

  });

  /* set_height: Sets and calculates the height for the calendar */
  function set_height( height ) {
    var seconds = 2;
    var ms = seconds * 1000;
    $("#image-loader").css({
      "height": height - parseInt($("#calendar").css("margin-bottom")),
      "margin-bottom": parseInt($("#calendar").css("margin-bottom")),
    });
  }
});
