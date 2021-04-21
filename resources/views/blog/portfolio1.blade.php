@extends('layouts.app')

@section('content')




<div class="container">
	<div class="row">
		 <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

    	<div class="footer-top">
    		<div class="container">
    			<div class="row">

    				<div class="col-lg-3 col-md-6 footer-contact">
    					<h3>Baker</h3>
    					<p>
    						A108 Adam Street <br>
    						New York, NY 535022<br>
    						United States <br><br>
    						<strong>Phone:</strong> +1 5589 55488 55<br>
    						<strong>Email:</strong> info@example.com<br>
    					</p>
    				</div>

    				<div class="col-lg-2 col-md-6 footer-links">
    					<h4>Useful Links</h4>
    					<ul>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
    					</ul>
    				</div>

    				<div class="col-lg-3 col-md-6 footer-links">
    					<h4>Our Services</h4>
    					<ul>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
    						<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
    					</ul>
    				</div>

    				<div class="col-lg-4 col-md-6 footer-newsletter">
    					<h4>Join Our Newsletter</h4>
    					<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
    					<form action="" method="post">
    						<input type="email" name="email"><input type="submit" value="Subscribe">
    					</form>
    				</div>

    			</div>
    		</div>
    	</div>

    	<div class="container d-md-flex py-4">

    		<div class="mr-md-auto text-center text-md-left">
    			<div class="copyright">
    				&copy; Copyright <strong><span>Baker</span></strong>. All Rights Reserved
    			</div>
    			<div class="credits">
    				<!-- All the links in the footer should remain intact. -->
    				<!-- You can delete the links only if you purchased the pro version. -->
    				<!-- Licensing information: https://bootstrapmade.com/license/ -->
    				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
    				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    			</div>
    		</div>
    		<div class="social-links text-center text-md-right pt-3 pt-md-0">
    			<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    			<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    			<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    			<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    			<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    		</div>
    	</div>
    </footer>
    <!-- End Footer -->

	</div>
</div>
@endsection