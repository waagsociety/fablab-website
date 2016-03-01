<?php snippet('header') ?>

  <main class="main home" role="main">
  	<?php foreach($pages->visible() as $section): ?>
    <a class="<?php echo html($section->layout()) ?> left item" href="<?php echo $section->url() ?>" style="color: <?php echo html($section->textcolor()) ?>; background-color: <?php echo html($section->pagecolor()) ?>;">
      <?php if($section->thumb() == '1'): ?>
        <header class="thumbheader" style="background-image: url(<?php echo url(); ?>/content/<?php echo $section->diruri() ?>/<?php echo html($section->heroimage()) ?>); background-color: <?php echo html($section->pagecolor()) ?>;">
        </header>
      <?php endif ?>
      <section>
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
        <p><?php echo html($section->intro()) ?></p>
      </section>
    </a>
   <?php endforeach ?>
  </main>
<?php snippet('machines') ?>
<?php snippet('newsletter') ?>
<?php snippet('footer') ?>
