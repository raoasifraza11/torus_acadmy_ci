<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <!-- Header -->
        <div class="navbar-header">

            <!-- Collapse toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar__collapse"
                    aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo base_url('/'); ?>">
                Torus<span>.</span>
                <!--<img class="img-responsvie" src="assets/img/torus-logo.png"  alt="Torus Academy">-->
            </a>

        </div> <!-- / .navbar-header -->

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbar__collapse">
            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="<?php echo base_url('/'); ?>">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
                <li><a href="<?php echo base_url('courses'); ?>">Courses </a></li>
                <li><a href="#">Blog </a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#signinModal" data-toggle="modal"><i class="ion-log-in"></i> Sign In</a></li>
                <li><a href="<?php echo base_url('registration_category'); ?>"><i class="ion-android-person"></i> Sign Up</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container -->
</nav>
