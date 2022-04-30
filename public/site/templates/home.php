<?= snippet('global/header') ?>

    <main class="main" role="main">

      <div class="home-bio">
        <?= $page->home_bio()->waysofbeing() ?>
      </div>

      <div class="text text--home">

        <figure class="decoration" aria-hidden="true"><img src="/assets/images/dec/wave-lg.svg" alt="Wave" /></figure>

        <section id="testimonials" class="list-section testimonial testimonial--home">
          <?php snippet('home/testimonials') ?>
        </section>

        <section class="list-section making-list">
          <h2 class="list-section-title">Writing</h2>
          <?= $page->making()->kirbytext() ?>
        </section>

        <section class="list-section reading-list">
          <h2 class="list-section-title">Reading</h2>
          <?= $page->reading()->kirbytext() ?>
        </section>

      </div>

    </main>

<?= snippet('global/footer') ?>
