@extends('frontend.includes.base')
@section('title', 'Torus Academy')
@section('_css')

@endsection

@section('content')

<section class="section__home" id="section__home">

    <div class="container home__body">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">
                <div class="home__content">

                    <!-- Title -->
                    <h3 class="home__title" data-aos="zoom-in" data-aos-delay="1800">
                        Mordern Education System
                    </h3>

                    <!-- Heading -->
                    <h1 class="home__heading" data-aos="zoom-in" data-aos-delay="1800">
                        TORUS <span>.</span>
                    </h1>

                    <!-- Info -->
                    <p class="home__info" data-aos="fade-up" data-aos-delay="2800">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet voluptas placeat cupiditate neque eligendi facilis cum commodi.
                    </p>

                    <!-- Button -->
                    <div class="home__btn" data-aos="fade-up" data-aos-delay="2800">
                        <a href="#section__about" class="btn btn-primary">
                            Learn more
                        </a>
                    </div>

                </div> <!-- / .home__content -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->

    <div class="container home__footer">
        <div class="row">
            <div class="hidden-xs col-sm-6">
                <div class="home__address">
                    <i class="ion-android-pin"></i> Near Qasim Market,Rawapindi,Pakistan
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <!-- Social icons -->
                <ul class="home__social">
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                </ul>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
    <!-- Background image -->
    <div class="home__bg"></div>
</section> <!-- .section__home -->

<!-- section about -->
<style>
    #about__page .section__features {
        background: none !important;
    }
</style>
<section class="section__about hidden" id="section__about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about__body">
                    <div class="about__icon">
                        <i class="ion-ios-bookmarks-outline"></i>
                    </div>
                    <div class="section__subtitle dark__subtitle">
                        Short story about <span>lctrs.</span>
                    </div>
                    <h2 class="section__title dark__title">
                        About us
                    </h2>
                    <p class="about__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas consequuntur debitis ducimus sequi laudantium molestias necessitatibus hic similique. Iusto fuga doloremque nam culpa, animi odio, excepturi itaque dignissimos eaque est voluptas, dolore voluptate tempore quod, magni provident nisi quisquam quasi quas odit quia repellendus rerum accusamus! Laudantium, cumque distinctio repellendus aspernatur facilis, obcaecati natus, accusantium a recusandae soluta nobis ad quo dignissimos. Ipsam, earum, ea. Asperiores aspernatur beatae sit odit, excepturi inventore saepe atque officia, animi doloremque, adipisci ipsa deleniti.
                    </p> <!-- / .about__desc -->
                    <div class="about__quote">
                        <h2 class="about_quote__text"><i class="ion-quote"></i> A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring. <span class="quote_end"><i class="ion-quote"></i></span></h2>
                        <div class="author__signature">
                            <img src="./assets1/img/author.png" alt="...">
                        </div>
                        <p class="about_quote__author">
                            <span>George Henderson</span> / Professor
                        </p>
                    </div> <!-- / .about__quote -->
                    <a href="{{ base_url('about') }}" class="btn btn-accent">More About LCTRS.</a>
                </div> <!-- / .about__body -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__about -->
<div id="about__page">
    <section class="section__features" id="about__page">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature__item">
                        <div class="feature_item__icon">
                            <i class="ion-ios-flask-outline"></i>
                        </div>
                        <div class="feature_item__title">
                            Online courses
                        </div>
                        <div class="feature_item__desc" style="color: #6f6f6f;">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
                        </div>
                    </div> <!-- / .feature__item -->
                </div>
                <div class="col-sm-4">
                    <div class="feature__item">
                        <div class="feature_item__icon">
                            <i class="ion-ios-lightbulb-outline"></i>
                        </div>
                        <div class="feature_item__title">
                            Best teachers
                        </div>
                        <div class="feature_item__desc" style="color: #6f6f6f;">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
                        </div>
                    </div> <!-- / .feature__item -->
                </div>
                <div class="col-sm-4">
                    <div class="feature__item">
                        <div class="feature_item__icon">
                            <i class="ion-ios-bookmarks-outline"></i>
                        </div>
                        <div class="feature_item__title">
                            Book library
                        </div>
                        <div class="feature_item__desc" style="color: #6f6f6f;">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. In nemo dolore maxime voluptas quamgit.
                        </div>
                    </div> <!-- / .feature__item -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
