<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | Robotics Club | Oregon State University</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles from the previously designed OSURC website -->
    <link href="<?php echo get_stylesheet_directory_uri() ?>/css/osurc.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri() ?>/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div style="height:140px; background-color: #E2E2DE; border-top: 10px solid #D85A1A;" class="navbar navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png"></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav" id="robot-nav">
            <li class="active"><a class="general home" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="general about dropdown-toggle disabled" href="about">About <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="jobs">Job Postings</a></li>
                <li><a href="resources">Resources</a></li>
                <li><a href="sponsors">Sponsors</a></li>
                <li><a href="outreach">FIRST Outreach</a></li>
                <li><a href="alumni">Alumni</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="general general projects disabled" href="projects">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="mars">Mars Rover</a></li>
                <li><a href="aerial">Autonomous Aerial</a></li>
                <li><a href="underwater">Underwater ROV</a></li>
                <li><a href="memberProjects">Smaller Projects</a></li>
              </ul>
            </li>
            <li><a class="general comps" href="competitions">Competitions</a></li>
            <li><a class="general gal" href="gallery">Gallery</a></li>
            <li><a class="general contact" href="contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container content-area">
