@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
    <div id="page-title" class="page-title page-title-1 bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>{{$blog->title}}</h1>
                </div>
                <div class="col-md-4">
                    <ol class="breadcrumb">
                        <li><a href="/">Home Page</a></li>
                        <li class="active">Blog Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div id="content">

        <section>

            <div class="container">
                <div class="row">

                    <!-- Content -->
                    <div class="content col-lg-8 col-lg-push-2 col-md-10 col-md-push-1">
                        <!-- Post -->
                        <div class="post single">
                            <div class="post-image">
                                <img src="{{$blog->image}}" alt="" style="width:100%">
                            </div>
                            <ul class="post-meta">
                                <li><span>Added:</span><?php $date = substr($blog->created_at, 0, 10); echo date('j  F Y');?></li>
                                <li><span>Tags:</span>{{$blog->tag}}</li>
                            </ul>
                            <div class="post-content">
                                <h1>{{$blog->title}}</h1>
                                <div>
                                    {!! $blog->description !!}
                                </div>
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
                        <h2>whould like to use this template with your next project?</h2>
                        <div class="row">
                            <div class="col-sm-6"><a href="#" class="btn btn-primary btn-filled btn-block">Yes, want to buy it now!</a></div>
                            <div class="col-sm-6"><a href="#" class="btn btn-link btn-block">Check documentation</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
