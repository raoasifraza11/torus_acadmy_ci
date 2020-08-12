@extends('backend.includes.base')
@section('title', 'Torus Academy - Student Payments')

@section('_css')

@endsection
<link rel="stylesheet" href="./assets/css/style.min.css" />

@section('_pageTitle')


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Students</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Torus Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Students</li>
            </ol>
        </div>
        <ul class="nav nav-tabs page-header-tab">
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Student-add"></a></li>
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Basic info</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-success btn-circle">2</a>
                        <p><small>Detail info</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-3" type="button" class="btn btn-success btn-circle">3</a>
                        <p><small>Courses</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-success btn-circle">4</a>
                        <p><small>Payment</small></p>
                    </div>
                </div>
            </div>
        </ul>

    </div>
</div>


@endsection

@section('content')


<div class="container-fluid">
    <div class="tab-content">
        <div class="tab-pane active" id="Student-add">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Payment Information</h3>
                        </div>
                        <div class="card-body">
                            <div class="vertical-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" style="margin-bottom:10px;">
                                        <a class="nav-link active" style="padding-left: 10px;" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">JazzCash</a>
                                    </li>
                                    <li class="nav-item" style="margin-bottom:10px;">
                                        <a class="nav-link" style="padding-left: 10px;" data-toggle="tab" href="#pag2" role="tab" aria-controls="profile">EasyPasa</a>
                                    </li>
                                    <li class="nav-item" style="margin-bottom:10px;">
                                        <a class="nav-link" style="padding-left: 10px;" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Credit Card </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="pag1" role="tabpanel">
                                        <div class="sv-tab-panel">
                                            <h3>TAB 1</h3>
                                            <p>CONTEUDO 1</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pag2" role="tabpanel">
                                        <div class="sv-tab-panel">
                                            <h3>TAB 2</h3>
                                            <p>CONTEUDO 2</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="pag3" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="panel-body">
                                                    <form action="" method="">
                                                        <div class="form-group">
                                                            <label><b>CARD NUMBER</b></label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
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
                                                                    <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <center>
                                                                <strong class="total-pay">Total Payment</strong>
                                                                <strong class="total-pay"> $5000</strong>
                                                            </center>
                                                        </div>
                                                        <a href="index.html" class="btn btn-success btn-lg btn-block" role="button"><b>Confirm Payment</b></a>
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
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Information</h3>
                        </div>
                        <form action="" method="" class="card-body">
                            <div class="row clearfix">
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label><b>First Name</b></label>
                                        <input type="text" class="form-control" value="Tritech">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label><b>Last Name</b></label>
                                        <input type="text" class="form-control" value="Teal">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label><b>Country</b></label>
                                        <input type="text" class="form-control" value="Pakistan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label><b>Phone Number</b></label>
                                        <input type="text" class="form-control" value="+923455119056">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label><b>Address</b></label>
                                        <input type="text" class="form-control" value="House#21,street#22,Islamabad,pakistan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label><b>DOB</b></label>
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" value="10/10/2002">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label><b>Gender</b></label>
                                        <select class="form-control input-height" name="gender">

                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection