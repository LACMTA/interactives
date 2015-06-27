<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
  <?php date_default_timezone_set('America/Los_Angeles'); ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- FAVICONS -->
  <link rel="icon" href="/assets/images/favicons/favicon.ico">
  <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon.png">

  <title><?php echo $site->title() ?> | <?php echo $page->title() ?></title>
  <meta name="description" content="<?php echo $site->description() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- <?php echo css('assets/css/main.css') ?> -->

  <?php 
  echo js('assets/js/jquery-1.11.2.js');
  echo js('assets/js/masonry.pkgd.min.js');
  ?>

  <!-- CSS
  ================================= -->

  <!-- GOOGLE FONTS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' type='text/css'>

  <!-- LIBRARIES CSS -->
  <?php 
  echo css('assets/css/bootstrap.min.css');
  echo css('assets/css/font-awesome.min.css');
  echo css('assets/css/animate.min.css');
  echo css('assets/css/masonry.css');
  ?>

  <!-- SPECIFIC CSS -->
  <?php echo css('assets/css/style.css') ?>

  <!-- COLORS -->
  <!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/pink.css"> -->
  <!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/red.css"> -->
  <?php echo css('assets/css/colors/orange.css') ?>
<!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/yellow.css"> -->
  <!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/green.css"> -->
  <!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/turquoise.css"> -->
  <!-- <link id="color-css" rel="stylesheet" href="assets/css/colors/blue.css"> -->


  <!-- custom css -->
  <?php
  foreach($page->files()->filterBy('extension', 'css') as $css):
    echo css($css->url());
  endforeach;
  ?>

  <!-- custom javascript -->
  <?php
  foreach($page->files()->filterBy('extension', 'js') as $js):
    echo js($js->url());
  endforeach;
  ?>

</head>
<body class="enable-animations enable-preloader">

  <div id="document" class="document">



  <!-- HEADER
  			================================= -->
  			<header id="header" class="header-section navbar-inverse section section-light navbar navbar-fixed-top">

  				<div class="container-fluid">

  					<div class="navbar-header navbar-left">

  						<!-- RESPONSIVE MENU BUTTON -->
  						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>

  						<!-- HEADER LOGO -->
  						<a class="navbar-logo navbar-brand anchor-link" href="#hero">
  							<img src="/assets/images/logos/header-logo.png" srcset="/assets/images/logos/header-logo@2x.png 2x" alt="Drew">
  						</a>

  					</div>

  					<nav id="navigation" class="navigation navbar-collapse collapse navbar-right">

  						<!-- NAVIGATION LINKS -->

              <?php snippet('menu') ?>

  					</nav>

  				</div>

  			</header>
