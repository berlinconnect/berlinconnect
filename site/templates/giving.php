<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('subhero') ?>
  <div class="wrapper page">
    <div class="cols">
      <div class="col giving-copy">
        <?= kirbytext($page->text()) ?>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank"><input type="hidden" name="cmd" value="_s-xclick" />
          <input type="hidden" name="hosted_button_id" value="P67SBR8J2RHYE" />
          <button data-track="<?= $page->title() ?>:Give Now:Online Giving Section"  type="submit" class="giving button" border="0" name="submit" alt="Support us now by donating through PayPal.">Giving</button>
          <img alt="" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1" border="0" />
          <div class="payment-icons"></div>
      </div>
      <div class="col bank-details">
        <?= kirbytext($page->bankdetails()) ?>
      </div>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>