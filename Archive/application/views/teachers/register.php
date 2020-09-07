<div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo base_url();?>/assets/upload/demo_02.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>Teacher Registration <small>Please complete all fields for perfect profile..</small></h2>
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
                            
                         <?php echo form_open_multipart('teachers/register')?>
							
								<div class="row">

									<div class="col-sm-12 col-md-6">
										<label>First Name : <span class="text-danger">(This field is required*)</span></label>
										<input type="text" class="form-control" placeholder="Enter your name" name="fname" required>    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Last Name :<span class="text-danger">(This field is required*)</span> </label>
										<input type="text" class="form-control" placeholder="Enter your name" name="lname" required>    
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>Email :<span class="text-danger">(This field is required*)</span> </label>
										<input type="text" class="form-control" placeholder="Enter your email" name="email" required>    
									</div>
									<div class="col-sm-12 col-md-6">
										<label>Gender : </label>
										<div class="form-group">
											<div class="radio radio-info radio-inline">
												<input type="radio"  value="male" name="gender" checked="">
												<label for="inlineRadio1"> Male </label>
											</div>
											<div class="radio radio-inline">
												<input type="radio"  value="female" name="gender">
												<label > Female </label>
											</div>
                                        </div> 
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-6">
										<label>Phone Number :<span class="text-danger">(This field is required*)</span> </label>
										<input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phno" required>    
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
										<label>Location : <span class="text-danger">(This field is required*)</span></label>
										<div class="form-group">
                                            <select class="form-control" name="location" required>
                                                <option class="hidden"  selected disabled>Select Country</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="United kingdom">United kingdom</option>
                                                <option value="Dubai">Dubai</option>
                                            </select>
                                        </div>    
									</div>

									<div class="col-sm-12 col-md-6">
										<label>Youtube Link : </label>
										<input type="text" class="form-control" placeholder="http://" name="link">    
									</div>
								</div>
								<div class="row">
								<div class="col-sm-12 col-md-6">
								<label>Enter Password:<span class="text-danger">(This field is required*)</span></label>
								<input type="password" class="form-control" name="psd" id="psd" placeholder="Enter your password" required minlength="8" >
								</div>
								<div class="col-sm-12 col-md-6">
								<label>Confirm Password:<span class="text-danger">(This field is required*)</span></label>
								<input type="password" class="form-control" name="cpsd" id="cpsd" placeholder="Re-enter your password" required >
								</div>
								</div>
								<div class="form-group">
                        <div id="passError" class="text-danger font-weight-bold"></div>
                    </div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<label>Address : </label>
										<input type="text" class="form-control" placeholder="Enter Your Address" name="address">
									</div>
								</div>
								<div class=" row">
									<div class=" col-sm-12 col-md-12">
										<div class=" form-group">
											<label>Personal Bibliography:</label>
											<textarea rows="10" cols="10" class="form-control" placeholder="Write Something" name="description"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class=" col-sm-12 col-md-12">
										<div class=" form-group">
											<label>Professional Background:</label>
											<textarea rows="10" cols="10"  name="prof_bg" class=" form-control" placeholder="Enter professional background"></textarea>
										</div>
									</div>
								</div>
								<div class=" row text-center">
									<div class=" col-sm-12 col-md-12">
										<label>Certificates (if any)</label>
										<div class=" form-group">
											
											<div class="radio radio-info radio-inline">
												<input type="radio"  value="yes" name="certificates" checked="">
												<label for="inlineRadio1"> Yes </label>
											</div>
											<div class="radio radio-inline">
												<input type="radio"  value="no" name="certificates">
												<label > No </label>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<label>Select Class Or Subject : </label>
										<input type="radio" name="demo" value="Two"/> Select Class
										<input type="radio" name="demo" value="Three"/> Select Subject
										
										<div id="showTwo" class="myDiv">
											<div class="rows">
												<div class="col-sm-6 col-md-6">
													<label>Select Class</label>
													<div class="form-group">
														<select class="form-control" name="class">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															
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
										</div>
										
										<div class="row">
											<div id="showThree" class="myDiv">
												<div class="row">
													<div class="col-sm-12 col-md-12">
														<label>Select Subject</label>
														<div class="form-group">
															<select id='testSelect1' class="form-control" name="subjects" multiple>
																<option value='1'>English</option>
																<option value='2' selected>Chemistry</option>
																<option value='3' selected>Biology</option>
																<option value='4'>Computer</option>
																<option value='5'>Physics</option>
															</select>
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12">
										<label>Upload Avatar<span class="text-danger"></span></label>
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-preview thumbnail"></div>
											<br>
											<span class="btn btn-default btn-file">
												<span class="fileupload-new">Select Avatar</span>
												<span class="fileupload-exists">Change</span>
												<input type="file" id="teacher_profile_img" name="userfile" required>
											</span>
											<a href="#" class="btn btn-primary btn-sm fileupload-exists" data-dismiss="fileupload">x</a>
										</div>
									</div>
									
									<hr class="invis"> 
									<div class="col-sm-12 col-md-12 clearfix">
									<br>
										<input type="submit" id="register-btn" value="SUBMIT" class="btn btn-primary">
									</div>
								</div>	
                            </form>
                        </div><!-- end col -->

                        <div class="col-md-4">
                            <div class="widget-title">
                                <h3>Social Profiles</h3>
                                <hr>
                            </div><!-- end title -->
                            <form class="defaultform updateprofile">
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
                            </form>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end container -->
            </div><!-- end section -->