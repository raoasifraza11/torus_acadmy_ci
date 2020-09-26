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
			<form action="{{base_url("student/register")}}" method="post" id="wizard">
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
									<input type="text" name="first_name" placeholder="First Name" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" name="last_name" placeholder="Last Name" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" name="email" placeholder="Your Email" class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" name="password" placeholder="Password" class="form-control">
								</div>
							</div>
							<div class="form-row">
								<div class="select">
									<div class="form-holder">
										<div >Your country</div>
										<i class="zmdi zmdi-caret-down"></i>
										<select name="country" class="select-control ">
											<option value="volvo">Volvo</option>
											<option value="saab">Saab</option>
											<option value="mercedes">Mercedes</option>
											<option value="audi">Audi</option>
										</select>
									</div>
								</div>
								<div class="form-holder">
									<input type="text" name="phone"  placeholder="Phone Number" class="form-control">
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
									<input type="date" name="dob" placeholder="Date of Birth" class="form-control">
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
									<input type="text" name="city" placeholder="City" class="form-control">
								</div>
								<div class="form-holder">
									<input type="text" name="zip_code" placeholder="Zip Code" class="form-control">
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
