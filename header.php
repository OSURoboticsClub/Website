<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to the OSU Robotics Club website!">
    <meta name="author" content="OSU Robotics Club">

    <? $title = $post->post_title;
       $topdir = esc_url( home_url( '/' ) );
       $themedir = get_stylesheet_directory_uri(); ?>
    <title><? echo $title . " | " . get_bloginfo(); ?></title>

    <script src="<? echo $themedir ?>/js/jquery.min.js"></script>
    <script src="<? echo $themedir ?>/js/bootstrap.min.js"></script>
    <link href="<? echo $themedir ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<? echo $themedir ?>/style.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<? echo $themedir ?>/favicon.ico" />

    <?/* These links can either be here or on 'page-templates/calendar.php'. However, moving them to
       * the calendar would cause issues while the page loads. This is because the links/scripts
       * would be located outside of the <head> tag. As of HTML5 it is okay to do this, but don't.
       * Author: Gzxgzxgzx */
      if ( $title == "Calendar" ) {
        echo "<script src='" . $themedir . "/js/moment.min.js'></script>
              <script src='" . $themedir . "/js/fullcalendar.min.js'></script>
              <script src='" . $themedir . "/js/gcal.js'></script>
              <script src='" . $themedir . "/js/calendar.js'></script>
              <link href='" . $themedir . "/css/fullcalendar.css' rel='stylesheet' />
              <link href='" . $themedir . "/css/calendar.min.css' rel='stylesheet' />";
       } ?>
  </head>

  <body>
    <!-- HEADER -->
    <div id="site" class="container-fullwidth">
      <header>
        <nav class="navbar navbar-default" role="navigation">
          <!-- TOGGLE -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- END TOGGLE -->
          <!-- LINKS (collapses) -->
          <div class="container">
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <!-- LOGO -->
                <li id="logo">
                  <a href="<? echo $topdir; ?>">
                  </a>
                </li>
                <!-- END LOGO -->
                <li><a href="<? echo $topdir; ?>contact">Contact</a></li>
                <li><a href="<? echo $topdir; ?>calendar">Calendar</a></li>
                <li><a href="http://wiki.osurobotics.club">Wiki</a></li>
                <li class="dropdown">
                  <a href="<? echo $topdir; ?>projects" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<? echo $topdir; ?>projects">Projects</a></li>
                    <li><a href="<? echo $topdir; ?>rover">Mars Rover</a></li>
                    <li><a href="<? echo $topdir; ?>aerial">Autonomous Aerial</a></li>
                    <li><a href="<? echo $topdir; ?>underwater">Underwater ROV</a></li>
                    <li><a href="<? echo $topdir; ?>memberProjects">Member Projects</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="<? echo $topdir; ?>about" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<? echo $topdir; ?>about">About</a></li>
                    <li><a href="<? echo $topdir; ?>jobs">Job Postings</a></li>
                    <li><a href="<? echo $topdir; ?>resources">Resources</a></li>
                    <li><a href="<? echo $topdir; ?>sponsors">Sponsors</a></li>
                    <li><a href="<? echo $topdir; ?>outreach">FIRST Outreach</a></li>
                    <li><a href="<? echo $topdir; ?>alumni">Alumni</a></li>
                  </ul>
                </li>
                <li><a href="<? echo $topdir; ?>">Home</a></li>
              </ul>
            </div>
          </div>
          <!-- END LINKS -->
        </nav>
      </header>
      <!-- END HEADER -->
