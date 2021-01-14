<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>@yield('_pageTitle') - Torus Academy</title>

    <!-- CSS Plugins -->
    <link href="<?php echo base_url('application//fe_v1/plugins/lightbox/dist/css/lightbox.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('fe_v1/plugins/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/owl-carousel/dist/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/owl-carousel/dist/assets/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/aos-master/dist/aos.css'); ?>">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="<?php echo base_url('application/public_html/assets_alpha/fe_v1/css/theme.css'); ?>">
    <!--end build-->

    @yield('_css')

</head>
<body id="@yield('page_id', 'index__page')">

<!-- Back to top button
================================================== -->
<a id="back-to-top" href="#section__home" class="btn btn-primary back-to-top" role="button"
   title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
    <i class="ion-android-arrow-up"></i>
</a>

<!-- PRELOADER
================================================== -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>

<!-- SIGNIN MODAL
================================================== -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Sign In</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="body-signin__form">

							<!-- Sign In form -->
							<form class="signin__form" action="<?php echo base_url("login")?>" method="post">
								<!-- Email -->
								<div class="form-group">
									<label for="sign-in__email" class="sr-only">Enter email</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="ion-android-person"></i></span>
										<input type="email" name="email"  class="form-control" id="sign-in__email"
											   placeholder="Enter email">
									</div>
								</div>
								<!-- Password -->
								<div class="form-group">
									<label for="sign-in__password" class="sr-only">Enter password</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="ion-locked"></i></span>
										<input type="password" name="password" class="form-control" id="sign-in__password"
											   placeholder="Password">
									</div>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-accent btn-block">Submit</button>
							</form>

							<div class="signin__alt">
								<p>or sign in with social media</p>
								<ul class="signin__social">
									<li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
									<li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
								</ul>
							</div>

							<!-- Sign Up link -->
							<hr>
							<p>Not registered? <a href="signup.html">Create an Account.</a></p>

							<!-- Lost password form -->
							<p>
								Forgot password? <a href="#lost-password__form" data-toggle="collapse"
													aria-expanded="false" aria-controls="lost-password__form">Click here
									to recover.</a>
							</p>
							<div class="collapse" id="lost-password__form">
								<p class="text-muted">
									Enter your email address below and we will send you a link to reset your password.
								</p>
								<form class="form-inline">
									<div class="form-group">
										<label class="sr-only" for="lost-password__email">Email address</label>
										<input type="email" class="form-control" id="lost-password__email"
											   placeholder="Enter email">
									</div>
									<button type="submit" class="btn btn-accent">Send</button>
								</form>
							</div> <!-- lost-password__form -->
						</div> <!-- / .body-signin__form -->
					</div>
				</div> <!-- / .row -->
			</div> <!-- / .modal-body -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Navbar
================================================== -->
@include('landing_alpha.particle.nav')

<!-- CONTENT
  ================================================== -->

@yield('content')

<!-- section footer -->
@include('landing_alpha.particle.footer')
<!-- .section__footer -->

<!-- section footer copyright -->
@include('landing_alpha.particle.copy-right')
<!-- / .footer__copyright -->


@yield('_bottomTopJs')




<!-- JS Global -->
<script src="<?php echo asset_url('fe_v1/plugins/jquery/jquery-1.12.4.min.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/bootstrap/js/bootstrap.min.js'); ?>"></script>

<script>

	<?php
	if($this->session->flashdata('login')){
	?>
	$(document).ready(function () {
		$('#singIn').click();
	});
	<?php }
	?>

</script>


<!-- JQUERY STEP -->
<script src="<?php echo asset_url('fe_v1/js/jquery.steps.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1//js/main.js'); ?>"></script>


<!-- JS Plugins -->
<script src="<?php echo asset_url('fe_v1/plugins/waypoints/lib/jquery.waypoints.min.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/lightbox/dist/js/lightbox.min.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/owl-carousel/dist/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/countTo/jquery.countTo.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/countdown/jquery.countdown.min.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/aos-master/dist/aos.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/contact/contact.js'); ?>"></script>
<script src="<?php echo asset_url('fe_v1/plugins/smothscroll/smoothscroll.js'); ?>"></script>

<!-- JS Custom -->
<!--build:js assets/js/theme.min.js -->
<script src="<?php echo asset_url('fe_v1/js/theme.js'); ?>"></script>
<!-- endbuild -->
<script src="<?php echo asset_url('fe_v1/js/google_maps.js'); ?>"></script>

<!-- Google Maps -->
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&amp;callback=initMap"
        async defer></--script-->

@yield('_bottomJs')

</body>

</html>
