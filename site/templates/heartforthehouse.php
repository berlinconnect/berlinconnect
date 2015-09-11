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
        <h3>Mark &amp; Joyce</h3>
        <div class="mjphoto">

        </div>
      </div>
    </div>
  </div>
</div>
<div class="content">

  <div class="threeways">
    <div class="cols">
      <div class="col col-33 center faithfulgiver">
        <a id="faithfulgiver" class="thelightbox"></a>
        <div class="sectioncontent">
          <div class="md-table">
            <h2 class="center">Faithful Givers</h2>
          </div>
        </div>
      </div>
      <div class="col col-33 center visiongiver">
        <a id="visiongiver" class="thelightbox"></a>
        <div class="sectioncontent">
          <div class="md-table">
            <h2 class="center">Vision Givers</h2>
          </div>
        </div>
      </div>
      <div class="col col-33 center kingdomgiver">
        <a id="kingdomgiver" class="thelightbox"></a>
        <div class="sectioncontent">
          <div class="md-table">
            <h2 class="center">Kingdom Givers</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="event">
  <div class="content">
    <div class="wrapper">
      <div class="heading-container center">
        <h4><?= $page->specialguest() ?></h4>
        <p>
          <?= $page->specialguestcopy() ?>
        </p>
        <h3 class="center">Andrew Denton</h3>
        <div class="adphoto">

        </div>
      </div>
    </div>
  </div>
</div>
<div class="content">

  <div class="verse">
    <div class="wrapper">
      <div class="heading-container center">
        <h1 class="center"><?= $page->verse() ?></h1>
        <p>
          <?= $page->versecopy() ?>
        </p>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank"><input type="hidden" name="cmd" value="_s-xclick" />
          <input type="hidden" name="hosted_button_id" value="P67SBR8J2RHYE" />
          <button data-track="<?= $page->title() ?>:Give Now:Online Giving Section"  type="submit" class="giving button" border="0" name="submit" alt="Support us now by donating through PayPal.">Online Giving</button>
          <img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1" border="0" />
          <div class="payment-icons"></div>
        </form>
      </div>
    </div>
  </div>

</div>
<div class="lightbox hidden faithfulgiver">
  <div class="lightbox-overlay"></div>
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-image: url('<?= $site->url() ?>/img/h4h/fgbg.jpg')">
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
    <div class="header-image" style="background-image: url('<?= $site->url() ?>/img/h4h/vgbg.jpg')">
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
    <div class="header-image" style="background-image: url('<?= $site->url() ?>/img/h4h/kgbg.jpg')">
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
