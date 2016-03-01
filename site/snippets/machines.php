<ul class="machine-grid changecolorblack">
  <?php foreach($pages->find('machines')->children()->visible() as $p): ?>
    <a href="<?php echo $p->url() ?>" class="left machineThumb" style="background-color: <?php echo html($p->pagecolor()) ?>;">
    <li >
        <figure>
          <?php
            $file = $page->machineimage()->toFile();
          ?>
          <img src="<?php echo url(); ?>/content/<?php echo $p->diruri() ?>/<?php echo html($p->machineimage()) ?>">
        </figure>
        <h1 class="beta" style="color: <?php echo html($p->textcolor()) ?>;"><?php echo $p->title()->html() ?></h1>
    </li>
  </a>
  <?php endforeach ?>
</ul>
