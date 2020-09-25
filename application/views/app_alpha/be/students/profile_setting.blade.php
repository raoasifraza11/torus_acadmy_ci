@extends('master')

@section('_css')
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            box-sizing: content-box;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>
    <style type="text/css">@keyframes tawkMaxOpen {
                               0% {
                                   opacity: 0;
                                   transform: translate(0, 30px);;
                               }
                               to {
                                   opacity: 1;
                                   transform: translate(0, 0px);
                               }
                           }

        @-moz-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);;
            }
            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }

        @-webkit-keyframes tawkMaxOpen {
            0% {
                opacity: 0;
                transform: translate(0, 30px);;
            }
            to {
                opacity: 1;
                transform: translate(0, 0px);
            }
        }

        #Wx859Un-1599661526506 {
            outline: none !important;
            visibility: visible !important;
            resize: none !important;
            box-shadow: none !important;
            overflow: visible !important;
            background: none !important;
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity1) !important;
            -moz-opacity: 1 !important;
            -khtml-opacity: 1 !important;
            top: auto !important;
            right: 10px !important;
            bottom: 90px !important;
            left: auto !important;
            position: fixed !important;
            border: 0 !important;
            min-height: 0 !important;
            min-width: 0 !important;
            max-height: none !important;
            max-width: none !important;
            padding: 0 !important;
            margin: 0 !important;
            -moz-transition-property: none !important;
            -webkit-transition-property: none !important;
            -o-transition-property: none !important;
            transition-property: none !important;
            transform: none !important;
            -webkit-transform: none !important;
            -ms-transform: none !important;
            width: auto !important;
            height: auto !important;
            display: none !important;
            z-index: 2000000000 !important;
            background-color: transparent !important;
            cursor: auto !important;
            float: none !important;
            border-radius: unset !important;
            pointer-events: auto !important
        }

        #U8hwlBP-1599661526508.open {
            animation: tawkMaxOpen .25s ease !important;
        }</style>
@endsection
@section('content')
    <!-- Start Page title and tab -->
    <div class="section-body">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center ">
                <div class="header-action">
                    <h1 class="page-title">Personal Profile Setting</h1>
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Setting</li>
                    </ol>
                </div>
                <ul class="nav nav-tabs page-header-tab">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#personalInfo">Personal
                            Information</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accountInfo">Payment Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane active" id="personalInfo">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Personal Information</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <form class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">First Name <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Last Name</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email Address <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Phone Number <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Address<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">City<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <!-- TODO: @Ahmad Add city values -->
                                    <select name="cars" class="form-control" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Country<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <!-- TODO: @Ahmad Add countries values -->
                                    <select name="cars" class="form-control" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Bio / Introductory Text<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <textarea rows="4" class="form-control no-resize"
                                              placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane" id="accountInfo">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Account Information</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <form class="card-body">
                            <div  class="card-body">
                                <h3>Select Default Payment Method</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
                                    <label class="form-check-label" for="defaultCheck1" >
                                        Easypasa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Mobicash
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Credit Card
                                    </label>
                                </div>
                                <div class="form-check mt-5 float-right">
                                   <button class="btn btn-primary btn-lg" type="submit">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('_bottomJs')
    <script src="<?php echo asset_url('be_v1/js/profile-settings.js'); ?>"></script>
@endsection