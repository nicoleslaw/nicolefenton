<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="lede">
        <?php echo $page->lede()->html() ?>
      </div>

      <article class="content">

        <h2 class="list-section-title">Services</h2>
        <section markdown="1" class="services-list">
          <?php echo $page->services()->kirbytext() ?>
        </section>

        <figure class="decoration more-margin" aria-hidden="true"><img src="/_/images/dec/wave-sm.svg" alt="" /></figure>

        <section class="process">
          <h2 class="list-section-title">Process</h2>
          <?php echo $page->process()->kirbytext() ?>
        </section>

      </article>

      <figure class="decoration more-margin" aria-hidden="true"><img src="/_/images/dec/wave-lg-2.svg" alt="" /></figure>

      <section class="clients-list">
        <?php echo $site->clients()->kirbytext() ?>
      </section>

      <?php /* snippet('projects') */ ?>

    </main>

<?php snippet('footer') ?>