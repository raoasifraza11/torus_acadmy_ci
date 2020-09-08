
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php
             $this->load->view('admintemplates/sidebar');
             ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Students</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Student Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>About Me</h3>
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
                        <div class="single-info-details">
                           
                            <div class="item-img">
                                <img src="<?php echo base_url();?>assets/uploads/students/<?= $student['profile_img']?>" alt="student">
                            </div>
                            <div class="item-content">
                                <div class="header-inline item-header">
                                    <h3 class="text-dark-medium font-medium text-capitalize"></h3>
                                    <div class="header-elements">
                                        <ul>
                                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                              
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                     
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium text-capitalize"><?= $student['fname'].' '.$student['lname']?></td>
                                            </tr>
                                            <tr>

                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium text-capitalize">
                                                <?= $student['gender']?>
                                             </td>
                                            </tr>
                                            <tr>
                                                <td>Father Name:</td>
                                                <td class="font-medium text-dark-medium text-capitalize">
                                                <?= $student['guardian_name']?>
                                                </td>
                                               
                                            </tr>
                                           
                                            <tr>
                                                <td>Date Of Birth:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $student['dob']?>
                                                </td>
                                             
                                            </tr>
                                           
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $student['email']?> 
                                                </td>
                                             
                                            </tr>
                                           
                                            
                                          
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $student['address']?>
                                                </td>
                                              
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $student['phone']?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <!-- Student Details Area End Here -->