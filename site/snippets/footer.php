
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

  </div><!-- .body-wrap -->

  <script src="/_/js/vendor/modernizr.custom.js?v=1.0.1" type="text/javascript"></script>
  <?php snippet("jquery") ?>


  <script>
  //<![CDATA[
    <?php include($_SERVER['DOCUMENT_ROOT']."/_/js/main.min.js"); ?>

  //]]>
  </script>

</body>
</html>