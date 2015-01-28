<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('heartforthehousehero') ?>
  <div class="intro">
    <div class="wrapper">
      <div class="heading-container">
        <h1 class="center"><?= $page->introheading() ?></h1>
      </div>
      <div class="bodytext"><?= kirbytext($page->introcopy()) ?></div>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>