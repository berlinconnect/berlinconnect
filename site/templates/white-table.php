<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="content">
  <?php snippet('whitetablehero') ?>
  <div class="wrapper page">
    <section class="podcasts center">
      <h1><?= $page->podcasttitle() ?></h1>
      <h2><?= $page->podcastsubtitle() ?></h2>
      <div class="messages">
        <?php foreach($pages->find('podcasts')->children()->flip() as $message): ?>
        <div class="message">
          <a href="<?= $message->link() ?>">
            <span class="entypo play"></span>
            <span class="speaker right"><?= $message->speaker() ?></span>
            <h3><?= $message->title() ?></h3>
          </a>
        </div>
        <?php endforeach ?>
      </div>
    </section>
    <section class="blog center">
      <h1><?= $page->blogtitle() ?></h1>
      <h2><?= $page->blogsubtitle() ?></h2>
    </section>
    <section class="books center">
      <h1><?= $page->bookstitle() ?></h1>
      <h2><?= $page->bookssubtitle() ?></h2>
    </section>
    <section class="downloads center">
      <h1><?= $page->downloadstitle() ?></h1>
      <h2><?= $page->downloadssubtitle() ?></h2>
    </section>
  </div>
</div>