<div id="left-sidebar" class="sidebar">
    <h5 class="brand-name"><div class="hleft">
            <a class="header-brand" href="<?php echo base_url('/'); ?>"><i class="fa fa-graduation-cap brand-logo"></i></a>
        </div> Ericsson<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">Administrator</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Site Setting</a></li>
    </ul>
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="active"><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a href="<?php echo base_url('admin/courses'); ?>"><i class="fa fa-black-tie"></i><span>Courses</span></a></li>
                    <li><a href="<?php echo base_url('admin/students'); ?>"><i class="fa fa-black-tie"></i><span>Students</span></a></li>
                    <li><a href="<?php echo base_url('admin/teachers'); ?>"><i class="fa fa-users"></i><span>Teachers</span></a></li>
                    <li><a href="<?php echo base_url('admin/invoices'); ?>"><i class="fa fa-users"></i><span>Invoices</span></a></li>
                    <li><a href="<?php echo base_url('admin/revenue'); ?>"><i class="fa fa-users"></i><span>Revenue</span></a></li>
                    <li><a href="<?php echo base_url('admin/payments'); ?>"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="tab-pane fade" id="menu-admin" role="tabpanel">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li><a href="<?php echo base_url('admin/site-setting'); ?>"><i class="fa fa-graduation-cap"></i><span>Site Configuration</span></a></li>
                    <li><a href="<?php echo base_url('admin/copyrights'); ?>"><i class="fa fa-gear"></i><span>Copyrights</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
