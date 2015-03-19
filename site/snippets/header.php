<!DOCTYPE html>
<!--[if lte IE 8]>     <html lang="en-us" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">

  <meta http-equiv="imagetoolbar" content="false">
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/favicon.png">

  <style><?php snippet("css-firstpaint") ?></style>
  <link rel="dns-prefetch" href="f.fontdeck.com" />
  <link rel="dns-prefetch" href="www.google-analytics.com" />

  <?php snippet("font-apercu") ?>

  <script src="/_/js/vendor/modernizr.custom.1.0.1.js" type="text/javascript"></script>

  <link href="/_/css/screen.1.0.5.css" rel="stylesheet">
  <?php /* 
  <script><?php snippet('js-loadcss') ?>; loadCSS( "/_/css/screen.1.0.5.css" );</script>
  <noscript><link href="/_/css/screen.1.0.5.css" rel="stylesheet"></noscript> 
  */ ?>

  <!--[if lte IE 8]><?php echo css('/_/css/ie.1.0.1.css') ?><![endif]-->

  <script src="/_/js/vendor/modernizr.custom.1.0.1.js" type="text/javascript"></script>

</head>
<body id="body" class="body page-id--<?php echo $page->id() ?> page-slug--<?php echo $page->slug() ?> page-template--<?php echo $page->template() ?>">

  <div class="body-wrap">

    <header class="header cf">

      <a class="logo" href="<?php echo url() ?>" role="banner"><?php echo $site->title()->html() ?></a>
      <?php snippet('menu') ?>

    </header>
