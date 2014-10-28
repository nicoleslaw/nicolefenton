
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

  <?php snippet("jquery") ?>


  <script>
  //<![CDATA[
    <?php include($_SERVER['DOCUMENT_ROOT']."/_/js/main.min.js"); ?>

  //]]>
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42875888-1', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>