<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="lede">404</div>

      <article class="content">

        <h2 class="list-section-title"><?php echo $page->title()->kirbytext() ?></h2>
        <div class="center"><?php echo $page->text()->kirbytext() ?></div>
      </article>

    </main>

<?php snippet('footer') ?>