</div>
<!-- section courses -->
<section class="section__courses">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section__subtitle light__subtitle">
                    Explore our best educational <span>programs</span>
                </div>
                <h2 class="section__title light__title">
                    Top courses
                </h2>
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="courses_item__wrapper">
                    <div class="courses__item">
                        <div class="card__top">
                            <p class="card__nbr">01.</p>
                            <div class="courses__icon courses_icon-1">
                                <i class="ion-ios-timer-outline"></i>
                            </div>
                            <div class="courses__title">
                                Training
                            </div>
                            <p class="courses__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
                            </p>
                        </div> <!-- / .card__top -->
                        <div class="card__back">
                            <div class="card_back__wrapper">
                                <div class="courses__title">
                                    Training
                                </div>
                                <ul class="course__info">
                                    <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 10 Dec - 20 Feb</li>
                                    <li>Rating:
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                    <li>Price: <span>160$</span></li>
                                    <li>Teacher: <span>J. Doe</span></li>
                                </ul> <!-- / .course__info -->
                                <a href="{{ base_url('courses1') }}" class="btn btn-primary text-center">Course page</a>
                            </div> <!-- / .card_back__wrapper -->
                        </div> <!-- / .card__back -->
                    </div> <!-- / .courses__item -->
                </div> <!-- / .courses_item__wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="courses_item__wrapper">
                    <div class="courses__item">
                        <div class="card__top">
                            <p class="card__nbr">02.</p>
                            <div class="courses__icon courses_icon-2">
                                <i class="ion-ios-mic-outline"></i>
                            </div>
                            <div class="courses__title">
                                Spelling
                            </div>
                            <p class="courses__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
                            </p>
                        </div> <!-- / .card__top -->
                        <div class="card__back">
                            <div class="card_back__wrapper" data-aos="zoom-in-up">
                                <div class="courses__title">
                                    Spelling
                                </div>
                                <ul class="course__info">
                                    <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 15 May - 15 Jul</li>
                                    <li>Rating:
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                    <li>Price: <span>175$</span></li>
                                    <li>Teacher: <span>J. Adams</span></li>
                                </ul> <!-- / .course__info -->
                                <a href="{{ base_url('courses1') }}" class="btn btn-primary text-center">Course page</a>
                            </div> <!-- / .card_back__wrapper -->
                        </div> <!-- / .card__back -->
                    </div> <!-- / .courses__item -->
                </div> <!-- / .courses_item__wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="courses_item__wrapper">
                    <div class="courses__item">
                        <div class="card__top">
                            <p class="card__nbr">03.</p>
                            <div class="courses__icon courses_icon-3">
                                <i class="ion-ios-people-outline"></i>
                            </div>
                            <div class="courses__title">
                                Team Work
                            </div>
                            <p class="courses__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
                            </p>
                        </div> <!-- / .card__top -->
                        <div class="card__back">
                            <div class="card_back__wrapper" data-aos="zoom-in-up">
                                <div class="courses__title">
                                    Team work
                                </div>
                                <ul class="course__info">
                                    <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 03 Aug - 05 Nov</li>
                                    <li>Rating:
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                    <li>Price: <span>85$</span></li>
                                    <li>Teacher: <span>G. Henderson</span></li>
                                </ul> <!-- / .course__info -->
                                <a href="{{ base_url('courses1') }}" class="btn btn-primary text-center">Course page</a>
                            </div> <!-- / .card_back__wrapper -->
                        </div> <!-- / .card__back -->
                    </div> <!-- / .courses__item -->
                </div> <!-- / .courses_item__wrapper -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="courses_item__wrapper">
                    <div class="courses__item">
                        <div class="card__top">
                            <p class="card__nbr">04.</p>
                            <div class="courses__icon courses_icon-4">
                                <i class="ion-ios-camera-outline"></i>
                            </div>
                            <div class="courses__title">
                                Design
                            </div>
                            <p class="courses__desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos vel similique eos voluptatem error voluptat.
                            </p>
                        </div> <!-- / .card__top -->
                        <div class="card__back">
                            <div class="card_back__wrapper">
                                <div class="courses__title">
                                    Design
                                </div>
                                <ul class="course__info">
                                    <li><i class="ion-calendar course-calendar" aria-hidden="true"></i> 01 Sept - 15 Feb</li>
                                    <li>Rating:
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                        <i class="ion-android-star rating-star" aria-hidden="true"></i>
                                    <li>Price: <span>140$</span></li>
                                    <li>Teacher: <span>O. Robertson</span></li>
                                </ul> <!-- / .course__info -->
                                <a href="{{ base_url('courses1') }}" class="btn btn-primary text-center">Course page</a>
                            </div> <!-- / .card_back__wrapper -->
                        </div> <!-- / .card__back -->
                    </div> <!-- / .courses__item -->
                </div> <!-- / .courses_item__wrapper -->
            </div>
            <div class="col-sm-12">
                <a href="{{ base_url('courses1') }}" class="btn btn-primary">All courses</a>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__courses -->

