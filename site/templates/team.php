<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('teamhero') ?>
  <div class="wrapper">
    <div class="quote center">
      <p><?= $page->quote() ?></p>
    </div>
    <div class="about center">
      <p><?= $page->aboutteam() ?></p>
    </div>
    <div class="reasons">
      <h1 class="center"><?= $page->reasonstitle() ?></h1>
      <?= kirbytext($page->reasons()) ?>
    </div>
    <div class="teamday center">
      <?= kirbytext($page->teamday()) ?>
    </div>
  </div>
  <div class="besties-feed center">
    <h2><?= $page->teambesties() ?></h2>
     <div id="instafeed"></div>
  </div>
</div>

<?php snippet('lightbox') ?>
<script type="text/javascript" src="/js/plugins/instafeed.js"></script>
<script type="text/javascript">
  var feed = new Instafeed({
      get: 'tagged',
      tagName: 'bcteambesties',
      clientId: 'ca090230b9b241d79c684fc7f76b89d8',
      resolution: 'standard_resolution',
      limit: '60',
      sortBy: 'most-recent',
      links: 'false',
      template: '<div class="image"><div class="caption">{{caption}}</div><img src="{{image}}" /></div>'
  });
  feed.run();
</script>
<?php snippet('footer') ?>