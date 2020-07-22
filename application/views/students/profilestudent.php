<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- SITE META -->
    <title>EduPress | Responsive Education Learning Website Templates</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body class="leftmenu memberprofile">
    <!-- ******************************************
    START SITE HERE
    ********************************************** -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
            <div class="demo-parallax parallax section looking-photo nopadbot" data-stellar-background-ratio="0.5" style="background-image:url('<?php echo base_url();?>/assets/upload/demo_01.jpg');">
                <div class="page-title section nobg">
                    <div class="container-fluid">
                        <div class="clearfix">
                            <div class="title-area pull-left">
                                <h2>My account <small>Hello there, this is my profile.</small></h2>
                            </div>
                            <!-- /.pull-right -->
                            <div class="pull-right hidden-xs">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        
                                        <li class="active">My Account</li>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="about-widget clearfix">
                                <div class="widget-title">
                                    <h3>About Me</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="team-member-img text-center">
                                            <img src="<?php echo base_url();?>assets/uploads/students/<?= $student['profile_img']?>" alt="team member img" class="img-responsive">
                                            <br>
                                          
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-md-9 col-sm-12">
                                        <div class="team-member-name">
                                            <p><?= $student['fname'].' '.$student['lname']?></p>
                                            <span>Student</span>
                                        </div>
                                        <hr class="invis">
                                        <div class="widget-title">
                                            <h3>Basic Info</h3>
                                            <hr>
                                        </div><!-- end title -->

                                        <ul >
                                        <li><h4>Guardian Name</h4>
                                               <p><?= $student ['guardian_name'] ?></p>
                                            </li>
                                            <li><h4>Email</h4>
                                               <p><?= $student['email']?></p>
                                            </li>
                                            <li><h4>Phone</h4>
                                               <p><?= $student['phone']?></p>
                                            </li>
                                            <li><h4>Location</h4>
                                               <p><?= $student['location']?></p>
                                            </li>
                                        </ul>
                                    </div><!-- end col -->
                                </div><!-- end row -->      
                            </div><!-- end widget -->
                        </div><!-- end col -->
                       
                        <div class="col-md-5 col-sm-12 m30">
                        <!--loading alerts-->
                        <?php
                        $this->load->view('partials/alerts');?>
                          <?php if(!$student_teacher):?>
                      <div class="widget-title">
                                    <h3>Choose Your Class!</h3>
                                    <hr>
                                </div><!-- end title -->
                        <label class="radio-inline"><input type="radio" id="less-then-5-btn" name="less-then-5-btn" checked >Less then 5</label>
                        <label class="radio-inline"><input type="radio" id="greater-then-5-btn" name="greater-then-5-btn">Greater then 5</label>
                     
                        
                         <!--less the 5-->
                        <div id="less-then-5">
                            <div>
                                <div class="widget-title">
                              
                                    <h3  style="margin-top:30px;">Select Class</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="defaultform">
                                        <div   class="form-group" >
                                    <select class="form-control"  placeholder="Select Class" id="class">
                                    <option value="">Select class</option>
                                    <?php foreach($classes as $class):?>
                                    <option value="<?= $class['id']?>"><?= $class['class']?>
															
                                    <?php endforeach;?>		
                                                            </select>                                                           
                                                        </div>
                                </div>
                            </div>
                                    <div class="widget-title">
                                    <h3>Select Subjects</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="defaultform">   
                                   <?php echo form_open('students/selectTeacher')?>      
                                        <div class="form-group" >
                                        <select id="subject" class="form-control" name="subject" placeholder="Select Subjects" required>
                                                </select>
                                                        </div>
                                <div class="form-group">
                                <input type="submit" value="SELECT TEACHERS" id="submit" class="btn btn-primary">
                                                    </div>
                                                             </form> 
                                                                 </div>
                        </div> <!--end less then 5-->
                        <div id="greater-then-5" style="display: none;">
                            <div>
                                <div class="widget-title">
                                    <h3 style="margin-top:30px;">Select Group</h3>
                                    <hr>
                                </div><!-- end title -->
                                <div class="defaultform">
                                    <?php echo form_open('students/SelectTeacher')?>
                                        <div class="form-group" >
                                    <select class="form-control" name="group" placeholder="Select Group" id="group">
                                    <option value="">Select group</option>
                                    <?php foreach($groups as $group):?>
                                    <option value="<?= $group['g_id']?>"><?= $group['group_name']?>
															
                                    <?php endforeach;?>		
                                                            </select>                                                           
                                                        </div>
                                 <div class="form-group">
                                <input type="submit" value="SELECT TEACHERS" id="submit" class="btn btn-primary">
                                                    </div>
                                                </form>
                                                            </div>
                                                                </div>
                                                                    </div>
                               
                             
                                                </div>
                                                        </div> <!--end less then 5-->
                                                            </div><!-- end about-widget and end less then 5 -->
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                    <div class="row">
                                <?php else:
                                ?>
                                <h3 style="margin-top:15px;">Teachers selected</h3>
                                    <hr>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                            <th>Teacher Name</th>
                                            <th>Fees</th>
                                            <th></th>
                                            </tr>                                          
                                        </thead>
                                        <tbody>
                                                 <?php
                                             foreach($student_teacher as $st):
                                                     ?>
                                            <tr> 
                                            <td class="text-capitalize"><?= $st['teacher_name']?></td>
                                            <td><?= $st['teacher_fees']?></td>
                                            <td><a href="<?php echo base_url('/students/removeteacher/'.$st['teacher_id']);?>" class="btn btn-primary btn-sm">Remove</a></td>
                                                            <?php
                                                endforeach;
                                                ?>
                                              </tr>
                                        </tbody>
                                    </table>
                                    <div class="form-group text-center">
                                    <a href="" class="btn btn-default">
                                       Pay now
                                    </a>

                                    </div>

                                                <?php     
                                        endif;?>
                                </div>
                                                </div><!-- end container -->
                                            </div><!-- end section -->
                                </div>    
    <!-- ******************************************
    /END SITE
    ********************************************** -->

    <!-- ******************************************
    DEFAULT JAVASCRIPT FILES
    ********************************************** -->
    <script src="js/all.js"></script>
    <script src="js/custom.js"></script>
</body>
<!--script for hiding and showing less then 5 and greater then 5-->
<script>
    $(document).ready(function(){
    $("#greater-then-5-btn").click(function(){
    $("#less-then-5").hide();
    $("#greater-then-5").show(500);
});
$("#less-then-5-btn").click(function(){
    $("#greater-then-5").hide();
    $("#less-then-5").show(500);
});
    });
</script>
<script>
$(document).ready(function(){
$('#class').change(function(){
    var class_id=$('#class').val();
    if(class_id !=''){
        $.ajax({
            url:"<?php echo base_url();?>Students/fetchsubject",
            method:"POST",
            data:{class_id:class_id},
            success:function(response){
                $('#subject').html(response);
                //$('#subject').attr('multiple','multiple');
            }
        });
    }
});
});
    
</script>
</html>