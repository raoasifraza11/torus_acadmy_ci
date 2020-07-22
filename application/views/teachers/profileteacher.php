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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <h3>About Me</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="team-member-img text-center">
                                            <img src="<?php echo base_url();?>assets/uploads/teachers/<?= $teacher['profile_img']?>" alt="team member img" class="img-responsive">
                                            <br>
                                          
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-9 col-sm-12">
                                        <div class="team-member-name">
                                            <p><?= $teacher['fname']?></p>
                                            <span>Teacher</span>
                                        </div>
                                        <p>
                                      
                                        </p>
                                        <hr class="invis">
                                        <div class="widget-title">
                                            <h3>Basic Info</h3>
                                            <hr>
                                        </div><!-- end title -->

                                        <ul >
                                        <li><h4>Location</h4>
                                               <p><?= $teacher['location']?></p>
                                            </li>
                                            <li><h4>Email</h4>
                                               <p><?= $teacher['email']?></p>
                                            </li>
                                            
                                            <li><h4>Phone</h4>
                                               <p><?= $teacher['phno']?></p>
                                            </li>
                                            <li><h4>Link</h4>
                                            <a href="<?= $teacher['link']?>">
                                            <?= $teacher['link']?>                                          
                                            </li>
                                            
                                        </ul>
                                    </div><!-- end col -->
                                </div><!-- end row -->      
                            </div><!-- end widget -->
                        </div><!-- end col -->
                      <!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->
</div>    
    <!-- end wrapper -->


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