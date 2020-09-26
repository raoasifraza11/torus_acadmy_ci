@extends('master')

@section('_css')
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    <style type="text/css">@keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-moz-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}@-webkit-keyframes tawkMaxOpen{0%{opacity:0;transform:translate(0, 30px);;}to{opacity:1;transform:translate(0, 0px);}}#Wx859Un-1599661526506{outline:none!important;visibility:visible!important;resize:none!important;box-shadow:none!important;overflow:visible!important;background:none!important;opacity:1!important;filter:alpha(opacity=100)!important;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity1)!important;-moz-opacity:1!important;-khtml-opacity:1!important;top:auto!important;right:10px!important;bottom:90px!important;left:auto!important;position:fixed!important;border:0!important;min-height:0!important;min-width:0!important;max-height:none!important;max-width:none!important;padding:0!important;margin:0!important;-moz-transition-property:none!important;-webkit-transition-property:none!important;-o-transition-property:none!important;transition-property:none!important;transform:none!important;-webkit-transform:none!important;-ms-transform:none!important;width:auto!important;height:auto!important;display:none!important;z-index:2000000000!important;background-color:transparent!important;cursor:auto!important;float:none!important;border-radius:unset!important;pointer-events:auto!important}#U8hwlBP-1599661526508.open{animation : tawkMaxOpen .25s ease!important;}</style>
@endsection
@section('content')

    <!-- Start Page title and tab -->
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <h3>Add new course</h3>
                    <form method="post" action="{{base_url("admin/courses/add")}}">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Class Name</label>
                            <div class="col-sm-10">
                                <input type="text" required name="class_name" class="form-control" id="staticEmail" placeholder="Class Name (One)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Short Code</label>
                            <div class="col-sm-10">
                                <input type="text"  required name="class_tag" class="form-control" id="inputPassword" placeholder="Short Code (1)">
                            </div>
                        </div>
                        <hr width="75%">
                        <div class="course-info">
                            <!-- list item -->
                            <div class="row form-row course-cont">
                                <div class="col-12 col-md-10 col-lg-11">
                                    <div class="row form-row">
                                        <div class="form-group row col-md-9">
                                            <label class="col-md-3 col-form-label">Subject Name<span class="text-danger">*</span></label>
                                            <div class="col-md-4">
                                                <input type="text" required name="course_name[]" class="form-control" placeholder="i.e Chemistry">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" required name="course_tag[]" class="form-control" placeholder="i.e CHY">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-2 col-lg-1"><label
                                            class="d-sm-none d-none">&nbsp;</label><a
                                            href="#" class="btn btn-danger trash"><i
                                                class="fa fa-trash-o"></i></a></div>
                            </div>
                            <!-- ./list item -->

                        </div>

                        <div class="add-more">
                            <a href="javascript:void(0);" class="add-course"><i
                                        class="fa fa-plus-circle"></i> Add
                                More</a>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-7">
                                <button type="submit" class="btn btn-block btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection


@section('_bottomJs')
    <script src="<?php echo asset_url('be_v1/js/add-course-settings.js'); ?>"></script>
@endsection
