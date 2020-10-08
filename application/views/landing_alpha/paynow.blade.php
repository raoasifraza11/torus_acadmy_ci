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
                                        <td class="text-center">#</td>
                                        <td>
                                            <p class="font600 mb-1">Course Name</p>
                                        </td>
                                        <td class="text-center">Quantity</td>
                                        <td class="text-right">Course Fee</td>
                                        <td class="text-right">Total</td>
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
                                               href="#pag2" role="tab" aria-controls="profile">JazzCash</a>
                                        </li>
                                        <li class="nav-item" style="margin-bottom:10px;">
                                            <a class="nav-link" style="padding-left: 10px;" data-toggle="tab"
                                               href="#pag1" role="tab" aria-controls="home">EasyPaisa</a>
                                        </li>
                                        <li class="nav-item" style="margin-bottom:10px;">
                                            <a class="nav-link" style="padding-left: 10px;" data-toggle="tab"
                                               href="#pag3" role="tab" aria-controls="messages">Credit Card </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane " id="pag1" role="tabpanel">
                                            <div class="sv-tab-panel">
                                                <h3>Easypaisa</h3>
                                                <form action="<?php echo base_url('student/course/enrolled'); ?>">
                                                    <input type="hidden" name="sidebar" value="s">

                                                    <button type="submit">Pay</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane active" id="pag2" role="tabpanel">
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
