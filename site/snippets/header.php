<!DOCTYPE html>
<!--[if lte IE 8]>     <html lang="en-us" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">

  <style>
    <?php include($_SERVER['DOCUMENT_ROOT']."/_/css/firstpaint.css"); ?>
  </style>
  <?php snippet("font-apercu") ?>

  <script src="/_/js/vendor/modernizr.custom.js?v=1.0.1" type="text/javascript"></script>

  <?php echo css('/_/css/screen.css?v=0.9.4') ?>

  <!--[if lte IE 8]><?php echo css('/_/css/ie.css?v=0.1.0') ?><![endif]-->

</head>
<body id="body" class="body page-id--<?php echo $page->id() ?> page-slug--<?php echo $page->slug() ?> page-template--<?php echo $page->template() ?>">

  <div class="body-wrap">

    <header class="header cf">

      <a class="logo" href="<?php echo url() ?>" role="banner"><?php echo $site->title()->html() ?></a>
      <?php snippet('menu') ?>

    </header>
