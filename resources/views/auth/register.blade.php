@extends('auth.main')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('platform_assets/css/formValidation/formValidation.min.css') }}">
@endsection

@section('content')
    <div class="signpanel-wrapper">
        <div class="signbox signup">
            <div class="signbox-header">
                <h4>Sixinsix</h4>
                <p class="mg-b-0">Sign up</p>
            </div><!-- signbox-header -->
            <div class="signbox-body">
                <form id="registerForm" method="POST" action="{{ route('register') }}">
                    {!! csrf_field() !!}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="form-control-label @if($errors->has('email')) text-danger @endif">Email: <span class="tx-danger">*</span></label>
                        <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Type email address" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div><!-- form-group -->


                    <div class="row row-xs">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if($errors->has('first_name')) text-danger @endif">Firstname: <span class="tx-danger">*</span></label>
                                <input type="text" name="first_name" class="form-control  @if($errors->has('first_name')) is-invalid @endif" placeholder="Type firstname" required value="{{ old('first_name') }}">
                                @if ($errors->has('first_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if($errors->has('last_name')) text-danger @endif">Lastname: <span class="tx-danger">*</span></label>
                                <input type="text" name="last_name" class="form-control @if($errors->has('last_name')) is-invalid @endif" placeholder="Type lastname" required value="{{ old('last_name') }}">
                                @if ($errors->has('last_name'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="row row-xs">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label @if ($errors->has('password')) text-danger @endif">Password: <span class="tx-danger">*</span></label>
                                <input type="password" name="password" class="form-control @if ($errors->has('password')) is-invalid @endif" placeholder="Type password" required>
                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div><!-- form-group -->
                        </div><!-- col -->
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
                            </div><!-- form-group -->
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="form-group">
                        <label class="form-control-label @if ($errors->has('website')) text-danger @endif">Website: <span class="tx-danger">*</span></label>
                        <input type="text" name="website" class="form-control @if ($errors->has('website')) is-invalid @endif" placeholder="Website link" value="{{ old('website') }}" required>
                        @if ($errors->has('website'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('website') }}</strong>
                            </span>
                        @endif
                    </div><!-- form-group -->

                    <div class="form-group">
                        <label class=" control-label  @if ($errors->has('subscription')) text-danger @endif">Subscription Plan: <span class="tx-danger">*</span></label>
                        <select name="subscription" class="form-control">
                            @if(count($plans) >0)
                                @foreach($plans as $key=> $plan)
                                    <option value="{{$plan->plan_code }}">{{$plan->title}} (${{$plan->price}}/{{$plan->duration}})</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Credit card number: <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" data-stripe="number" placeholder="Credit card number" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Expiration: <span class="tx-danger">*</span></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Month" data-stripe="exp-month" />
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Year" data-stripe="exp-year" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" control-label">CVV:  <span class="tx-danger">*</span></label>
                        <input type="text" class="form-control" data-stripe="cvc" />
                    </div>

                    <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                    <input type="hidden" name="token" value="" />
                </form>
                <div class="tx-center bd pd-10 mg-t-40">Already a member? <a href="{{ route('login') }}">Sign In</a></div>
            </div><!-- signbox-body -->
        </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->
@endsection

@section('custom-js')
    <script src="{{ asset('platform_assets/js/formValidation/formValidation.min.js') }}"></script>
    <script src="{{ asset('platform_assets/js/formValidation/bootstrap.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Change the key to your one
            Stripe.setPublishableKey("{{ env('STRIPE_KEY') }}");
            $('#registerForm')
                .formValidation({
                    framework: 'bootstrap',
                    icon: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                notEmpty: {
                                    message: 'The first name field is required'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                notEmpty: {
                                    message: 'The last name field is required'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'The email is required'
                                },
                                emailAddress: {
                                    message: 'The email address is not valid'
                                }
                            }
                        },
                        password: {
                            validators: {
                                identical:{
                                    field: 'password_confirmation',
                                    message: 'Confirm your password below - type same password please. <br>'
                                },
                                notEmpty: {
                                    message: 'The password field is required. <br>'
                                },
                                stringLength: {
                                    min: 6,
                                    message: 'The password must be more than 6 characters.'
                                }
                            }
                        },
                        password_confirmation:{
                            validators: {
                                identical:{
                                    field: 'password',
                                    message: 'The password and its confirm are not the same. <br>',
                                },
                                notEmpty: {
                                    message: 'The confirm password field is required. <br>'
                                },
                                stringLength: {
                                    min: 6,
                                    message: 'The confirm password must be more than 6 characters. '
                                }
                            }
                        },
                        ccNumber: {
                            selector: '[data-stripe="number"]',
                            validators: {
                                notEmpty: {
                                    message: 'The credit card number is required'
                                },
                                creditCard: {
                                    message: 'The credit card number is not valid'
                                }
                            }
                        },
                        expMonth: {
                            selector: '[data-stripe="exp-month"]',
                            row: '.col-xs-3',
                            validators: {
                                notEmpty: {
                                    message: 'The expiration month is required'
                                },
                                digits: {
                                    message: 'The expiration month can contain digits only'
                                },
                                callback: {
                                    message: 'Expired',
                                    callback: function(value, validator) {
                                        value = parseInt(value, 10);
                                        var year         = validator.getFieldElements('expYear').val(),
                                            currentMonth = new Date().getMonth() + 1,
                                            currentYear  = new Date().getFullYear();
                                        if (value < 0 || value > 12) {
                                            return false;
                                        }
                                        if (year == '') {
                                            return true;
                                        }
                                        year = parseInt(year, 10);
                                        if (year > currentYear || (year == currentYear && value >= currentMonth)) {
                                            validator.updateStatus('expYear', 'VALID');
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }
                                }
                            }
                        },
                        expYear: {
                            selector: '[data-stripe="exp-year"]',
                            row: '.col-xs-3',
                            validators: {
                                notEmpty: {
                                    message: 'The expiration year is required'
                                },
                                digits: {
                                    message: 'The expiration year can contain digits only'
                                },
                                callback: {
                                    message: 'Expired',
                                    callback: function(value, validator) {
                                        value = parseInt(value, 10);
                                        var month        = validator.getFieldElements('expMonth').val(),
                                            currentMonth = new Date().getMonth() + 1,
                                            currentYear  = new Date().getFullYear();
                                        if (value < currentYear || value > currentYear + 100) {
                                            return false;
                                        }
                                        if (month == '') {
                                            return false;
                                        }
                                        month = parseInt(month, 10);
                                        if (value > currentYear || (value == currentYear && month >= currentMonth)) {
                                            validator.updateStatus('expMonth', 'VALID');
                                            return true;
                                        } else {
                                            return false;
                                        }
                                    }
                                }
                            }
                        },
                        cvvNumber: {
                            selector: '[data-stripe="cvc"]',
                            validators: {
                                notEmpty: {
                                    message: 'The CVV number is required'
                                },
                                cvv: {
                                    message: 'The value is not a valid CVV',
                                    creditCardField: 'ccNumber'
                                }
                            }
                        }
                    }
                })
                .on('success.form.fv', function(e) {
                    e.preventDefault();
                    var $form = $(e.target);
                    // Reset the token first
                    $form.find('[name="token"]').val('');
                    Stripe.card.createToken($form, function(status, response) {
                        if (response.error) {
                            alert(response.error.message);
                        } else {
                            // Set the token value
                            $form.find('[name="token"]').val(response.id);
                            alert(response.id);
                            // Or using Ajax
                            $.ajax({
                                // You need to change the url option to your back-end endpoint
                                url: "{{route('register')}}",
                                data: $form.serialize(),
                                method: 'POST',
                                dataType: 'json'
                            }).success(function(data) {
                                alert(data.msg);
                                // Reset the form
                                $form.formValidation('resetForm', true);
                                window.location.href="{{ route('login') }}";
                            });
                        }
                    });
                });

        });
    </script>

@endsection




{{--@extends('platform.layouts.blank')--}}

{{--@section('title', 'Register')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Register') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('register') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

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
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Register') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