<!-- section stats -->
<section class="section__stats">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="stat__item">
                    <div class="stats_item__icon">
                        <i class="ion-person-stalker" aria-hidden="true"></i>
                    </div>
                    <div class="stats_item__nbr" data-from="0" data-to="28" data-speed="1000" data-refresh-interval="1">
                        0
                    </div>
                    <div class="stats_item__text">
                        Best teachers
                    </div>
                </div> <!-- / .stat__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat__item">
                    <div class="stats_item__icon">
                        <i class="ion-ios-bookmarks" aria-hidden="true"></i>
                    </div>
                    <div class="stats_item__nbr" data-from="0" data-to="35" data-speed="1000" data-refresh-interval="1">
                        0
                    </div>
                    <div class="stats_item__text">
                        Online programs
                    </div>
                </div> <!-- / .stat__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat__item">
                    <div class="stats_item__icon">
                        <i class="ion-university" aria-hidden="true"></i>
                    </div>
                    <div class="stats_item__nbr" data-from="0" data-to="267" data-speed="4000" data-refresh-interval="20">
                        0
                    </div>
                    <div class="stats_item__text">
                        Happy students
                    </div>
                </div> <!-- / .stat__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="stat__item">
                    <div class="stats_item__icon">
                        <i class="ion-ribbon-b" aria-hidden="true"></i>
                    </div>
                    <div class="stats_item__nbr" data-from="0" data-to="12" data-speed="1000" data-refresh-interval="1">
                        0
                    </div>
                    <div class="stats_item__text">
                        Years Experience
                    </div>
                </div> <!-- / .stat__item -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__footer -->

