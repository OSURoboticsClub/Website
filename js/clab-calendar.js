jQuery = jQuery.noConflict();
jQuery( document ).ready( function($) {
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
  Date.prototype.yyyymmdd = function() {
    var yyyy = this.getFullYear().toString();
    var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
    var dd  = this.getDate().toString();
    return yyyy + "/" + (mm[1]?mm:"0"+mm[0]) + "/" + (dd[1]?dd:"0"+dd[0]); // padding
  };

  Date.prototype.hhmmss = function() {
    var hh = this.getHours();
    var mm = this.getMonth();
    var ss = this.getSeconds();

    if ( hh > 12 )
      hh = hh - 12;
    else if ( hh === 0 )
      hh = 12;

    if ( mm < 10 )
      mm = "0" + mm;

    if ( ss < 10 )
      ss = "0" + ss;

    return hh + ":" + mm + ":" + ss;
  };

  $('#date').text( new Date().yyyymmdd() );
  
  $('#time').text(new Date().hhmmss() );
  setInterval(function() {
    $('#time').text(new Date().hhmmss() );
  }, 1000);

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
