  <div class="footer columns">
    <div class="wrapper">
      <div class="white-logo">
      </div>
      <div class="nav-links">
        <ul class="column first">
          <li class="lvl-1"><a href="<?php echo url('/') ?>">Home</a></li>
          <!-- <li class="lvl-1"><a href="/#about">About</a></li> -->
          <h4>Sundays</h4>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1 internal">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <ul class="column">
          <h4>Community</h4>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Community') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1 internal">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
          <h4>Social Enterprise</h4>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Social') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1 internal">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <ul class="column">
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
      </div>
      <div class="clearfix"></div>
      <div class="copyrights">
        <?php snippet('sociallinks') ?>
        <?php echo $site->copyright() ?>
      </div>
    </div>
  </div>
</body>
</html>