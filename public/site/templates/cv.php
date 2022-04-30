<?php snippet('global/header') ?>


<main class="main" role="main">

<article class="article-text">
  <header>
    <h1<?php if ($page->header_image()) {
      echo ' style="background-image:url('.$page->header_image()->html().');"';
      }
    ?>><?= $page->title()->html() ?></h1>
  </header>
  <div class="lede"><?= $page->lede()->html() ?></div>
  <section>
    <?= $page->text()->kirbytext() ?>
    <?php
      if($page->footnotes()) {
    ?>
    <div class="article-footnotes">
      <hr />
      <?= $page->footnotes()->kirbytext(); ?>
    </div>
    <?php
      }
    ?>
  </section>
  <footer>
    <div class="pubdate"><?= $page->pubdate()->html() ?></div>
    <img class="blue" src="/assets/images/dec/wave-sm-2.svg" alt="" />
  </footer>
</article>

</main>

<?php snippet('global/footer') ?>