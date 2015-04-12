<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('sidebar') ?>
<div class="content">
  <?php snippet('subhero') ?>

  <div class="wrapper page">
    <section class="center">
      <h1><?= $page->abouttitle() ?></h1>
      <?= $page->about()->kirbytext() ?>
    </section>
  </div>

  <div class="wrapper">
    <div class="cols center sections">
      <div class="col col-33 comingup">
        <div class="circle">
          <div class="circle-container">
            <h3><strong>DISCOVERING JESUS &amp; HIS CHURCH</strong></h3>
            <p>focuses on the essentials of living your Christian faith. Topics include ‘Who is Jesus?’, Water baptism, prayer and more.</p>
          </div>
        </div>
      </div>
      <div class="col col-33 comingup hidden">
        <h3><strong>COMING UP</strong></h3>
        <ul>
          <?php foreach($page->find('coming-up')->children()->limit(5) as $event): ?>
          <li>
            <?= $event->eventdate() ?> - <?= $event->title() ?>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col col-33 jesus">
        <div class="circle">
          <div class="circle-container">
            <h3><strong>LIFE BUILDERS</strong></h3>
            <p>will equip you with practical skills in key areas such as finances, work, career and relationships.</p>
          </div>
        </div>
      </div>
      <div class="col col-33 discover">
        <div class="circle">
          <div class="circle-container">
            <h3><strong>MY BIBLE</strong></h3>
            <p>includes teaching, resources and practical tools on how to read and study the Bible.</p>
          </div>
        </div>
        <!-- <h3>DISCOVERING<br/><strong>JESUS</strong><br/>AND HIS<br/><strong>CHURCH</strong></h3>
        <p>Start the 6 Weeks Course</p>
        <a class="button">Start Now</a> -->
      </div>
      <div class="col col-50 workshops">
        <a href="#" class="box">
          <div class="box-container">
            <h3>SESSION WORKSHOPS</h3>
          </div>
        </a>
      </div>
      <div class="col col-50 toolbox">
        <a href="#" class="box">
          <div class="box-container">
            <h3>Toolbox</h3>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="wrapper page">
    <section class="center">
      <h1>Session Workshops Dates</h1>
      <ul class="dates">
        <?php foreach($page->find('coming-up')->children()->limit(5) as $event): ?>
        <li>
          <strong class="heading"><?= $event->eventdate() ?> — <?= $event->type() ?></strong>
          <br><?= $event->title() ?>
        </li>
        <?php endforeach ?>
      </ul>
    </section>
  </div>

  <div class="wrapper hidden page">
    <section class="podcasts center">
      <h1><?= $page->podcasttitle() ?></h1>
      <h2><?= $page->podcastsubtitle() ?></h2>
      <div class="items">
        <?php foreach($page->find('podcasts')->children()->limit(5) as $message): ?>
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