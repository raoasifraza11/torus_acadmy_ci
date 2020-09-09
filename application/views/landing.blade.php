<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>@yield('_pageTitle') - Torus Academy</title>

    <!-- CSS Plugins -->
    <link href="<?php echo asset_url('/fe_v1/plugins/lightbox/dist/css/lightbox.css'); ?>" rel="stylesheet">
    <link href="<?php echo asset_url('fe_v1/plugins/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/owl-carousel/dist/assets/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/owl-carousel/dist/assets/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/plugins/aos-master/dist/aos.css'); ?>">

    <!-- CSS Global -->
    <!--build:css assets/css/theme.min.css-->
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/css/theme.css'); ?>">
    <!--end build-->

    @yield('_css')

</head>
<body id="index__page">

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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&amp;callback=initMap"
        async defer></script>

@yield('_bottomJs')

</body>

</html>