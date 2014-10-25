<?php snippet('header') ?>

    <main class="main" role="main">

      <article class="article-text">
        <header>
          <h1<?php if ($page->header_image()) {
            echo ' style="background-image:url('.$page->header_image()->html().');"';
            }
          ?>><?php echo $page->title()->html() ?></h1>
        </header>
        <div class="lede"><?php echo $page->lede()->html() ?></div>
        <section>
          <?php echo $page->text()->kirbytext() ?>
          <?php
            if($page->footnotes()) {
          ?>
          <div class="article-footnotes">
            <hr />
            <?php echo $page->footnotes()->kirbytext(); ?>
          </div>
          <?php
            }
          ?>
        </section>
        <footer>
          <div class="pubdate"><?php echo $page->pubdate()->html() ?></div>
          <img class="blue" src="/_/images/dec/wave-sm-2.svg" alt="" />
        </footer>
      </article>

    </main>

<?php snippet('footer') ?>