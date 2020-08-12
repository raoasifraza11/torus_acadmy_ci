<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>@yield('title','Torus Academy | Empty Page')</title>

    <!-- CSS Plugins -->
    <link href="./assets1/plugins/lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="./assets1/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets1/plugins/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets1/plugins/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets1/plugins/aos-master/dist/aos.css">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="./assets1/css/theme.css">
    <!--endbuild-->
    @yield('_css')
</head>

<body id="index__page">

    <!-- Back to top button
    ================================================== -->
    <a id="back-to-top" href="#section__home" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
        <i class="ion-android-arrow-up"></i>
    </a>

    <!-- PRELOADER
    ================================================== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

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
                <a class="navbar-brand" href="{{ base_url('index1') }}">
                    Torus<span>.</span>
                    <!--<img class="img-responsvie" src="assets/img/torus-logo.png"  alt="Torus Academy">-->
                </a>

            </div> <!-- / .navbar-header -->

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbar__collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{ base_url('index1') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{ base_url('about') }}">About</a></li>
                    <li><a href="{{ base_url('courses1') }}">Courses </a> </li>
                    <li><a href="{{ base_url('blog') }}">Blog </a> </li>
                    <li><a href="{{ base_url('contact') }}">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
                    <li><a href="{{ base_url('signup') }}"><i class="ion-android-person"></i> Sign Up</a></li>
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
                                <form class="signin__form">
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
                                        <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    </ul>
                                </div>

                                <!-- Sign Up link -->
                                <hr>
                                <p>Not registered? <a href="{{ base_url('signup') }}">Create an Account.</a></p>

                                <!-- Lost password form -->
                                <p>
                                    Forgot password? <a href="#lost-password__form" data-toggle="collapse" aria-expanded="false" aria-controls="lost-password__form">Click here to recover.</a>
                                </p>
                                <div class="collapse" id="lost-password__form">
                                    <p class="text-muted">
                                        Enter your email address below and we will send you a link to reset your password.
                                    </p>
                                    <form class="form-inline">
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

    @yield('content')

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
                        <li><a href="{{ base_url('index1') }}"><i class="ion-ios-arrow-forward"></i> Home </a></li>
                        <li><a href="{{ base_url('about') }}"><i class="ion-ios-arrow-forward"></i> About us</a></li>
                        <li><a href="{{ base_url('courses1') }}"><i class="ion-ios-arrow-forward"></i> Courses</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-4">
                    <ul class="footer-links__list">
                        <li><a href="courses.html"><i class="ion-ios-arrow-forward"></i> Terms & Conditions</a></li>
                        <li><a href="blog.html"><i class="ion-ios-arrow-forward"></i> Privacy Policy</a></li>
                        <li><a href="{{ base_url('contact') }}"><i class="ion-ios-arrow-forward"></i> Contact us</a></li>
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
                        <li>| <a href="{{ base_url('index1') }}">Home</a> |</li>
                        <li><a href="{{ base_url('about') }}">About</a> |</li>
                        <li><a href="{{ base_url('courses') }}">Courses</a> |</li>
                        <li><a href="{{ base_url('contact') }}">Contact</a> |</li>
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
    <script src="./assets1/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="./assets1/bootstrap/js/bootstrap.min.js"></script>

    @yield('_js')

    <!-- JS Plugins -->
    <script src="./assets1/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="./assets1/plugins/lightbox/dist/js/lightbox.min.js"></script>
    <script src="./assets1/plugins/owl-carousel/dist/owl.carousel.min.js"></script>
    <script src="./assets1/plugins/countTo/jquery.countTo.js"></script>
    <script src="./assets1/plugins/countdown/jquery.countdown.min.js"></script>
    <script src="./assets1/plugins/aos-master/dist/aos.js"></script>
    <script src="./assets1/plugins/contact/contact.js"></script>
    <script src="./assets1/plugins/smothscroll/smoothscroll.js"></script>

    <!-- JS Custom -->
    <!--build:js ./assets1/js/theme.min.js -->
    <script src="./assets1/js/theme.js"></script>
    <!-- endbuild -->
    <script src="./assets1/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&amp;callback=initMap" async defer></script>

</body>

</html>