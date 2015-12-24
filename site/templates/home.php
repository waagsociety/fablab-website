<?php snippet('header') ?>

  <main class="main" role="main">
  	<?php foreach($pages->visible() as $section): ?>
    <section class="<?php echo html($section->layout()) ?> left" style="background-color: <?php echo html($section->pagecolor()) ?>;">
      <a href="<?php echo $section->url() ?>" style="color: <?php echo html($section->textcolor()) ?>;">
        <h1 class="beta"><?php echo html($section->title()) ?></h1>
      </a>
      <a href="<?php echo $section->url() ?>" style="color: <?php echo html($section->textcolor()) ?>;">
        <p><?php echo html($section->intro()) ?></p>
      </a>
    </section>
   <?php endforeach ?>
  </main>

<?php snippet('footer') ?>