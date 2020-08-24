@extends('backend.includes.base')
@section('title', 'Torus Academy - Student Dashboard')

@section('_css')

<link rel="stylesheet" href="./assets/css/style.min.css" />

@endsection

@section('_pageTitle')

<?php foreach ($student_details as $row) : ?>

    <?php $row->first_name; ?>
<?php endforeach; ?>

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
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p><small>Courses</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
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
                            <h3 class="card-title">Personal Information</h3>
                        </div>
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
                        <?php if ($this->session->flashdata('updated')) : ?>
                            <div class="alert alert-success" align="center">
                                <?php echo $this->session->flashdata('updated');  ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url('studentInfo'); ?>" method="POST" enctype="multipart/form-data" class=" card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Parents Name <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" name="parent_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Parents Mobile No. <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" name="parent_mobile" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Registration Date <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <input type="date" name="registration_date" data-date-autoclose="true" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Profile Picture</label>
                                <div class="col-md-9">
                                    <input type="file" name="studentImg" class="dropify" accept="file/*" multiple>
                                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>

                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Information</h3>
                        </div>
                        <form action="<?php  echo base_url(); ?>users/UpdateStudentRegistrationInfo/<?php echo $row->id ?>" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>

                                            <input type="text" name="first_name" class="form-control" value="<?php echo $row->first_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text"  name="last_name" class="form-control" value="<?php echo $row->last_name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control input-height" name="country">

                                                <option value="<?php echo $row->country; ?>"><?php echo $row->country; ?></option>
                                                <option name="country" value="United States">United States</option>
                                                <option name="country" value="United Kingdom">United Kingdom</option>
                                                <option name="country" value="Viet Nam">Viet Nam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text"  name="phone" class="form-control" value="<?php echo $row->phone; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text"  name="city" class="form-control" value="<?php echo $row->city; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>DOB</label>
                                            <input type="date"  name="dob" data-date-autoclose="true" class="form-control" value="<?php echo $row->dob; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control input-height" name="gender">

                                                <option value="<?php echo $row->gender; ?>"><?php echo $row->gender; ?></option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                                    </div>
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

@section('_js')

<script>
    $(document).ready(function() {
        $("select").change(function() {
            $(this).find("option:selected").each(function() {
                var optionValue = $(this).attr("value");
                if (optionValue) {
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else {
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>

@endsection