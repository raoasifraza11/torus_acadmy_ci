<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from ygamin.bitbucket.io/lctrs/1.0.2/courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jul 2020 05:53:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>torus Academy</title>

    <!-- CSS Plugins -->
		<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="assets/css/theme.css">
    <!--endbuild-->

  </head>
  <body id="courses__page">

    <!-- Navbar
    ================================================== -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
    
        <!-- Header -->
        <div class="navbar-header">

          <!-- Collapse toggle -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse" aria-expanded="false">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Logo -->
          <a class="navbar-brand" href="index.html">
          	Torus<span>.</span>	
          </a>

        </div> <!-- / .navbar-header -->
    
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="about.html">About</a></li>
            <li class="active"><a href="courses.htm">Courses </a></li>
            <li><a href="blog-grid.html">Blog </a></li>
		        <li><a href="contact.html">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
            <li><a href="signup.html" data-toggle="modal"><i class="ion-android-person"></i> Sign Up</a></li>
            <li class="hidden-xs">
              
              <!-- Search toggle -->
              <a href="#" class="navbar-search__toggle">
                <i class="ion-search"></i>
              </a>

              <!-- Search form -->
              <div class="navbar-search" style="display: none;">
                <form>

                  <!-- Input -->
                  <div class="navbar-search__box">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-accent"><i class="ion-search"></i></button>
                      </span>
                    </div>
                  </div> <!-- / .navbar-search__box -->

                </form>
              </div> <!-- / .navbar-search -->

            </li>
          </ul>
        </div><!-- /.navbar-collapse -->

      </div><!-- /.container -->
    </nav>

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

			            <!-- Sign In form -->
			            <form class="signin__form" role="form">
			            	<!-- Email -->
						  			<div class="form-group">
				              <label for="sign-in__email" class="sr-only">Enter email</label>
				              <div class="input-group">
				                <span class="input-group-addon"><i class="ion-android-person"></i></span>
				                <input type="email" class="form-control" id="sign-in__email" placeholder="Enter email">
				              </div>
			              </div>
			              <!-- Password -->
						  			<div class="form-group">
				              <label for="sign-in__password" class="sr-only">Enter password</label>
				              <div class="input-group">
				                <span class="input-group-addon"><i class="ion-locked"></i></span>
				                <input type="password" class="form-control" id="sign-in__password" placeholder="Password">
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
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-1.jpg" class="img-responsive" alt="...">
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
    						<span class="course-item__branch">Technology</span>
    						<h3>
    							<a href="course-single.html">Flat design in web</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-2.jpg" class="img-responsive" alt="...">
    					</div><div class="course-item__info">
    						<div class="info__students">
    							<i class="ion-person-stalker" aria-hidden="true"></i> 60/100
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> 120-160$
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Science</span>
    						<h3>
    							<a href="course-single.html">Java: introduction</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-3.jpg" class="img-responsive" alt="...">
    					</div><div class="course-item__info">
    						<div class="info__students">
    							<i class="ion-person-stalker" aria-hidden="true"></i> 100/120
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> Free
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Training</span>
    						<h3>
    							<a href="course-single.html">Ui / Ux training</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-4.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<i class="ion-person-stalker" aria-hidden="true"></i> 16/80
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> 60-140$
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">History</span>
    						<h3>
    							<a href="course-single.html">History of information</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-5.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<i class="ion-person-stalker" aria-hidden="true"></i> 150/300
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> 300$
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Social</span>
    						<h3>
    							<a href="course-single.html">Internet for people</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	    <div class="col-sm-4">
    	    	<div class="course__item">
    					<div class="course-item__img">
    						<img src="assets/img/courses_img-6.jpg" class="img-responsive" alt="...">
    					</div>
    					<div class="course-item__info">
    						<div class="info__students">
    							<i class="ion-person-stalker" aria-hidden="true"></i> 68/128
    						</div>
    						<div class="info__price">
    							<i class="ion-ios-pricetags" aria-hidden="true"></i> Free
    						</div>
              </div>
    					<div class="course-item__content">
    						<span class="course-item__branch">Spelling</span>
    						<h3>
    							<a href="course-single.html">Programming languages</a>
    						</h3>
    						<p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
    						<a class="btn btn-primary" href="course-single.html">Choose course</a>
    					</div> <!-- .teacher-course__content -->
    				</div> <!-- .course__item -->
    	    </div>
    	  </div> <!-- / .row -->
    	  <div class="row">
    	    <div class="col-sm-12">
		    	  <nav aria-label="...">
						  <ul class="pagination">
						    <li class="disabled"><a href="#" aria-label="Previous"><i class="ion-android-arrow-back"></i></a></li>
						    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">...</a></li>
						    <li><a href="#">10</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <i class="ion-android-arrow-forward"></i>
						      </a>
						    </li>
						  </ul>
						</nav>
    	    </div>
    	  </div> <!-- / .row -->
    	</div> <!-- / .container -->
    </section> <!-- / .section__courses -->

		<!-- section footer -->
    <footer class="section__footer">
			<div class="container">
			  <div class="row">
			    <div class="col-md-3 col-sm-4">
			    	<div class="footer_title__body">
	    				<h2 class="footer__title">
	    					Torus<span>.</span>
	    				</h2>
	    				<div class="footer__subtitle">
	    					Online Education
	    				</div>
	    				<ul class="footer__social">
	              <li><a href="#"><i class="ion-social-twitter"></i></a></li>
	              <li><a href="#"><i class="ion-social-facebook"></i></a></li>
	              <li><a href="#"><i class="ion-social-youtube"></i></a></li>
	              <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
	            </ul>
			    	</div> <!-- / .footer_title__body -->
			    </div>
				<div class="col-md-3 col-sm-4">
			    	<ul class="footer-links__list">
			    		<li><a href="about.html"><i class="ion-ios-arrow-forward"></i> Home </a></li>
						<li><a href="courses.html"><i class="ion-ios-arrow-forward"></i> About us</a></li>
						<li><a href="blog.html"><i class="ion-ios-arrow-forward"></i> Courses</a></li>
			    	</ul>
			    </div>
			    <div class="col-md-3 col-sm-4">
			    	<ul class="footer-links__list">
						<li><a href="courses.html"><i class="ion-ios-arrow-forward"></i> Terms & Conditions</a></li>
						<li><a href="blog.html"><i class="ion-ios-arrow-forward"></i> Privacy Policy</a></li>
						<li><a href="contact.html"><i class="ion-ios-arrow-forward"></i> Contact us</a></li>
			    	</ul>
			    </div>
			    <div class="col-md-3 col-sm-4">
			    	<div class="newsletter__body">
			    		<p class="newsletter__subtitle">Subscribe to our newsletter to get news.</p>

	            <!-- Newsletter form -->
	            <div id="mc_embed_signup">
	              <form class="footer__form validate" action="" method="get" id="" target="_blank" novalidate="">
	                <div id="mc_embed_signup_scroll">
	                  <div class="mc-field-group form-group">
	                    <label for="mce-EMAIL" class="sr-only">E-mail address</label>
	                    <input type="email" value="" name="EMAIL" class="required email form-control newsletter_input" id="mce-EMAIL" placeholder="Email address">
	                  </div>
	                  <div id="mce-responses" class="clear">
	                    <div class="response"></div>
	                    <div class="response" id="mce-success-response"></div>
	                  </div>
	                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	                  <div aria-hidden="true" id="mce-hidden-input">
	                    <input type="text" name="b_507744bbfd1cc2879036c7780_4523d25e1b" tabindex="-1" value="">
	                  </div>
	                  <div class="clear">
	                    <button type="submit" class="btn btn-newsletter" id="mc-embedded-subscribe">
	                      <i class="ion-android-arrow-forward"></i>
	                    </button>
	                  </div>
	                </div>
	              </form>
	            </div> <!-- #mc_embed_signup -->

			    	</div> <!-- / .newsletter__body -->
			    	
			    </div>
			  </div> <!-- / .row -->
			</div> <!-- / .container -->
    </footer> <!-- .section__footer -->
		
		<!-- section footer copyright -->
    <div class="footer__copyright">
      <div class="container">
        <div class="row">
        	<div class="col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
            <ul class="quick__links">
            	<li>| <a href="index.html">Home</a> |</li>
            	<li><a href="about.html">About</a> |</li>
            	<li><a href="courses.html">Courses</a> |</li>
            	<li><a href="contact.html">Contact</a> |</li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
            <div class="copyright__content">
              <p>&#169; Torus Academy. 2020 All rights reserved.Design & Developed By <a href="https://tritechteal.com">Tritechteal(Pvt)</a> </p>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .footer__copyright -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- JS Plugins -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
		<script src="assets/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
		<script src="assets/plugins/countTo/jquery.countTo.js"></script>
		<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
		<script src="assets/plugins/aos-master/dist/aos.js"></script>
		<script src="assets/plugins/contact/contact.js"></script>
		<script src="assets/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js assets/js/theme.min.js -->
    <script src="assets/js/theme.js"></script>
    <!-- endbuild -->
		<script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&amp;callback=initMap" async defer></script>

  </body>

</html>