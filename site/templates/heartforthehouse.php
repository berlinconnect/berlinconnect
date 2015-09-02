<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('heartforthehousehero') ?>
  <div class="intro">
    <div class="wrapper">
      <div class="heading-container center">
        <h1 class="center"><?= $page->introheading() ?></h1>
        <?= $page->introcopy()->kirbytext() ?>
        <h3>Mark & Joyce</h3>
        <div class="mjphoto">

        </div>
      </div>
    </div>
  </div>
</div>
<div class="event">
  <div class="content">
    <h4 class="center">JOIN US TO HEAR MORE ABOUT HEART FOR THE HOUSE<br>30th SEPTEMBER 2015 19:00 HAUS UNGARN<br>WITH OUR SPECIAL GUEST: ANDREW DENTON FROM SYDNEY AUSTRALIA</h4>
    <p class="center">
      Andrew is a Kingdom Builder and Business leader with a powerful story of how Heart for the House has impacted his personal and business life with kingdom purpose.
    </p>
  </div>
</div>
<div class="threeways">
  <div class="cols">
    <div class="col col-33 center faithfulgiver">
      <a id="faithfulgiver" class="thelightbox"></a>
      <h2 class="center">Faithful Givers</h2>
      <p><?= $page->faithfulgiver() ?></p>
    </div>
    <div class="col col-33 center visiongiver">
    <a id="visiongiver" class="thelightbox"></a>
      <h2 class="center">Vision Givers</h2>
      <p><?= $page->visiongiver() ?></p>
    </div>
    <div class="col col-33 center kingdomgiver">
      <a id="kingdomgiver" class="thelightbox"></a>
      <h2 class="center">Kingdom Givers</h2>
      <p><?= $page->kingdomgiver() ?></p>
    </div>
  </div>
</div>
<div class="content">

  <div class="verse">
    <div class="wrapper">
      <div class="heading-container center">
        <h1 class="center">1 Chronicles 29 MSG</h1>
        <p>
          Dear Lord, who am I, and who are these my people, that we should presume to be giving something to you? Everything comes from you; all we’re doing is giving back what we’ve been given from your generous hand..... so I have given from the heart, honestly and happily...
        </p>
        <a class="button">Give Online</a>
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
