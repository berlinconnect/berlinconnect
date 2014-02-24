<div class="sidebar">
  <ul class="sidebar-container">
    <li class="lvl-1"><a href="<?php echo url('/') ?>">Home</a><span class="entypo close"></span></li>
    <!-- <li class="lvl-1"><a href="/#about">About</a></li> -->
    <?php foreach($pages->find('sections')->children() as $section): ?>
    <li id="<?= $section->id() ?>" class="lvl-1">
      <a>
        <?php echo html($section->title()) ?>
      </a>
    </li>
    <?php endforeach ?>
    <li class="lvl-1"><a href="<?php echo url('giving') ?>">Giving</a></li>
    <li class="lvl-2"><a href="<?php echo url('contact') ?>">Contact</a></li>
    <li class="lvl-2"><a href="<?php echo url('faq') ?>">FAQ</a></li>
    <li class="lvl-2"><a href="<?php echo url('resources') ?>">Resources</a></li>
    <li class="lvl-2"><a href="<?php echo url('imprint') ?>">Imprint</a></li>
  </ul>  
  <?php snippet('sociallinks') ?>
  <div class="logo-outline"></div>
</div>