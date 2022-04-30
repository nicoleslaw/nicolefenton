<?php snippet('global/header') ?>


<main class="main" role="main">

<div class="lede">
  <?= $page->lede()->html() ?>
</div>

<article class="content">

  <section class="list-section speaking-events upcoming-events">
    <?= $page->upcoming_events()->kirbytext() ?>
  </section>

  <figure class="decoration" aria-hidden="true"><img src="/assets/images/dec/wave-divider.svg" alt="Wave" /></figure>

  <section class="list-section speaking-events">
    <?= $page->past_events()->kirbytext() ?>
  </section>

  <figure class="decoration" aria-hidden="true"><img src="/assets/images/dec/wave-lg.svg" alt="Wave Large" /></figure>

</article>

</main>

<?php snippet('global/footer') ?>
