<?php snippet('global/header') ?>

    <main class="main" role="main">

      <div class="lede">
        <!--<?= $page->photo() ?>-->
        <img id="avatar" src="/assets/images/avatar.png" height="120" width="120" alt="@nicoleslaw" />
      </div>

      <article class="content">
        <?= $page->text()->kirbytext() ?>

        <figure class="decoration pagebreak center" aria-hidden="true"><img src="/assets/images/dec/wave-sm.svg" alt="" /></figure>

      </article>

      <aside class="aside-columns about--ps">
        <section>
            <?= $page->interviews()->kirbytext() ?>
        </section>
        <section>
            <?= $page->principles()->kirbytext() ?>
        </section>
        <section>
            <?= $page->side_projects()->kirbytext() ?>
        </section>
      </aside>

      <figure class="decoration center inlineblock" aria-hidden="true"><img src="/assets/images/dec/triangle-red.svg" alt="" /></figure>

      <div for="avatar" class="photo-credit">
        <?= $page->photo_credit()->kirbytext() ?>
      </div>

    </main>

<?php snippet('global/footer') ?>
