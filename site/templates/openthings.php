<?php snippet('header') ?>

  <main class="main defaultPage" role="main">
    <section class="sectionHeader">
		<header>
			<h1><?php echo $page->intro()->kirbytext() ?></h1>
		</header>
	</section>
   <?php snippet('projects') ?>


  </main>
<?php snippet('footer') ?>