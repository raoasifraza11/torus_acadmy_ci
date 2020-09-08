
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php
            $this->load->view('admintemplates/sidebar')
            ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Student</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Edit Student</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Student</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                       <?php echo form_open('admin/updatestudent')?>
                       <!-- hidden id-->
                            <input type="hidden" value="<?= $student['id']?>" name="student_id"> 
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="" value="<?= $student['fname']?>" name="fname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder=""  value="<?= $student['lname']?>" name="lname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Guardian Name *</label>
                                    <input type="text" placeholder=""  value="<?= $student['guardian_name']?>" name="guardian_name"  class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="male" <?php if($student['gender']=='male'){echo 'selected';}?>
                                        >Male</option>
                                        <option value="female"  <?php if($student['gender']=='female'){echo 'selected';}?>>Female</option>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Location *</label>
                                    <select class="select2" name="location">
                                        <option value="">Please Select Location *</option>
                                        <option value="Pakistan"  <?php if($student['location']=='Pakistan'){echo 'selected';}?>
                                        >Pakistan</option>
                                        <option value="United kingdom" <?php if($student['location']=='United kingdom'){echo 'selected';}?>>United kingdom </option>
                                        <option value="Dubai"  <?php if($student['location']=='Dubai'){echo 'selected';}?>>Duabi</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" value="<?= $student['dob']?>" name="date"  class="form-control air-datepicker">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="" value="<?= $student['email']?>" name="email" class="form-control">
                                </div>

              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <input type="text" placeholder="" value="<?= $student['address']?>" name="address" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" value="<?= $student['phone']?>" name="phone" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                
                                <label>Select Group</label>
								<select class="form-control" name="group">
							    <option value="1-1" <?php if($student['call_type']=='1-1'){ echo 'selected';}?>>1-1</option>
								<option value="groupcall" <?php if($student['call_type']=='groupcall'){ echo 'selected';}?>>Group Call</option>
								</select>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                <label>Teacher Level</label>
								<select class="form-control" name="teacher_level">
								<option value="higherlevel" <?php if($student['teacher_level']=='higherlevel'){ echo 'selected';}?>>Higher Level</option>
								<option value="standradlevel" <?php if($student['teacher_level']=='standradlevel'){ echo 'selected';}?>>Standrad Level</option>
								</select>
                                </div>
                                <!--
                                <div class="col-lg-6 col-12 form-group mg-t-30">
                                    <img src="../php/<?= $d['profile_img']?>">
                                    <label class="text-dark-medium">Edit Photo (150px X 150px)</label>
                                    <input type="file" class="form-control-file" name="edit-student-img">
                                </div>
                                -->
                                <div class="col-12 form-group mg-t-8">
                                    <input type="submit" value="Save" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->
