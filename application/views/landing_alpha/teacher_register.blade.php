@extends('landing')
@section('_pageTitle', 'Registration Teacher')
@section('_css')
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?php echo asset_url('fe_v1//css/style.css'); ?>">
@endsection

@section('content')
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
                                <li class="active">Teacher Registration</li>
                            </ol>

                        </div> <!-- / .home__content -->
                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .container -->

            <!-- Background image -->
            <div class="home__bg"></div>
        </section>
        <div class="wrapper">
            <form id="wizard" name="techReg" action="<?php echo base_url('teacher/register') ?>" method="post">
                <input type="hidden" name="sidebar" value="t">
                <!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder">
                            <img src="assets/img/teacher-reg.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3>Teacher Registration</h3>
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
                            <img src="assets/img/reg-01.jpg" alt="">
                        </div>
                        <div class="form-content">
                            <div class="form-header">
                                <h3> Teacher Registration</h3>
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
                                    <div class="form-holder w-100">
                                        <input type="text" placeholder="Address" class="form-control">
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
                                        <input type="checkbox" checked> Please accept <a href="#">terms and conditions ?</a>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                        </div>
                    </div>
                </section>
				<button type="submit" >test</button>
            </form>
        </div>
    </div>



@endsection
@section('_bottomJs')

<script>

</script>
@endsection
