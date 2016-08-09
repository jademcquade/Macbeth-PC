<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="http://" . <?php $host ?> . "/geo-site/apple-touch-icon.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAo-_L9MctRmuLwkHHVtgtdFkYkdgUX-I"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('src="<?php bloginfo('template_url'); ?>/libs/js/jquery-1.11.2.min.js"><\/script>')</script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/prod/js/all.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

  <div class="headerWrap">

      <!-- Bootstrap navigation -->
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/macbethpc">
            <?php 
            $detect = new Mobile_Detect;
            if ( $detect->isMobile() ) { ?>
              <img class="brand-logo" src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-new.gif" alt="Macbeth Property Consultants logo" />
            <?php } else { ?>
              <img class="brand-logo" src="<?php bloginfo("stylesheet_directory"); ?>/img/logo-desktop.gif" alt="Macbeth Property Consultants logo" />
            <?php } ?>
        </a>
        <div class="headerTel">
          <h1>Tel: +44 (0)141 881 7171</h1>
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        <li>
          <a href="<?php echo site_url(); ?>/investment/">INVESTEMENT <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/development">DEVELOPMENT <span class='sr-only'>(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/asset-management/">ASSET MANAGEMENT <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/sales-purchase/">Sales &amp; PURCHASE <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/client-representation/">CLIENT REPRESENTATION <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/property/">PROPERTIES <span class="sr-only">(current)</span></a>
        </li>
        <li>
          <a href="<?php echo site_url(); ?>/contact-us/">CONTACT US <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  </div>