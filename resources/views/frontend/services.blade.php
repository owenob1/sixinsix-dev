@extends('frontend.layouts.app')
@section('title', 'Services')
@section('content')
<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>Services</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">Services</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<!-- Section-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="mb-90 text-center">Thanks to our experience we are able to create high-quality products</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-desktop text-primary"></i></span>
						<div class="feature-content">
							<h5>Webdesign</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-mouse text-primary"></i></span>
						<div class="feature-content">
							<h5>Webdevelopment</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-shopping-cart text-primary"></i></span>
						<div class="feature-content">
							<h5>eCommerce</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-comments text-primary"></i></span>
						<div class="feature-content">
							<h5>Social Media</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-email text-primary"></i></span>
						<div class="feature-content">
							<h5>E-Mail Marketing</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-2">
						<span class="icon icon-sm"><i class="ti-mobile text-primary"></i></span>
						<div class="feature-content">
							<h5>Mobile Apps</h5>
							<p>Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section-->
	<section class="section-sm bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-3">
						<img src="assets/img/photos/classic_service01.jpg" alt="">
						<div class="feature-content text-center bg-white">
							<h6 class="mb-5 text-muted text-uppercase">Why Us?</h6>
							<h5>Great Team</h5>
							<p class="mb-0">Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-3">
						<img src="assets/img/photos/classic_service02.jpg" alt="">
						<div class="feature-content text-center bg-white">
							<h6 class="mb-5 text-muted text-uppercase">Why Us?</h6>
							<h5>Huge Experience</h5>
							<p class="mb-0">Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<!-- Service -->
					<div class="feature feature-3">
						<img src="assets/img/photos/classic_service03.jpg" alt="">
						<div class="feature-content text-center bg-white">
							<h6 class="mb-5 text-muted text-uppercase">Why Us?</h6>
							<h5>Creative Ideas</h5>
							<p class="mb-0">Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section-->
	<section>
		<div class="container text-center">
			<h2 class="mb-70">How do we work?</h2>
			<div class="row workflow-steps">
				<span class="workflow-progress animated"></span>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated" data-animation-delay="700">
						<span class="icon icon-circle icon-white"><i class="ti-pie-chart text-primary"></i></span>
						<h5>1. Analysing</h5>
						<p class="text-muted">Nunc lacinia finibus elit, eu auctor ex tincidunt non, elementum vel lobortis ut.</p>
					</div>
				</div>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated" data-animation-delay="2000">
						<span class="icon icon-circle icon-white"><i class="ti-ruler-pencil text-primary"></i></span>
						<h5>2. Creating</h5>
						<p class="text-muted">Donec nibh diam, elementum vel lobortis ut, tincidunt ut ex.</p>
					</div>
				</div>
				<!-- Step -->
				<div class="col-md-4">
					<div class="step pl-20-lg pr-20-lg animated" data-animation-delay="3300">
						<span class="icon icon-circle icon-white"><i class="ti-stats-up text-primary"></i></span>
						<h5>3. Celebrating</h5>
						<p class="text-muted">Nunc lacinia finibus elit, eu auctor ex tincidunt non. Donec nibh diam.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section-->
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
