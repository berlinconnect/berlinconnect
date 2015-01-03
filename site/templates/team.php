<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('teamhero') ?>
  <div class="wrapper">
    <div class="quote center">
      <p><?= $page->quote() ?></p>
    </div>
    <div class="about center">
      <p><?= $page->aboutteam() ?></p>
    </div>
    <div class="reasons">
      <h1 class="center"><?= $page->reasonstitle() ?></h1>
      <?= kirbytext($page->reasons()) ?>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>