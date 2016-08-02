  <footer class="footer footer-static" role="contentinfo">

    <div class="footer-bottom">
      <div class="container">
      	<?php echo $site->copyright()->kt() ?>
      	
      </div>
    </div>

  </footer>
  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
	<script src="<?php echo site()->url() ?>/assets/js/production/bluebeam-core.min.js"></script>
	<script>
    $(".boxer").boxer({
        videoWidth: 900
    });
    </script>
</body>
</html>