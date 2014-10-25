<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="lede">
        <?php echo $page->lede()->html() ?>
      </div>

      <article class="content">

        <section class="list-section list-section--thebook">
          <?php echo $page->the_book()->kirbytext() ?>
        </section>

        <section class="list-section list-section--featured">
          <?php echo $page->featured_writing()->kirbytext() ?>
        </section>

        <h2 class="list-section-title">Archives</h2>
        <section class="writing-archives">

          <div class="aside-list">

          <?php echo $page->business_writing()->kirbytext() ?>

          </div>
          <div class="aside-list">

          <?php echo $page->personal_writing()->kirbytext() ?>

          </div>

        </section>

        <div class="glyph dec-wave-lg center cf"></div>

        <section class="writing-elsewhere">
          <h2>Published Elsewhere</h2>
          <div class="wrapper">
            <?php echo $page->published_elsewhere()->kirbytext() ?>
          </div>
        </section>

        <?php echo $page->text()->kirbytext() ?>

      </article>

    </main>

<?php snippet('footer') ?>