<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="home-bio">
        <?php echo @waysofbeing(@strip_p($page->home_bio()->kirbytext())) ?>
        
      </div>

      <div class="text text--home">

        <figure class="decoration" aria-hidden="true"><img src="/_/images/dec/wave-lg.svg" alt="" /></figure>

        <section id="testimonials" class="list-section testimonial testimonial--home">
          <?php snippet('testimonials') ?>
        </section>

        <section class="list-section making-list">
          <h2 class="list-section-title">Writing</h2>
          <?php echo $page->making()->kirbytext() ?>
        </section>

        <section class="list-section reading-list">
          <h2 class="list-section-title">Reading</h2>
          <?php echo $page->reading()->kirbytext() ?>
        </section>

      </div>

    </main>

<?php snippet('footer') ?>