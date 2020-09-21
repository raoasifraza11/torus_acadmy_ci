@extends('master')

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