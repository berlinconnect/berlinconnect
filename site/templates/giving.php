<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
   <div class="sub-hero" style="background-image: url(<?php echo $page->images()->first()->url(); ?>)">
    <h2><?= $page->subtitle() ?></h2>
    <h1><?= $page->title() ?></h1>
  </div>
  <div class="wrapper page">
    <?= kirbytext($page->text()) ?>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank"><input type="hidden" name="cmd" value="_s-xclick" />
    <input type="hidden" name="hosted_button_id" value="P67SBR8J2RHYE" />
    <input type="submit" class="giving button" value="Give Now" border="0" name="submit" alt="Support us now by donating through PayPal.">
    <img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1" border="0" />
    <small>All payments are made through PayPal</small>
    <div class="payment-icons"></div>

  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>