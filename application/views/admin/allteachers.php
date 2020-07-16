
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <?php
             $this->load->view('admintemplates/sidebar');?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Teacher</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>All Teachers</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Teacher Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>All Teachers Data</h3>
                            </div>
                            <div id="alerts"></div>
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
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by ID ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Name ..." class="form-control">
                                </div>
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                    <input type="text" placeholder="Search by Phone ..." class="form-control">
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
                                                <label class="form-check-label">ID</label>
                                            </div>
                                        </th>
                                        <th>Photo</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                       <th>Location</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>E-mail</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                  foreach($teachers as $teacher):
                                  ?>                                      
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label">#0021</label>
                                            </div>
                                        </td>
                                        <td class="text-center"><img src="<?php echo base_url();?>assets/uploads/teachers/<?= $teacher['profile_img']?>" width="70" height="20" alt="teacher"></td>
                                        <td class="text-capitalize"><?= $teacher['fname'].' '.$teacher['lname']?></td>
                                        <td class="text-capitalize"><?= $teacher['gender']?></td>
                                        <td class="text-capitalize"><?= $teacher['location']?></td>
                                        <td class="text-capitalize"><?= $teacher['address']?></td>
                                        <td><?= $teacher['phno']?></td>
                                        <td><?= $teacher['email']?></td>
                                         <td>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="flaticon-more-button-of-three-dots"></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                <!--
                                                <a class="dropdown-item activeBtn "   href="#"><i class="fas fa-ban text-orange-peel "></i>Inactive</a>
                                                
                                                       <a class="dropdown-item inactiveBtn"   href="#"><i class="fas fa-user-check text-orange-peel "></i>Active</a>
                                                       -->
                                                       
                                                <a class="dropdown-item" href="<?php echo base_url('/admin/profileteacher/'.$teacher['id']);?>"><i class="fas fa-info-circle text-orange-peel "></i>Show Profile</a>
                                                    <a class="dropdown-item" href="<?php echo base_url('/admin/editteacher/'.$teacher['id']);?>"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    <!--<a class="dropdown-item delBtn"  href="#"><i class="fas fa-trash text-orange-red"></i>Delete</a>-->
                                                    
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
                <!-- Teacher Table Area End Here -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--script for deleting,active and inactive 
<script>

$(document).ready(function(){
    //delete teacher ajax request
$("body").on("click",".delBtn",function(e){
  e.preventDefault();
  var tr=$(this).closest('tr');
  teacher_del_id=$(this).attr('id');
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
      url:"../php/action.php",
      type:"POST",
      data:{teacher_del_id:teacher_del_id},
      success:function(response)
      {
        $("#alert").html(response);
        setInterval('location.reload()',1000);
      }
    })    
  }
});
});
//making teacher active ajax request
$("body").on("click",".activeBtn",function(e){
  e.preventDefault();
  var tr=$(this).closest('tr');
  teacher_active_id=$(this).attr('id');
  Swal.fire({
  title: 'Are you sure?',
  text: "You want to Make Active!",
  icon: 'success',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Make Active!'
}).then((result) => {
  if (result.value) {
    $.ajax({
      url:"../php/action.php",
      type:"POST",
      data:{teacher_active_id:teacher_active_id},
      success:function(response)
      { 
        $("#alert").html(response);
        setInterval('location.reload()',1000);
      }
    });    
      }
        });
          });
          //making teacher active ajax request
$("body").on("click",".inactiveBtn",function(e){
  e.preventDefault();
  var tr=$(this).closest('tr');
  teacher_inactive_id=$(this).attr('id');
  Swal.fire({
  title: 'Are you sure?',
  text: "You want to Make Inactive!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Make Inactive!'
}).then((result) => {
  if (result.value) {
    $.ajax({
      url:"../php/action.php",
      type:"POST",
      data:{teacher_inactive_id:teacher_inactive_id},
      success:function(response)
      { 
        $("#alert").html(response);
        setInterval('location.reload()',1000);
      }
    });    
      }
        });
          });
});
</script>-->
