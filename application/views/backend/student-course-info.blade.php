@extends('backend.includes.base')
@section('title', 'Torus Academy - Student Dashboard')
@section('_css')

<link rel="stylesheet" href="./assets/css/style.min.css" />

@endsection
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
                            <h3 class="card-title">Account Information</h3>
                        </div>
                        <form action="" method="" class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Class <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <select class="form-control input-height" name="department">
                                        <option value="">Select Class</option>
                                        <option value="Category 1">Matric</option>
                                        <option value="Category 2">Inter</option>
                                        <option value="Category 3">A-level</option>
                                        <option value="Category 3">O-level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Subject <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <select class="form-control input-height" name="department">
                                        <option value="">Select Subject</option>
                                        <option value="Computer">Computer</option>
                                        <option value="Mechanical">Mechanical</option>
                                        <option value="Mathematics">Mathematics</option>
                                        <option value="Commerce">Commerce</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Teacher <span class="text-danger">*</span></label>
                                <div class="col-md-9">
                                    <div class="Computer box">
                                        <div class="row blog">
                                            <div class="col-md-12">
                                                <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">

                                                    <!-- Carousel items -->
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="row row-cards">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="card p-3">
                                                                        <a href="javascript:void(0)" class="mb-3">
                                                                            <img src="../assets/images/gallery/11.jpg" alt="Photo by Kathleen Harper" class="rounded">
                                                                        </a>
                                                                        <div class="d-flex align-items-center px-2">
                                                                            <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                                                                            <div>
                                                                                <div>Kathleen dfsd</div>
                                                                                <small class="d-block text-muted">16 days ago</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Read More</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="card p-3">
                                                                        <a href="javascript:void(0)" class="mb-3">
                                                                            <img src="../assets/images/gallery/12.jpg" alt="Photo by Bobby Knight" class="rounded">
                                                                        </a>
                                                                        <div class="d-flex align-items-center px-2">
                                                                            <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                                                                            <div>
                                                                                <div>Bobby</div>
                                                                                <small class="d-block text-muted">6 days ago</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Read More</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--.row-->
                                                        </div>
                                                        <!--.item-->
                                                        <div class="carousel-item ">
                                                            <div class="row row-cards">
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="card p-3">
                                                                        <a href="javascript:void(0)" class="mb-3">
                                                                            <img src="../assets/images/gallery/11.jpg" alt="Photo by Kathleen Harper" class="rounded">
                                                                        </a>
                                                                        <div class="d-flex align-items-center px-2">
                                                                            <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                                                                            <div>
                                                                                <div>Kathleen</div>
                                                                                <small class="d-block text-muted">16 days ago</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Read More</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-sm-6">
                                                                    <div class="card p-3">
                                                                        <a href="javascript:void(0)" class="mb-3">
                                                                            <img src="../assets/images/gallery/12.jpg" alt="Photo by Bobby Knight" class="rounded">
                                                                        </a>
                                                                        <div class="d-flex align-items-center px-2">
                                                                            <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                                                                            <div>
                                                                                <div>Bobby</div>
                                                                                <small class="d-block text-muted">6 days ago</small>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-3">
                                                                            <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Read More</button></center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--.row-->
                                                        </div>
                                                        <!--.item-->
                                                    </div>
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                                                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                                                    </ol>
                                                    <!--.carousel-inner-->
                                                </div>
                                                <!--.Carousel-->
                                                <!--Read more modal start-->


                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Teacher Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-xl-4 col-lg-5 col-md-12">
                                                                        <div class="card">
                                                                            <a href="#"><img class="card-img-top" src="../assets/images/gallery/1.jpg" alt=""></a>
                                                                            <div class="card-body d-flex flex-column">
                                                                                <h5><a href="#">Nadeem Amin Raja</a></h5>
                                                                                <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!</div>
                                                                            </div>
                                                                            <div class="table-responsive">
                                                                                <table class="table table-striped table-vcenter mb-0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                                                            <td class="tx-medium">Date</td>
                                                                                            <td class="text-right">21st Aug 2020</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                                                            <td class="tx-medium">Duration</td>
                                                                                            <td class="text-right">6 Months</td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td><i class="fa fa-users text-warning"></i></td>
                                                                                            <td class="tx-medium">Students</td>
                                                                                            <td class="text-right">125+</td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="card-footer">
                                                                                <div class="d-flex align-items-center mt-auto">
                                                                                    <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg" alt="avatar">
                                                                                    <div>
                                                                                        <a href="#">Pro. Jane</a>
                                                                                        <small class="d-block text-muted">Head OF Dept.</small>
                                                                                    </div>
                                                                                    <div class="ml-auto text-muted">
                                                                                        <a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i> 521</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-8 col-lg-7 col-md-12">
                                                                        <div class="card">
                                                                            <div class="card-body">
                                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                                                <h5 class="mt-4">Course Syllabus</h5>
                                                                                <ul class="list-group">
                                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">Introduction to Computer and Internet. <span class="badge badge-primary badge-pill">1 Month</span></li>
                                                                                    <li class="list-group-item d-flex justify-content-between align-items-center">RDBMS and Data Management <span class="badge badge-primary badge-pill">2Month</span></li>
                                                                                    <li class="list-group-item">Web Technologies such as creation of dynamic website.</li>
                                                                                    <li class="list-group-item">Object Oriented Programming Languages such as C++/Java.</li>
                                                                                </ul>
                                                                                <h5 class="mt-4">After the completion of course the students will be able to:</h5>
                                                                                <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                                                </iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Select</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Read more modal end-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Mechanical box">You have selected <strong>green option</strong> so i am here</div>
                                    <div class="Mathematics box">You have selected <strong>blue option</strong> so i am here</div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <a href="students-dashboard-payment.html" class="btn btn-primary pull-right">Submit</a>
                            </div>
                        </form>
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
                                        <label>First Name</label>
                                        <input type="text" class="form-control" value="Tritech">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" value="Teal">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="Pakistan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" value="+923455119056">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="House#21,street#22,Islamabad,pakistan">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>DOB</label>
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" value="10/10/2002">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-control input-height" name="gender">

                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary pull-right">Submit</a>
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