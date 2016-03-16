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
  <?php echo js('assets/js/main.min.js') ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

</head>
<body class="m-scene">
  <div id="main">
  <?php snippet('menu') ?>
  <?php if($page->heroimage()->isNotEmpty()): ?>

  <header id="projectHeader" class="header cf <?php if($page->isHomePage()): ?>scene_element scene_element--fadein<?php else: ?> scene_element scene_element--fadein scene_element--shrink <?php endif ?>" role="banner"
  data-center="background-size:  110% auto;"
  data-top-bottom="background-size:  100% auto;"
  data-anchor-target="#projectHeader"
  style="background-image: url(<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>);">
    <section class="headerSign"
        data-top="opacity: 1; transform: scale(1);"
        data--250-top="opacity: 0; transform: scale(.5);"
        data-anchor-target="#projectHeader">
      <h1>
        <?php if($page->isHomePage()): ?>
          <div class="waag__icon left">
            <a href="https://waag.org" class="waag_header_logo">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
              <path class="st0" d="M50,6.2C25.8,6.2,6.2,25.8,6.2,50c0,24.2,19.6,43.8,43.7,43.8c24.2,0,43.8-19.6,43.8-43.8
                C93.8,25.8,74.2,6.2,50,6.2z M59.1,70.6L59,56.8c-0.1-5.1-4-9.4-9-9.4c-5.1,0-8.9,4.3-8.9,9.4v13.8H24.6l2.8-27.5l8-16.8l3.4,13.8
                L50,21.5l11.3,18.7l3.3-13.8l8.1,16.8l2.8,27.5H59.1z"/>
              </svg>
            </a>
          </div>
        <?php endif ?>
        <?php echo $page->title()->html() ?>
      </h1>
      <h2 id="typingText" data-text="<?php echo $page->subtitle()->html() ?>"></h2>
      <p><?php echo $page->address()->html() ?></p>


      <!-- <div class="down_btn">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <g>
          <circle cx="50" cy="50" r="43.8"/>
          <polyline points="76.3,41.7 50,74.1 50,74.1 23.7,41.7 	"/>
        </g>
        </svg>
      </div> -->
    </section>
    <!-- <div class="waag__icon__absolute">
      <a href="https://waag.org" class="waag_header_logo">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <path class="st0" d="M50,6.2C25.8,6.2,6.2,25.8,6.2,50c0,24.2,19.6,43.8,43.7,43.8c24.2,0,43.8-19.6,43.8-43.8
          C93.8,25.8,74.2,6.2,50,6.2z M59.1,70.6L59,56.8c-0.1-5.1-4-9.4-9-9.4c-5.1,0-8.9,4.3-8.9,9.4v13.8H24.6l2.8-27.5l8-16.8l3.4,13.8
          L50,21.5l11.3,18.7l3.3-13.8l8.1,16.8l2.8,27.5H59.1z"/>
        </svg>
      </a>
    </div> -->
    <?php if($page->videolink()->isNotEmpty()): ?>
      <div class="covervid-wrapper">
        <video class="covervid-video" poster="<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>" autoplay loop muted preload>
            <source src="<?php echo $page->videolink()->text() ?>">
        </video>
      </div>
    <?php endif ?>

  </header>

  <?php endif ?>
