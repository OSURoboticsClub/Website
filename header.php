<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcome to the OSU Robotics Club website!">
    <meta name="author" content="OSU Robotics Club">

    <title><? echo $post->post_title . " | " . get_bloginfo(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<? echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<? echo get_stylesheet_directory_uri() ?>/main.css" rel="stylesheet">
    <script src="<? echo get_stylesheet_directory_uri() ?>/js/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- HEADER -->
    <div class="container-fullwidth">
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
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <!-- LOGO -->
            <li id="logo">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>">
                <img src="<? echo get_stylesheet_directory_uri() ?>/images/logo-old.png">
              </a>
            </li>
            <!-- END LOGO -->
            <li><a href="<? echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="dropdown">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>about" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>about">About</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>jobs">Job Postings</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>resources">Resources</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>sponsors">Sponsors</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>outreach">FIRST Outreach</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>alumni">Alumni</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="<? echo esc_url( home_url( '/' ) ); ?>projects" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>projects">Projects</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>rover">Mars Rover</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>aerial">Autonomous Aerial</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>underwater">Underwater ROV</a></li>
                <li><a href="<? echo esc_url( home_url( '/' ) ); ?>memberProjects">Member Projects</a></li>
              </ul>
            </li>
            <li><a href="http://wiki.osurobotics.club">Wiki</a></li>
            <li><a href="<? echo esc_url( home_url( '/' ) ); ?>calendar">Calendar</a></li>
            <li><a href="<? echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
          </ul>
        </div>
        <!-- END LINKS -->
      </nav>
   </div>

    <!-- END HEADER -->
