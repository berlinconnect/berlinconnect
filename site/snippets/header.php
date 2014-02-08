<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="robots" content="index, follow" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <?php echo css('css/styles.css') ?>
  <?php echo css('css/libs/animate.css') ?>

  <link rel="icon" href="img/favicon.ico" type="image/x-icon">

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/xkv4ghj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <? if($page->hasImages()): ?>
    <link rel="image_src" href="<?= $page->images()->first()->url(); ?>">
  <? endif ?>
  
</head>

<body class="<?=$site->uri()->path()->first();?>">
