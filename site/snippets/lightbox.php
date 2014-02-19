<?php foreach($pages->find('sections')->children()->flip()->filterBy('sundays') as $section): ?>
<div class="lightbox hidden <?= $section->id() ?>">
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-image: url(<?php echo $section->images()->first()->url(); ?>)">
      <span class="entypo close"></span>
      <div class="overlay"></div>
      <div class="header-copy">
        <h2><?php echo html($section->title()) ?></h2>
        <p><?php echo html($section->intro()) ?></p>
      </div>
    </div>
    <div class="container">
      <?php echo kirbytext($section->text()) ?>
    </div>
  </div>
</div>
<?php endforeach ?>

