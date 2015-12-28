<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link href="http://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet" type="text/css">
  
  <?php echo css('assets/css/main.css') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

</head>
<body>
  <header id="projectHeader" class="header cf" role="banner"  
  data-center="background-size:  110% auto;"
  data-top-bottom="background-size:  100% auto;"
  data-anchor-target="#projectHeader"
  style="background-image: url(/content/<?php echo $page->diruri() ?>//<?php echo html($page->heroimage()) ?>);">
    <?php snippet('menu') ?>
    <section class="headerSign"
    data-top="opacity: 1; transform: translate(-50%, -50%) scale(1);"
        data--250-top="opacity: 0; transform: translate(-50%, -0%) scale(.5);"
        data-anchor-target="#projectHeader">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo $page->subtitle()->html() ?></h2>
      <p><?php echo $page->address()->html() ?></p>
    </section>

    <?php if($page->videolink()->isNotEmpty()): ?>
      <div class="covervid-wrapper">
        <video class="covervid-video" autoplay loop muted preload>
            <source src="<?php echo $page->videolink()->text() ?>">
        </video>
      </div>
    <?php endif ?>
    
  </header>