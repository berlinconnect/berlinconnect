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
        <a href="enlarge/toolbox" class="box">
          <div class="box-container">
            <h3>Toolbox</h3>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="wrapper hidden page">
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
</div>
<?php snippet('lightbox') ?>
<?php snippet('footer') ?>