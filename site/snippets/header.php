<?php

  $nfconfig = array();

  if( $_SERVER['HTTP_HOST'] ) {
    $nfconfig['tld'] = substr($_SERVER['HTTP_HOST'], -16);
  }

  $nfconfig['minimize'] = false;
  if( $nfconfig['tld'] == 'nicolefenton.com' ) {
    $nfconfig['site'] = 'live';
    $nfconfig['minimize'] = true;
  }

  $nfconfig['pagename'] = null;
  switch ($_SERVER['REQUEST_URI']) {
    case '/books':
      $nfconfig['pagename'] = 'books';
      break;
    case '/about':
      $nfconfig['pagename'] = 'about';
      break;
    case '/what-i-do':
      $nfconfig['pagename'] = 'what-i-do';
      break;
    case '/contact':
      $nfconfig['pagename'] = 'contact';
      break;
    case '/':
      $nfconfig['pagename'] = 'home';
      break;
    default:
      $nfconfig['pagename'] = 'article';
  }

?><!DOCTYPE html>
<!--[if lte IE 8]>     <html lang="en-us" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <?php snippet("font-apercu") ?>

  <style>
    <?php include($_SERVER['DOCUMENT_ROOT']."/_/css/firstpaint.css"); ?>
  </style>
  <?php echo css('/_/css/screen.css?v=0.9.3') ?>

  <!--[if lte IE 8]>
  <?php echo css('/_/css/ie.css?v=0.1.0') ?>
  <![endif]-->
</head>
<body id="body" class="body<?= $nfconfig['pagename'] ? ' page--'.$nfconfig['pagename'] : '' ?> page-dirname--<?php echo $page->dirname() ?> page-id--<?php echo $page->id() ?> page-slug--<?php echo $page->slug() ?> page-template--<?php echo $page->template() ?>">

  <div class="body-wrap">

    <header class="header cf">

      <a class="logo" href="<?php echo url() ?>" role="banner">
        <?php echo $site->title()->html() ?>
        <!-- <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php if( $site->title() ) { echo $site->title()->html(); } ?>" /> -->
      </a>
      <?php snippet('menu') ?>

    </header>
