@extends('frontend.includes.base')
@section('title', 'Torus Academy - Single Course')
@section('_css')

@endsection

@section('content')

<div id="course-single__page">
    <section class="section__home">
        <div class="container home__body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home__content">

                        <!-- Heading -->
                        <h1 class="home__heading">
                            Course
                        </h1>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="{{ base_url('index1') }}">Home</a></li>
                            <li class="active">Single course</li>
                        </ol>

                    </div> <!-- / .home__content -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- Background image -->
        <div class="home__bg"></div>
    </section>

    <!-- section course-single -->
    <section class="section__course-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <div class="course__body">
                        <div class="course__title">
                            JavaScript 2017: New practices
                        </div>
                        <div class="course__posttime">
                            Posted on August 08, 2017
                        </div>
                        <div class="course__img">
                            <img src="./assets1/img/blog-item_img-2.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="course__info">
                            <div class="course-info__item">
                                <div class="course-info__icon">
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="course-info__text">
                                    <span>Rating</span>
                                    <p>4.6 (38 Ratings)</p>
                                </div>
                            </div>
                            <div class="course-info__item">
                                <div class="course-info__icon">
                                    <i class="ion-images"></i>
                                </div>
                                <div class="course-info__text">
                                    <span>Category</span>
                                    <p>Web / Technology</p>
                                </div>
                            </div>
                            <div class="course-info__item">
                                <div class="course-info__icon">
                                    <i class="ion-android-time"></i>
                                </div>
                                <div class="course-info__text">
                                    <span>Duration</span>
                                    <p>36 Hours</p>
                                </div>
                            </div>
                        </div> <!-- .course__info -->
                        <h3 class="course_desc__title">Course description</h3>
                        <p class="course__desc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                        <p class="course__desc">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                        <h3 class="course_desc__title">Target audience</h3>
                        <ul class="course_audience__list">
                            <li><i class="ion-checkmark-round"></i> Separated they live in Bookmarksgrove right at the coast.</li>
                            <li><i class="ion-checkmark-round"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
                            <li><i class="ion-checkmark-round"></i> Lorem Ipsum decided to leave for the far World of Grammar.</li>
                            <li><i class="ion-checkmark-round"></i> The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</li>
                            <li><i class="ion-checkmark-round"></i> A small river named Duden flows by their place and supplies.</li>
                            <li><i class="ion-checkmark-round"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
                        </ul>
                        <h3 class="course_desc__title">Course requirements</h3>
                        <ul class="course_requirements__list">
                            <li><i class="ion-android-arrow-forward"></i> Separated they live in Bookmarksgrove right at the coast.</li>
                            <li><i class="ion-android-arrow-forward"></i> Even the all-powerful Pointing has no control about the blind texts.</li>
                            <li><i class="ion-android-arrow-forward"></i> Lorem Ipsum decided to leave for the far World of Grammar.</li>
                            <li><i class="ion-android-arrow-forward"></i> The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</li>
                        </ul>
                        <p class="course__desc">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life of blind text.</p>
                        <div class="course__teachers">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <h3 class="course-teacher__title">Course teachers</h3>
                                    <p class="course-teacher__desc">Reiciendis alias molestiae fuga accusantium, expedita nam natus in dolores dignissimos repellat placeat necessitatibus porro unde sunt amet quasi consequatur udiandae volup. Voluptas accusantium officia quaerat minima ex aspernatur.</p>
                                    <a href="#" class="btn btn-primary">Learn more</a>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="teacher__item">
                                        <div class="teacher__info">
                                            <div class="teacher__name">
                                                Steaven Martins
                                            </div>
                                            <div class="teacher__prof">
                                                Ecology / Professor
                                            </div>
                                        </div> <!-- / .teacher__info -->
                                        <div class="teacher__img">
                                            <img src="./assets1/img/teacher_6.jpg" class="img-responsive" alt="...">
                                        </div>
                                    </div> <!-- / .teacher__item -->
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-4">
                                    <div class="teacher__item">
                                        <div class="teacher__info">
                                            <div class="teacher__name">
                                                Eric Bronson
                                            </div>
                                            <div class="teacher__prof">
                                                Design / Professor
                                            </div>
                                        </div> <!-- / .teacher__info -->
                                        <div class="teacher__img">
                                            <img src="./assets1/img/teacher_8.jpg" class="img-responsive" alt="...">
                                        </div>
                                    </div> <!-- / .teacher__item -->
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- .event__speakers -->

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#curriculum">Curriculum</a></li>
                            <li><a data-toggle="tab" href="#reviews">Reviews</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="curriculum" class="tab-pane fade in active">
                                <p class="subheading">Course <span>plan</span></p>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 01</span>
                                                <p class="lecture__title">Introduction</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    55min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 02</span>
                                                <p class="lecture__title">Level 1: Consectetur adipisicing elit.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    1h 10min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 03</span>
                                                <p class="lecture__title">Tempora explicabo aliquam suscipit.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    1h 20min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 04</span>
                                                <p class="lecture__title">Sapiente ut nihil dolorum ratione.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    60min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 05</span>
                                                <p class="lecture__title">Tempore libero minima dolor.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    1h 35min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 06</span>
                                                <p class="lecture__title">Pariatur laboriosam aperiam autem.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    1h 20min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 07</span>
                                                <p class="lecture__title">Reiciendis quo officia ipsa.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    1h 15min
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="ion-android-alarm-clock"></i></td>
                                            <td>
                                                <span>Lecture 08</span>
                                                <p class="lecture__title">Dignissimos recusandae doloribus.</p>
                                            </td>
                                            <td>
                                                <div class="lecture__time">
                                                    40min
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <p class="subheading"><span>4</span> Reviews</p>
                                <div class="comments">
                                    <ul class="comments__list">
                                        <li class="comment">
                                            <div class="comment__avatar">
                                                <img src="./assets1/img/instagram_img-6.jpg" class="img-responsive" alt="...">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__user">
                                                    Robert Jones
                                                </div>
                                                <div class="comment__date">
                                                    August 8, 2017 at 1:15 pm
                                                </div>
                                                <div class="comment__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni dicta alias enim quasi sapiente saepe, repellat soluta commodi delectus doloribus, veniam odit hic ratione quae modi earum dolor dignissimos quas?
                                                </div>
                                                <div class="comment__reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li> <!-- .comment -->
                                        <li class="comment">
                                            <div class="comment__avatar">
                                                <img src="./assets1/img/instagram_img-2.jpg" class="img-responsive" alt="...">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__user">
                                                    Jane Doe
                                                </div>
                                                <div class="comment__date">
                                                    August 12, 2017 at 3:15 pm
                                                </div>
                                                <div class="comment__message">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci iusto sapiente magnam, dolorum laudantium eius corporis odit deserunt aliquid architecto ut veniam cumque repudiandae commodi impedit tempore vitae modi voluptates amet aliquam. Quisquam, temporibus, tempore! Animi veritatis laudantium ratione blanditiis!
                                                </div>
                                                <div class="comment__reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li> <!-- .comment -->
                                        <li class="comment">
                                            <div class="comment__avatar">
                                                <img src="./assets1/img/instagram_img-1.jpg" class="img-responsive" alt="...">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__user">
                                                    Jessica Border
                                                </div>
                                                <div class="comment__date">
                                                    October 8, 2017 at 11:42 am
                                                </div>
                                                <div class="comment__message">
                                                    Sint nisi quod culpa animi sit a voluptas quia, dolor qui eius esse itaque velit quasi quibusdam, modi nesciunt facere harum! Error adipisci nesciunt praesentium! Dolorum magni dolorem adipisci vitae, culpa praesentium inventore voluptates corporis quia ipsum a maxime fugiat.
                                                </div>
                                                <div class="comment__reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li> <!-- .comment -->
                                        <li class="comment">
                                            <div class="comment__avatar">
                                                <img src="./assets1/img/instagram_img-6.jpg" class="img-responsive" alt="...">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__user">
                                                    Robert Jones
                                                </div>
                                                <div class="comment__date">
                                                    October 14, 2017 at 11:10 am
                                                </div>
                                                <div class="comment__message">
                                                    placeat eaque quaerat distinctio voluptatibus modi. Asperiores fugiat deleniti praesentium enim incidunt quaerat cupiditate repellendus ad reprehenderit neque, qui, eveniet veniam quis voluptate ab architecto quam cum nihil, accusamus culp.
                                                </div>
                                                <div class="comment__reply">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </li> <!-- .comment -->
                                    </ul> <!-- .comments__list -->
                                </div> <!-- .comments -->
                                <p class="subheading">
                                    Leave a <span>review</span>
                                </p>
                                <form class="comments__form">

                                    <div class="form-group">
                                        <label for="name" class="sr-only">Name (Required)</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Full Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email address (Required)</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your E-mail">
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="sr-only">Message (Required)</label>
                                        <textarea name="message" class="form-control" rows="6" id="message" placeholder="Enter Your Message"></textarea>
                                        <span class="help-block"></span>
                                    </div>

                                    <button type="submit" class="btn btn-accent">
                                        Submit review
                                    </button>
                                </form>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <h3>Menu 2</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <h3>Menu 3</h3>
                                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </div> <!-- .course__body -->
                </div>
                <div class="col-sm-5 col-md-4">
                    <div class="course__sidebar">

                        <div class="sidebar__item">
                            <div class="course__price">
                                Total Price: <span>120$</span>
                            </div>
                            <ul class="course_features__list">
                                <li><i class="ion-ios-game-controller-b"></i> Skill level: <span>Beginner</span></li>
                                <li><i class="ion-volume-high"></i> Language: <span>English</span></li>
                                <li><i class="ion-ribbon-b"></i> Certificate: <span>Yes</span></li>
                                <li><i class="ion-ios-people"></i> Max students: <span>60</span></li>
                                <li><i class="ion-ios-bookmarks"></i> Lectures: <span>8</span></li>
                            </ul>
                            <button type="submit" class="btn btn-block btn-accent">
                                Take this course
                            </button>
                        </div> <!-- .sidebar__item -->

                        <div class="sidebar__item">
                            <p class="subheading">Search</p>
                            <form class="search-form" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter keywords">
                                </div>
                                <button type="submit" class="btn btn-block btn-accent">
                                    Search <i class="icon ion-search"></i>
                                </button>
                            </form> <!-- .search-form -->
                        </div> <!-- .sidebar__item -->

                        <div class="sidebar__item">
                            <p class="subheading">Categories</p>
                            <ul class="categories">
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i> Technology (<span>4</span>)</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i> Training (<span>15</span>)</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i> Social (<span>8</span>)</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i> History (<span>7</span>)</a></li>
                            </ul> <!-- .categories -->
                        </div> <!-- .sidebar__item -->

                        <div class="sidebar__item">
                            <p class="subheading">Newsletter</p>
                            <p class="newsletter__subtitle">Subscribe to our email newsletter to receive updates and news.</p>

                            <!-- Newsletter form -->
                            <form class="footer__form newsletter__form_clone">
                                <div class="form-group">
                                    <label for="newsletter__email" class="sr-only">E-mail address</label>
                                    <input type="email" class="form-control" id="newsletter__email" placeholder="Email address">
                                </div>
                                <button type="submit" class="btn btn-block btn-accent">
                                    Subscribe <i class="icon ion-paper-airplane"></i>
                                </button>
                            </form> <!-- .newsletter__form -->

                        </div> <!-- .sidebar__item -->

                        <div class="sidebar__item">
                            <p class="subheading">Popular courses</p>
                            <div class="recent__posts">
                                <div class="sidebar__post">
                                    <a class="sidebar_post__img" href="#" title="">
                                        <img src="./assets1/img/instagram_img-4.jpg" class="img-responsive" alt="...">
                                    </a>
                                    <div class="sidebar_post__detail">
                                        <h5><a href="{{ base_url('singleCourses') }}" title="">Flat design in web</a></h5>
                                        <span>Course Price: <strong>Free</strong></span>
                                    </div>
                                </div> <!-- Sidebar Post -->
                                <div class="sidebar__post">
                                    <a class="sidebar_post__img" href="#" title="">
                                        <img src="./assets1/img/instagram_img-2.jpg" class="img-responsive" alt="...">
                                    </a>
                                    <div class="sidebar_post__detail">
                                        <h5><a href="{{ base_url('singleCourses') }}" title="">Internet for people</a></h5>
                                        <span>Course Price: <strong>70-120$</strong></span>
                                    </div>
                                </div> <!-- Sidebar Post -->
                                <div class="sidebar__post">
                                    <a class="sidebar_post__img" href="#" title="">
                                        <img src="./assets1/img/instagram_img-3.jpg" class="img-responsive" alt="...">
                                    </a>
                                    <div class="sidebar_post__detail">
                                        <h5><a href="{{ base_url('courses1') }}" title="">UI / UX training</a></h5>
                                        <span>Course Price: <strong>Free</strong></span>
                                    </div>
                                </div> <!-- Sidebar Post -->
                            </div> <!-- .popular__posts -->
                        </div> <!-- .sidebar__item -->

                    </div> <!-- .blog__sidebar -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
</div>

@endsection