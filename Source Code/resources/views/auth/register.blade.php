{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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
    <link href="../dashboard_assets/css/pages/login/login-4.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="../dashboard_assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/css/themes/layout/header/base/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/css/themes/layout/header/menu/light.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="../dashboard_assets/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../dashboard_assets/media/logos/iconIt.png" />


</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <div
                class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <a style="padding-top: 50px;" href="/" class="login-logo pb-xl-20 pb-15">
                        <img src="../dashboard_assets/media/logos/logo2.png" class="max-h-70px" alt="" />
                    </a>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}" class="form" id="kt_login_singin_form">
                            @csrf
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up <a href="{{ route('mentor-register') }}" class="text-primary font-weight-bolder">As Mentor</a> ?</h3>
                                
                                {{-- <div class="text-muted font-weight-bold font-size-h4">
                                    You have account ?
                                    <a href="{{ route('login') }}" class="text-primary font-weight-bolder">Login</a>
                                </div> --}}
                            </div>

                            {{-- <div style="padding-top: 5px;" class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your Name</label>
                                <input id="name" placeholder="Ex : Join Retshel"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('name') is-invalid @enderror"
                                    type="name" name="name" autocomplete="name" autofocus value="{{ old('name') }}" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div> --}}

                            <div style="padding-top: 20px;" class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Name</label>
                            </div>
                            <div class="input-group">
                                <input type="name"
                                    class="form-control pwd @error('name') is-invalid @enderror" id="name" placeholder="Ex : Join Retshel" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div>
                            {{-- <div style="padding-top: 5px;" class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                                <input id="email" placeholder="Ex : Join@gmail.com"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror"
                                    type="email" name="email" autocomplete="email" autofocus
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div> --}}

                            <div style="padding-top: 20px;" class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Email</label>
                            </div>
                            <div class="input-group">
                                <input type="email"
                                    class="form-control pwd @error('email') is-invalid @enderror" id="email" placeholder="Ex : Join@gmail.com" name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div>
                            {{-- <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>

                                <input id="password" placeholder="Please Enter Your Password Here"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                                    type="password" name="password" autocomplete="current-password" />
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div style="padding-top: 20px;" class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                            </div>
                            <div class="input-group">
                                <input type="password"
                                    class="form-control pwd @error('password') is-invalid @enderror" id="password"
                                    placeholder="Please Enter Your Password Here" name="password">
                                <span class="input-group-btn" id="eyeSlash">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i
                                            class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                </span>
                                <span class="input-group-btn" id="eyeShow" style="display: none;">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i
                                            class="fa fa-eye" aria-hidden="true"></i></button>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div style="padding-top: 20px;" class="d-flex justify-content-between mt-n5">
                                <label for="password-confirm" class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="input-group">
                                <input type="password"
                                    class="form-control pwd @error('password') is-invalid @enderror" id="password1" placeholder="Please Confirm Your Password" name="password_confirmation" autocomplete="new-password">
                                <span class="input-group-btn" id="eyeSlash">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i
                                            class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                </span>
                                <span class="input-group-btn" id="eyeShow" style="display: none;">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i
                                            class="fa fa-eye" aria-hidden="true"></i></button>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label for="password-confirm"
                                        class="font-size-h6 font-weight-bolder text-dark pt-5">{{ __('Confirm Password') }}</label>
                                </div>

                                <input id="password-confirm" placeholder="Please Confirm Your Password"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('password') is-invalid @enderror"
                                    type="password" name="password_confirmation" autocomplete="new-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div style="padding-top: 20px;" class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your Gender</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="">
                                    <option value="">Please Select The Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('Gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif
                            </div>
                            {{-- <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div> --}}
                            <div class="text-muted font-weight-bold font-size-h4">
                                You have account ?
                                <a href="{{ route('login') }}" class="text-primary font-weight-bolder">Login</a>
                            </div>
                            <hr>
                            <div class="pb-lg-0 pb-5">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br>
                                <button type="submit" id="kt_login_singin_form_submit_button"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7"
                style="background-image: url(../dashboard_assets/media/bg/bg-2.jpg);">
                <div class="d-flex flex-column-fluid flex-lg-center">
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="display-4 font-weight-bold my-7 text-white">Welcome <br />Sign Up Now!! as User
                            <br />And <span style="color: #FF6600">Book</span> <br /><span style="color: #FF6600">Your Appointment </span><br />And More
                            Options...
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

<script>
    function visibility3() {
        var x = document.getElementById('password');
        var y = document.getElementById('password1');
        if (x.type === 'password' && y.type === 'password') {
            x.type = "text";
            y.type = "text";
            $('#eyeShow').show();
            $('#eyeSlash').hide();
        } else {
            x.type = "password";
            y.type = "password";
            $('#eyeShow').hide();
            $('#eyeSlash').show();
        }
    }

</script>

</html>
