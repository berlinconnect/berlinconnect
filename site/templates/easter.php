<?php snippet('header') ?>
<div class="hero-image center">
  <a href="/"><span class="mini-logo"></span></a>
  <h1 class="heading"><?= $page->title() ?></h1>
  <?php snippet('sociallinks') ?>
</div>
<section class="about">
  <div class="wrapper center">
    <h1><?= $page->storytitle() ?></h1>
    <?= kirbytext($page->storycopy()) ?>
  </div>
</section>
<section class="syria">
  <div class="wrapper center">
    <h1><?= $page->causetitle() ?></h1>
    <?= kirbytext($page->causecopy()) ?>
  </div>
</section>

<!-- <section class="event">
  <div class="wrapper center">
    <h1><?= $page->eventtitle() ?></h1>
    <h2><?= $page->eventsubtitle() ?></h2>
    <?= kirbytext($page->eventcopy()) ?>
    <div class="event-details">
      <?= kirbytext($page->eventdetails()) ?>
    </div>
    <a class="button"><?= $page->ticketbutton() ?></a>
    <small><?= $page->buttonsubcopy() ?></small>
  </div>
</section> -->

<section class="fashion">
  <div class="wrapper center">
  <h1><?= $page->collectiontitle() ?></h1>
    <?= kirbytext($page->collectioncopy()) ?>
    <a href="http://reclaimcollection.bigcartel.com" class="button"><?= $page->storebutton() ?></a>
  </div>
</section>


<div class="footer-image">
  <a href="/">Berlin Connect</a>
</div>
