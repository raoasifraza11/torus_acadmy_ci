@extends('landing')
@section('_pageTitle', 'Registration Teacher')
@section('page_id', 'courses__page')
@section('_css')
    <link rel="stylesheet"
          href="<?php echo asset_url('fe_v1/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>">

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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
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
                                        <li class="googleplus"><a href="#"><i class="ion-social-googleplus"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Sign Up link -->
                                <hr>
                                <p>Not registered? <a href="#signupModal">Create an Account.</a></p>

                                <!-- Lost password form -->
                                <p>
                                    Forgot password? <a href="#lost-password__form" data-toggle="collapse"
                                                        aria-expanded="false" aria-controls="lost-password__form">Click
                                        here to recover.</a>
                                </p>
                                <div class="collapse" id="lost-password__form">
                                    <p class="text-muted">
                                        Enter your email address below and we will send you a link to reset your
                                        password.
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
    </div><!-- /.modal -->

    <!-- section home -->
    <section class="section__home">
        <div class="container home__body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home__content">

                        <!-- Heading -->
                        <h1 class="home__heading">
                            Pay NOW
                        </h1>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="<?php base_url('/') ?>">Home</a></li>
                            <li class="active">Pay Now</li>
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
            <div class="tab-content">
                <div class="tab-pane active" id="Fees-Receipt">
                    <div class="card">
                        <div class="card-body">
                            <div class="row my-8">
                                <div class="col-6 text-right">
                                    <p class="h3">STUDENT NAME</p>
                                    <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ctr@example.com
                                    </address>
                                </div>
                            </div>
                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th class="text-center width35"></th>
                                        <th>Product</th>
                                        <th class="text-center" style="width: 1%">Qnt</th>
                                        <th class="text-right" style="width: 1%">Unit</th>
                                        <th class="text-right" style="width: 1%">Amount</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p class="font600 mb-1">Course 1</p>
                                        </td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$1.800,00</td>
                                        <td class="text-right">$20.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <p class="font600 mb-1">Course 2</p>
                                        </td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$20.000,00</td>
                                        <td class="text-right">$20.000,00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <p class="font600 mb-1">Course 3</p>
                                        </td>
                                        <td class="text-center">1</td>
                                        <td class="text-right">$20.000,00</td>
                                        <td class="text-right">$20.000,00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font600 text-right">Subtotal</td>
                                        <td class="text-right">$25.000,00</td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td colspan="4" class="font600 text-right">Vat Rate</td>
                                        <td class="text-right">20%</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="font600 text-right">Vat Due</td>
                                        <td class="text-right">$5.000,00</td>
                                    </tr>
                                    <tr class="bg-green text-light">
                                        <td colspan="4" class="font700 text-right">Total Due</td>
                                        <td class="font700 text-right">$30.000,00</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="text-muted text-center">Thank you very much for doing business with us. We look
                                forward to working with you again!</p>


                            <div class="card-body">
                                <div class="vertical-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" style="margin-bottom:10px;">
                                            <a class="nav-link active" style="padding-left: 10px;" data-toggle="tab"
                                               href="#pag1" role="tab" aria-controls="home">JazzCash</a>
                                        </li>
                                        <li class="nav-item" style="margin-bottom:10px;">
                                            <a class="nav-link" style="padding-left: 10px;" data-toggle="tab"
                                               href="#pag2" role="tab" aria-controls="profile">EasyPasa</a>
                                        </li>
                                        <li class="nav-item" style="margin-bottom:10px;">
                                            <a class="nav-link" style="padding-left: 10px;" data-toggle="tab"
                                               href="#pag3" role="tab" aria-controls="messages">Credit Card </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pag1" role="tabpanel">
                                            <div class="sv-tab-panel">
                                                <h3>Easypasa</h3>
                                                <form action="<?php echo base_url('student/course/enrolled'); ?>">
                                                    <input type="hidden" name="sidebar" value="s">

                                                    <button type="submit">Pay</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pag2" role="tabpanel">
                                            <div class="sv-tab-panel">
                                                <h3>MobiCash</h3>
                                                <form action="<?php echo base_url('student/course/enrolled'); ?>">
                                                    <input type="hidden" name="sidebar" value="s">

                                                    <button type="submit">Pay</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="pag3" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="panel-body">
                                                        <form action="<?php echo base_url('student/course/enrolled'); ?>">
                                                            <input type="hidden" name="sidebar" value="s">

                                                            <div class="form-group">
                                                                <label><b>CARD NUMBER</b></label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                           id="cardNumber"
                                                                           placeholder="Valid Card Number"
                                                                           required autofocus/>
                                                                    <span class="input-group-addon"><span
                                                                                class="glyphicon glyphicon-lock"></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4">
                                                                    <div class="form-group">
                                                                        <label><b>Expiry Month</b></label>
                                                                        <select class="form-control show-tick">
                                                                            <option value="">Select Month</option>
                                                                            <option value="1">Jan</option>
                                                                            <option value="2">Feb</option>
                                                                            <option value="2">March</option>
                                                                            <option value="2">April</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4">
                                                                    <div class="form-group">
                                                                        <label><b>Expiry Year</b></label>
                                                                        <select class="form-control show-tick">
                                                                            <option value="">Select Year</option>
                                                                            <option value="1">2020</option>
                                                                            <option value="3">2021</option>
                                                                            <option value="3">2022</option>
                                                                            <option value="4">2023</option>
                                                                            <option value="5">2024</option>
                                                                            <option value="6">2025</option>
                                                                            <option value="7">2026</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4">
                                                                    <div class="form-group">
                                                                        <label><b> CV CODE</b></label>
                                                                        <input type="password" class="form-control"
                                                                               id="cvCode" placeholder="CV" required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <center>
                                                                    <strong class="total-pay">Total Payment</strong>
                                                                    <strong class="total-pay"> $5000</strong>
                                                                </center>
                                                            </div>
                                                            <button type="submit"
                                                                    class="form-control btn btn-success btn-lg btn-block"
                                                                    style="background: green;"><b>Confirm Payment</b>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div> <!-- / .container -->
    </section> <!-- / .section__courses -->
@endsection