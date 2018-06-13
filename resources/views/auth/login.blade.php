@extends('auth.main')
@section('content')
    <div class="signpanel-wrapper">
        <div class="signbox">
            <div class="signbox-header">
                <h4>Sixinsix</h4>
                <p class="mg-b-0">Sign In</p>
            </div><!-- signbox-header -->
            <div class="signbox-body">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {!! Session::get('message') !!}
                    </div><!-- alert -->
                @endif
                @if(Session::has('error_confirmation') || Session::has('error_email_verify'))
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {!! Session::get('error_confirmation') !!}
                        {!! Session::get('error_email_verify') !!}
                    </div><!-- alert -->
                @endif
                <form action="{{ route('login') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label class="form-control-label @if($errors->has('email')) text-danger @endif">Email:</label>
                        <input type="email" name="email" placeholder="Enter your email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" required>
                    </div><!-- form-group -->
                    <div class="form-group">
                        <label class="form-control-label">Password:</label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control">
                    </div><!-- form-group -->
                    {{--<div class="form-group">--}}
                        {{--<a href="">Forgot password?</a>--}}
                    {{--</div><!-- form-group -->--}}
                    <div class="form-group">
                        <label class="ckbox">
                            <input type="checkbox" name="remember_me" value="1" />
                                <span>Remember me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                </form>
                <div class="tx-center bd pd-10 mg-t-40">Not yet a member? <a href="{{ route('register') }}">Create an account</a></div>
            </div><!-- signbox-body -->
        </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->
@endsection

{{--@extends('platform.layouts.blank')--}}

{{--@section('title', 'Login')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Login') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-8 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
