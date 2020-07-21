
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>School</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>/assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/assets/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>/assets/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>/assets/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>/assets/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>/assets/images/apple-touch-icon-152x152.png">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css">
    <!-- COLORS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/colors.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/multiselect.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css">
	<script src="<?php echo base_url();?>/assets/js/multiselect.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/datepicker.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
 <!-- ******************************************
    START SITE HERE
    ********************************************** -->
    <div id="wrapper">
        <header class="header normal-header" data-spy="affix" data-offset-top="197">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-full">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand with-text" title="" href="index.html">Torous.</a>
                        </div>
                        <!-- end navbar header -->
                        <div id="navbar" class="navbar-collapse collapse">
                        <?php if(!$this->session->userdata('logged_in')):?>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="btn btn-default"><a title="Login Teacher" href="<?php echo base_url();?>signup">SIGN UP</a></li>  
                                <li class="btn btn-default"><a title="Login Teacher" href="<?php echo base_url();?>login">LOG IN</a></li>   
                                <!--  
                                 <li class="btn btn-default"><a title="Logout " href="studentlogout.php">Logout</a></li>
                                  <li class="btn btn-default"><a title="Logout" href="teacherlogout.php">Logout</a></li>
                                 -->
                            </ul>
                            <?php endif;?>
                            <?php if($this->session->userdata('logged_in')):?>
                                <ul class="nav navbar-nav navbar-right">

                                <li class="btn btn-default"><a title="Logout" href="<?php echo base_url();?>students/logout">LOG OUT</a></li>   
                                <!--  
                                 <li class="btn btn-default"><a title="Logout " href="studentlogout.php">Logout</a></li>
                                  <li class="btn btn-default"><a title="Logout" href="teacherlogout.php">Logout</a></li>
                                 -->
                            </ul>
                            <?php endif;?>
                            <!-- end dropdown -->
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
                <!-- end nav -->
            </div>
            <!-- end container -->
        </header>
        <!-- end header -->
        
</body>
   
       