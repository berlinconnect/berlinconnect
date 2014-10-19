<div class="video-hero" id="hero">
  <div class="wrapper center">
    <div class="logo"></div>
    <h1><?= $page->herotitle() ?></h1>
    <p><?= $page->herocopy() ?></p>
    <?php snippet('sociallinks') ?>
    <span class="entypo arrow"></span>
  </div>
  <video preload="auto" autoplay="true" muted="muted" volume="0">
    <source src="<?php echo url('/video/faces.mp4') ?>" type="video/mpeg" >
    <source src="<?php echo url('/video/faces.webm') ?>" type="video/webm" >
  <video>
</div>