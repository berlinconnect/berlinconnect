<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('whitetablesubhero') ?>
  <div class="wrapper page transcript">
  <?= kirbytext($page->text()) ?>
    <div class="center">
      <a class="button" href='<?= $page->link() ?>'><?= $page->linktext() ?></a>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>