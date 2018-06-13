@extends('frontend.layouts.app')
@section('title', 'About')
@section('content')
<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>About Us</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">About Us</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<!-- Section -->
	<section>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="mb-40">We have an amazing history!</h3>
					<!-- Nav tabs -->
  					<ul class="nav nav-pills mb-40" role="tablist">
  						<li class="active"><a href="#history" role="tab" data-toggle="tab">Our History</a></li>
  						<li><a href="#mission" role="tab" data-toggle="tab">Our Mission</a></li>
  						<li><a href="#whats-next" role="tab" data-toggle="tab">What's next?</a></li>
  					</ul>
  					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="history">
							<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="mission">
							<div class="row">
								<div class="col-md-4">
									<span class="icon icon-lg icon-default"><i class="ti-mouse"></i></span>
									<h5>High-quality products</h5>
									<p class="text-muted">Sed ut perspiciatis unde omnis iste natus error.</p>
								</div>
								<div class="col-md-4">
									<span class="icon icon-lg icon-default"><i class="ti-bolt"></i></span>
									<h5>Happy Customers</h5>
									<p class="text-muted">Sed ut perspiciatis unde omnis iste natus error.</p>
								</div>
								<div class="col-md-4">
									<span class="icon icon-lg icon-default"><i class="ti-bar-chart"></i></span>
									<h5>High Income</h5>
									<p class="text-muted">Sed ut perspiciatis unde omnis iste natus error.</p>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="whats-next">
							<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
							<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section class="bg-grey pt-30">
		<div class="container">
			<div class="row mb-30">
				<!-- Member -->
				<div class="col-md-4 mb-30">
					<img src="{{ asset('assets/img/members/member01_v.jpg') }}" alt="">
					<div class="p-30 bg-white">
						<h5 class="mb-0">Sebastian Kler</h5>
						<span class="text-muted">CEO / Founder</span>
						<p class="mt-20 mb-0">Cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est. </p>
					</div>
				</div>
				<!-- Member -->
				<div class="col-md-4 mb-30">
					<img src="{{ asset('assets/img/members/member02_v.jpg') }}" alt="">
					<div class="p-30 bg-white">
						<h5 class="mb-0">Jessica Wine</h5>
						<span class="text-muted">Art Director</span>
						<p class="mt-20 mb-0">Cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est. </p>
					</div>
				</div>
				<!-- Member -->
				<div class="col-md-4 mb-30">
					<img src="{{ asset('assets/img/members/member03_v.jpg') }}" alt="">
					<div class="p-30 bg-white">
						<h5 class="mb-0">Marek Hudson</h5>
						<span class="text-muted">Account Manager</span>
						<p class="mt-20 mb-0">Cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est. </p>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="mb-40">Would you like to join to our team? Check our current openings...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-push-3">
					<div class="row">
						<div class="col-sm-6"><a href="page-careers.html" class="btn btn-primary btn-filled btn-block">Go to careers <i class="i-after ti-arrow-right"></i></a></div>
						<div class="col-sm-6"><a href="page-contact-1.html" class="btn btn-link btn-block">Contact Us</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
	<section>
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="mb-40">Our latest clients</h3>
					<div class="row">
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="{{ asset('assets/img/logotypes/sass.png') }}" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="{{ asset('assets/img/logotypes/envato.png') }}" alt=""></a></div>
						<div class="col-sm-4"><a href="#"><img class="gray-to-color" src="{{ asset('assets/img/logotypes/suelo.png') }}" alt=""></a></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section -->
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
