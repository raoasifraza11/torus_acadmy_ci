<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- SITE META -->
    <title>EduPress | Responsive Education Learning Website Templates</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="leftmenu memberprofile">
    <!-- ******************************************
    START SITE HERE
    ********************************************** -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo base_url();?>/assets/upload/demo_01.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>My account <small>Hello there, this is my profile.</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        
                                        <li class="active">My Account</li>
                                    </ol>
                                </div>
                                <!-- end bread -->
                            </div>
                            <!-- /.pull-right -->
                        </div>
                        <!-- end clearfix -->
                    </div>
                </div>
                <!-- end page-title -->
            </div>
            <div class="section">
                <div class="container-fluid">
                    <div class="row">
                      
                        <div class="col-md-12 col-sm-12">
                      
                        <?php
                        $this->load->view('partials/alerts');?>
                        <?php if(!$teachers):?>
                            <h3 style="margin-bottom:50px;" class="text-center">No teachers !!</h3>
                        <?php else:?>
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <h3>About Me</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <?php foreach($teachers as $teacher):?>
                                    <div class="col-md-3 col-sm-12"   style="margin-bottom:70px;" >
                                    <hr>
                                        <div class="team-member-img text-center">
                                            <img src="<?php echo base_url();?>assets/uploads/teachers/<?= $teacher['profile_img']?>" alt="team member img" class="img-responsive">
                                            <br>
                                        </div>
                                    </div><!-- end col -->
                                    <hr>

                                    <div class="col-md-9 col-sm-12"   style="margin-bottom:70px;">
                                        <div class="team-member-name">
                                            <p><?= $teacher['fname'].' '.$teacher['lname']?></p>
                                            <span>Teacher</span>
                                          
                                        </div>
                                        <p>
                                                <?= $teacher['description']?>
                                            </p>
                                        <hr class="invis">
                                        <div class="widget-title">
                                            <h3>Basic Info</h3>
                                            <hr>
                                        </div><!-- end title -->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h4>
                                                    Gender
                                                </h4>
                                                <p><?= $teacher['gender']?></p>
                                                <h4>
                                                    Date of birth
                                                </h4>
                                                <p><?= $teacher['dob']?></p>

                                            </div>
                                            <div class="col-md-4">
                                            <h4>
                                                    Email
                                                </h4>
                                                <p><?= $teacher['email']?></p>
                                                <h4>
                                                Phone
                                                </h4>
                                               <p><?= $teacher['phno']?></p>

                                            </div>
                                            <div class="col-md-4">
                                            <h4>
                                                   Youtube Link 
                                                </h4>
                                                <a href="<?= $teacher['link']?>"><?= $teacher['link']?></a>
                                            <h4>
                                                    Certification
                                                </h4>
                                                <p><?= $teacher['certificates']?></p>
                                            </div>
                                        </div>
                                        <div class="form-group text-center" style="margin-top:15px;">
                                        <a  href="<?php echo base_url('/students/addteachers/'.$teacher['id'].'/'.$teacher['fname'].''.$teacher['lname'].'/'.$teacher['fees']);?>" class="btn btn-default " >
                                      Select
                                    </a>
                                        </div>    
                                    </div><!-- end col -->
                                </div><!-- end row -->   
                                <?php 
                                    endforeach;?>   
                            </div><!-- end widget -->
                        </div><!-- end col -->
                        
                            </div><!-- end about-widget -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <?php
                    endif;?>
                </div><!-- end container -->
            </div><!-- end section -->
</div>    
    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>