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
    <!-- CSRF Token -->
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

    <style>
        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to 
Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
    </style>

</head>

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
            <div
                class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
                <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                    <a href="index.html" class="login-logo pb-xl-20 pb-15">
                        <img src="../dashboard_assets/media/logos/logo2.png" class="max-h-70px" alt="" />
                    </a>
                    {{-- <form action="{{url('user/rating')}}" method="post">
                        @csrf
                    <fieldset class="rating pb-10">
                        <input type="radio" id="star5" name="rating" value="5" checked/><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form> --}}
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}" class="form" id="kt_login_singin_form">
                            @csrf
                            <div class="pb-5 pb-lg-15">
                                <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign In</h3>
                                <div class="text-muted font-weight-bold font-size-h4">
                                    New Here?
                                    <a href="{{ route('register') }}"
                                        class="text-primary font-weight-bolder">Create Account</a>
                                </div>
                            </div>
                            <div style="padding-top: 20px;" class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                                <input id="email" placeholder="Ex : Join@gmail.com"
                                    class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0 @error('email') is-invalid @enderror"
                                    type="email" name="email" required autocomplete="email" autofocus
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
                                    type="password" name="password" required autocomplete="current-password" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="pb-lg-0 pb-5">
                                @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <br>
                                <button type="submit" id="kt_login_singin_form_submit_button"
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">{{ __('Login') }}
                                </button>
                                <br/>
                                <div class="pb-5 pb-lg-15">
                                    <div style="padding-bottom: 0; text-align: center;" class="text-muted font-weight-bold font-size-h4">Or</a>
                                    </div>
                                </div>
                                <hr>
                                <button type="button" style="background-color: #211E3B; color:white" 
                                    class="btn btn-block btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg"><a style=" color:white" href="{{ url('auth/google') }}">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg--><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z"
                                                fill="#4285F4" />
                                            <path
                                                d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z"
                                                fill="#34A853" />
                                            <path
                                                d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z"
                                                fill="#FBBC05" />
                                            <path
                                                d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z"
                                                fill="#EB4335" />
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span> Sign in with Google</a>
                                </button>
                                {{-- <a href="{{ url('auth/google') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                    <strong>Login With Google</strong>
                                  </a>  --}}
                                  {{-- <a href="{{ url('user/ban') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                    <strong>ban</strong>
                                  </a> 
                                  <a href="{{ url('user/unban') }}" style="margin-top: 20px;" class="btn btn-lg btn-success btn-block">
                                    <strong>unban</strong>
                                  </a>  --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7" style="background-image: url(../dashboard_assets/media/bg/bg-2.jpg);">
            {{-- <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid pt-40 flex-column p-7" style="background-image: url(../dashboard_assets/media/bg/bg-2.jpg);"> --}}
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-lg-center">
                    <div class="d-flex flex-column justify-content-center">
                        <h3 class="display-4 font-weight-bold my-7 text-white">Welcome <br/>Back , Signin Now!! <br/>And Get <br/><span style="color: #FF6600"> Fast Support </span><br/>And More Options...</h3>
                        {{-- <p class="display-3 font-weight-bold my-7 text-white">Signin Now And Get Fast Support And More Option ...</p> --}}
                        <p style="font-size: 16px" class="font-weight-bold font-size-lg text-white opacity-80">
                            <q>You Are Helping To Lead The Charge; <br/>We Can Help You Build On Your Past Successes <br/>And Prepare For Your Great Future. </p>
                            <br/>John Peter, Founder                  
                    </div>
                </div>
                <!--end::Content body-->
            </div>
        </div>
    </div>
    {{-- <script src="../dashboard_assets/plugins/global/plugins.bundle.js?v=7.0.6"></script> --}}
    {{-- <script src="../dashboard_assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
    <script src="../dashboard_assets/js/scripts.bundle.js?v=7.0.6"></script>
    <script src="../dashboard_assets/js/pages/custom/login/login-4.js?v=7.0.6"></script> --}}
</body>

</html>
