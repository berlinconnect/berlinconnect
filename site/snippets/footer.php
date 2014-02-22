  <div class="footer columns">
    <div class="wrapper">
      <div class="white-logo">
      </div>
      <div class="nav-links">
        <ul class="column first">
          <li class="lvl-1"><a href="<?php echo url('/') ?>">Home</a></li>
          <li class="lvl-1"><a href="#">About</a></li>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Sundays') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <ul class="column">
          <li class="heading">Community</li>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Community') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
          <?php foreach($pages->find('sections')->children()->filterBy('umbrella', 'Social') as $section): ?>
          <li id="<?= $section->id() ?>" class="lvl-1">
            <a>
              <?php echo html($section->title()) ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <ul class="column">
          <li class="lvl-1"><a href="<?php echo url('giving') ?>">Giving</a></li>
          <li class="lvl-2"><a href="<?php echo url('contact') ?>">Contact</a></li>
          <li class="lvl-2"><a href="<?php echo url('faq') ?>">FAQ</a></li>
          <li class="lvl-2"><a href="<?php echo url('resources') ?>">Resources</a></li>
          <li class="lvl-2"><a href="<?php echo url('imprint') ?>">Imprint</a></li>
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