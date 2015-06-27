<!-- FOOTER
			================================= -->
			<section id="footer" class="footer-section section">

				<div class="container">

					<h3 class="footer-logo">
						<a href="https://www.metro.net/" target="_blank"><img src="/assets/images/logos/footer-logo.png" srcset="/assets/images/logos/footer-logo@2x.png 2x" alt="Metro"></a>
					</h3>

					<div class="footer-socmed">
						<a href="https://www.facebook.com/losangelesmetro" target="_blank"><span class="fa fa-facebook"></span></a>
						<a href="https://twitter.com/metrolosangeles" target="_blank"><span class="fa fa-twitter"></span></a>
						<a href="https://instagram.com/metrolosangeles/" target="_blank"><span class="fa fa-instagram"></span></a>
						<a href="https://instagram.com/metrolosangeles/" target="_blank"><span class="fa fa-pinterest"></span></a>
					</div>

					<div class="footer-copyright">
						&copy; 2015 Metro
						<br />
						updated <?php echo $site->modified('m/d/Y H:i') ?>
					</div>

				</div>

			</section>

		</div>


<!-- LIBRARIES JS
		================================= -->
  <?php
  // echo js('assets/js/jquery.min.js');
  echo js('assets/js/bootstrap.min.js');
  echo js('assets/js/respimage.min.js');
  echo js('assets/js/jpreloader.min.js');
  echo js('assets/js/smoothscroll.min.js');
  echo js('assets/js/jquery.nav.min.js');
  echo js('assets/js/jquery.inview.min.js');
  echo js('assets/js/jquery.counterup.min.js');
  echo js('assets/js/jquery.stellar.min.js');
  echo js('assets/js/maplace-0.1.3.min.js');
  echo js('assets/js/responsiveslides.min.js');
  ?>

	<!-- JuxtaposeJS wants this stuff at the bottom -->
	<link rel="stylesheet" href="/assets/css/juxtapose.css">
	<script type="text/javascript" src="/assets/js/juxtapose.js"></script>

	<!-- MAIN SCRIPT
	================================= -->
  <?php echo js('assets/js/script.js') ?>

</body>
</html>
