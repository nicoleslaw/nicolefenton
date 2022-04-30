<?php snippet('global/header') ?>

    <main class="main" role="main">

      <div class="lede">404</div>

      <article class="content">

        <h2 class="list-section-title"><?= $page->title()->kirbytext() ?></h2>
        <div class="center"><?= $page->text()->kirbytext() ?></div>
      </article>

    </main>

<?php snippet('global/footer') ?>