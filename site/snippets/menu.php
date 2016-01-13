
<?php if($page->isHomePage()): ?>
  <?php snippet('homepage_menu') ?>
<?php else: ?>
  <?php snippet('page_menu') ?>
<?php endif ?>

<nav class="slide-menu closed">
  <ul>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <?php foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>
</nav>

<nav class="machine-menu closed">
  <ul class="machine-grid">
    <?php foreach($pages->find('our-machines')->children()->visible() as $p): ?>
      <li class="three-col left machineThumb" style="background-color: <?php echo html($p->pagecolor()) ?>;">
        <a href="<?php echo $p->url() ?>">
          <figure>
            <?php
              $file = $page->machineimage()->toFile();
            ?>
            <img src="<?php echo url(); ?>/content/<?php echo $p->diruri() ?>/<?php echo html($p->machineimage()) ?>">
          </figure>
        </a>
        <a href="<?php echo $p->url() ?>" style="color: <?php echo html($p->textcolor()) ?>;">
          <h1 class="beta"><?php echo $p->title()->html() ?></h1>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</nav>