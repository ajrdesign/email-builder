<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,400i,700,700i" rel="stylesheet">
  <?php echo css('assets/css/production/bluebeam-core.css') ?>
  <?php echo css('assets/css/production/addon.css') ?>

</head>
<body>

  <div class="header" style="background:#10222d;">
    <div class="navbar">
      <div class="navbar-inner navbar-bluebeam">
        <div class="container">
          <a class="brand" href="<?php echo url() ?>">
            <img class="pull-left ie-hidden hidden-tablet" src="<?php echo url('assets/images/bb-nolimits-horiz-RGB.svg') ?>" alt="<?php echo $site->title()->html() ?>">
          </a>
          <ul class="nav pull-right">
            <li><a href="mailto:website@bluebeam.com">Request Account</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>