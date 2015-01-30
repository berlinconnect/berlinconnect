<?php snippet('header') ?>
<div class="dark">
<?php snippet('menu') ?>
</div>
<?php snippet('sidebar') ?>
<div class="content">
  <div class="wrapper page transcript">
    <h1 class="center"><?= $page->title() ?></h1>
    <?= kirbytext($page->text()) ?>
    <div class="center">
      <a class="button" href='<?= $page->link() ?>'>View on Amazon</a>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>