
<style>

.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  padding:20px;
  margin-bottom:20px;
}
/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
</style>
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('assets/upload/demo_02.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>LOG IN <small>Please sign in to use our sites.</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Login</li>
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

<br>
<br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                    <div class="card">
                        <img src="assets/images/teacher.png" alt="Avatar" style="width:100%;height:300px;padding:70px">
                            <div class="row">
                                <div class=" col-sm-12 text-center">
                                    <h3><b>I am a teacher</b></h3>
                                </div>
                                        </div>
                                        <div class="row">
                                <div class=" col-sm-12 text-center">
                                <p>Give lessons or manage bookings with your customers</p>
                                </div>
                                        </div>
                                        <div class="row">
                                <div class=" col-sm-12 text-center">
                              <a href="teacherlogin.php" class="btn btn-primary">Teacher Log in</a>
                                </div>
                                        </div>
                                   
                                               
                                                                </div>

                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <img src="assets/images/student.png" alt="Avatar" class="img-fluid" style="width:100%;height:300px;padding:70px;">
                            <div class="row">
                                <div class=" col-sm-12 text-center">
                                    <h3><b>I am a student</b></h3>
                                </div>
                                        </div>
                                        <div class="row">
                                <div class=" col-sm-12 text-center">
                                <p>Have lessons, message your tutor or watch your lessons back</p>
                                </div>
                                        </div>
                                        <div class="row">
                                <div class=" col-sm-12 text-center">
                              <a href="<?php echo base_url()?>students/login" class="btn btn-primary">Student Log in</a>
                                </div>
                                        </div>        
                        
                                                   
                                                                    </div>
    
                        </div>
                </div>
            </div>

