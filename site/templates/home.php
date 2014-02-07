<?php snippet('header') ?>
<?php snippet('hero') ?>
<section class="sundays">
  <div class="wrapper">
    <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
      <h2><?= $page->sundaysubtitle() ?></h2>
      <h1><?= $page->sundaytitle() ?></h1>
      <p><?= $page->sundaycopy() ?></p>
    </div>
  </div>
  <div class="slates">
    <div id="sunday" class="slate square big wow fadeIn" data-wow-delay="0.25s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->sundaycelebrationtitle() ?></h2>
        <p><?= $page->sundaycelebrationintro() ?></p>
      </div>
    </div>
    <div id="guest-speakers" class="slate rectangle wow fadeIn" data-wow-delay="0.5s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->guestspeakerstitle() ?></h2>
        <p><?= $page->guestspeakersintro() ?></p>
      </div>
    </div>
    <div id="youth" class="slate square small wow fadeIn" data-wow-delay="0.7s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->youthtitle() ?></h2>
        <p><?= $page->youthintro() ?></p>
      </div>
    </div>
    <div id="children" class="slate square small wow fadeIn" data-wow-delay="1s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->childrentitle() ?></h2>
        <p><?= $page->childrenintro() ?></p>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<section class="community">
  <div class="wrapper">
    <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
      <h2><?= $page->communitysubtitle() ?></h2>
      <h1><?= $page->communitytitle() ?></h1>
      <p><?= $page->communitycopy() ?></p>
    </div>
  </div>
  <div class="slates">
    <div id="dinner-party" class="slate rectangle big wow fadeIn" data-wow-delay="0.25s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->dinnerpartytitle() ?></h2>
        <p><?= $page->dinnerpartyintro() ?></p>
      </div>
    </div>
    <div id="sisterhood" class="slate rectangle big wow fadeIn" data-wow-delay="0.5s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->sisterhoodtitle() ?></h2>
        <p><?= $page->sisterhoodintro() ?></p>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<section class="social">
  <div class="wrapper">
    <div class="intro center wow fadeInUp" data-wow-delay="0.25s">
      <h2><?= $page->socialsubtitle() ?></h2>
      <h1><?= $page->socialtitle() ?></h1>
      <p><?= $page->socialcopy() ?></p>
    </div>
  </div>
  <div class="slates">
    <div id="kindness" class="slate rectangle wow fadeIn" data-wow-delay="0.25s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->kindnesstitle() ?></h2>
        <p><?= $page->kindnessintro() ?></p>
      </div>
    </div>
    <div id="futureminded" class="slate rectangle wow fadeIn" data-wow-delay="0.5s">
      <div class="background-image"></div>
      <div class="caption">
        <h2><?= $page->futuremindedtitle() ?></h2>
        <p><?= $page->futuremindedintro() ?></p>
      </div>
    </div>
    <div class="clearfix"></div>
  </slates>
</section>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>