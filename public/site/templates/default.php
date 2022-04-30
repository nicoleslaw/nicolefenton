<?php snippet('global/header') ?>

    <main class="main" role="main">

      <article class="content">
        <h1><?= $page->title()->html() ?></h1>
        <?= $page->text()->kirbytext() ?>
      </article>

    </main>

<?php snippet('global/footer') ?>