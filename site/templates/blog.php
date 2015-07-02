<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blog">

  <h1><?php echo $page->title()->html() ?></h1>
  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

  <article>
    <h1><?php echo $article->title()->html() ?></h1>
    <p><?php echo $article->text()->excerpt(300) ?></p>
    <a href="<?php echo $article->url() ?>">Read more…</a>
  </article>

  <?php endforeach ?>

</section>

<?php snippet('footer') ?>