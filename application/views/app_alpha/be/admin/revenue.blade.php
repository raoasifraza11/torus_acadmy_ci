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
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="row clearfix row-deck">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">5</div>
                            <a href="<?php echo base_url('teacher/enrolled/students?sidebar=t'); ?>" class="my_sort_cut text-muted">
                                <i class="fa fa-black-tie"></i>
                                <span>Students</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="my_sort_cut text-muted">
                                <i class="fa fa-address-book"></i>
                                <span>Enrolled</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff">8</div>
                            <a href="#" class="my_sort_cut text-muted">
                                <i class="fa fa-user-circle-o"></i>
                                <span>Profile Setting</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="my_sort_cut text-muted">
                                <i class="fa fa-credit-card-alt"></i>
                                <span>Account Setting</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Revenue Report</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-angle-up"></i></a>
                                <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa fa-window-maximize"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between">
                                <div class="font-12 mb-2"><span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></span></div>
                                <div class="selectgroup w250">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="intensity" value="low" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button">1D</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="intensity" value="medium" class="selectgroup-input">
                                        <span class="selectgroup-button">1W</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="intensity" value="high" class="selectgroup-input">
                                        <span class="selectgroup-button">1M</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="intensity" value="veryhigh" class="selectgroup-input">
                                        <span class="selectgroup-button">1Y</span>
                                    </label>
                                </div>
                            </div>
                            <div id="apex-chart-line-column"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 mb-2">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>Donation</strong></div>
                                        <div class="float-right"><small class="text-muted">61%</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-yellow" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-uppercase font-10">Compared to last year</span>
                                </div>
                                <div class="col-xl-3 col-md-6 mb-2">
                                    <div class="clearfix">
                                        <div class="float-left"><strong>Income</strong></div>
                                        <div class="float-right"><small class="text-muted">87%</small></div>
                                    </div>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-green" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="text-uppercase font-10">Compared to last year</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('_bottomJs')
    <script src="<?php echo asset_url('be_v1/js/profile-settings.js'); ?>"></script>
@endsection