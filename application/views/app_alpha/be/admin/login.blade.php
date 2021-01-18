<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?php echo base_url('application/public_html/assets_alpha/fe_v1/ico/favicon.ico'); ?>" type="image/x-icon"/>

    <title>:: Tours :: Login</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="<?php echo base_url('application/public_html/assets_alpha/be_v1/plugins/bootstrap/css/bootstrap.min.css'); ?>" />

    <!-- Core css -->
    <link rel="stylesheet" href="<?php echo base_url('application/public_html/assets_alpha/be_v1/css/style.min.css'); ?>"/>

</head>
<body class="font-muli theme-cyan gradient">
<form action="<?php echo base_url('login'); ?>" method="post">
    <input type="hidden" name="dsh" value="a" >

    <div class="auth option2">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <a class="header-brand" href="<?php echo base_url('/'); ?>"><i class="fa fa-graduation-cap brand-logo"></i></a>
                        <div class="card-title mt-3">Login to your account</div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
						<span  style="color: red;text-align: center;display: none" id="login_error">Email or password is invalid </span>

					</div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" />
                            <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="<?php echo asset_url('fe_v1/plugins/jquery/jquery-1.12.4.min.js'); ?>"></script>

<!-- Start project main js  and page js -->
<script src="<?php echo base_url('application/public_html/assets_alpha/be_v1/js/core.js'); ?>"></script>
<script>
	<?php
	if($this->session->flashdata('login_error')){
	?>
	$(document).load(function () {
		// $('#singIn').click();
		console.log("value set");
		$('#login_error').css('display','block')
	});
	<?php }
	?>
</script>
</body>

<!-- Mirrored from puffintheme.com/demo/eric/university/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 13:03:39 GMT -->
</html>
