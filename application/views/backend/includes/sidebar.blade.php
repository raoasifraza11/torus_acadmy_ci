<h5 class="brand-name"><div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
            </div> Torus Academy<a href="{{ base_url('index') }}" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">University</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">Admin</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="{{base_url('professors')}}"><i class="fa fa-black-tie"></i><span>Professors</span></a></li>
                        
                        <li><a href="{{base_url('studentDashboard')}}"><i class="fa fa-users"></i><span>Students</span></a></li>
                       
                        <li><a href="{{base_url('courses')}}"><i class="fa fa-graduation-cap"></i><span>Courses</span></a></li>                        
                       
                    </ul>
                </nav>
            </div>
            <div class="tab-pane fade" id="menu-admin" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="{{base_url('payments')}}"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                        <li><a href="{{base_url('taskboard')}}"><i class="fa fa-list-ul"></i><span>Taskboard</span></a></li>
                        <li><a href="{{base_url('attendance')}}"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
                        <li><a href="leave.html"><i class="fa fa-flag"></i><span>Leave</span></a></li>
                        <li><a href="{{base_url('settings')}}"><i class="fa fa-gear"></i><span>Settings</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>