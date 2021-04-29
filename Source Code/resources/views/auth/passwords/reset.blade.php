{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Metronic | Sign In</title>
    <meta name="description" content="Singin page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../../dashboard_assets/css/pages/login/login-4.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="../../dashboard_assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../../dashboard_assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../../dashboard_assets/media/logos/iconIt.png" />


</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <div
                class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <a style="padding-top: 50px;" href="/" class="login-logo pb-xl-20 pb-15">
                        <img src="../../dashboard_assets/media/logos/logo2.png" class="max-h-70px" alt="" />
                    </a>
                    <div class="login-form">

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div style="padding-top: 20px;" class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">{{ __('E-Mail Address') }}</label>
                                <input id="email" placeholder="Ex : Join@gmail.com"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror"
                                    type="email" name="email"  autocomplete="email" autofocus
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>

                                <input id="password" placeholder="Please Enter Your Password Here"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                                    type="password" name="password"  autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label for="password-confirm" class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Confirm Password') }}</label>
                                </div>

                                <input id="password" placeholder="Please Confirm Your Password"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                                    type="password" name="password_confirmation"  autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div> --}}
    
                            <button type="submit" id="kt_login_singin_form_submit_button"
                            class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Reset Password') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7"
                style="background-image: url(../../dashboard_assets/media/bg/bg-2.jpg);">
                <div class="d-flex flex-column-fluid flex-lg-center">
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="display-4 font-weight-bold my-7 text-white">Please
                            Enter<br />Your Email & Password to<br /> <span style="color: #FF6600">Confirm Rest Password</span>
                        </h3>
                        <p style="font-size: 16px" class="font-weight-bold font-size-lg text-white opacity-80">
                            <q>You Are Helping To Lead The Charge; <br />We Can Help You Build On Your Past Successes
                                <br />And Prepare For Your Great Future.
                        </p>
                        <br />John Peter, Founder
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


</html>


