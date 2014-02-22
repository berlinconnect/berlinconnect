<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
   <div class="sub-hero" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">
    <h2><?= $page->subtitle() ?></h2>
    <h1><?= $page->title() ?></h1>
  </div>
  <div class="wrapper page">
    <p><?= kirbytext($page->text()) ?></p>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>