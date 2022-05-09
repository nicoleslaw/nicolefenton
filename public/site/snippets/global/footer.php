
    <footer class="footer cf" role="contentinfo">
      <div class="footer_inner">
        <div class="colophon">
          <div class="footer_wrap">
            <div class="colophon-text"><?= $site->about()->html() ?></div>
            <div class="colophon-address"><?= $site->address()->kirbytext() ?></div>
            <div class="colophon-copyright"><?= $site->copyright()->kirbytext() ?></div>
            <div class="colophon-credits"><?= $site->credits()->kirbytext() ?></div>
          </div>
        </div>

        <div class="footer-links">
          <div class="footer_wrap">
            <?= snippet("global/linklist") ?>
            <?php /* snippet("global/newslettersignup"); */ ?>
          </div>
        </div>
      </div>
    </footer>

  </div><?php /* <!-- .body-wrap --> */ ?>

  <?= js('assets/js/plugins.js') ?>
  <?= js('assets/js/main.js') ?>

</body>
</html>
