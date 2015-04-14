<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('subhero') ?>

  <div class="wrapper page">
    <section class="downloads center">
      <h1>Discovery Notes</h1>
      <h2><?= $page->downloadssubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('discovery')->children()->limit(5) as $download): ?>
        <a class="itemLink" href="<?= $download->link() ?>">
          <div class="item">
            <span class="entypo download"></span>
            <h3><?= $download->title() ?></h3>
          </div>
        </a>
        <?php endforeach ?>
        <div class="center hidden">
          <a class="button orange">Download Everything</a>
        </div>
      </div>
    </section>
    <section class="podcasts center">
      <h1><?= $page->podcasttitle() ?></h1>
      <h2><?= $page->podcastsubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('podcasts')->children()->visible()->limit(5) as $message): ?>
        <a class="itemLink" href="<?= $message->link() ?>">
          <div class="item">
            <span class="entypo play"></span>
            <span class="speaker right"><?= $message->speaker() ?></span>
            <h3><?= $message->title() ?></h3>
            <div class="clearfix"></div>
          </div>
        </a>
        <?php endforeach ?>
        <div class="center">
          <a class="button orange" href='https://soundcloud.com/berlinconnect'>View All on Soundcloud</a>
        </div>
      </div>
    </section>
    <section class="blog center">
      <h1><?= $page->blogtitle() ?></h1>
      <h2><?= $page->blogsubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('transcripts')->children()->visible()->limit(5) as $transcript): ?>
        <a class="itemLink" href="<?= $transcript->url() ?>">
          <div class="item">
            <span class="entypo list"></span>
            <span class="speaker right"><?= $transcript->datestamp() ?></span>
            <h3><?= $transcript->title() ?></h3>
            <div class="clearfix"></div>
          </div>
        </a>
        <?php endforeach ?>
      </div>
    </section>
    <section class="books center">
      <h1><?= $page->bookstitle() ?></h1>
      <h2><?= $page->bookssubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('books')->children()->visible()->limit(5) as $book): ?>

          <!--
            Checking whether there is a review or not,
            review    => Book Review page
            no review => Amazon page
           -->
          <?php
            $review = $book->text();
            $review = (string)$review;
            $bookLink;
            if(strlen($review) > 50) {
              $bookLink = $book->url();
            }
            else{
              $bookLink = $book->link();
            }
          ?>

          <a class="itemLink" href="<?= $bookLink ?>">
            <div class="item">
              <span class="entypo book"></span>
              <span class="speaker right"><?= $book->author() ?></span>
              <h3><?= $book->title() ?></h3>
              <div class="clearfix"></div>
            </div>
          </a>
        <?php endforeach ?>
      </div>
    </section>
    <section class="downloads center">
      <h1><?= $page->downloadstitle() ?></h1>
      <h2><?= $page->downloadssubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('downloads')->children()->limit(5) as $download): ?>
        <a class="itemLink" href="<?= $download->link() ?>">
          <div class="item">
            <span class="entypo download"></span>
            <h3><?= $download->title() ?></h3>
          </div>
        </a>
        <?php endforeach ?>
        <div class="center hidden">
          <a class="button orange">Download Everything</a>
        </div>
      </div>
    </section>
  </div>
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>