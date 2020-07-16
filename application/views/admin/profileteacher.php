        <!-- Page Area Start Here -->
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
                        <li>Teacher Details</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
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
                                <img src="<?php echo base_url();?>assets/uploads/teachers/<?= $teacher['profile_img']?>" width="500"  alt="teacher">
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
                                <p>
                                  
                                </p>
                                <div class="info-table table-responsive">
                                    <table class="table text-nowrap">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td class="font-medium text-dark-medium text-capitalize">
                                                <?= $teacher['fname']. ' '.$teacher['lname']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gender:</td>
                                                <td class="font-medium text-dark-medium text-capitalize">
                                                <?= $teacher['gender']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Location:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $teacher['location']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date of birth</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $teacher['dob']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>E-mail:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $teacher['email']?>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Address:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $teacher['address']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Phone:</td>
                                                <td class="font-medium text-dark-medium">
                                                <?= $teacher['phno']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yotube link:</td>
                                                <td class="font-medium text-dark-medium">
                                                    <a href="<?= $teacher['link']?>">
                                                    <?= $teacher['link']?>
                                                    </a>
                                                    </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->