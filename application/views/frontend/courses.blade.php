@extends('frontend.includes.base')
@section('title', 'Torus Academy - Courses')
@section('_css')
<style>
    
#index__page .section__courses:before
{
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
                            Courses
                        </h1>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="{{ base_url('index1') }}">Home</a></li>
                            <li class="active">Courses</li>
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
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-1.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 53/120
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> 70-100$
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Technology</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">Flat design in web</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-2.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 60/100
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> 120-160$
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Science</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">Java: introduction</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-3.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 100/120
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Training</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">Ui / Ux training</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-4.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 16/80
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> 60-140$
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">History</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">History of information</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-5.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 150/300
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> 300$
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Social</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">Internet for people</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
                <div class="col-sm-4">
                    <div class="course__item">
                        <div class="course-item__img">
                            <img src="./assets1/img/courses_img-6.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course-item__info">
                            <div class="info__students">
                                <i class="ion-person-stalker" aria-hidden="true"></i> 68/128
                            </div>
                            <div class="info__price">
                                <i class="ion-ios-pricetags" aria-hidden="true"></i> Free
                            </div>
                        </div>
                        <div class="course-item__content">
                            <span class="course-item__branch">Spelling</span>
                            <h3>
                                <a href="{{ base_url('singleCourse') }}">Programming languages</a>
                            </h3>
                            <p class="course-item__desc">Lorem ipsum dolor sit amet, consetetur adipiscing elitsed do eius.</p>
                            <a class="btn btn-primary" href="{{ base_url('singleCourse') }}">Choose course</a>
                        </div> <!-- .teacher-course__content -->
                    </div> <!-- .course__item -->
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous"><i class="ion-android-arrow-back"></i></a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="ion-android-arrow-forward"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
</div>

@endsection