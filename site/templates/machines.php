<?php
  $items = $pages->find('machines')->children();

?>

<?php snippet('header') ?>

  <main class="main defaultPage" role="main">
    <?php if($page->text()->isNotEmpty()): ?>
      <div class="text">
        <?php echo $page->text()->kirbytext() ?>
      </div>
    <?php endif ?>
    <?php snippet('machines') ?>
  </main>



  <?php if($page->hasNextVisible()): ?>
    <section class="page_footer">
      <a href="<?php echo $page->nextVisible()->url() ?>" class="btn btn-2">next page</a>
    </section>
  <?php endif ?>

  <?php snippet('footer') ?>
