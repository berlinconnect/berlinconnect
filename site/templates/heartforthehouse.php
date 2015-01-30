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
    </div>
  </div>
  <div class="threeways">
    <div class="wrapper">
      <div class="heading-container">
        <h1 class="center"><?= $page->threewaysheading() ?></h1>
      </div>
      <div class="cols">
        <div class="col col-33 center">
          <h2 class="center">Faithful Givers</h2>
          <p><?= $page->faithfulgiver() ?></p>
          <a id="faithfulgiver" class="button dark small thelightbox"><?= $site->more() ?></a>
        </div>
        <div class="col col-33 center">
          <h2 class="center">Vision Givers</h2>
          <p><?= $page->visiongiver() ?></p>
          <a id="visiongiver" class="button dark small thelightbox"><?= $site->more() ?></a>
        </div>
        <div class="col col-33 center">
          <h2 class="center">Kingdom Givers</h2>
          <p><?= $page->kingdomgiver() ?></p>
          <a id="kingdomgiver" class="button dark small thelightbox"><?= $site->more() ?></a>
        </div>
      </div>
      <div class="center">
        <a href="mailto:giving@berlinclc.de?Subject=I%20would%20like%20to%20find%20out%20more%20about%20Heart%20for%20the%20House" target="_top" class="button dark big"><?= $page->threewaysbutton() ?></a>
      </div>
    </div>
  </div>
  <div class="thanks">
    <div class="wrapper">
      <div class="heading-container">
        <h1 class="center"><?= $page->thankyouheading() ?></h1>
      </div>
    </div>
  </div>
</div>
<div class="lightbox hidden faithfulgiver">
  <div class="lightbox-overlay"></div>
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-color: #fff200">
      <span class="entypo close"></span>
      <div class="header-copy">
        <h2><?php echo html($page->faithfulgivertitle()) ?></h2>
      </div>
    </div>
    <div class="container">
      <?php echo kirbytext($page->faithfulgivercopy()) ?>
    </div>
    <div class="center button-container">
      <a class="close-lightbox button">Done</a>
    </div>
  </div>
</div>
<div class="lightbox hidden visiongiver">
  <div class="lightbox-overlay"></div>
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-color: #fff200">
      <span class="entypo close"></span>
      <div class="header-copy">
        <h2><?php echo html($page->visiongivertitle()) ?></h2>
      </div>
    </div>
    <div class="container">
      <?php echo kirbytext($page->visiongivercopy()) ?>
    </div>
    <div class="center button-container">
      <a class="close-lightbox button">Done</a>
    </div>
  </div>
</div>
<div class="lightbox hidden kingdomgiver">
  <div class="lightbox-overlay"></div>
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-color: #fff200">
      <span class="entypo close"></span>
      <div class="header-copy">
        <h2><?php echo html($page->kingdomgivertitle()) ?></h2>
      </div>
    </div>
    <div class="container">
      <?php echo kirbytext($page->kingdomgivercopy()) ?>
    </div>
    <div class="center button-container">
      <a class="close-lightbox button">Done</a>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>