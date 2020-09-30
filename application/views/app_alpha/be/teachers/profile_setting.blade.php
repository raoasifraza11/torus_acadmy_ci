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
                    <li class="nav-item"><a class="nav-link @if(!$active_tab) {{"active"}} @endif" data-toggle="tab" href="#personalInfo">Personal
                            Information</a></li>
                    <li class="nav-item"><a class="nav-link @if($active_tab=="acadmic") {{"active"}} @endif" data-toggle="tab" href="#academicInfo">Academic
                            Information</a></li>
                    <li class="nav-item"><a class="nav-link @if($active_tab=="exp") {{"active"}} @endif" data-toggle="tab" href="#expInfo">Experience</a></li>
                    <li class="nav-item"><a class="nav-link @if($active_tab=="avaInfo") {{"active"}} @endif"  data-toggle="tab" href="#courseSelection">Course Selection</a>
                    <li class="nav-item"><a class="nav-link @if($active_tab=="selection") {{"active"}} @endif" data-toggle="tab" href="#avaInfo">Availability & Fee</a>
                    </li>
                    <li class="nav-item"><a class="nav-link@if($active_tab=="account") {{"active"}} @endif" data-toggle="tab" href="#accountInfo">Account Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section-body mt-4">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane  @if(!$active_tab){{"active"}} @endif" id="personalInfo">
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
                        <form class="card-body" action="<?php echo base_url("teacher/profile"); ?>" method="post">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">First Name <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" name="first_name"  value="{{ $user->first_name }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Last Name</label>
                                <div class="col-md-7">
                                    <input type="text" name="last_name" value="{{ $user->first_name }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Email Address <span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input data-provide="datepicker" value="{{ $user->email }}" name="email" data-date-autoclose="true" class="form-control"
                                           placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Phone Number <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Address<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" name="address"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">City<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <!-- TODO: @Ahmad Add city values -->
                                    <select name="city" class="form-control" id="cars">
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
                                    <select name="coutry" class="form-control" id="cars">
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
                                    <textarea rows="4" name="bio" class="form-control no-resize"
                                              placeholder="Please type what you want..."></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Into Video URL<span class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control">
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
                <div class="tab-pane  @if($active_tab=="acadmic"){{"active"}} @endif" id="academicInfo">
                    <!-- Item -->
                    <div class="card obs-card">

                        <div class="card-header">
                            <h3 class="card-title">Academic Information</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>

                        <form class="card-body" action="<?php echo base_url("teacher/academic") ?>" method="post">
                            <div class="education-info">
  <?php foreach ($academics as $academic){ ?>
                                <!-- list item -->
                                <div class="row form-row education-cont">
                                    <div class="col-12 col-md-10 col-lg-11">
                                        <div class="row form-row">
                                            <div class="form-group row col-md-9">
                                                <label class="col-md-3 col-form-label">Degree<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="text" disabled value="{{$academic->degree}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-9">
                                                <label class="col-md-3 col-form-label">Year<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="number" disabled value="{{$academic->year}}" class="form-control">
                                                </div>
                                            </div>
                                            <hr style="width:75%;text-align:center;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 col-lg-1"><label
                                                class="d-md-block d-sm-none d-none">&nbsp;</label><a
                                                href="#" class="btn btn-danger trash"><i
                                                    class="fa fa-trash-o"></i></a></div>
                                </div>
                                <!-- ./list item -->
								<?php } ?>

  <!-- list item -->
	  <div class="row form-row education-cont">
		  <div class="col-12 col-md-10 col-lg-11">
			  <div class="row form-row">
				  <div class="form-group row col-md-9">
					  <label class="col-md-3 col-form-label">Degree<span class="text-danger">*</span></label>
					  <div class="col-md-7">
						  <input type="text" name="degree[]" class="form-control">
					  </div>
				  </div>
				  <div class="form-group row col-md-9">
					  <label class="col-md-3 col-form-label">Year<span class="text-danger">*</span></label>
					  <div class="col-md-7">
						  <input type="number" name="year[]" class="form-control">
					  </div>
				  </div>
				  <hr style="width:75%;text-align:center;">
			  </div>
		  </div>
		  <div class="col-12 col-md-2 col-lg-1"><label
					  class="d-md-block d-sm-none d-none">&nbsp;</label><a
					  href="#" class="btn btn-danger trash"><i
						  class="fa fa-trash-o"></i></a></div>
	  </div>
	  <!-- ./list item -->

                            </div>
                            <div class="add-more">
                                <a href="javascript:void(0);" class="add-education"><i
                                            class="fa fa-plus-circle"></i> Add
                                    More</a>
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
                    <!-- End Item -->
                </div>
                <div class="tab-pane  @if($active_tab=="exp"){{"active"}} @endif" id="expInfo">
                    <!-- Item -->
                    <div class="card exp-card">

                        <div class="card-header">
                            <h3 class="card-title">Experience Info</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>

                        <form class="card-body" action="<?php echo base_url("teacher/experience")?>"  method="post">
                            <div class="exp-info">

								<?php foreach ($organisations as $organisation){ ?>
								<!-- list item -->
								<div class="row form-row exp-cont">
									<div class="col-12 col-md-10 col-lg-11">
										<div class="row form-row">
											<div class="form-group row col-md-9">
												<label class="col-md-3 col-form-label">Organisation<span class="text-danger">*</span></label>
												<div class="col-md-7">
													<input  type="text" disabled value="{{ $organisation->organisation }}"  class="form-control">
												</div>
											</div>
											<div class="form-group row col-md-9">
												<label class="col-md-3 col-form-label">Years<span class="text-danger">*</span></label>
												<div class="col-md-7">
													<input type="number" disabled value="{{ $organisation->year }}" class="form-control">
												</div>
											</div>
											<hr style="width:75%;text-align:center;">
										</div>
									</div>
									<div class="col-12 col-md-2 col-lg-1"><label
												class="d-md-block d-sm-none d-none">&nbsp;</label><a
												href="#" class="btn btn-danger trash"><i
													class="fa fa-trash-o"></i></a></div>
								</div>
								<!-- ./list item -->
									<?php }?>

                                <!-- list item -->
                                <div class="row form-row exp-cont">
                                    <div class="col-12 col-md-10 col-lg-11">
                                        <div class="row form-row">
                                            <div class="form-group row col-md-9">
                                                <label class="col-md-3 col-form-label">Organisation<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input name="organisations[]" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row col-md-9">
                                                <label class="col-md-3 col-form-label">Years<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <input type="number" name="years[]" class="form-control">
                                                </div>
                                            </div>
                                            <hr style="width:75%;text-align:center;">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2 col-lg-1"><label
                                                class="d-md-block d-sm-none d-none">&nbsp;</label><a
                                                href="#" class="btn btn-danger trash"><i
                                                    class="fa fa-trash-o"></i></a></div>
                                </div>
                                <!-- ./list item -->

                            </div>
                            <div class="add-more">
                                <a href="javascript:void(0);" class="add-exp"><i
                                            class="fa fa-plus-circle"></i> Add
                                    More</a>
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
                    <!-- End Item -->
                </div>
                <div class="tab-pane  @if($active_tab=="avaInfo"){{"active"}} @endif" id="avaInfo">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Availability Information & Fee</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>
						<form class="card-body" action="<?php echo base_url("teacher/availability")?>"  method="post">
							<div class="exp-info">

								<!-- list item -->
								<div class="row form-row exp-cont">
									<div class="col-12 col-md-10 col-lg-11">
										<div class="row form-row">
											<div class="form-group row col-md-9">
												<label class="col-md-3 col-form-label">Organisation<span class="text-danger">*</span></label>
												<div class="col-md-7">
													<input name="organisation" type="text" class="form-control">
												</div>
											</div>
											<div class="form-group row col-md-9">
												<label class="col-md-3 col-form-label">Years<span class="text-danger">*</span></label>
												<div class="col-md-7">
													<input type="number" name="year" class="form-control">
												</div>
											</div>
											<hr style="width:75%;text-align:center;">
										</div>
									</div>
									<div class="col-12 col-md-2 col-lg-1"><label
												class="d-md-block d-sm-none d-none">&nbsp;</label><a
												href="#" class="btn btn-danger trash"><i
													class="fa fa-trash-o"></i></a></div>
								</div>
								<!-- ./list item -->

							</div>
							<div class="add-more">
								<a href="javascript:void(0);" class="add-exp"><i
											class="fa fa-plus-circle"></i> Add
									More</a>
							</div>
							<div class="form-group row">
								<label class="col-md-3 col-form-label"></label>
								<div class="col-md-7">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="submit" class="btn btn-outline-secondary">Cancel</button>
								</div>
							</div>
						</form>

						<div class="form-group row">
                                <label class="col-md-3 col-form-label">Mon<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" name="start_time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" name="end_time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Tue<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Wed<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Thu<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Fri<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Sat<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Sun<span
                                            class="text-danger">*</span></label>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">Start Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label class="col-md-4 col-form-label">End Time<span
                                                class="text-danger">*</span></label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Price Per Subject <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control">
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
                <div class="tab-pane @if($active_tab=="selection"){{"active"}} @endif " id="courseSelection">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Course Selection</h3>
                            <div class="card-options ">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a>
                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                            class="fe fe-x"></i></a>
                            </div>
                        </div>
                        <form class="card-body" action="<?php echo base_url("teacher/courseselection")?>" method="post">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Class</label>
                                <select name="class" class="form-control" id="exampleFormControlSelect1">
                                   <?php foreach ($classes as $class){ ?>
									<option <?php if($this->session->userdata("class_id") == $class->id ){ echo "Selected"; } ?>  value="{{$class->id}}">{{$class->name}}</option>
									<?php }?>
                                </select>
                            </div>
							@if($courses)
                            <div class="form-group">
								<?php foreach ($courses as $course ){ ?>
                                <div class="form-check">
                                    <input  <?php if (!$course->selected){ ?> name="sujects[]" <?php }else{?> disabled="disabled" <?php  } ?>  <?php if ($course->selected){ echo "checked"; }?> class="form-check-input" type="checkbox" value= {{$course->id}} id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        {{$course->name}}
                                    </label>
                                </div>
								<?php  } ?>

                            </div>
							@endif
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-7">
                                    <button type="submit"  name="coures_s" value="test" class="btn btn-primary">Save</button>
                                    <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane @if($active_tab=="account"){{"active"}} @endif" id="accountInfo">
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
                        <form class="card-body" method="post" action="<?php echo base_url("teacher/account");?>">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">IBAN / Account Number <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">.
                                    <input type="text"  value="@if($account) {{$account->ibn}} @endif" name="IBAN" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Branch Code <span
                                            class="text-danger">*</span></label>
                                <div class="col-md-7">
                                    <input type="text" name="branch_code"  value="@if($account) {{$account->branch_code}} @endif" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Account Title</label>
                                <div class="col-md-7">
                                    <input type="text" name="account_title"  value=" @if($account) {{$account->title}} @endif" class="form-control">
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
            </div>
        </div>
    </div>
@endsection

@section('_bottomJs')
	<script>
		$("#exampleFormControlSelect1").on("change",function() {
			$("#course_sel").click();
		});

	</script>
    <script src="<?php echo asset_url('be_v1/js/profile-settings.js'); ?>"></script>
@endsection
