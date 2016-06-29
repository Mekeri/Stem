<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Town of Stem, NC</title>
  <meta name="description" content="Town of Stem, North Carolina">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  <script type="text/javascript">
    jQuery(window).load(function() {
      jQuery(".flexslider").flexslider({
        start: function() {
          var height = jQuery(".flexslider a>img").first().height();
          console.log(height);
        }
      });
    });
  </script>
</head>
<body>

<div class="container-fluid"> <!--main container around entire content to get rid of horizontal scroll-->
<div class="row homeSliderBG"><!--main row containing header, nav, and content with an Image in the background-->

  <div class="container">
    <div class="row">
      <div class="col-md-8"><img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/insignia.png" alt="town insignia"/><a href="index.php">
        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/stemTitle.png" alt="title"/></a>
      </div>
      <div class="col-md-4"><?php get_search_form(); ?></div>
    </div><!--closes Row-->
  </div><!--closes container-->

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand hidden-lg hidden-md" href="#">Navigation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">About Stem</a></li>
        <li><a href="#">Town Government</a></li>
        <li><a href="#">Things To Do</a></li>
        <li><a href="#">How Do I...?</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
