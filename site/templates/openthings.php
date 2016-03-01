<?php snippet('header') ?>

  <main class="main defaultPage changecolorblack" role="main">
    <section class="sectionHeader">
		<header>
			<h1><?php echo $page->intro()->kirbytext() ?></h1>
		</header>
	</section>
   <?php snippet('projects') ?>



   <?php if($page->hasNextVisible()): ?>
     <section class="page_footer">
       <a href="<?php echo $page->nextVisible()->url() ?>" class="btn btn-2">next page</a>
     </section>
   <?php endif ?>
  </main>
<?php snippet('footer') ?>
