@extends('landing')
@section('_pageTitle', 'Student Registration')

@section('_css')
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1//css/style.css'); ?>">
@endsection

@section('content')
	<!-- CONTENT
      ================================================== -->

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
								<form class="signin__form" role="form">
									<!-- Email -->
									<div class="form-group">
										<label for="sign-in__email" class="sr-only">Enter email</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="ion-android-person"></i></span>
											<input type="email" class="form-control" id="sign-in__email"
												   placeholder="Enter email">
										</div>
									</div>
									<!-- Password -->
									<div class="form-group">
										<label for="sign-in__password" class="sr-only">Enter password</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="ion-locked"></i></span>
											<input type="password" class="form-control" id="sign-in__password"
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
										<li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
										<li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
										<li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
									</ul>
								</div>

								<!-- Sign Up link -->
								<hr>
								<p>Not registered? <a href="#signupModal">Create an Account.</a></p>

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
									<form class="form-inline" role="form">
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
	</div>
	<!-- /.modal -->

	<!-- section home -->
	<div id="about__page">
		<section class="section__home">
			<div class="container home__body">
				<div class="row">
					<div class="col-sm-12">
						<div class="home__content">

							<!-- Heading -->
							<h1 class="home__heading">
								REGISTRATION
							</h1>

							<!-- Breadcrumbs -->
							<ol class="breadcrumb">
								<li><a href="<?php echo base_url('/'); ?>">Home</a></li>
								<li class="active">Student Registration</li>
							</ol>

						</div> <!-- / .home__content -->
					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->

			<!-- Background image -->
			<div class="home__bg"></div>
		</section>
		<div class="wrapper">
			<form action="" id="wizard">
				<!-- SECTION 1 -->
				<h2></h2>
				<section>
					<div class="inner">
						<div class="image-holder">
							<img src="assets/img/reg-01.jpg" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Student Registration</h3>
							</div>
							<p>Please fill with your details</p>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="First Name" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Last Name" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Your Email" class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" placeholder="Password" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="select">
									<div class="form-holder">
										<div class="select-control">Your country</div>
										<i class="zmdi zmdi-caret-down"></i>
									</div>
									<ul class="dropdown">
										<li rel="United States">United States</li>
										<li rel="United Kingdom">United Kingdom</li>
										<li rel="Viet Nam">Viet Nam</li>
									</ul>
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Phone Number" class="form-control">
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- SECTION 2 -->
				<h2></h2>
				<section>
					<div class="inner">
						<div class="image-holder">
							<img src="assets/img/student-reg.jpg" alt="">
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Student Registration</h3>
							</div>
							<p>Please fill with additional info</p>
							<div class="form-row">
								<div class="form-holder">
									<input type="date" placeholder="Date of Birth" class="form-control">
								</div>
								<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
									<div class="checkbox-tick">
										<label class="male">
											<input type="radio" name="gender" value="male" checked> Male<br>
											<span class="checkmark"></span>
										</label>
										<label class="female">
											<input type="radio" name="gender" value="female"> Female<br>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="City" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Zip Code" class="form-control">
								</div>
							</div>
							<div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"></span>
								</label>
							</div>

						</div>
					</div>
				</section>


			</form>
		</div>
	</div>
@endsection
