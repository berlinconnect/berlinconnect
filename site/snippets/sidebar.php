<div class="sidebar">
  <div class="menu-message"><span class="entypo close"></span><span class="nav-text">Navigate through the site</span><span class="close-text">Close this sidebar</span></div>
  <ul class="sidebar-container">

    <li class="lvl-1">
      <a href="<?php echo url('/home') ?>">
        <?= $site->home() ?>
      </a>
    </li>
    <h4><?= $site->sundays() ?></h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays') as $section): ?>
    <?php if (strlen($section->pagelink()) != 0): ?>
      <li class="lvl-1">
        <a href="<?= $section->pagelink() ?>">
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php if (strlen($section->pagelink()) < 1): ?>
      <li id="<?= $section->id() ?>" class="lvl-1 internal">
        <a>
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php endforeach ?>
    <h4><?= $site->community() ?></h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Community') as $section): ?>
    <?php if (strlen($section->pagelink()) != 0): ?>
      <li class="lvl-1">
        <a href="<?= $section->pagelink() ?>">
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php if (strlen($section->pagelink()) < 1): ?>
      <li id="<?= $section->id() ?>" class="lvl-1 internal">
        <a>
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php endforeach ?>
    <h4><?= $site->socialenterprise() ?></h4>
    <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Social') as $section): ?>
    <?php if (strlen($section->pagelink()) != 0): ?>
      <li class="lvl-1">
        <a href="<?= $section->pagelink() ?>">
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php if (strlen($section->pagelink()) < 1): ?>
      <li id="<?= $section->id() ?>" class="lvl-1 internal">
        <a>
          <?php echo html($section->title()) ?>
        </a>
      </li>
    <?php endif ?>
    <?php endforeach ?>
    <h4><?= $site->more() ?></h4>
    <?php $items = $pages->find('giving', 'contact', 'the-white-table', 'faq', 'imprint', 'our-venue'); if($items->count() > 0): ?>
      <?php foreach($items as $item): ?>
        <li class="lvl-2">
          <a href="<?php echo $item->url() ?>">
            <?php echo $item->title() ?>
          </a>
        </li>
      <?php endforeach ?>
    <?php endif ?>
  </ul>
  <?php snippet('sociallinks') ?>
  <div class="logo-outline"></div>
</div>