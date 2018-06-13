@extends('frontend.layouts.app')
@section('title', 'Faqs')
@section('content')
<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>FAQ's</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">Faqs</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content">

	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-push-2">
					<h5 class="mb-50 text-center">Check our frequantly asked questions</h5>
					<!-- Accordion -->
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<!-- Panel -->
						<div class="panel panel-2">
							<div class="panel-heading" role="tab">
							    <h4 class="panel-title">
							    	<a data-toggle="collapse" href="#collapseOne" aria-expanded="false">How does it works?</a>
							    </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
						  		<div class="panel-body">
						    	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  		</div>
							</div>
						</div>
						<!-- Panel -->
						<div class="panel panel-2">
							<div class="panel-heading" role="tab">
							    <h4 class="panel-title">
							    	<a data-toggle="collapse" href="#collapseTwo" aria-expanded="false">How to start working with HTML/CSS template?</a>
							    </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
						  		<div class="panel-body">
						    	Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  		</div>
							</div>
						</div>
						<!-- Panel -->
						<div class="panel panel-2">
							<div class="panel-heading" role="tab">
							    <h4 class="panel-title">
							    	<a data-toggle="collapse" href="#collapseThree" aria-expanded="false">How does it works?</a>
							    </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
						  		<div class="panel-body">
						    	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  		</div>
							</div>
						</div>
						<!-- Panel -->
						<div class="panel panel-2">
							<div class="panel-heading" role="tab">
							    <h4 class="panel-title">
							    	<a data-toggle="collapse" href="#collapseFour" aria-expanded="false">How to start working with HTML/CSS template?</a>
							    </h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel">
						  		<div class="panel-body">
						    	Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  		</div>
							</div>
						</div>
					</div>
					<div class="text-center mt-40">
						<span class="icon icon-xl"><i class="text-muted-2x ti-thought"></i></span>
						<h3>Did not have your question? <a href="{{ url('/contact') }}" class="text-primary">Click here</a> to contact us!</h3>
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
