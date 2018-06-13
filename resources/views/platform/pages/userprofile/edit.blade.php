@extends('platform.layouts.app')

@section('title', 'Edit Profile')
@section('custom-css')
    {{--<link href="{{ asset('crop/cropper.css') }}" rel="stylesheet">--}}
    {{--<link href=" {{ asset('crop/main.css') }}" rel="stylesheet">--}}
    {{--<style>--}}
        {{--.img-container {--}}
            {{--/* Never limit the container height here */--}}
            {{--max-width: 100%;--}}
        {{--}--}}

        {{--.img-container img {--}}
            {{--/* This is important */--}}
            {{--width: 100%;--}}
        {{--}--}}
    {{--</style>--}}
@endsection
@section('content')

    <!-- ##### MAIN PANEL ##### -->

    <div class="kt-pagetitle">
        <h5>Edit Profile</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">

        <div class="row">

            <div class="col-md-12 col-lg-12 mg-t-30 mg-md-t-0">
                <label class="content-left-label">Your Data</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        <div class="row">
                            <p>
                                <b>We take privacy seriously.</b> This page allows you to see all of the data we keep on you.
                            </p>

                        </div>
                    </div><!-- wd-60p -->
                </div><!-- card -->

                <hr class="invisible">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-3 mg-t-30 mg-md-t-0">
                <form class="md-form" action="{{ route('platform.edit.profile.avatar') }}" method="POST" enctype="multipart/form-data" id="avatarForm">
                    {{csrf_field()}}
                    <div class="file-field">
                        <div class="z-depth-1-half mb-4">
                            <img src="@if(Auth::user()->profile->avatar =='') {{ asset('platform_assets/img/img3.jpg') }} @else {{ Auth::user()->profile->avatar }} @endif" class="img-fluid">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left waves-effect">
                                <span>Choose file</span>
                                <input type="file" name="file" id="avatar-file" accept="image/*">
                            </div>
                        </div>
                        <input type="submit" id="avatarSubmit" style="display: none" />
                    </div>
                </form>
            </div>
            <div class="col-md-8 col-lg-9 mg-t-30 mg-md-t-0">
                <label class="content-left-label">Password Management</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        @if(Session::has('success_password'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {!! Session::get('success_password') !!}
                            </div><!-- alert -->
                        @endif
                        @if(Session::has('incorrect_password'))
                            <div class="alert alert-danger" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                {!! Session::get('incorrect_password') !!}
                            </div><!-- alert -->
                        @endif
                        <form action="{{ route('platform.edit.profile.password') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                                <div class="col-sm-8  col-xl-6  mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter username" type="email" value="{{ Auth::user()->email }}" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Current Password:</label>
                                <div class="col-sm-8 col-xl-6  mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter current password" type="password" name="current_password" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label @if ($errors->has('password')) text-danger @endif">New  Password:</label>
                                <div class="col-sm-8  col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control  @if ($errors->has('password')) is-invalid @endif" placeholder="Enter new  password" type="password" name="password"  required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Confirm Password:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter confirm password" type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-layout-footer col-sm-11 col-xl-9">
                                <button class="btn btn-default mg-r-5 custom-submit-form-button">Update Password</button>
                            </div>
                        </form>


                    </div><!-- wd-60p -->
                </div><!-- card -->
                <hr class="invisible">

                <label class="content-left-label">Personal Information</label>
                <div class="card bg-gray-200 bd-0">
                    <div class="edit-profile-form">
                        @if(Session::has('success_information'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {!! Session::get('success_information') !!}
                            </div><!-- alert -->
                        @endif
                        <form action="{{route('platform.edit.profile.information')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">First Name:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter first name" type="text" value="{{ Auth::user()->profile->first_name }}" name="first_name" required>
                                </div>
                            </div><!-- form-group -->
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Last Name:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter last name" type="text" value="{{ Auth::user()->profile->last_name }}" name="last_name" required>
                                </div>
                            </div><!-- form-group -->

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Portfolio URL:</label>
                                <div class="col-sm-8 col-xl-6 mg-t-10 mg-sm-t-0">
                                    <input class="form-control" placeholder="Enter Portfolio URL" type="text" value="{{ Auth::user()->profile->website }}" name="website" required>
                                </div>
                            </div><!-- form-group -->
                            <div class="form-layout-footer col-sm-11 col-xl-9">
                                <button class="btn btn-default mg-r-5 custom-submit-form-button">Update Information</button>
                            </div>
                        </form>

                    </div><!-- wd-60p -->
                </div><!-- card -->

                <hr class="invisible">

            </div><!-- col-9 -->
        </div><!-- row -->
        {{--<div id="avatarModal" class="modal fade">--}}
            {{--<div class="modal-dialog modal-lg" role="document">--}}
                {{--<div class="modal-content tx-size-sm">--}}
                    {{--<div class="modal-header pd-x-20">--}}
                        {{--<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Crop Image</h6>--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body pd-20">--}}
                        {{--<div class="row">--}}

                            {{--<div class="col-md-12 col-lg-12 mg-t-30 mg-md-t-0">--}}
                                {{--<div class="img-container">--}}
                                    {{--<img  src="http://www.second-sixinsix.loc/uploads/avatars/1528084747.jpeg"  id="image-profile">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4 col-lg-3 mg-t-30 mg-md-t-0">--}}
                                {{--<h4 class=" lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>--}}
                                {{--<p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>--}}
                                {{--<div class="docs-preview">--}}
                                    {{--<div class="img-preview preview-lg"></div>--}}
                                    {{--<div class="img-preview preview-md"></div>--}}
                                    {{--<div class="img-preview preview-sm"></div>--}}
                                    {{--<div class="img-preview preview-xs"></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div><!-- modal-body -->--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default pd-x-20">Save changes</button>--}}
                        {{--<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<button onclick="showModal()" >Modal Show</button>--}}
        {{--<button type="button" class="btn btn-primary" data-target="#modal" data-toggle="modal" id="button-lunch">--}}
            {{--Launch the demo--}}
        {{--</button>--}}
        {{--<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">--}}
            {{--<div class="modal-dialog modal-lg" role="document">--}}
                {{--<div class="modal-content">--}}
                    {{--<div class="modal-header">--}}
                        {{--<h5 class="modal-title" id="modalLabel">Cropper</h5>--}}
                        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                            {{--<span aria-hidden="true">&times;</span>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                    {{--<div class="modal-body">--}}
                        {{--<div class="img-container" style="width: 100%; height:auto;">--}}
                            {{--<img id="image123"  alt="Picture">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="modal-footer">--}}
                        {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
        @endsection
        @section('custom-js')
            {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>--}}

            <script>

                    $("#avatar-file").change(function (e) {
                        var fileSelect = document.getElementById('avatar-file');
                        var files = fileSelect.files;
                        console.log(files.length);
                        var formData = new FormData();
                        formData.append('file', files[0], files[0].name)
                        console.log(formData);
                        $.ajax({
                            url: '{{ route('platform.edit.profile.avatar') }}',
                            type: 'POST',
                            data: formData,
                            cache: false,
                            dataType: 'json',
                            processData: false, // Don't process the files
                            contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                            success: function(data)
                            {
                                if(data.result =='success'){
                                    if(data.avatar_crop == 1){
                                        window.location.href="{{ route('platform.edit.profile.crop') }}";
                                    }

                                }
                            }
                        });
                    });

            </script>

@endsection