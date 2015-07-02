<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content blogarticle">
  <article>
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>

    <a href="<?php echo url('blog') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>