@extends('frontend.includes.base')
@section('title', 'Torus Academy - Blog')
@section('_css')

@endsection

@section('content')

<div id="blog-grid__page">
    <section class="section__home">
        <div class="container home__body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="home__content">

                        <!-- Heading -->
                        <h1 class="home__heading">
                            Our blog
                        </h1>

                        <!-- Breadcrumbs -->
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Blog</li>
                        </ol>

                    </div> <!-- / .home__content -->
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->

        <!-- Background image -->
        <div class="home__bg"></div>
    </section>


    <!-- section blog -->
    <section class="section__blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-1.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#study</a> <a href="#">#Torus</a> <a href="#">#conference</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 09 October 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>New courses realised</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 36</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 246</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-2.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#study</a> <a href="#">#LCTRS</a> <a href="#">#conference</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 15 October 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>LCTRS conference 2020</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 85</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 125</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-3.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#learn</a> <a href="#">#design</a> <a href="#">#courses</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 03 November 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>Obtaining certificates</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 133</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 591</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-1.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#study</a> <a href="#">#LCTRS</a> <a href="#">#conference</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 09 October 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>New courses realised</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 36</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 246</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-2.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#study</a> <a href="#">#LCTRS</a> <a href="#">#conference</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 15 October 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>LCTRS conference 2020</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 85</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 125</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="blog__item" data-aos="zoom-in-up">
                        <div class="blog-item__img">
                            <img src="assets/img/blog_img-3.jpg" class="img-responsive" alt="...">
                        </div>
                        <div class="blog-item__tags">
                            <i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#learn</a> <a href="#">#design</a> <a href="#">#courses</a>
                        </div>
                        <div class="blog-item__content">
                            <div class="blog-item__date">
                                <i class="ion-calendar" aria-hidden="true"></i> 03 November 2020
                            </div>
                            <div class="blog-item__title">
                                <h3>Obtaining certificates</h3>
                            </div>
                            <div class="blog-item__info">
                                <ul class="item-info__list">
                                    <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                                    <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 133</li>
                                    <li class="info-list__item"><i class="ion-heart" aria-hidden="true"></i> 591</li>
                                </ul>
                            </div>
                            <div class="blog-item__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab eius dicta, magni, placeat sed excepturi tenetur. Unde esse repellendus saepe ipsa odio in laborum voluptas. Obcaecati quae.
                            </div>
                            <div class="blog-item__link">
                                <a href="blog-item.html">Read More <i class="ion-android-arrow-forward" aria-hidden="true"></i></a>
                            </div>
                            <ul class="blog-item__share">
                                <li>Share: </li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            </ul>
                        </div> <!-- / .blog-item__content -->
                    </div> <!-- / .blog__item -->
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