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
                        <li>All Students</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Students Data</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Roll ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Class ..." class="form-control">
                                </div>
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                </div>
                            </div>
                        </form>
                      <!--loading alerts-->
                      <?php
                        $this->load->view('partials/alerts');?>
                        <div class="table-responsive">
                            <table class="table display data-table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input checkAll">
                                                <label class="form-check-label">Roll</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Guardian name</th>
                                        <th>Address</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <!--
                                        <th>Subjects</th>
                                        <th>Transaction ID</th>
                                           -->
                                        <th>Status</th>
                                     
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        foreach($students as $student):
                                        ?>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="<?php echo base_url();?>assets/uploads/students/<?= $student['profile_img']?>" alt="student"></td>
                                        <td class="text-capitalize"><?= $student['fname'].' '.$student['lname']?></td>
                                        <td class="text-capitalize"><?=$student['gender']?></td>
                                        <td class="text-capitalize"><?= $student['guardian_name']?></td>
                                        <td class="text-capitalize"><?= $student['address']?></td>
                                        <td><?= $student['dob']?></td>
                                        <td><?= $student['phone']?></td>
                                        <td><?= $student['email']?></td>
                                       
                                        <!--<td>
                                      
                                        </td>
                                         <!--showing transaction id
                                         <td>
                                        
                                        </td>
                                        -->
                                        <td>
                                        <?php if($student['status']==0):?>
                                    
                                           <a href="#"  class="btn btn-danger activeBtn ">
                                           <i class="fas fa-ban fa-lg"></i>
                                           Inactive
                                                     </a>
                                                     <?php else:?>                        
                                          <a href="#" class="btn btn-success inactiveBtn">
                                          <i class="fas fa-user "></i>
                                          Active
                                          </a>
                                                     <?php endif;?>
                                        </td>
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                  <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item  " href="<?php echo base_url('/admin/profilestudent/'.$student['id']);?>"><i class="fas fa-info text-orange-peel "></i>Show profile</a>
                                                    <a class="dropdown-item" href="<?php echo base_url('/admin/editstudent/'.$student['id']);?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <a class="dropdown-item delBtn" href="#"  ><i class="fas fa-trash text-orange-red"></i>Delete</a>
                                                  
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
$(document).ready(function(){
  //delete student request
$("body").on("click",".delBtn",function(e){
  /e.preventDefault();
  var tr=$(this).closest('tr');
  del_id=$(this).attr('id');
  Swal.fire({
  title: 'Are you sure?',
  text: "You want to delete!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    $.ajax({
      url:"<?php echo base_url()?>/Admin/deletestudent",
      type:"POST",
      data:{del_id:del_id},
      sucess:function(response){
          console.log(response);
      }
      
    })    
  }
});
});
});
</script>
