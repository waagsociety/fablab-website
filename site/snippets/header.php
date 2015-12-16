<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/output.min.js') ?>

</head>
<body>
  <header class="header cf" role="banner">
    <?php snippet('menu') ?>
    <section class="headerSign">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo $page->subtitle()->html() ?></h2>
      <p><?php echo $page->address()->html() ?></p>
    </section>
  </header>