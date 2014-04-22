<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('newvenuehero') ?>
  <section class="wrapper">
    <div class="intro center">
      <h1><?= $page->introtitle() ?></h1>
      <?= kirbytext($page->introcopy()) ?>
    </div>
  </section>
  <div class="mapContainer">
    <div class="wrapper">
      <div class="mapInfo">
        <div class="address">
          <h3>Address</h3>
          <p>Karl-Liebknecht-Strasse 9<br>10178 Berlin</p>
        </div>
        <div class="transport">
          <h3>Transport</h3>
          <p>Alexander Platz:</p>
          <div class="connections">
            <span style="background-color:#F05921">U2</span><span style="background-color:#825942">U5</span><span style="background-color:#0D619E">U8</span><span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
          </div>
          <div class="m connections">
            <span>M4</span><span>M5</span><span>M6</span><span>M8</span><span>M48</span>
          </div>
          <div class="b connections">
            <span>TXL</span><span>100</span><span>200</span>
          </div>
          <br>
          <p>Hackerscher Markt:</p>
          <div class="s connections">
            <span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
          </div>
          <div class="m connections">
            <span>M1</span><span>M4</span><span>M5</span>
          </div>
        </div>
      </div>
    </div>
    <div class="map" id="map_canvas"></div>
  </div>
  <section class="wrapper">
    <div class="intro center">
      <?= kirbytext($page->sundaycopy()) ?>
      <br><br>
    <a href="/home" class="button white">Visit Our Homepage</a>
    </div>
  </section>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>