<!-- section teachers -->
<section class="section__teachers">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section_title__body">
                    <div class="section__subtitle dark__subtitle">
                        Meet our best <span>professionals</span>
                    </div>
                    <h2 class="section__title dark__title">
                        Our teachers
                    </h2>
                    <p class="section_title__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
                    </p> <!-- / .section_title__desc -->
                </div> <!-- / .section_title__body  -->
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="teacher__item">
                    <div class="teacher__info">
                        <div class="teacher__name">
                            George Dust
                        </div>
                        <div class="teacher__prof">
                            Psychology / Professor
                        </div>
                    </div> <!-- / .teacher__info -->
                    <div class="teacher__img">
                        <img src="./assets1/img/teacher_1.jpg" class="img-responsive" alt="...">
                    </div>
                    <div class="teacher_item__overlay">
                        <p class="overlay__desc">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. Ducimus expedita atque alias aperiam repudiandae verorepellat saepe eligendi. Obcaecati tempora emque.
                        </p>
                        <ul class="overlay__social">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-skype"></i></a></li>
                            <li><a href="#"><i class="ion-social-whatsapp-outline"></i></a></li>
                        </ul>
                        <a href="teacher-profile.html" class="btn btn-accent">More info</a>
                    </div> <!-- / .teacher_item__overlay -->
                </div> <!-- / .teacher__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="teacher__item">
                    <div class="teacher__info">
                        <div class="teacher__name">
                            Mellisa Doe
                        </div>
                        <div class="teacher__prof">
                            Economic / Professor
                        </div>
                    </div> <!-- / .teacher__info -->
                    <div class="teacher__img">
                        <img src="./assets1/img/teacher_2.jpg" class="img-responsive" alt="...">
                    </div>
                    <div class="teacher_item__overlay">
                        <p class="overlay__desc">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. Ducimus expedita atque alias aperiam repudiandae verorepellat saepe eligendi. Obcaecati tempora emque.
                        </p>
                        <ul class="overlay__social">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-skype"></i></a></li>
                            <li><a href="#"><i class="ion-social-whatsapp-outline"></i></a></li>
                        </ul>
                        <a href="teacher-profile.html" class="btn btn-accent">More info</a>
                    </div> <!-- / .teacher_item__overlay -->
                </div> <!-- / .teacher__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="teacher__item">
                    <div class="teacher__info">
                        <div class="teacher__name">
                            John Carter
                        </div>
                        <div class="teacher__prof">
                            Phisics / Ph.D
                        </div>
                    </div> <!-- / .teacher__info -->
                    <div class="teacher__img">
                        <img src="./assets1/img/teacher_3.jpg" class="img-responsive" alt="...">
                    </div>
                    <div class="teacher_item__overlay">
                        <p class="overlay__desc">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. Ducimus expedita atque alias aperiam repudiandae verorepellat saepe eligendi. Obcaecati tempora emque.
                        </p>
                        <ul class="overlay__social">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-skype"></i></a></li>
                            <li><a href="#"><i class="ion-social-whatsapp-outline"></i></a></li>
                        </ul>
                        <a href="teacher-profile.html" class="btn btn-accent">More info</a>
                    </div> <!-- / .teacher_item__overlay -->
                </div> <!-- / .teacher__item -->
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="teacher__item">
                    <div class="teacher__info">
                        <div class="teacher__name">
                            Ellison Johnson
                        </div>
                        <div class="teacher__prof">
                            History / Assistant professor
                        </div>
                    </div> <!-- / .teacher__info -->
                    <div class="teacher__img">
                        <img src="./assets1/img/teacher_4.jpg" class="img-responsive" alt="...">
                    </div>
                    <div class="teacher_item__overlay">
                        <p class="overlay__desc">
                            Lorem ipsum dolor sitamet consectetur adipisicing elit. Ducimus expedita atque alias aperiam repudiandae verorepellat saepe eligendi. Obcaecati tempora emque.
                        </p>
                        <ul class="overlay__social">
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-skype"></i></a></li>
                            <li><a href="#"><i class="ion-social-whatsapp-outline"></i></a></li>
                        </ul>
                        <a href="teacher-profile.html" class="btn btn-accent">More info</a>
                    </div> <!-- / .teacher_item__overlay -->
                </div> <!-- / .teacher__item -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__footer -->
<!-- section process -->
<section class="section__process">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section_title__body">
                    <div class="section__subtitle dark__subtitle">
                        Easy steps to <span>learning</span>
                    </div>
                    <h2 class="section__title dark__title">
                        Study process
                    </h2>
                    <p class="section_title__desc">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores a atque, esse delectus. Vel quas voluptate atque natus laboriosam, vero molestiae repudiandae eaque veniam repellendus nemo unde suscipit ducimus tenetur.
                    </p> <!-- / .about__desc -->
                </div> <!-- / .section_title__body  -->
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-7">
                <div class="process__item process__item-1">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="process_item__icon">
                                <i class="ion-log-in"></i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="process_item__title" data-aos="zoom-in-up">
                                Register in LCTRS<span>.</span>
                            </div>
                            <div class="process_item__desc">
                                Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae doloremque enim odit nisi recusan.
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .process__item -->
            </div>
            <div class="col-sm-5 hidden-xs">
                <div class="process_item__arrow-1">
                    <i class="ion-ios-redo-outline"></i>
                </div>
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <div class="process_item__arrow-2">
                    <i class="ion-ios-undo-outline"></i>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="process__item process__item-2">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="process_item__icon">
                                <i class="ion-images"></i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="process_item__title" data-aos="zoom-in-up">
                                Select liked course
                            </div>
                            <div class="process_item__desc">
                                Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae dolorem.
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .process__item -->
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-sm-7">
                <div class="process__item process__item-3">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="process_item__icon">
                                <i class="ion-happy-outline"></i>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="process_item__title" data-aos="zoom-in-up">
                                Enjoy the practice
                            </div>
                            <div class="process_item__desc">
                                Rerum perspiciatis iste quidem, expedita dolorem commodi provident vitae doloremque enim odit nisi recusan.
                            </div>
                        </div>
                    </div> <!-- / .row -->
                </div> <!-- / .process__item -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- section coming-soon -->
