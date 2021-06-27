
    <footer class="footer cf" role="contentinfo">
      <div class="footer_inner">
        <div class="colophon">
          <div class="footer_wrap">
            <div class="colophon-text"><?php echo $site->about()->html() ?></div>
            <div class="colophon-address"><?php echo $site->address()->kirbytext() ?></div>
            <div class="colophon-copyright"><?php echo $site->copyright()->kirbytext() ?></div>
            <div class="colophon-credits"><?php echo $site->credits()->kirbytext() ?></div>
          </div>
        </div>

        <div class="footer-links">
          <div class="footer_wrap">
            <?php snippet("linklist") ?>
            <?php snippet("newslettersignup"); ?>
          </div>
        </div>
      </div>
    </footer>

  </div><?php /* <!-- .body-wrap --> */ ?>

  <script src="/_/js/min/plugins.min.<?php echo $site->version() ?>.js" type="text/javascript"></script>

  <script>
  //<![CDATA[
    <?php include($_SERVER['DOCUMENT_ROOT']."/_/js/min/main.min.js"); ?>

  //]]>
  </script>

</body>
</html>