@extends('landing')
@section('_pageTitle', 'Registration Teacher')
@section('page_id', 'courses__page')
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
							Courses
						</h1>

						<!-- Breadcrumbs -->
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a></li>
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
				<?php foreach ($courses as $course){ ?>
				<div class="col-sm-4">
					<div class="course__item">
						<div class="course-item__img">
							<img src="<?php echo base_url('application/public_html/assets_alpha/fe_v1/img/courses_img-1.jpg') ?>" class="img-responsive" alt="...">
						</div>
						<div class="course-item__info">
							<div class="info__students">
								<i class="ion-person-stalker" aria-hidden="true"></i> 53/120
							</div>
							<div class="info__price">
								<i class="ion-ios-pricetags" aria-hidden="true"></i> {{$course->price}}$
							</div>
						</div>
						<div class="course-item__content">
							<span class="course-item__branch">class</span>
							<h3>
								<a href="course-single.html">{{$course->name}}</a>
							</h3>
							<p class="course-item__desc">{{$course->description}}.</p>
							<form method="post" action="{{base_url("course/single")}}">
								<button type="submit" name="id" value="{{$course->id}}" class="btn btn-primary" href="<?php echo base_url('course/single');  ?>">Choose course</button>
							</form>
{{--							<a class="btn btn-primary" href="course-single.html">Choose course</a>--}}
						</div> <!-- .teacher-course__content -->
					</div> <!-- .course__item -->
				</div>
				<?php } ?>
			</div> <!-- / .row -->
{{--			<div class="row">--}}
{{--				<div class="col-sm-12">--}}
{{--					<nav aria-label="...">--}}
{{--						<ul class="pagination">--}}
{{--							<li class="disabled"><a href="#" aria-label="Previous"><i class="ion-android-arrow-back"></i></a></li>--}}
{{--							<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>--}}
{{--							<li><a href="#">2</a></li>--}}
{{--							<li><a href="#">3</a></li>--}}
{{--							<li><a href="#">4</a></li>--}}
{{--							<li><a href="#">...</a></li>--}}
{{--							<li><a href="#">10</a></li>--}}
{{--							<li>--}}
{{--								<a href="#" aria-label="Next">--}}
{{--									<i class="ion-android-arrow-forward"></i>--}}
{{--								</a>--}}
{{--							</li>--}}
{{--						</ul>--}}
{{--					</nav>--}}
{{--				</div>--}}
{{--			</div>--}}
			<!-- / .row -->
		</div> <!-- / .container -->
	</section> <!-- / .section__courses -->
@endsection
