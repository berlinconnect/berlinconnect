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
     <a id="load-more" class="filled"><?= $page->loadmore() ?></a>
  </div>
</div>

<?php snippet('lightbox') ?>
<script type="text/javascript" src="/js/plugins/instafeed.js"></script>
<script type="text/javascript">

  var loadButton = document.getElementById('load-more');
  var feed = new Instafeed({
      after: function() {
        // disable button if no more results to load
        if (!this.hasNext()) {
          $('#load-more').addClass('hidden');
        }
      },

      get: 'tagged',
      tagName: 'bcteambesties',
      clientId: 'ca090230b9b241d79c684fc7f76b89d8',
      resolution: 'standard_resolution',
      sortBy: 'most-recent',
      links: 'false',
      template: '<div class="image"><div class="caption">{{caption}}</div><img src="{{image}}" /></div>'
  });

  loadButton.addEventListener('click', function() {
    feed.next();
  });

  feed.run();
</script>
<?php snippet('footer') ?>