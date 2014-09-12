<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('heartforthehousehero') ?>
  <div class="intro">
    <div class="wrapper">
      <div class="heading-container">
        <h1 class="center"><?= $page->introheading() ?></h1>
      </div>
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
               <p><?= $page->danielstory() ?></p>
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
               <p><?= $page->mattstory() ?></p>
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
                <p><?= $page->fraukeconststory() ?></p>
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
                <p><?= $page->chistory() ?></p>
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
                <p><?= $page->annestory() ?></p>
              </td>
            </tr>
          </table>
        </div>
        <div class="image">
          <img src="../img/h4h/anna.jpg" />
          <span class="name">anne</span>
        </div>
      </div>
      <div class="col col-33 story dennis">
        <div class="copyoverlay">
          <table width="100%" height="100%">
            <tr align="center">
              <td align="center" valign="middle">
                <p><?= $page->dennisstory() ?></p>
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
      <div class="heading-container">
        <h1 class="center"><?= $page->threewaysheading() ?></h1>
      </div>
      <div class="cols">
        <div class="col col-33">
          <h2 class="center">Faithful Givers</h2>
          <p><?= $page->faithfulgiver() ?></p>
        </div>
        <div class="col col-33">
          <h2 class="center">Vision Givers</h2>
          <p><?= $page->visiongiver() ?></p>
        </div>
        <div class="col col-33">
          <h2 class="center">Kingdom Givers</h2>
          <p><?= $page->kingdomgiver() ?></p>
        </div>
      </div>
      <div class="center">
        <a class="button dark big">Get Involved</a>
      </div>
    </div>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>