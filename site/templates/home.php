<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <!-- <div class="desktop">
    <?php snippet('videohero') ?>
  </div>
  <div class="mobile hidden">
    <?php snippet('hero') ?>
  </div> -->
  <?php snippet('hero') ?>
  <section class="sundays">
    <div class="wrapper">
      <div id="about" class="intro center">
        <h2><?= $page->sundaysubtitle() ?></h2>
        <h1><?= $page->sundaytitle() ?></h1>
        <?= kirbytext($page->sundaycopy()) ?>
        <div class="welcome-home hidden">
          <span class="entypo play"></span>
        </div>
      </div>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays', ',') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate <?php if (strlen($section->pagelink()) < 1): ?>dimmed<?php endif ?> <?= $section->slatesize() ?>">
          <?php if (strlen($section->pagelink()) != 0): ?>
            <a class="pageLink" href="<?= $section->pagelink() ?>"></a>
          <?php endif ?>
          <div class="background-image" style="background-image: url(<?= $section->images()->last()->url(); ?>)"></div>
          <div class="caption">
            <h2><?= html($section->title()) ?></h2>
            <p><?= html($section->intro()) ?></p>
          </div>
        </div>
      <?php endforeach ?>
      <div class="clearfix"></div>
    </div>
  </section>
  <section id="community" class="community">
    <div class="wrapper">
      <div class="intro center fadeInUp">
        <h2><?= $page->communitysubtitle() ?></h2>
        <h1><?= $page->communitytitle() ?></h1>
        <p><?= kirbytext($page->communitycopy()) ?></p>
      </div>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella','Community') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate dimmed <?= $section->slatesize() ?>">
          <?php if (strlen($section->pagelink()) != 0): ?>
            <a class="pageLink" href="<?= $section->pagelink() ?>"></a>
          <?php endif ?>
          <div class="background-image" style="background-image: url(<?= $section->images()->last()->url(); ?>)"></div>
          <div class="caption">
            <h2><?= html($section->title()) ?></h2>
            <p><?= html($section->intro()) ?></p>
          </div>
        </div>
      <?php endforeach ?>
      <div class="clearfix"></div>
    </div>
  </section>
  <section id="social" class="social">
    <div class="wrapper">
      <div class="intro center fadeInUp">
        <h2><?= $page->socialsubtitle() ?></h2>
        <h1><?= $page->socialtitle() ?></h1>
        <p><?= kirbytext($page->socialcopy()) ?></p>
      </div>
    </div>
    <div class="hidden easter-teaser">
      <a href="/easter"><h1 class="heading">EASTER</h1></a>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella','Social') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate dimmed <?= $section->slatesize() ?>">
          <?php if (strlen($section->pagelink()) != 0): ?>
            <a class="pageLink" href="<?= $section->pagelink() ?>"></a>
          <?php endif ?>
          <div class="background-image" style="background-image: url(<?= $section->images()->last()->url(); ?>)"></div>
          <div class="caption">
            <h2><?= html($section->title()) ?></h2>
            <p><?= html($section->intro()) ?></p>
          </div>
        </div>
      <?php endforeach ?>

      <div class="clearfix"></div>
    </slates>
  </section>
  <section class="comejoinus">
    <div class="wrapper">
      <div class="intro center">
        <h2><?= $page->joinussubtitle() ?></h2>
        <h1><?= $page->joinustitle() ?></h1>
        <p><?= kirbytext($page->joinuscopy()) ?></p>
      </div>
    </div>
  </section>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>