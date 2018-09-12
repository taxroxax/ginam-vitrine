<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>

  <!-- Basic -->
  <title>Geek Unit</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="geek unit blog">
  <meta name="author" content="Aymard RAJAONARILALA">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/animate.css" media="screen">

  <!--custom css geek unit-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/colors/geek-unit-custom-color-style.css" media="screen">
  <!--custom css geek unit end-->
    <?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
    ?>

  <!-- Margo JS  -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.migrate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/modernizrr.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.appear.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/count-to.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.textillate.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.lettering.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http:/.php5shiv.googlecode.com/svn/trunk.php5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http:/.php5shiv.googlecode.com/svn/trunk.php5.js"></script><![endif]-->





</head>

    <!-- Start Header Section -->
    <header class="clearfix">


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <img width="15%" height="10%" alt="" src="<?php echo get_template_directory_uri();?>/images/margo.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active" href="index.php">Acceuil</a>
                <ul class="dropdown">
                  <li><a href="index.php">Home Main Version</a>
                  </li>
                  <li><a class="active" href="404.php">Home Version 1</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="about.php">A-propos</a>
                <ul class="dropdown">
                  <li><a href="about.php">About</a>
                  </li>
                  <li><a href="404.php">404 Page</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Projet recent</a>
                <ul class="dropdown">                 
                  <li><a href="latest-posts.php">Latest Posts</a>
                  </li>
                  <li><a href="latest-projects.php">Latest Projects</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="single-post.php">Blog</a>
                <ul class="dropdown">
                  <li><a href="single-post.php">Blog Single Post</a>
                  </li>
                </ul>
              </li>
              <li><a href="contact.php">Contact</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php">Home</a>
            <ul class="dropdown">
              <li><a href="index.php">Home Main Version</a>
              </li>
              <li><a class="active" href="index.php">Home Version 1</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.php">A-propos</a>
            <ul class="dropdown">
              <li><a href="about.php">About</a>
              </li>
              </li>
              <li><a href="404.php">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="latest-posts.php">Latest Posts</a>
              </li>
              <li><a href="latest-projects.php">Latest Projects</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="latest-posts.php">Blog</a>
            <ul class="dropdown">
              <li><a href="single-post.php">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    <!-- Start Header Section -->