<?php foreach($pages->find('upcoming')->children()->flip() as $event): ?>
<div class="event hidden">
  <div class="event-container scaleUp">
    <div class="header-image" style="background-image: url(<?php echo $event->images()->first()->url(); ?>)">
    </div>
    <div class="container">
      <?php echo html($event->date()) ?>
      <h2><?php echo html($event->decription()) ?></h2>
    </div>
  </div>
</div>
<?php endforeach ?>