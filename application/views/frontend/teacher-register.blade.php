@extends('frontend.includes.base')
@section('title', 'Torus Academy - Teacher Register')
@section('_css')

<link rel="stylesheet" href="./assets1/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

<!-- STYLE CSS -->
<link rel="stylesheet" href="./assets1/css/style.css">

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
                            <li><a href="{{ base_url('index1') }}">Home</a></li>
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
        <?php if ($this->session->flashdata('error')) : ?>
            <div class="alert alert-danger" align="center">
                <?php echo $this->session->flashdata('error');  ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success" align="center">
                <?php echo $this->session->flashdata('success');  ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo base_url("teacher"); ?>" method="POST" enctype="multipart/form-data" id="wizard">
            <input type="hidden" name="role_id" value="1">
			<!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="./assets1/img/reg-01.jpg" alt="">
                    </div>
                    <div class="form-content">
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
                            <!-- <div class="select">
                                <div class="form-holder">
                                    <div class="select-control">Your country</div>
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <ul name="country" class="dropdown">
                                    <li name="country" rel="United States">United States</li>
                                    <li name="country" rel="United Kingdom">United Kingdom</li>
                                    <li name="country" rel="Viet Nam">Viet Nam</li>
                                </ul>
                            </div> -->
                            <div class="select">
                                <div class="form-holder">

                                    <select class="form-control input-height" name="country" id="country">
                                        <option value="">--Select Country--</option>
                                        <option name="country" value="United States">United States</option>
                                        <option name="country" value="United Kingdom">United Kingdom</option>
                                        <option name="country" value="Viet Nam">Viet Nam</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-holder">
                                <input type="text" name="phone" placeholder="Phone Number" class="form-control">
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
                        <img src="./assets1/img/student-reg.jpg" alt="">
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
                            <div class="form-holder">
                                <button type="submit" class="form-control btn btn-primary">Submit</button>
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


        </form>
    </div>
</div>

@endsection

@section('_js')

<script src="./assets1/js/jquery.steps.js"></script>
<script src="./assets1/js/main.js"></script>
@endsection
