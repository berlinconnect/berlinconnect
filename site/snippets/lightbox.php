<?php foreach($pages->find('sections')->children()->flip()->filterBy('sundays') as $section): ?>
<div class="lightbox hidden <?= $section->id() ?>">
  <div class="lightbox-container scaleUp">
    <div class="header-image" style="background-image: url(<?php echo $section->images()->first()->url(); ?>)">
    </div>
    <div class="container">
      <h2><?php echo html($section->title()) ?></h2>
      <?php echo kirbytext($section->text()) ?>
    </div>
  </div>
</div>
<?php endforeach ?>