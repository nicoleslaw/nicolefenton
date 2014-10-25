<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="lede">
        <!--<?php echo $page->photo() ?>-->
        <img id="avatar" src="/_/images/avatar.png" height="120" width="120" alt="@nicoleslaw" />
      </div>

      <article class="content">
        <?php echo $page->text()->kirbytext() ?>

        <figure class="decoration pagebreak center" aria-hidden="true"><img src="/_/images/dec/wave-sm.svg" alt="" /></figure>

      </article>

      <aside class="aside-columns about--ps">
        <section>
            <?php echo $page->interviews()->kirbytext() ?>
        </section>
        <section>
            <?php echo $page->principles()->kirbytext() ?>
        </section>
        <section>
            <?php echo $page->side_projects()->kirbytext() ?>
        </section>
      </aside>

      <figure class="decoration center inlineblock" aria-hidden="true"><img src="/_/images/dec/triangle-red.svg" alt="" /></figure>

      <div for="avatar" class="photo-credit">
        <?php echo $page->photo_credit()->kirbytext() ?>
      </div>

    </main>

<?php snippet('footer') ?>