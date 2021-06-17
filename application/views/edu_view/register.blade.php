@extends('edu_master')
<div class="main-content">
	<!-- Breadcrumbs Start -->
	<div class="rs-breadcrumbs breadcrumbs-overlay">
		<div class="breadcrumbs-img">
			<img src="assets/images/banner/torus-acadmy-banner-6.jpg" alt="torus Academy">
		</div>
		<div class="breadcrumbs-text white-color">
			<h1 class="page-title">Register</h1>
			<ul>
				<li>
					<a class="active" href="index.html">Home</a>
				</li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!-- Breadcrumbs End -->

	<!-- Register Section -->
	<section class="register-section pt-100 pb-100">
		<div class="container">
			<div class="register-box">

				<div class="sec-title text-center mb-30">
					<h2 class="title mb-10">Create New Account</h2>
				</div>

				<!-- Login Form -->
				<div class="styled-form">
					<div id="form-messages"></div>
					<form id="contact-form" method="post" action="mailer.php">
						<div class="row clearfix">
							<!-- Form Group -->
							<div class="form-group col-sm-12 col-md-6 mb-25">
								<input type="text" id="Name" name="First Name" value="" placeholder="First Name" required>
							</div>

							<!-- Form Group -->
							<div class="form-group col-sm-12 col-md-6 mb-25">
								<input type="text" id="last" name="lname" value="" placeholder="Last Name" required>
							</div>

							<!-- Form Group -->
							<div class="form-group col-sm-12 col-md-6 mb-25 ">
								<input type="text"  name="email" value="" placeholder="Email address" required>
							</div>

							<!-- Form Group -->
							<div class="form-group col-sm-12 col-md-6 mb-25 ">
								<input type="text"  name="Password" value="" placeholder="Password" required>
							</div>
							<!-- Form Group -->
							<div class="form-group col-sm-12 col-md-6 mb-25">
								<input type="text" id="user" name="phone_number" value="" placeholder="Phone Number" required>
							</div>
							<!-- Form Group -->

							<div class="form-group col-sm-12 col-md-6 mb-25 ">
								<select name="country" required="" class="select-country">
									<option value="">Gender</option>
									<option value="saab">Male</option>
									<option value="mercedes">Female</option>
								</select>
							</div>
							<!-- Form Group -->

							<div class="form-group col-sm-12 col-md-6 mb-25 ">
								<select name="country" required="" class="select-country">
									<option value="">City</option>
									<option value="saab">Islamabad</option>
									<option value="mercedes">Rawalpindi</option>
								</select>
							</div>
							<!-- Form Group -->

							<div class="form-group col-sm-12 col-md-6 mb-25 ">
								<select name="country" required="" class="select-country">
									<option value="volvo">Pakistan</option>
									<option value="saab">United Arab Emirates</option>
									<option value="mercedes">Saudi Arabia</option>
									<option value="audi">Qatar</option>
								</select>
							</div>
							<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
								<button type="submit" class="readon register-btn"><span class="txt">Sign Up</span></button>
							</div>

							<div class="form-group col-lg-12 col-md-12 col-sm-12">
								<div class="users">Already have an account? <a href="login.html">Sign In</a></div>
							</div>

						</div>

					</form>
				</div>

			</div>
		</div>
	</section>
	<!-- End Login Section -->

</div>
