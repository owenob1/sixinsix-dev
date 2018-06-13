@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
<!-- Content -->
<div id="content">

	<!-- Section / Home -->
	<section id="home" class="fullheight dark bg-dark">

		<div class="bg-image bg-fixed"><img src="{{ asset('assets/img/photos/agency_bg03.jpg') }}" alt=""></div>

		<div class="v-center container text-center" data-target="local-scroll">
			<div class="row text-center">
				<div class="col-lg-8 col-lg-push-2">
					<h3 class="font-secondary text-uppercase text-spacing animated" data-animation="fadeInDown">We’are agency.</h3>
					<a href="#case-study" class="btn btn-primary animated" data-animation="fadeInUp">Case studies <i class="i-after ti-arrow-down"></i></a>
				</div>
			</div>
		</div>

		<div class="v-bottom pt-20 pb-20 text-center">
			<a href="#" class="icon icon-xs"><i class="fa fa-facebook"></i></a>
			<a href="#" class="icon icon-xs"><i class="fa fa-twitter"></i></a>
			<a href="#" class="icon icon-xs"><i class="fa fa-google-plus"></i></a>
		</div>

	</section>

	<!-- Section / Edge -->
	<section  id="case-study" class="section-image-edge section-sm">

		<div class="col-md-6 col-md-push-6 image zooming right">
			<img src="{{ asset('assets/img/devices/iphone_edge.jpg') }}" alt="" class="mb-40 animated" data-animation="fadeInRight">
		</div>
		<div class="container animated" data-animation="fadeIn" data-animation-delay="500">
			<div class="col-md-6 content">
				<h6 class="text-uppercase text-spacing text-muted mb-40">iPhone 6S</h6>
				<h1>"Exclusive version for users who cares about the quality."</h1>
				<p class="lead mb-60">Duis sagittis nunc quis ornare consequat. Duis sit amet lacinia purus. Pellentesque eget ultricies neque.</p>
				<a href="#" class="btn btn-primary btn-filled">Case Study <i class="i-after ti-arrow-right"></i></a>
			</div>
		</div>

	</section>

	<!-- Section / Edge -->
	<section  id="case-study_1" class="section-image-edge section-sm">

		<div class="col-md-6 image zooming">
			<img src="{{ asset('assets/img/devices/ipad_edge.jpg') }}" alt="" class="mb-40 animated" data-animation="fadeInLeft">
		</div>
		<div class="container animated" data-animation="fadeIn" data-animation-delay="500">
			<div class="col-md-6 col-md-push-6 content">
				<h6 class="text-uppercase text-spacing text-muted mb-40">iPad Air</h6>
				<h1>"Amazing device based on the newset technology."</h1>
				<p class="lead mb-60">Duis sagittis nunc quis ornare consequat. Duis sit amet lacinia purus. Pellentesque eget ultricies neque.</p>
				<a href="#" class="btn btn-primary btn-filled">Case Study <i class="i-after ti-arrow-right"></i></a>
			</div>
		</div>

	</section>

	<!-- Section / Edge -->
	<section  id="case-study_2" class="section-image-edge section-sm">

		<div class="col-md-6 col-md-push-6 image right zooming">
			<img src="{{ asset('assets/img/devices/iwatch_edge.jpg') }}" alt="" class="mb-40 animated" data-animation="fadeInRight">
		</div>
		<div class="container animated" data-animation="fadeIn" data-animation-delay="500">
			<div class="col-md-6 content">
				<h6 class="text-uppercase text-spacing text-muted mb-40">iWatch Sport</h6>
				<h1>"Outstanding watch with perfect design and well prepared software."</h1>
				<p class="lead mb-60">Duis sagittis nunc quis ornare consequat. Duis sit amet lacinia purus. Pellentesque eget ultricies neque.</p>
				<a href="#" class="btn btn-primary btn-filled">Case Study <i class="i-after ti-arrow-right"></i></a>
			</div>
		</div>

	</section>

	<!-- Section / Services -->
	<section id="services" class="bg-secondary dark">
		<div class="container">
			<h6 class="text-uppercase text-spacing mb-60">Our Services</h6>
			<div class="row">
				<!-- Service -->
				<div class="col-lg-2 col-md-3 mb-30">
					<span class="icon icon-primary mb-50"><i class="ti-mobile"></i></span>
					<h4 class="mb-0">Mobile Apps</h4>
					<ul class="list-lined mt-30">
						<li>Cum soluta nobis est</li>
						<li>Cumque nihil impedit quo</li>
						<li>Minus id quod maxime placeat</li>
					</ul>
				</div>
				<!-- Service -->
				<div class="col-lg-2 col-lg-push-1 col-md-3 mb-30">
					<span class="icon icon-primary mb-50"><i class="ti-desktop"></i></span>
					<h4 class="mb-0">Website Productions</h4>
					<ul class="list-lined mt-30">
						<li>Cumque nihil impedit quo</li>
						<li>Minus id quod maxime placeat</li>
					</ul>
				</div>
				<!-- Service -->
				<div class="col-lg-2 col-lg-push-2 col-md-3 mb-30">
					<span class="icon icon-primary mb-50"><i class="ti-layers"></i></span>
					<h4 class="mb-0">eCommerce</h4>
					<ul class="list-lined mt-30">
						<li>Cum soluta nobis est</li>
						<li>Cumque nihil impedit quo</li>
						<li>Minus id quod maxime placeat</li>
					</ul>
				</div>
				<!-- Service -->
				<div class="col-lg-2 col-lg-push-3 col-md-3 mb-30">
					<span class="icon icon-primary mb-50"><i class="ti-comments"></i></span>
					<h4 class="mb-0">Social Media</h4>
					<ul class="list-lined mt-30">
						<li>Cum soluta nobis est</li>
						<li>Cumque nihil impedit quo</li>
						<li>Minus id quod maxime placeat</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- Section -->
	<section class="h-sm">
		<div class="bg-parallax" data-parallax="scroll" data-image-src="{{ asset('assets/img/photos/agency_bg04.jpg') }}"></div>
	</section>

	<!-- Section / Clients -->
	<section id="clients">
		<div class="container text-center">
			<h6 class="text-uppercase text-spacing mb-60">Our Clients</h6>
			<div class="carousel" data-single-item="true" data-transition="fade" data-autoplay="3000">
				<a href="#"><img class="gray-to-color mb-50" src="{{ asset('assets/img/logotypes/sass.png') }}" alt=""></a>
				<a href="#"><img class="gray-to-color mb-50" src="{{ asset('assets/img/logotypes/envato.png') }}" alt=""></a>
				<a href="#"><img class="gray-to-color mb-50" src="{{ asset('assets/img/logotypes/suelo.png') }}" alt=""></a>
				<a href="#"><img class="gray-to-color mb-50" src="{{ asset('assets/img/logotypes/html.png') }}" alt=""></a>
			</div>
		</div>
	</section>

	<!-- Google Map -->
	<div id="google-map" class="h-500" data-latitude="40.758895" data-longitude="-73.985131" data-style="light"></div>
  <!-- Modal -->
<div class="modal fade" id="SebastianKler" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
      		<img src="{{ asset('assets/img/members/member01_big.jpg') }}" alt="">
      		<div class="modal-body p-40">
      			<h3 class="font-secondary mb-0">Sebastian Kler</h3>
      			<span class="text-muted">CEO / Founder</span>
      			<p class="lead mt-20">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      			<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      			<ul class="social-bar">
      				<li>
      					<a href="#"><span class="icon icon-circle icon-xs icon-facebook"><i class="fa fa-facebook"></i></span><span class="text-muted">Follow on</span> Faceboook</a>
      				</li>
      				<li>
      					<a href="#"><span class="icon icon-circle icon-xs icon-twitter"><i class="fa fa-twitter"></i></span><span class="text-muted">Follow on</span> Twitter</a>
      				</li>
      				<li>
      					<a href="#"><span class="icon icon-circle icon-xs icon-google-plus"><i class="fa fa-google-plus"></i></span><span class="text-muted">Follow on</span> Google +</a>
      				</li>
      			</ul>
      		</div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
    </div>
</div>
@endsection
