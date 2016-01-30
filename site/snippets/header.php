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
<body>
  <?php snippet('menu') ?>
  <?php if($page->heroimage()->isNotEmpty()): ?>

  <header id="projectHeader" class="header cf" role="banner"
  data-center="background-size:  110% auto;"
  data-top-bottom="background-size:  100% auto;"
  data-anchor-target="#projectHeader"
  style="background-image: url(<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>);">
    <section class="headerSign"
        data-top="opacity: 1; transform: scale(1);"
        data--250-top="opacity: 0; transform: scale(.5);"
        data-anchor-target="#projectHeader">
      <h1><?php echo $page->title()->html() ?></h1>
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

    <?php if($page->videolink()->isNotEmpty()): ?>
      <div class="covervid-wrapper">
        <video class="covervid-video" poster="<?php echo url(); ?>/content/<?php echo $page->diruri() ?>/<?php echo html($page->heroimage()) ?>" autoplay loop muted preload>
            <source src="<?php echo $page->videolink()->text() ?>">
        </video>
      </div>
    <?php endif ?>
    <div class="logo_bar">
      <a href="https://www.waag.org" class="waag_header_logo">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <path class="st0" d="M50,6.2C25.8,6.2,6.2,25.8,6.2,50c0,24.2,19.6,43.8,43.7,43.8c24.2,0,43.8-19.6,43.8-43.8
        	C93.8,25.8,74.2,6.2,50,6.2z M59.1,70.6L59,56.8c-0.1-5.1-4-9.4-9-9.4c-5.1,0-8.9,4.3-8.9,9.4v13.8H24.6l2.8-27.5l8-16.8l3.4,13.8
        	L50,21.5l11.3,18.7l3.3-13.8l8.1,16.8l2.8,27.5H59.1z"/>
        </svg>
      </a>

      <a href="https://www.waag.org" class="openthings_header_logo">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;" xml:space="preserve">
        <path d="M73.5,31.3c-2.6-10.7-11-16.9-23.5-16.9c-12.6,0-20.9,6.2-23.5,16.9c-13.3,1.8-23.3,6.8-23.3,21c0,15.1,11.1,19.8,25.5,21.3
        	l9.5,6.3h3c1.3,3.3,4.8,5.6,8.8,5.6c4,0,7.5-2.3,8.8-5.6h3l9.5-6.3c3.6-0.4,7.1-1,10.1-1.9c10.4-3.1,15.4-9.4,15.4-19.4
        	C96.8,38.1,86.8,33.1,73.5,31.3z M70.6,55.6H29.4v-3.7h41.2V55.6z M29.4,59.4h41.2v3.7H29.4V59.4z M29.4,38.8
        	c0-18.6,14.4-20.6,20.6-20.6c6.2,0,20.6,2,20.6,20.6v1.9h-15V36h1.9c3.1,0,5.6-2.5,5.6-5.6s-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6v1.9
        	h-3.7v-1.9c0-3.1-2.5-5.6-5.6-5.6s-5.6,2.5-5.6,5.6s2.5,5.6,5.6,5.6h1.9v4.7h-15V38.8z M44.4,32.2h-1.9c-1.9,0-1.9-1.9-1.9-1.9
        	s0-1.9,1.9-1.9s1.9,1.9,1.9,1.9V32.2z M51.9,40.6h-3.7V36h3.7V40.6z M55.6,32.2v-1.9c0,0,0-1.9,1.9-1.9s1.9,1.9,1.9,1.9
        	s0,1.9-1.9,1.9H55.6z M70.6,44.4v3.7H29.4v-3.7H70.6z M6.9,52.3c0-10.9,7-15.3,18.9-17.1c-0.1,1.1-0.2,2.3-0.2,3.5v30.6
        	C13.9,67.6,6.9,63.2,6.9,52.3z M50,81.8c-1.8,0-3.4-0.7-4.5-1.9h8.9C53.4,81.1,51.8,81.8,50,81.8z M60.7,76.2H39.3l-9.9-6.6v-2.7
        	h41.2v2.7L60.7,76.2z M74.4,69.4V38.8c0-1.2-0.1-2.4-0.2-3.5c11.9,1.8,18.9,6.2,18.9,17.1C93.1,63.2,86.1,67.6,74.4,69.4z"/>
        </svg>
      </a>
    </div>
  </header>

  <?php endif ?>
