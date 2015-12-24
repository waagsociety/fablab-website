  <?php

$items = $pages->visible();
$last  = $items->last();

?>
  <section class="sitemap cf left" role="contentinfo">
  	<ul class="four-col left">
  		<li><h2>General</h2></li>
  	<?php foreach($items as $item): ?>
   		<li><a href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
   	<?php endforeach ?>
  	</ul>
  	<ul class="four-col left">
  		<li><h2>General</h2></li>
  		<li>About</li>
  		<li>About</li>
		<li>Document</li>
		<li>FAQ</li>
		<li>Learning</li>
		<li>Contact</li>
  	</ul>
  	<ul class="four-col left">
  		<li><h2>General</h2></li>
  		<li>About</li>
  		<li>About</li>
		<li>Document</li>
		<li>FAQ</li>
		<li>Learning</li>
		<li>Contact</li>
  	</ul>
  </section>
	<footer>
		
	</footer>
  <?php echo js('assets/js/output.min.js') ?>
</body>
</html>