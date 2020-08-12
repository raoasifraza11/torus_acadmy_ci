@extends('frontend.includes.base')
@section('title', 'Torus Academy - SignUp')
@section('_css')
<style>
    #index__page .section__courses {
    background: #fff;
}
#index__page .section__courses:before {
    
     background-color: #fff; 
}
</style>
@endsection

@section('content')

<div id="courses__page">
    <section class="section__home">
        <div class="container home__body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home__content">

                        <!-- Heading -->
                        <h1 class="home__heading">
                            Signup
                        </h1>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="{{ base_url('index1') }}">Home</a></li>
                            <li class="active">Signup</li>
                        </ol>

                    </div> <!-- / .home__content -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- Background image -->
        <div class="home__bg"></div>
    </section>

    <!-- section courses -->
    <section class="section__courses">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-2">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/teacher.png" class="img-responsive" alt="...">
                        </div>

                        <div class="course-item__content">
                            <p class="course-item__desc">Give lessons or manage bookings with your customers</p>
                            <center><a class="btn btn-primary" href="{{base_url('teacherRegister')}}">Teacher Signup</a></center>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/student.png" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__content">
                            <p class="course-item__desc">Have lessons, message your tutor or watch your lessons back</p>
                            <center><a class="btn btn-primary" href="{{base_url('studentRegister')}}">Student Signup</a></center>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>

            </div> <!-- / .row -->


        </div> <!-- / .container -->
    </section>

</div>

@endsection