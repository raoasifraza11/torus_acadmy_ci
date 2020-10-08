@extends('landing')
@section('_pageTitle', 'Registration Teacher')
@section('page_id', 'course-single__page')
@section('_css')
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1/fonts/material-design-iconic-font/css/material-design-iconic-font.css'); ?>">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="<?php echo asset_url('fe_v1/css/theme.css'); ?>">
@endsection

@section('content')


	<!-- CONTENT
      ================================================== -->

	<!-- section home -->
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
							<li><a href="<?php echo base_url('/'); ?>">Home</a></li>
							<li class="active">{{$course->name}}</li>
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
							{{$course->name}}
						</div>
						<div class="course__posttime">
{{--							Posted on August 08, 2017--}}
						</div>
						<div class="course__img">
							<img src="<?php echo base_url('application/public_html/assets_alpha/fe_v1/img/blog-item_img-2.jpg'); ?>" class="img-responsive" alt="...">
						</div>
						<div class="course__info">
							<div class="course-info__item">
								<div class="course-info__icon">
									<i class="ion-android-star"></i>
								</div>
								<div class="course-info__text">
									<span>Teacher</span>
									<p>{{$course->first_name." ".$course->last_name  }}</p>
								</div>
							</div>
							<div class="course-info__item">
								<div class="course-info__icon">
									<i class="ion-images"></i>
								</div>
								<div class="course-info__text">
									<span>Class</span>
									<p>{{$course->class_name}}</p>
								</div>
							</div>
							<div class="course-info__item">
								<div class="course-info__icon">
									<i class="ion-android-time"></i>
								</div>
								<div class="course-info__text">
									<span>Subject</span>
									<p>{{$course->name}}</p>
								</div>
							</div>
						</div> <!-- .course__info -->
						<h3 class="course_desc__title">Course description</h3>
						<p class="course__desc">{{$course->description}}.</p>

					</div> <!-- .course__body -->
				</div>
				<div class="col-sm-5 col-md-4">
					<div class="course__sidebar">

						<div class="sidebar__item">
							<div class="course__price">
								Total Price: <span>{{$course->price}}$</span>
							</div>
							<ul class="course_features__list">
								<li><i class="ion-ribbon-b"></i> Class: <span>{{$course->class_name}}</span></li>
								<li><i class="ion-volume-high"></i> Course: <span>{{$course->name}}</span></li>
							</ul>
							<form action="{{ base_url("course/paynow") }}" method="post">
								<button type="submit" name="id" value="{{$course->id}}" class="btn btn-block btn-accent">
										Take this course
									</button>
							</form>
						</div> <!-- .sidebar__item -->


					</div> <!-- .blog__sidebar -->
				</div>
			</div> <!-- / .row -->
		</div> <!-- / .container -->
	</section> <!-- / .section__course-single -->

@endsection
