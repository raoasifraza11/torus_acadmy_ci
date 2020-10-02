@extends('landing')
@section('_pageTitle', 'Registration Teacher')
@section('page_id', 'courses__page')
@section('_css')
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1/css/theme.css'); ?>">
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
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Sign In</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="body-signin__form">


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
									Forgot password? <a href="#lost-password__form" data-toggle="collapse" aria-expanded="false" aria-controls="lost-password__form">Click here to recover.</a>
								</p>
								<div class="collapse" id="lost-password__form">
									<p class="text-muted">
										Enter your email address below and we will send you a link to reset your password.
									</p>
									<form class="form-inline" role="form">
										<div class="form-group">
											<label class="sr-only" for="lost-password__email">Email address</label>
											<input type="email" class="form-control" id="lost-password__email" placeholder="Enter email">
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

	<!-- section home -->
	<section class="section__home">
		<div class="container home__body">
			<div class="row">
				<div class="col-sm-12">
					<div class="home__content">

						<!-- Heading -->
						<h1 class="home__heading">
							Courses
						</h1>

						<!-- Breadcrumbs -->
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
							<li class="active">Courses</li>
						</ol>

					</div> <!-- / .home__content -->
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->

		<!-- Background image -->
		<div class="home__bg"></div>
	</section>

	<!-- section courses -->
	<section class="section__courses">
		<div class="container">
			<div class="row">
				<?php foreach ($courses as $cours){ ?>
				<div class="col-sm-4">
					<div class="course__item">
						<div class="course-item__img">
							<img src="<?php echo base_url('application/public_html/assets_alpha/fe_v1/img/courses_img-1.jpg') ?>" class="img-responsive" alt="...">
						</div>
						<div class="course-item__info">
							<div class="info__students">
								<i class="ion-person-stalker" aria-hidden="true"></i> 53/120
							</div>
							<div class="info__price">
								<i class="ion-ios-pricetags" aria-hidden="true"></i> 70-100$
							</div>
						</div>
						<div class="course-item__content">
							<span class="course-item__branch">{{$cours->class_name}}/{{$cours->first_name}}</span>
							<h3>
								<a href="<?php echo base_url('course/single');  ?>">{{$cours->name}}</a>
							</h3>
							<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
							<form method="post" action="{{base_url("course/single")}}">
							<button type="submit" name="id" value="{{$cours->id}}" class="btn btn-primary" href="<?php echo base_url('course/single');  ?>">Choose course</button>
							</form>
						</div> <!-- .teacher-course__content -->
					</div> <!-- .course__item -->
				</div>

				<?php } ?>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section> <!-- / .section__courses -->
@endsection
