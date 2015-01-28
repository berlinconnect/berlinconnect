<div class="hero" id="hero"style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">
  <div class="wrapper center">
    <div class="logo"></div>
    <h1><?= $page->herotitle() ?></h1>
    <p><?= $page->herocopy() ?></p>
    <?php snippet('sociallinks') ?>
    <span class="entypo arrow"></span>
  </div>
</div>