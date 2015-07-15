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
          <p>Maritim proArte Hotel<br>Friedrichstraße 151<br>10117 Berlin</p>
        </div>
        <div class="transport">
          <h3><?= $page->transport() ?></h3>
          <p>Friedrichstraße (4min):</p>
          <div class="connections">
            <span style="background-color:#6F4E9C">U6</span><span style="background-color:#DE4DA4">S1</span><span style="background-color:#005F27">S2</span><span style="background-color:#005F27">S25</span>
          </div>
          <div class="m connections">
            <span>M1</span><span>12</span>
          </div>
          <br>
          <p>Unter den Linden/Friedrichstraße (4min):</p>
          <div class="b connections">
            <span>100</span><span>200</span><span>TXL</span><span>147</span>
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