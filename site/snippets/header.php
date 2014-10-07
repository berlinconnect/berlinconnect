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

  <link rel="icon" href="<?php echo url('img/favicon.ico') ?>" type="image/x-icon">

  <!-- Typekit -->
  <script type="text/javascript" src="//use.typekit.net/xkv4ghj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script>
    function initialize() {

      var myLatLng = new google.maps.LatLng(52.521300, 13.406281);
      var map_canvas = document.getElementById('map_canvas');
      var myIcon = new google.maps.MarkerImage("<?php echo url('img/logo.png') ?>", null, null, null, new google.maps.Size(60,60));

      var map_options = {
        center: new google.maps.LatLng(52.521874, 13.410211),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
      }

      var map = new google.maps.Map(map_canvas, map_options)

      var marker = new google.maps.Marker({
        position: myLatLng,
        icon: myIcon,
        map: map
      });

      marker.setMap(map);


    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

  <!-- Scripts -->
  <?
    $isProduction = (strpos($site->url(), 'myberlinconnect.com') > 0);
    if ($isProduction) {
      $mainJS = 'main.build';
    }
    else {
      $mainJS = 'main';
    }
  ?>
  <script type="text/javascript" src="/js/vendor/require.js"></script>
  <script type="text/javascript">
    window.require = requirejs.config({
      'baseUrl': '/js',
      'context': 'bc'
    });
  </script>
  <script type="text/javascript" src="/js/<?= $mainJS ?>.js?v=<?= time(); ?>"></script>

  <? if($page->hasImages()): ?>
    <link rel="image_src" href="<?= $page->images()->first()->url(); ?>">
  <? endif ?>

  <!-- Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-82811-13']);
    _gaq.push(['_setDomainName', 'myberlinconnect.de']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>

</head>

<body class="<?=$page->uri()?>">
<div class="notice">
  <?= kirbytext($site->notice()) ?>
</div>
<?php

  if (!isset($_COOKIE['visited'])) { // no cookie, so probably the first time here
      setcookie ('visited', 'yes', time() + 3600); // set visited cookie

      header("Location: /heart-for-the-house");
      exit(); // always use exit after redirect to prevent further loading of the page
  }

?>
