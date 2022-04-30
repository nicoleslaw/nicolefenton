<?php snippet('global/header') ?>

    <main class="main" role="main">
      <section class="text project-text">

        <header>
          <h1 class="project-title"<?php if ($page->header_image()) {
            echo ' style="background-image:url('.$page->header_image()->html().');"';
            }
          ?>><?= $page->title() ?></h1>
        </header>

        <div class="lede"><?= $page->lede()->kirbytext() ?></div>

        <div class="testimonial">
          <?= $page->testimonial()->kirbytext() ?>
        </div>

        <?= $page->text()->kirbytext() ?>

        <?php /* foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure class="project-screen">
            <img class="lazy" src="/_/images/spacer.png" data-original="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>">
            <figcaption></figcaption>
          </figure>
        <?php endforeach*/ ?>

        <div class="meta">

          <div class="project-services">
            <h2>Services</h2>
            <?= $page->services()->kirbytext() ?>
          </div>

          <div>
            <h2>Year</h2>
            <time datetime="<?= $page->year()->kirbytext() ?>"><?= $page->year() ?></time>
          </div>

        </div>

      </section>

      <nav class="nextprev cf" role="navigation">

        <?php if ($page->hasPrevListed()): ?>
          <a class="prev" href="<?= $page->prevListed()->url() ?>"><abbr title="Previous Project">&larr;</abbr></a>
        <?php endif ?>
        <?php if ($page->hasNextListed()): ?>
          <a class="next" href="<?= $page->nextListed()->url() ?>"><abbr title="Next Project">&rarr;</abbr></a>
        <?php endif ?>

      </nav>
      <footer></footer>

    </main>
<?php snippet('global/footer') ?>
