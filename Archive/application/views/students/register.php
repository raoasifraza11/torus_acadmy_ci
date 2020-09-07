<div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo base_url();?>/assets/upload/demo_02.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>Student Registration <small>Please complete all fields for perfect profile..</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="active">Registration</a></li>
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
                        <div class="col-md-8">
                            <div class="widget-title">
                                <h3>Profile Details</h3>
                                <hr>
                            </div><!-- end title -->
                            <!--place validation erros-->
                           
                        <?php echo validation_errors('<div class=" text-danger">', '</div>'); ?>
                        
                        <!--loading alerts-->
                        <?php
                        $this->load->view('partials/alerts');?>
                        
                                        <!--form -->        
                        <?php echo form_open_multipart('students/register')?>
								<div id="regalert"></div>
							<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>First Name :	<span class="text-danger">(This field is required*)</span> </label>
									
										<input type="text" name="fname" class="form-control" placeholder="Enter your name" >    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Last Name :<span class="text-danger">(This field is required*)</span> </label>
										
										<input type="text"  name="lname" class="form-control" placeholder="Enter your name" >    
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>Email :<span class="text-danger">(This field is required*)</span> </label>
										<input type="text"  name="email" class="form-control" placeholder="Enter your email" >    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Gender : </label>
										<div class="form-group">
											<div class="radio radio-info radio-inline">
												<input type="radio" name="gender"  value="male"  >
												<label for="inlineRadio1"> Male </label>
											</div>
											<div class="radio radio-inline">
												<input type="radio" name="gender"  value="female">
												<label > Female </label>
											</div>
                                        </div> 
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>Location :<span class="text-danger">(This field is required*)</span> </label>
										<div class="form-group">
                                            <select class="form-control" name="location" >
                                                <option class="hidden"  selected disabled>Select Country</option>
                                                <option>Pakistan</option>
                                                <option>United kingdom</option>
                                                <option >Dubai</option>
                                            </select>
                                        </div>    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Guardian Name : <span class="text-danger">(This field is required*)</span></label>
										<input type="text" class="form-control" name="guardian_name" placeholder="Enter Guardian Name" >    
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>Phone Number :<span class="text-danger">(This field is required*)</span> </label>
										<input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number" >    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Date of Birth : </label>
										<div class="form-group">
											<input type="text" class="form-control"  name="date" id="dateinput" placeholder="Click to select date" >
										</div>  
									</div>
								</div>
								<div class="row">
								<div class="col-sm-12 col-md-6">
								<label>Enter Password:<span class="text-danger">(This field is required*)</span></label>
								<input type="password" class="form-control" name="psd" id="psd" placeholder="Enter your password"  minlength="8" >
								</div>
								<div class="col-sm-12 col-md-6">
								<label>Confirm Password:<span class="text-danger">(This field is required*)</span></label>
								<input type="password" class="form-control" name="cpsd" id="cpsd" placeholder="Re-enter your password"  >
								</div>
								</div>
								<div class="form-group">
									<div id="passError" class="text-danger font-weight-bold"></div>
								</div>
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<label>Select Class</label>
										<div class="form-group">
											<select class="form-control" name="class">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="4">5</option>
												
											</select>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<label>Select  Time</label>
											<select class="form-control" name="time">
												<option value="00:00">00:00</option>
												<option value="00:15">00:15</option>
												<option value="00:30">00:30</option>
												<option value="00:45">00:45</option>
												<option value="01:00">01:00</option>
												<option value="01:15">01:15</option>
												<option value="01:30">01:30</option>
												<option value="01:45">01:45</option>
											</select>
									</div>
								</div>
								<div class=" row">
									<div class="col-sm-6 col-md-6">
										<label>Session Type:</label>
											<select class="form-control" name="call_type">
												<option value="1-1">1-1</option>
												<option value="groupcall">Group Call</option>
											</select>
									</div>
									<div class="col-sm-6 col-md-6">
										<label>Teacher Level</label>
											<select class="form-control" name="teacher_level">
												<option value="higherlevel">Higher Level</option>
												<option value="standradlevel">Standrad Level</option>
											</select>
									</div>
								</div>
										
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<label>Address : </label>
										<input type="text" class="form-control" name="address" placeholder="Enter your Address">    
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<label>Upload Avatar:<span class="text-danger">(This field is required*)</span></label>
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-preview thumbnail"></div>
											<br>
											<span class="btn btn-default btn-file">
												<span class="fileupload-new">Select Avatar</span>
												<span class="fileupload-exists">Change</span>
												<input type="file" name="userfile" >
											</span>
											<a href="#" class="btn btn-primary btn-sm fileupload-exists" data-dismiss="fileupload">x</a>
										</div>
									</div>
									
									<hr class="invis"> 
									<div class="col-sm-12 col-md-12 clearfix">
									<br>
										<input type="submit" class="btn btn-primary" value="submit" id="register-btn">
									</div>
								</div>															
                            </form>
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="widget-title">
                                <h3>Social Profiles</h3>
                                <hr>
                            </div><!-- end title -->
                           
                                <div class="space">
                                    <label>Facebook : </label>
                                    <input type="text" class="form-control" placeholder="http://">    
                                </div>

                                <div class="space">
                                    <label>Twitter : </label>
                                    <input type="text" class="form-control" placeholder="http://">    
                                </div>

                                <div class="space">
                                    <label>Google Plus : </label>
                                    <input type="text" class="form-control" placeholder="http://">    
                                </div>

                                <div class="space">
                                    <label>Pinterest : </label>
                                    <input type="text" class="form-control" placeholder="http://">    
                                </div>
								
                                <div class="space">
                                    <label>Linkedin : </label>
                                    <input type="text" class="form-control" placeholder="http://">    
                                </div>
                                <div class="space">
                                    <a href="#" class="btn btn-primary btn-block">Update Social Links</a>
                                </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->
          