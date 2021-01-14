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
                            <a href="professors.html" class="my_sort_cut text-muted">
                                <i class="fa fa-black-tie"></i>
                                <span>Professors</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="app-contact.html" class="my_sort_cut text-muted">
                                <i class="fa fa-address-book"></i>
                                <span>Contact</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body ribbon">
                            <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff">8</div>
                            <a href="staff.html" class="my_sort_cut text-muted">
                                <i class="fa fa-user-circle-o"></i>
                                <span>Staff</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="app-filemanager.html" class="my_sort_cut text-muted">
                                <i class="fa fa-folder"></i>
                                <span>FileManager</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="library.html" class="my_sort_cut text-muted">
                                <i class="fa fa-book"></i>
                                <span>Library</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="card-body">
                            <a href="holiday.html" class="my_sort_cut text-muted">
                                <i class="fa fa-bullhorn"></i>
                                <span>Holiday</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Students List</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fa fa-angle-up"></i></a>
                                        <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fa fa-window-maximize"></i></a>
                                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0 text-nowrap">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Date Of Admit</th>
                                                <th>View</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           <?php $i=1; foreach ($students as $student ) { ?>
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$student->first_name." ".$student->last_name}}</td>
                                                <td>{{ $student->class_name  }}</td>
                                                <td>27/05/2016</td>
                                                <td>
                                                    <a href="javascript:void(0)"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
											<?php $i++; } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="admin-Activity" role="tabpanel">
                    <div class="row clearfix row-deck">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Quick Mail</h3>
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text w80">To:</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <div class="input-group-append">
                                            <span class="input-group-text">CC BCC</span>
                                        </div>
                                    </div>
                                    <div class="input-group mt-1 mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text w80">Subject:</span>
                                        </div>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="summernote">
                                        Hi there,
                                        <br/>
                                        <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                                        <br/>
                                        <p>Thank you!</p>
                                        <h6>Summer Note</h6>
                                    </div>
                                    <button class="btn btn-default mt-3">Send</button>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">University Stats</h3>
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove" data-toggle="card-remove"><i class="fa fa-times"></i></a>
                                        <div class="item-action dropdown ml-2">
                                            <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row text-center">
                                        <div class="col-lg-4 col-4 border-right">
                                            <label class="mb-0 font-10">Department</label>
                                            <h4 class="font-20 font-weight-bold">05</h4>
                                        </div>
                                        <div class="col-lg-4 col-4 border-right">
                                            <label class="mb-0 font-10">Total Teacher</label>
                                            <h4 class="font-20 font-weight-bold">43</h4>
                                        </div>
                                        <div class="col-lg-4 col-4">
                                            <label class="mb-0 font-10">Total Student</label>
                                            <h4 class="font-20 font-weight-bold">267</h4>
                                        </div>
                                    </div>
                                    <table class="table table-striped mt-4">
                                        <tbody><tr>
                                            <td>
                                                <label class="d-block">Mechanical Engineering<span class="float-right">43%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Business Analysis - BUS <span class="float-right">27%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Computer Technology - CT <span class="float-right">81%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Management - MGT <span class="float-right">61%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 61%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="d-block">Science <span class="float-right">77%</span></label>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </div>
                                <div class="card-footer">
                                    <small>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">Learn More</a></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="card">
                                <div class="table-responsive todo_list">
                                    <table class="table table-hover text-nowrap table-striped table-vcenter mb-0">
                                        <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th class="w150 text-right">Due</th>
                                            <th class="w100">Priority</th>
                                            <th class="w80 text-center"><i class="icon-user"></i></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                    <span class="custom-control-label">Report Panel Usag</span>
                                                </label>
                                            </td>
                                            <td class="text-right">Feb 12-2019</td>
                                            <td><span class="tag tag-danger ml-0 mr-0">HIGH</span></td>
                                            <td>
                                                <span class="avatar avatar-pink"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name">NG</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
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
