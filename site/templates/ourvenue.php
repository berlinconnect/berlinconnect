<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('ourvenuehero') ?>
  <section class="wrapper">
    <div class="intro center">
      <h1><?= $page->introtitle() ?></h1>
      <?= kirbytext($page->introcopy()) ?>
  </section>
  <div class="mapContainer">
    <div class="wrapper">
      <div class="mapInfo">
        <div class="address">
          <h3><?= $page->address() ?></h3>
          <p>Haus Ungarn<br>Karl-Liebknecht-Straße 9<br>10178 Berlin</p>
        </div>
        <div class="transport">
          <h3><?= $page->transport() ?></h3>
          <p>Alexanderplatz:</p>
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
          <p>Hackescher Markt:</p>
          <div class="s connections">
            <span class="s" style="background-color:#F47922">S5</span><span class="s" style="background-color:#7A6CAC">S7</span><span class="s" style="background-color:#7A6CAC">S75</span>
          </div>
          <div class="m connections">
            <span>M1</span><span>M4</span><span>M5</span>
          </div>
        </div>
        <a href="https://www.google.com/maps/place/Karl-Liebknecht-Stra%C3%9Fe+9/@52.5210193,13.4059784,17z/data=!3m1!4b1!4m2!3m1!1s0x47a851dffce76a15:0xad943eb434bb3f7f" class="button white"><?= $page->openmaps() ?></a>
      </div>
    </div>
    <div class="map" id="map_canvas"></div>
  </div>
  <section class="wrapper">
    <div class="intro center">
      <?= kirbytext($page->detailscopy()) ?>
      <br><br>
    <a href="/home" class="button white"><?= $page->visithome() ?></a>
    </div>
  </section>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>