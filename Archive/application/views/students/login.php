
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo base_url();?>/assets/upload/demo_02.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>Login account <small>Please sign in to use our sites.</small></h2>
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

            <div class="section">
                <div class="container-fluid">
              
                  <?php echo form_open('students/login');?>
                        <div class="col-md-6 col-md-offset-3" id="login-page">
                            <div class="register-widget clearfix">
                                <div class="widget-title">
                                    <h3>Sign in Account</h3>
                                    <hr>
                                </div><!-- end title -->
                                 <!--place validation erros-->
                           
                <?php echo validation_errors('<div class=" text-danger">', '</div>'); ?>
                        
                        <!--loading alerts-->
                        <?php
                        $this->load->view('partials/alerts');?>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control"  >
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" >
                                    </div>        
                                    <div class="col-sm-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="rem" name="rem" type="checkbox" class="styled">
                                            <label for="rem">
                                                 Remember me
                                            </label>
                                        </div>
                                    </div> 
                                    <div class="col-sm-12">
                                        <input type="submit" id="signin-btn" value="Login" class="btn btn-primary">
                                    </div>
                                    <div class="form-group mt-2 text-center">
                    <a href="#" class="text-white font-weight-bold text-center"  id="forgotbtn">
                    Forgot password?</a>
                    </div>
                                </div>          
                            </div>
                        </div>
                    </form><!-- end row -->
                   
                </div><!-- end container -->
            </div><!-- end section -->
        