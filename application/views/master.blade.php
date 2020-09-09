<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <title>:: Torus Academy :: Home</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="<?php echo asset_url('be_v1/plugins/bootstrap/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Plugins css -->
    <link rel="stylesheet" href="<?php echo asset_url('be_v1/plugins/summernote/dist/summernote.css'); ?>"/>
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Core css -->
    <link rel="stylesheet" href="<?php echo asset_url('be_v1/css/style.min.css'); ?>"/>


</head>

<body class="font-muli theme-cyan gradient">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <!-- Start Quick menu with more functio -->
    <!--include('app_alpha.be.particle.quick-menu')-->

    <!-- Start Main leftbar navigation -->

    @if($this->input->get('sidebar', TRUE) == 'a')
        @include('app_alpha.be.particle.sidebar')
    @elseif($this->input->get('sidebar', TRUE) == 's')
        @include('app_alpha.be.particle.student.sidebar')
    @elseif($this->input->get('sidebar', TRUE) == 't')
        @include('app_alpha.be.particle.teacher.sidebar')
    @endif

    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        @include('app_alpha.be.particle.page-header')
        <!-- Start Page title and tab -->
        <!--<div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item"><a href="#">University</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#admin-Activity">Activity</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
        @yield('content')
        <!-- Start main footer -->
        <div class="section-body">
            @include('app_alpha.be.particle.footer')
        </div>
    </div>
</div>

@yield('_bottomTopJs')
<!-- Start Main project js, jQuery, Bootstrap -->
<script src="<?php echo asset_url('be_v1/bundles/lib.vendor.bundle.js') ?>"></script>

<!-- Start all plugin js -->
<script src="<?php echo asset_url('be_v1/bundles/counterup.bundle.js'); ?>"></script>
<script src="<?php echo asset_url('be_v1/bundles/apexcharts.bundle.js'); ?>"></script>
<script src="<?php echo asset_url('be_v1/bundles/summernote.bundle.js'); ?>"></script>

<!-- Start project main js  and page js -->
<script src="<?php echo asset_url('be_v1/js/core.js'); ?>"></script>
<script src="<?php echo asset_url('be_v1/js/page/index.js'); ?>"></script>
<script src="<?php echo asset_url('be_v1/js/page/summernote.js'); ?>"></script>

@yield('_bottomJs')

</body>
</html>
