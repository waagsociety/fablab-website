<?php snippet('header') ?>

  <main class="main defaultPage changecolorblack" role="main">
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <!-- TODO maybe add next page -->

    <?php if($page->hasNextVisible()): ?>
      <section class="page_footer">
        <a href="<?php echo $page->nextVisible()->url() ?>" class="btn btn-2">next page</a>
      </section>
    <?php endif ?>
  </main>

<?php snippet('footer') ?>
