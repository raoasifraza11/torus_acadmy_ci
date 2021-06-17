<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<title>@yield('title', "home") - Torus Academy</title>
	<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->

	<base href="application/public_html/">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/torus-logo.png">
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- slick css -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- linea-font css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
	<!-- flaticon css  -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" href="assets/css/rsmenu-main.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css"> <!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	@yield('css')

</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader">
	<div class="loader-container">
		<div class='loader-icon'>
			<img src="assets/images/torus-academy.gif" alt="torus-academy">
		</div>
	</div>
</div>
<!--Preloader area End here-->


<!--Full width header Start-->
<div class="full-width-header header-style1 home1-modifiy">
	<!--Header Start-->
	<header id="rs-header" class="rs-header">
		<!-- Topbar Area Start -->
		<div class="topbar-area dark-parimary-bg">
			<div class="container">
				<div class="row y-middle">
					<div class="col-md-7">
						<ul class="topbar-contact">
							<li>
								<i class="flaticon-email"></i>
								<a href="mailto:info@torusacademy.com.pk">info@torusacademy.com.pk</a>
							</li>
							<li>
								<i class="flaticon-phone"></i>
								<a href="tel:+923 21- 5862394 , +92 315-5126581">+923 21- 5862394 , +92 315-5126581</a>
							</li>
						</ul>
					</div>
					<div class="col-md-5 text-right">
						<ul class="topbar-right footer-social">

							<li><a href="https://www.facebook.com/Torus.academy1"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/torus_academy"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.instagram.com/torus_academy/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/in/torus-academy-388b7a209/"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Topbar Area End -->

		<!-- Menu Start -->
		<div class="menu-area menu-sticky">
			<div class="container">
				<div class="row y-middle">
					<div class="col-lg-2">
						<div class="logo-cat-wrap">
							<div class="logo-part">
								<a href="index.html">
									<img src="assets/images/torus-logo.png" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 text-right">
						<div class="rs-menu-area">
							<div class="main-menu">
								<div class="mobile-menu">
									<a class="rs-menu-toggle">
										<i class="fa fa-bars"></i>
									</a>
								</div>
								<nav class="rs-menu">
									<ul class="nav-menu">
										<li class="rs-mega-menu"> <a href="index.html">Home</a>
										</li>
										<li class="menu-item-has-children">
											<a href="about-us.html">About</a>
										</li>

										<li class="menu-item-has-children">
											<a href="course.html">Courses</a>
										</li>
										<li class="menu-item-has-children">
											<a href="gallery.html">Gallery</a>
										</li>
										<li class="menu-item-has-children hidden">
											<a href="blog.html">Blog</a>
										</li>

										<li class="menu-item-has-children">
											<a href="contact-us.html">Contact</a>
										</li>
									</ul> <!-- //.nav-menu -->
								</nav>
							</div> <!-- //.main-menu -->
						</div>
					</div>
					<div class="col-lg-2 text-right">
						<ul>
							<li class="login-register">
								<i class="fa fa-sign-in"></i>
								<a class="login-seting" href="login.html">Login</a>/<a class="login-seting" href="register.html">Register</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu End -->


	</header>
	<!--Header End-->
</div>
<!--Full width header End-->

<!-- Main content Start -->
@yield('content')
<!-- Section bg Wrap 2 End -->
</div>
<!-- Main content End -->

<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 footer-widget">

					<div class="textwidget white-color pr-60 md-pr-15">
						<h3 class="widget-title">Torus Academy</h3>
						<p>We denounce with righteous indi gnation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail weakness.</p>
					</div>

				</div>

				<div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
					<h3 class="widget-title">Useful Links</h3>
					<ul class="site-map">
						<li><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About US</a></li>
						<li><a href="course.html">Course</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
						<li><a href="login.html">Login/Register</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
					<h3 class="widget-title">Courses</h3>

					<ul class="site-map">
						<li><a href="#">Maths</a></li>
						<li><a href="#">Physics</a></li>
						<li><a href="#">Chesmistry</a></li>
						<li><a href="#">Accounts</a></li>
						<li><a href="#">English</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
					<h3 class="widget-title">Address</h3>
					<ul class="address-widget">
						<li>
							<i class="flaticon-location"></i>
							<div class="desc">4th-B Road, B-519, Near National Market Opp. PSO, Satellite Town, Rawalpindi</div>
						</li>
						<li>
							<i class="flaticon-call"></i>
							<div class="desc">
								<a href="tel:+923 21- 5862394 , +92 315-5126581">+923 21- 5862394 , +92 315-5126581</a>
							</div>
						</li>
						<li>
							<i class="flaticon-email"></i>
							<div class="desc">
								<a href="mailto:info@torusacademy.com.pk">info@torusacademy.com.pk</a>
							</div>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row y-middle">
				<div class="col-lg-4 md-mb-20">
					<div class="footer-logo md-text-center">
						<a href="index.html"><img src="assets/images/torus-logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-4 md-mb-20">
					<div class="copyright text-center md-text-left">
						<p>&copy; 2021 All Rights Reserved. Developed By <a href="http://tritechteal.com">TriTechTeal</a></p>
					</div>
				</div>
				<div class="col-lg-4 text-right md-text-left">
					<ul class="footer-social">
						<li><a href="https://www.facebook.com/Torus.academy1"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/torus_academy"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/torus_academy/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/torus-academy-388b7a209/"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
	<i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span class="flaticon-cross"></span>
	</button>
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="search-block clearfix">
				<form>
					<div class="form-group">
						<input class="form-control" placeholder="Search Here..." type="text">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Menu js -->
<script src="assets/js/rsmenu-main.js"></script>
<!-- op nav js -->
<script src="assets/js/jquery.nav.js"></script>
<!-- owl.carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- Skill bar js -->
<script src="assets/js/skill.bars.jquery.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- counter top js -->
<script src="assets/js/waypoints.min.js"></script>
<!-- video js -->
<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- contact form js -->
<script src="assets/js/contact.form.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>
</body>
</html>
