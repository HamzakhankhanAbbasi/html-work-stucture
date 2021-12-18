<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4">
				<div class="footer-col1">
					<div class="footer-logo">
						<a href="index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
					</div>
					<div class="footer-social-icons">
						<a href="javascript:void(0)" class="fb">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="javascript:void(0)" class="twitter">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="javascript:void(0)" class="youtube">
							<i class="fab fa-youtube"></i>
						</a>
						<a href="javascript:void(0)" class="gplus">
							<i class="fab fa-google-plus-g"></i>
						</a>
						<a href="javascript:void(0)" class="linkdin">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
					<p class="copyright">Copyright © 2021 Eze Interior Lifestyle. All Rights Reserved.</p>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<div class="footer-col2 mb-40">
					<p class="footer-title">Call Us At</p>
					<ul>
						<li><span>Call Us At: </span>
							<a href="tel:+113245678910">+1 132 456 789 10</a>
						</li>
						<li><span>Fax Us At: </span>
							<a href="tel:+112345678910">+1 123 456 789 10</a></li>
					</ul>
				</div>
				<div class="footer-col2">
					<p class="footer-title">Come Visit Us</p>
					<ul>
						<li><p>18th Lorem Ipsum Dummy Text For
						Web Design NewYork, US</p></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<div class="footer-col2 mb-40">
					<p class="footer-title">Send A Message</p>
					<ul>
						<li><span>Email Us On:</span>
							<a href="mailto:info@ezeinteriorlifestyle.com">info@ezeinteriorlifestyle.com</a>
						</li>
					</ul>
				</div>
				<div class="footer-col3">
					<p class="footer-title">Newsletter</p>
					<div class="footer-searchBar">
						<input type="email" name="" placeholder="Enter Your Email">
						<button type="submit"><i class="fas fa-long-arrow-alt-right"></i></button>
					</div>
					<p class="footer-text">Sign up to get exclusive offers from our favorite brands and to be well up in the news.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Video Modal starts -->
<div class="modal fade" id="showreelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-wrap" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                    <div class="modal-contented">
                       <div class="modal-header border-0 p-0">
                            <span class="modal-btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times close-btn"></i></span>
                    </div>
                    <div class="show-reel">
                        <video loop="true" autoplay="autoplay" muted>
                          <source src="assets/videos/index-banner-video.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal Ends -->

  <script src="assets/js/jquery.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
  <script src="assets/js/jquery.images-compare.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
  <script src="assets/js/popper-min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
  AOS.init();
</script>
<script>
	$(function () {
        var imagesCompareElement = $('.js-img-compare').imagesCompare();
        var imagesCompare = imagesCompareElement.data('imagesCompare');
        var events = imagesCompare.events();

        imagesCompare.on(events.changed, function (event) {
            console.log(events.changed);
            console.log(event.ratio);
            if (event.ratio < 0.4) {
                console.log('We see more than half of the back image');
            }
            if (event.ratio > 0.6) {
                console.log('We see more than half of the front image');
            }

            if (event.ratio <= 0) {
                console.log('We see completely back image');
            }

            if (event.ratio >= 1) {
                console.log('We see completely front image');
            }
        });

        $('.js-front-btn').on('click', function (event) {
            event.preventDefault();
            imagesCompare.setValue(1, true);
        });

        $('.js-back-btn').on('click', function (event) {
            event.preventDefault();
            imagesCompare.setValue(0, true);
        });

        $('.js-toggle-btn').on('click', function (event) {
            event.preventDefault();
            if (imagesCompare.getValue() >= 0 && imagesCompare.getValue() < 1) {
                imagesCompare.setValue(1, true);
            } else {
                imagesCompare.setValue(0, true);
            }
        });
    });

</script>

</body>

</html>