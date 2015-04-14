<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('enlargehero') ?>

  <div class="wrapper page">
    <section class="center">
      <h1><?= $page->abouttitle() ?></h1>
      <?= $page->about()->kirbytext() ?>
    </section>
  </div>

  <div class="wrapper">
    <div class="cols center sections">
      <div class="col col-33 jesus">
        <div class="circle">
          <div class="circle-container">
            <h3><strong><?= $page->discoverytitle() ?></strong></h3>
            <?= $page->discovery()->kirbytext() ?>
          </div>
        </div>
      </div>
      <div class="col col-33 comingup">
        <div class="circle">
          <div class="circle-container">
            <h3><strong><?= $page->lifetitle() ?></strong></h3>
            <?= $page->life()->kirbytext() ?>
          </div>
        </div>
      </div>
      <div class="col col-33 discover">
        <div class="circle">
          <div class="circle-container">
            <h3><strong><?= $page->bibletitle() ?></strong></h3>
            <?= $page->bible()->kirbytext() ?>
          </div>
        </div>
        <!-- <h3>DISCOVERING<br/><strong>JESUS</strong><br/>AND HIS<br/><strong>CHURCH</strong></h3>
        <p>Start the 6 Weeks Course</p>
        <a class="button">Start Now</a> -->
      </div>
      <div id="workshopsLightbox" class="col col-50 workshops thelightbox">
        <a class="box" <?php if($image = $page->image('box1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
          <div class="box-container">
            <h3><?= $page->workshopstitle() ?></h3>
          </div>
        </a>
      </div>
      <div class="col col-50 toolbox">
        <a href="enlarge/toolbox" <?php if($image = $page->image('box2.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?> class="box">
          <div class="box-container">
            <h3><?= $page->toolboxtitle() ?></h3>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="wrapper hidden page">
    <section class="center">
      <h1><?= $page->sessionstitle() ?></h1>
      <ul class="dates">
        <?php foreach($page->find('coming-up')->children()->limit(5) as $event): ?>
        <li>
          <strong class="heading"><?= $event->eventdate() ?> — <?= $event->type() ?></strong>
          <br><?= $event->title() ?>
        </li>
        <?php endforeach ?>
      </ul>
    </section>
  </div>
</div>

<div class="lightbox hidden workshopsLightbox">
  <div class="lightbox-overlay"></div>
  <div class="lightbox-container scaleUp">
    <div class="header-image" <?php if($image = $page->image('box1.jpg')): ?>style="background-image: url(<?= $image->url() ?>)"<?php endif ?>>
      <span class="entypo close"></span>
      <div class="overlay"></div>
      <div class="header-copy">
        <h2><?= $page->sessionstitle() ?></h2>
      </div>
    </div>
    <div class="container center">
      <?= $page->sessions()->kirbytext() ?>
      <ul class="dates">
        <?php foreach($page->find('coming-up')->children()->limit(5) as $event): ?>
        <li>
          <strong class="heading"><?= $event->eventdate() ?> — <?= $event->type() ?></strong>
          <br><?= $event->title() ?>
        </li>
        <?php endforeach ?>
      </ul>
      <p><?= $page->continueconversation() ?></p>
    </div>
    <div class="center button-container">
      <a class="close-lightbox button">Done</a>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>