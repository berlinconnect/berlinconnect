<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('css/styles.css') ?>

  <? if($page->hasImages()): ?>
    <link rel="image_src" href="<?= $page->images()->first()->url(); ?>">
  <? endif ?>
  
</head>

<body class="<?=$site->uri()->path()->first();?>">
