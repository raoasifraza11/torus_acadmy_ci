
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <?php 
                $this->load->view('admintemplates/sidebar');
?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add Subject</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Subject</h3>
                            </div>

                        </div>
                          <!--place validation erros-->
                           
                          <?php echo validation_errors('<div class=" text-danger">', '</div>'); ?>

                        <?php echo form_open('admin/addsubjects');?>
                                <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Subject Name *</label>
                                    <input type="text" placeholder="Enter subject name" name="name" class="form-control" >
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Subject Fee *</label>
                                    <input type="text" placeholder="Enter Fee" name="fees"  class="form-control" >
                                </div> 
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Select  Teacher *</label>
                                   <select class="form-control" id="teacher" name="teacher">
                                   <option value="" >Select teacher</option>
                                   <?php
                                   foreach($teachers as $teacher):?>
                                 
                                       <option value="<?= $teacher['id']?>"><?= $teacher['fname'].' '.$teacher['lname']?> </option>
                                    
                                  <?php
                                   endforeach;?>
                                   </select>
                                </div>
                                <div class="col-12 form-group  d-flex align-items-center justify-content-center mg-t-8">
                                    <input type="submit" value="Save" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->



