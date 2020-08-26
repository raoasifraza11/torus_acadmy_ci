@extends('backend.includes.base')
@section('title', 'Torus Academy - Teacher Details')
@section('_css')

<link rel="stylesheet" href="./assets/plugins/summernote/dist/summernote.css" />

<!-- Core css -->
<link rel="stylesheet" href="./assets/css/style.min.css" />

@endsection

@section('_pageTitle')

<?php foreach ($teacher_details as $row) : ?>

    <?php $row->first_name; ?>
<?php endforeach; ?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="header-action">
            <h1 class="page-title">Teachers</h1>
            <ol class="breadcrumb page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Torus Academy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Teachers</li>
            </ol>
        </div>

    </div>
</div>


@endsection

@section('content')


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

<div class="container-fluid">
    <div class="tab-content">
        <div class="tab-pane active" id="pro-add">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Basic Information</h3>

                        </div>
                        <form action="<?php echo base_url('teacherinfoo'); ?>"  method="POST" enctype="multipart/form-data" >
                            <div class="card-body">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label><b>Department</b></label>
                                            <select class="form-control input-height" name="department">
                                                <option value="">Select...</option>
                                                <option value="Computer">Computer</option>
                                                <option value="Mechanical">Mechanical</option>
                                                <option value="Mathematics">Mathematics</option>
                                                <option value="Commerce">Commerce</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label><b>Website URL</b></label>
                                            <input type="text" name="url" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><b>Select classes</b></label>
                                        </div>
                                        <div class="row chk-border">
                                            <div class="col-md-6 col-sm-12">
                                                <div style="margin:10px 0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="Martic" />
                                                                <span class="default">Martic</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="Inter" />
                                                                <span class="primary"> Inter</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="A-level" />
                                                                <span class="success">A-level</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="O-level" />
                                                                <span class="info">O-level</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div style="margin:10px 0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="BBA" />
                                                                <span class="default">BBA</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="Mcs" />
                                                                <span class="primary"> Mcs</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="MBA" />
                                                                <span class="success">MBA</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="class[]" value="MS" />
                                                                <span class="info">MS</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label><b>Select Subjects</b></label>
                                        </div>
                                        <div class="row chk-border">
                                            <div class="col-md-6 col-sm-12">
                                                <div style="margin:10px 0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Physics" />
                                                                <span class="default">Physics</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Chemistry" />
                                                                <span class="primary"> Chemistry</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Math" />
                                                                <span class="success">Math</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Biology" />
                                                                <span class="info">Biology</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div style="margin:10px 0">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Computer" />
                                                                <span class="default">Computer</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="English" />
                                                                <span class="primary"> English</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Urdu" />
                                                                <span class="success">Urdu</span>
                                                            </label>
                                                        </li>
                                                        <li class="list-grosup-item">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="subject[]" value="Islamic Studies" />
                                                                <span class="info">Islamic Studies</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-2 mb-3">
                                            <input type="file" name="teacherImg" class="dropify" accept="file/*" multiple>
                                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mt-3">
                                            <label><b>Brief Description </b></label>
                                            <textarea rows="4" name="brief" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Social Media</h3>

                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" placeholder="Facebook">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <label>LinkedIN</label>
                                <input type="text" class="form-control" placeholder="LinkedIN ">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
