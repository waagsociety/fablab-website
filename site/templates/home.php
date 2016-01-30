<?php snippet('header') ?>

  <main class="main" role="main">
  	<?php foreach($pages->visible() as $section): ?>
    <a class="<?php echo html($section->layout()) ?> left item" href="<?php echo $section->url() ?>" style="color: <?php echo html($section->textcolor()) ?>; background-color: <?php echo html($section->pagecolor()) ?>;">
      <section>
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
        <p><?php echo html($section->intro()) ?></p>
    </section>
    </a>
   <?php endforeach ?>
  </main>
<?php snippet('footer') ?>
