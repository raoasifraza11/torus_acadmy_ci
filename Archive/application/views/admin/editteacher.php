
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php
            $this->load->view('admintemplates/sidebar')
            ?>
  
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Edit Teacher</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Edit Teacher</h3>
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
                        <?php echo form_open('admin/updateteacher')?>
                                <!--hidden input for id-->
                                <input type="hidden" name="id" value="<?= $teacher['id']?>">
                            <div class="row">
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name *</label>
                                    <input type="text" placeholder="" value="<?= $teacher['fname']?>" name="fname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name *</label>
                                    <input type="text" placeholder="" name="lname" value="<?= $teacher['lname']?>" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender *</label>
                                    <select class="select2" name="gender">
                                        <option value="">Please Select Gender *</option>
                                        <option value="male" <?php if($teacher['gender']=='male'){echo 'selected';}?>
                                        >Male</option>
                                        <option value="female"  <?php if($teacher['gender']=='female'){echo 'selected';}?>>Female</option>
                                       
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Location *</label>
                                    <select class="select2" name="location">
                                        <option value="">Please Select Location *</option>
                                        <option value="Pakistan"  <?php if($teacher['location']=='Pakistan'){echo 'selected';}?>
                                        >Pakistan</option>
                                        <option value="United kingdom" <?php if($teacher['location']=='United kingdom'){echo 'selected';}?>>United kingdom </option>
                                        <option value="Dubai"  <?php if($teacher['location']=='Dubai'){echo 'selected';}?>>Duabi</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date Of Birth *</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="date" value="<?= $teacher['dob']?>"  class="form-control air-datepicker">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input type="email" placeholder="" name="email" value="<?= $teacher['email']?>"  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Address</label>
                                    <input type="text" placeholder="" name="address" value="<?= $teacher['address']?>" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Phone</label>
                                    <input type="text" placeholder="" name="phno" value="<?= $teacher['phno']?>"  class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Link</label>
                                    <input type="text" placeholder="" name="link" value="<?= $teacher['link']?>" class="form-control">
                                </div>
                                
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Short BIO</label>
                                    <textarea class="textarea form-control" name="description" id="form-message" cols="10" rows="9"><?= $teacher['description']?></textarea>
                                </div>
                                <div class="col-lg-6 col-12 form-group">
                                    <label>Professional Background</label>
                                    <textarea class="textarea form-control" name="prof_bg" id="form-message" cols="10" rows="9"><?= $teacher['prof_bg']?></textarea>
                                </div>
                               
                                <div class="col-12 form-group mg-t-8">
                                    <input type="submit" value="Save" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">    
                                </div>
                            </div>
                         
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->

