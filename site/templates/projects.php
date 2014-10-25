<?php snippet('header') ?>

    <main class="main" role="main">

<?php if($page->lede()) : ?>
      <div class="lede">
        <?php echo $page->lede()->html() ?>

      </div>
      <?php endif; ?>

      <article class="content">
        <?php snippet('projects') ?>

      </article>

      <figure class="decoration" aria-hidden="true"><img src="/_/images/dec/wave-lg.svg" alt="" /></figure>

      <section class="clients-list">
        <?php echo $site->clients()->kirbytext() ?>

      </section>

    </main>
<?php snippet('footer') ?>