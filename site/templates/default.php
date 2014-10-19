<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('subhero') ?>
  <div class="wrapper page">
    <?= kirbytext($page->text()) ?>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>