<section class="section__coming-soon">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div id="clock"></div> <!-- / #clock -->
                <div class="coming-soon__text">
                    <h2 class="coming-soon__title">Free conference <span>2017</span></h2>
                    <p class="coming-soon__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur omnis nam consequatur, illum aliquid optio quidem nemo necessitatibus velit! Laboriosam porro amet iste, quisquam deserunt optio consequatur itaque numquam provident.</p>
                    <p class="coming-soon__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ea, omnis voluptates, vero ab alias harum totam animi corporis excepturi in, facere mollitia quasi nihil illo placeat? Optio, corrupti quis.</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-6">
                <div class="coming-soon__img">
                    <img src="./assets1/img/coming-soon_img.jpg" class="img-responsive" alt="...">
                </div>
                <div class="coming-soon__btn text-center">
                    <a href="event-single.html" class="btn btn-primary">Register now</a>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__footer -->
<!-- section testimonials -->
<section class="section__testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section__subtitle light__subtitle">
                    Our students about <span>lctrs.</span>
                </div>
                <h2 class="section__title light__title">
                    Testimonials
                </h2>
            </div>
        </div> <!-- / .row -->
        <!-- testimonials carousel -->
        <div class="row">
            <div class="col-xs-12">
                <div class="testimonials__icon">
                    <i class="ion-quote" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-xs-12">
                <div id="testimonials__carousel" class="owl-carousel owl-theme">
                    <div class="testimonials__item">
                        <div class="testimonials_item__title">
                            <span>LCTRS</span> is the best choice for learning!
                        </div>
                        <div class="testimonials_item__text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.
                        </div>
                        <div class="testimonials_item__author">
                            <span>Andrew Black</span> - Bachelor
                        </div>
                    </div> <!-- / .testimonials__item -->
                    <div class="testimonials__item">
                        <div class="testimonials_item__title">
                            <span>LCTRS</span> is wonderful place for everyone.
                        </div>
                        <div class="testimonials_item__text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.
                        </div>
                        <div class="testimonials_item__author">
                            <span>Mellisa Doe</span> - Ph.D
                        </div>
                    </div> <!-- / .testimonials__item -->
                    <div class="testimonials__item">
                        <div class="testimonials_item__title">
                            Professionals work <span>here.</span>
                        </div>
                        <div class="testimonials_item__text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence.
                        </div>
                        <div class="testimonials_item__author">
                            <span>Ellison Johnson</span> - Master
                        </div>
                    </div> <!-- / .testimonials__item -->
                    <div class="testimonials__item">
                        <div class="testimonials_item__title">
                            In <span>LCTRS</span> I found the best courses.
                        </div>
                        <div class="testimonials_item__text">
                            A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing.
                        </div>
                        <div class="testimonials_item__author">
                            <span>Eric Bronson</span> - Bachelor
                        </div>
                    </div> <!-- / .testimonials__item -->
                </div> <!-- / .owl-carousel -->
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__footer -->

<!-- section instagram -->
<section class="section__instagram">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__subtitle instagram__title">
                    Follow <a href="#">@TORUS.</a> in Instagram
                </div>
            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-1.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-2.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-3.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-4.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-5.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2">
                <div class="intagram_img__body">
                    <a href="#" class="insagram__img">
                        <img src="./assets1/img/instagram_img-6.jpg" class="img-responsive" alt="...">
                    </a>
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section> <!-- .section__footer -->

@endsection