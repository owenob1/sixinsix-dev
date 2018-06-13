@extends('frontend.layouts.app')
@section('title', 'Contact')
@section('content')
<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>Contact</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">Contact</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<section id="contact_1" class="section-double right">

		<div class="col-md-6 content">
			<h2>Get in touch!</h2>
			<p class="lead">We love hearing from you!</p>
			<div class="row pt-20 pb-20">
				<div class="col-sm-4">
					<div class="feature feature-1">
						<span class="icon icon-circle icon-sm icon-grey"><i class="ti-location-arrow text-primary"></i></span>
						<address>
							<strong>Headquarters:</strong><br>
					Sydney, Australia
						</address>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="feature feature-1">
						<span class="icon icon-circle icon-sm icon-grey"><i class="ti-mobile text-primary"></i></span>
						<address>
							<strong>Phone:</strong><br>
							+61 412 224 668
						</address>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="feature feature-1">
						<span class="icon icon-circle icon-sm icon-grey"><i class="ti-email text-primary"></i></span>
						<address>
							<strong>E-mail:</strong><br>
							<a href="#">hello@sixinsix.co</a>
						</address>
					</div>
				</div>
			</div>
			<span data-target="local-scroll"><a href="#contact_2" class="btn btn-filled btn-primary">Go to the contact form <i class="i-after ti-arrow-right"></i></a></span>
		</div>
		<div class="col-md-6 image">
			<div class="bg-image"><img src="assets/img/photos/classic_contact01.jpg" alt=""></div>
		</div>

	</section>

	<section id="contact_2" class="section-double left">

		<div class="col-md-6 image">
			<div id="google-map" class="bg-map" data-latitude="40.758895" data-longitude="-73.985131"></div>
		</div>
		<div class="col-md-6 content">
			<h3 class="mb-40">Send Us a message!</h3>
			<form class="contact-form validate-form" id="contact-form" method="POST"
			data-message-error="Opps... Something went wrong - please try again later"
			data-message-success="Thank you form your message! We will answer within 24 hours."
			>
				<div class="row">
					<div class="form-group col-sm-6">
						<input name="name" id="name" type="text" class="form-control" placeholder="Name" required>
					</div>
					<div class="form-group col-sm-6">
						<input name="email" id="email" type="text" class="form-control" placeholder="E-mail address" required>
					</div>
				</div>
				<div class="form-group">
					<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<button type="submit" class="btn btn-filled btn-submit btn-block"><span>Send it <i class="i-after ti-arrow-right"></i></span></button>
					</div>
				</div>
			</form>
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
