<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <hr>

    <?php snippet('projects') ?>

    <script>
      loadMasonry();
    </script>

    <?php if($page->hasNextVisible()): ?>
      <section class="page_footer">
        <a href="<?php echo $page->nextVisible()->url() ?>" class="btn btn-2">next page</a>
      </section>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>
