<!doctype html>
<!--[if lte IE 8]>     <html lang="en-us" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <?= snippet('seo/meta') ?>

  <meta http-equiv="imagetoolbar" content="false">







  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/favicon.png">




  <style><?= snippet("global/css-firstpaint") ?></style>



  <?= css('assets/css/screen.css') ?>


  <?php /*
  <script><?php snippet('js-loadcss') ?>; loadCSS( "/_/css/screen.1.0.5.css" );</script>
  <noscript><link href="/_/css/screen.1.0.5.css" rel="stylesheet"></noscript>
  */ ?>

  <!--[if lte IE 8]>  <?= css('assets/css/ie.css') ?> <![endif]-->

  <?= js('assets/js/modernizr.custom.js') ?>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42875888-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'UA-42875888-1');
  </script>

</head>
<body id="body" class="body page-id--<?= $page->id() ?> page-slug--<?= $page->slug() ?> page-template--<?= $page->template() ?>">

  <div class="body-wrap">

    <header class="header cf">

      <a class="logo" href="<?= url() ?>" role="banner"><?= $site->title()->html() ?></a>
      <?= snippet('global/menu') ?>

    </header>
