<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('heartforthehousehero') ?>
  <div class="intro">
    <div class="wrapper">
      <h1 class="center"><?= $page->introheading() ?></h1>
      <div class="bodytext"><?= kirbytext($page->introcopy()) ?></div>
    </div>
  </div>
  <div class="stories">
    <div class="cols">
      <div class="col col-33 story daniel">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <span class="name">Daniel</span>
          <img src="../img/h4h/daniel.jpg" />
        </div>
      </div>
      <div class="col col-33 story matt">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <img src="../img/h4h/matt.jpg" />
          <span class="name">Matt</span>
        </div>
      </div>
      <div class="col col-33 story frauke-const">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <img src="../img/h4h/frauke.const.jpg" />
          <span class="name">Frauke &amp; Constantin</span>
        </div>
      </div>
      <div class="col col-33 story chi">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <span class="name">Chi</span>
          <img src="../img/h4h/chi.jpg" />
        </div>
      </div>
      <div class="col col-33 story anna">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <img src="../img/h4h/anna.jpg" />
          <span class="name">anna</span>
        </div>
      </div>
      <div class="col col-33 story dennis">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
               <p>“We believe that you never come second by putting God first. Heart for the house is a great opportunity to put your faith into action”</p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <img src="../img/h4h/dennis.jpg" />
          <span class="name">Dennis</span>
        </div>
      </div>
    </div>
  </div>
  <div class="threeways">
    <div class="wrapper">
      <h1 class="center"><?= $page->threewaysheading() ?></h1>
      <div class="bodytext"><?= kirbytext($page->threewayscopy()) ?></div>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>