<?php snippet('global/header') ?>

    <main class="main" role="main">

      <?php if($page->lede()) : ?>
            <div class="lede">
              <?= $page->lede()->html() ?>
            </div>
      <?php endif; ?>

      <article class="content">
        <?php snippet('projects/projects') ?>
      </article>

      <figure class="decoration" aria-hidden="true"><img src="/assets/images/dec/wave-lg.svg" alt="Wave" /></figure>

      <section class="clients-list">
        <?= $site->clients()->kirbytext() ?>
      </section>

    </main>
<?php snippet('global/footer') ?>
