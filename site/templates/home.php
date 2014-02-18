<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('hero') ?>
  <section class="sundays">
    <div class="wrapper">
      <div id="home" class="intro center wow fadeInUp" data-wow-delay="0.25s">
        <h2><?= $page->sundaysubtitle() ?></h2>
        <h1><?= $page->sundaytitle() ?></h1>
        <p><?= kirbytext($page->sundaycopy()) ?></p>
      </div>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays', ',') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate <?= $section->slatesize() ?> wow fadeIn" data-wow-delay="0.25s">
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
  <section class="community">
    <div class="wrapper">
      <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
        <h2><?= $page->communitysubtitle() ?></h2>
        <h1><?= $page->communitytitle() ?></h1>
        <p><?= kirbytext($page->communitycopy()) ?></p>
      </div>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella','Community') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate <?= $section->slatesize() ?> wow fadeIn" data-wow-delay="0.25s">
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
  <section class="social">
    <div class="wrapper">
      <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
        <h2><?= $page->socialsubtitle() ?></h2>
        <h1><?= $page->socialtitle() ?></h1>
        <p><?= kirbytext($page->socialcopy()) ?></p>
      </div>
    </div>
    <div class="slates">
      <?php foreach($pages->find('sections')->children()->filterBy('umbrella','Social') as $section): ?>
        <div id="<?= $section->id() ?>" class="slate <?= $section->slatesize() ?> wow fadeIn" data-wow-delay="0.25s">
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
      <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
        <h2><?= $page->joinussubtitle() ?></h2>
        <h1><?= $page->joinustitle() ?></h1>
        <p><?= kirbytext($page->joinuscopy()) ?></p>
      </div>
    </div>
  </section>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>