<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="lede">
        <?php echo $page->lede()->html() ?>
      </div>

      <article class="content">

        <section class="list-section speaking-events upcoming-events">
          <?php echo $page->upcoming_events()->kirbytext() ?>
        </section>

        <figure class="decoration" aria-hidden="true"><img src="/_/images/dec/wave-divider.svg" alt="" /></figure>

        <section class="list-section speaking-events">
          <?php echo $page->past_events()->kirbytext() ?>
        </section>

        <figure class="decoration" aria-hidden="true"><img src="/_/images/dec/wave-lg.svg" alt="" /></figure>

      </article>

    </main>

<?php snippet('footer') ?>