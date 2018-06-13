@extends('frontend.layouts.app')
@section('title', 'Portfolio')
@section('content')

<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>Portfolios</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">Portfolios</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<section>
		<div class="container">

			<ul class="nav nav-tabs filter-isotope mb-50 text-center" data-filter-list="#works-list">
				<li class="active"><a href="#" data-filter="*">All</a></li>
				<li><a href="#" data-filter=".webdesign">Webdesign</a></li>
				<li><a href="#" data-filter=".development">Development</a></li>
				<li><a href="#" data-filter=".corporate-identity">Corporate Identity</a></li>
			</ul>

		 	<div id="works-list" class="masonry row">
				<div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
				<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work01.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work01.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Flower</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item development col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work02.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work02_v.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Bridge</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item webdesign col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work03.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work03.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Beach</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item corporate-identity col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work04.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work04_v.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Forest</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item corporate-identity col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work06.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work06_v.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Landscape</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
				<div class="masonry-item development col-md-4 col-sm-6 col-xs-12">
					<!-- Image -->
					<div class="image-box image-hover text-center">
						<div class="image">
							<a href="assets/img/works/work05.jpg" data-lightbox="gallery" data-title="Image Title"><img src="assets/img/works/work05.jpg" alt=""></a>
						</div>
						<div class="title">
							<a href="#">
								<h5 class="mb-0">The Band</h5>
								<span class="text-muted">Webdesign</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-secondary dark text-center border-bottom">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-push-3">
					<h2>Whould like to use this template with your next project?</h2>
					<div class="row">
						<div class="col-sm-6"><a href="#" class="btn btn-primary btn-filled btn-block">Yes, want to buy it now!</a></div>
						<div class="col-sm-6"><a href="#" class="btn btn-link btn-block">Check documentation</a></div>
					</div>
				</div>
			</div>
		</div>

	</section>

</div>
<!-- Content / End -->

@endsection
