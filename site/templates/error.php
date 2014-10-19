<?php snippet('header') ?>
<div class="wrapper page center">
  <div class="logo"></div>
  <h1><?= html($page->title()) ?></h1>
  <?= kirbytext($page->text()) ?>
  <?php snippet('sociallinks') ?>
</div>
<?php snippet('footer') ?>
