@extends('frontend.layouts.app')
@section('title', 'Blog')

@section('custom-css')
	<style>
		.ellipsis {
			overflow: hidden;
			height: 100px;
			line-height: 25px;
			margin: 20px;
		}
		.ellipsis:before {
			content: "";
			float: left;
			width: 5px;
			height: 100px;
		}
		.ellipsis > *:first-child {
			float: right;
			width: 100%;
			margin-left: -5px;
		}
		.ellipsis:after {
			content: "\02026";
			box-sizing: content-box;
			-webkit-box-sizing: content-box;
			-moz-box-sizing: content-box;
			float: right;
			position: relative;
			top: -25px;
			left: 100%;
			width: 3em;
			margin-left: -3em;
			padding-right: 5px;
			text-align: right;
			background-size: 100% 100%;/* 512x1 image,gradient for IE9. Transparent at 0% -> white at 50% -> white at 100%.*/
			￿background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAABCAMAAACfZeZEAAAABGdBTUEAALGPC/xhBQAAAwBQTFRF////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AAAA////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////wDWRdwAAAP90Uk5TgsRjMZXhS30YrvDUP3Emow1YibnM9+ggOZxrBtpRRo94gxItwLOoX/vsHdA2yGgL8+TdKUK8VFufmHSGgAQWJNc9tk+rb5KMCA8aM0iwpWV6dwP9+fXuFerm3yMs0jDOysY8wr5FTldeoWKabgEJ8RATG+IeIdsn2NUqLjQ3OgBDumC3SbRMsVKsValZplydZpZpbJOQco2KdYeEe36BDAL8/vgHBfr2CvTyDu8R7esU6RcZ5ecc4+Af3iLcJSjZ1ivT0S/PMs3LNck4x8U7wz7Bv0G9RLtHuEq1TbJQr1OtVqqnWqRdoqBhnmSbZ5mXapRtcJGOc4t2eYiFfH9AS7qYlgAAARlJREFUKM9jqK9fEGS7VNrDI2+F/nyB1Z4Fa5UKN4TbbeLY7FW0Tatkp3jp7mj7vXzl+4yrDsYoVx+JYz7mXXNSp/a0RN25JMcLPP8umzRcTZW77tNyk63tdprzXdmO+2ZdD9MFe56Y9z3LUG96mcX02n/CW71JH6Qmf8px/cw77ZvVzB+BCj8D5vxhn/vXZh6D4uzf1rN+Cc347j79q/zUL25TPrJMfG/5LvuNZP8rixeZz/mf+vU+Vut+5NL5gPOeb/sd1dZbTs03hBuvmV5JuaRyMfk849nEM7qnEk6IHI8/qn049hB35QGHiv0yZXuMdkXtYC3ebrglcqvYxoj1muvC1nDlrzJYGbpcdHHIMo2FwYv+j3QAAOBSfkZYITwUAAAAAElFTkSuQmCC);
			background: -webkit-gradient(linear,left top,right top,
			from(rgba(255,255,255,0)),to(white),color-stop(50%,white));
			background: -moz-linear-gradient(to right,rgba(255,255,255,0),white 50%,white);
			background: -o-linear-gradient(to right,rgba(255,255,255,0),white 50%,white);
			background: -ms-linear-gradient(to right,rgba(255,255,255,0),white 50%,white);
			background: linear-gradient(to right,rgba(255,255,255,0),white 50%,white);
		}
	</style>
@endsection

@section('content')

<!-- Page Title -->
<div id="page-title" class="page-title page-title-2 bg-black dark">
	<div class="bg-image"><img src="{{ asset('assets/img/photos/classic_title01.jpg') }}" alt=""></div>
	<div class="container text-center">
		<h1>Blog</h1>
		<ol class="breadcrumb">
			<li><a href="{{ url('/') }}">Home Page</a></li>
			<li class="active">blog</li>
		</ol>
	</div>
</div>
<!-- Page Title / End -->

<!-- Content -->
<div id="content" class="bg-grey">

	<section>

		<div class="container">
			<div class="row">

				<!-- Content -->
				<div class="content">
					<div class="row masonry">
						<div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
						@if(count($blog) >0)
							@foreach($blog as $key=> $value)
								<div class="masonry-item col-md-4 col-sm-6 col-xs-12">
									<!-- Post -->
									<div class="post post-boxed">
										<div class="post-image">
											<img src="{{$value->image}}" alt="">
										</div>
										<ul class="post-meta">
											<li><span>Added:</span><?php $date = substr($value->created_at, 0, 10); echo date('j  F Y');?></li>
											<li><span>Tags:</span>{{$value->tag}}</li>
										</ul>
										<div class="post-content">
											<h2>{{$value->title}}</h2>
											<div class="ellipsis">{!! $value->description !!}</div>
											<a href="{{route('blogItem', str_replace(" ","-", $value->title))}}" class="btn btn-filled btn-sm btn-primary">Read more</a>
										</div>
									</div>
								</div>
							@endforeach
						@endif
					</div>

					<!-- Pagination -->
					<nav class="text-center">
						<ul class="pagination">
							{{$blog->render()}}
						</ul>
					</nav>
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
