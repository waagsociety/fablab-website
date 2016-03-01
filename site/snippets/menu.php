
<?php if($page->isHomePage()): ?>
  <?php snippet('homepage_menu') ?>
<?php else: ?>
  <?php snippet('page_menu') ?>
<?php endif ?>

<a href="<?php echo url(); ?>/machines" class="btn machine_btn btn-2">Book a machine</a>

<nav class="slide-menu closed">
  <ul class="mainMenu">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
