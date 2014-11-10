<?php snippet('header') ?>

    <main class="main" role="main">
      <section class="text project-text">

        <header>
          <h1 class="project-title"<?php if ($page->header_image()) {
            echo ' style="background-image:url('.$page->header_image()->html().');"';
            }
          ?>><?php echo @strip_p($page->title()->kirbytext()) ?></h1>
        </header>

        <div class="lede"><?php echo $page->lede()->kirbytext() ?></div>

        <div class="testimonial">
          <?php echo $page->testimonial()->kirbytext() ?>
        </div>

        <?php echo $page->text()->kirbytext() ?>

        <?php /* foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
          <figure class="project-screen">
            <img class="lazy" src="/_/images/spacer.png" data-original="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            <figcaption></figcaption>
          </figure>
        <?php endforeach*/ ?>

        <div class="meta">

          <div class="project-services">
            <h2>Services</h2>
            <?php echo $page->services()->kirbytext() ?>
          </div>

          <div>
            <h2>Year</h2>
            <time datetime="<?php echo $page->year()->kirbytext() ?>"><?php echo $page->year() ?></time>
          </div>

        </div>

      </section>

      <nav class="nextprev cf" role="navigation">
        <?php if($prev = $page->prevVisible()): ?>
        <a class="prev" href="<?php echo $prev->url() ?>"><abbr title="Previous Project">&larr;</abbr></a>
        <?php endif ?>
        <?php if($next = $page->nextVisible()): ?>
        <a class="next" href="<?php echo $next->url() ?>"><abbr title="Next Project">&rarr;</abbr></a>
        <?php endif ?>
      </nav>
      <footer></footer>

    </main>
<?php snippet('footer') ?>