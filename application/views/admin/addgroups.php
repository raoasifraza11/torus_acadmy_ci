
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
                        <li>Add Group</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add New Teacher Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add Group</h3>
                            </div>
                           
                        </div>
                          <!--place validation erros-->
                           
                          <?php echo validation_errors('<div class=" text-danger">', '</div>'); ?>

                        <?php echo form_open('admin/addgroups');?>
                                <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Group Name *</label>
                                    <input type="text" placeholder="Enter group name" name="group_name" class="form-control" >
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label> Group Teacher *</label>
                                   <select class="form-control" id="teacher" name="teacher">
                                   <option value="" >Select teacher</option>
                                   <?php
                                   foreach($teachers as $teacher):?>
                                 
                                       <option value="<?= $teacher['id']?>"><?= $teacher['fname'].' '.$teacher['lname']?> </option>
                                    
                                  <?php
                                   endforeach;?>
                                   </select>
                                </div>
                                <div class="col-12 form-group d-flex align-items-center justify-content-center mg-t-8">
                                    <input type="submit" value="Save" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">    
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
                <!-- Add New Teacher Area End Here -->



