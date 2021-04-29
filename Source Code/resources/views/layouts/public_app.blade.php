<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from webitkurigram.com/html/petech/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Jan 2021 14:10:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @auth
        <script src="//code.tidio.co/6nt3zbc9ula3wzq0ewpi8oglohqg7pqj.js" async></script>
        @endif
        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('public_assets/images/fav-icon/iconiT.png') }}">
        <!-- bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
        <!-- carousel CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
        <!-- responsive CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/responsive.css') }}" type="text/css" media="all" />
        <!-- nivo-slider CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/nivo-slider.css') }}" type="text/css" media="all" />
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/animate.cs') }}s" type="text/css" media="all" />
        <!-- animated-text CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/animated-text.css') }}" type="text/css" media="all" />
        <!-- font-awesome CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/all.min.css') }}" type="text/css" media="all" />
        <!-- font-flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/flaticon.css') }}" type="text/css" media="all" />
        <!-- theme-default CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/theme-default.css') }}" type="text/css" media="all" />
        <!-- meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/meanmenu.min.css') }}" type="text/css" media="all" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" media="all" />
        <!-- transitions CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/owl.transitions.css') }}" type="text/css" media="all" />
        <!-- venobox CSS -->
        <link rel="stylesheet" href="{{ asset('venobox/venobox.css') }}" type="text/css" media="all" />
        <!-- widget CSS -->
        <link rel="stylesheet" href="{{ asset('public_assets/css/widget.css') }}" type="text/css" media="all" />
        <!--Laravel Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- modernizr js -->
        <script type="text/javascript" src="public_assets/js/vendor/modernizr-3.5.0.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Sweet Alert -->
        <link href="{{ asset('dashboard_assets_new/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet"
            type="text/css">
        <link href="{{ asset('dashboard_assets/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">

        @yield('css')
        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            .rating {
                border: none;
                float: left;
            }

            .rating>input {
                display: none;
            }

            .rating>label:before {
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating>label {
                color: #ddd;
                float: right;
            }

            /***** CSS Magic to 
                    Highlight Stars on Hover *****/

            .rating>input:checked~label,
            /* show gold star when clicked */
            .rating:not(:checked)>label:hover,
            /* hover current star */
            .rating:not(:checked)>label:hover~label {
                color: #FFD700;
            }

            /* hover previous stars in list */

            .rating>input:checked+label:hover,
            /* hover current star when changing rating */
            .rating>input:checked~label:hover,
            .rating>label:hover~input:checked~label,
            /* lighten current selection */
            .rating>input:checked~label:hover~label {
                color: #FFED85;
            }

            .ImgSize {
                max-width: 100%;
                max-height: 100%;
                display: block;
            }

            .fixedBoxImglarge {
                height: 250px;
            }

            .fixedBoxlarge {
                height: 300px;
            }

            .fixedBoxlargeX {
                height: 350px;
            }

            #quick {
                text-align: center !important;
            }

        </style>
    </head>

    @php
    if (Auth::user()) {
        $role = Auth::user()->role;
    } else {
        $role = 'user';
    }
    @endphp

    <body>


        <!--==================================================-->
        <!----- Start	petech Header Top Menu Area Css ----->
        <!--==================================================-->
        <div class="header_top_menu pt-3 pb-3 bg_color2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="header_top_menu_phone pn_bg">
                            <div class="header_top_menu_phone_inner">
                                <ul>
                                    <li><a href="#"><span class="flaticon-phone-call"></span> + 962 (77) 789 7890</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header_top_menu_address">
                            <div class="header_top_menu_address_inner">
                                <ul>
                                    <li><a href="mailto:support@gmail.com"><span
                                                class="flaticon-email-1"></span>support@gmail.com</a></li>
                                    <li><a href="#"><span class="flaticon-pin"></span>Amman, Jordan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="header_top_menu_icon">
                            <div class="header_top_menu_icon_inner">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================-->
        <!----- End	petech Header Top Menu Area Css ----->
        <!--===================================================-->

        <!--==================================================-->
        <!----- Start petech Main Menu Area ----->
        <!--==================================================-->
        <div id="sticky-header" class="petech_nav_manu d-md-none d-lg-block d-sm-none d-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 ">
                        <div class="logo">
                            <a class="logo_img" href="{{ route('/') }}" title="petech">
                                <img src="{{ asset('public_assets/images/logo.png') }}" alt="" />
                            </a>
                            <a class="main_sticky" href="{{ route('/') }}" title="petech">
                                <img src="{{ asset('public_assets/images/logo-white.png') }}" alt="astute" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="petech_menu">
                            <ul class="nav_scroll">
                                <li><a href="{{ route('/') }}">Home</a>
                                    {{-- <ul class="sub-menu">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                </ul> --}}
                                </li>
                                <li><a href="{{ route('about') }}">About Us</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Team Member</a></li>
                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                        <li><a href="portfolio.html">Portfolio</a></li>
                                        <li><a href="case-study.html">Case Study</a></li>
                                        <li><a href="404.html">Error</a></li>
                                    </ul> --}}
                                </li>
                                <li><a href="{{ route('mentors') }}">Mentors</a></li>
                                <!-- 								<li><a href="portfolio.html">Projct</a></li> -->
                                <li><a href="{{ route('blogs') }}">News</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
                            </ul>
                        </nav>
                    </div>

                    {{-- <div class="col-lg-3">
                        <div class="header-src-btn">
                            <!-- Search Btn -->
                            <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>

                            <div class="header-button">
                                <a class="dtbtn" href="#">Get Started <span>+</span></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3">
                        <nav class="petech_menu" style="text-align: right">
                            <ul class="nav_scroll">
                                @if (Route::has('login'))
                                    @auth
                                        {{-- <li><a class="" href="{{ url('/home') }}">Welcome {{ Auth::user()->name }}</a></li> --}}
                                        <li><a href="@if ($role == 'superadmin' || $role == 'admin'){{ route('adminprofile') }}@else @if ($role == 'mentor'){{ route('mentorprofile') }} @else {{ route('userprofile') }}@endif @endif"><span style="font-size: 12px">Welcome :</span><span
                                                    style="font-size: 12px; color:#FF6600">
                                                    {{ Auth::user()->name }}</span></a>
                                            <ul class="sub-menu">
                                                @if ($role == 'superadmin' || $role == 'admin')
                                                    <li><a href="{{ route('adminprofile') }}">Profile</a></li>
                                                @else
                                                    @if ($role == 'mentor')
                                                        <li><a href="{{ route('mentorprofile') }}">Profile</a></li>
                                                    @else
                                                        <li><a href="{{ route('userprofile') }}">Profile</a></li>
                                                    @endif
                                                @endif
                                                {{-- <li><a href="{{ url('/home') }}">Profile</a></li> --}}
                                                <li><a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li><a class="" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                            <li><a class="" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endif
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <!----- petech Mobile Menu Area ----->
            <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
                <div class="mobile-menu">
                    <nav class="petech_menu">
                        <ul>
                            <li><a href="{{ route('/') }}">Home</a>
                                {{-- <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                            </ul> --}}
                            </li>
                            <li><a href="{{ route('about') }}">About Us</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Team Member</a></li>
                                    <li><a href="pricing.html">Pricing Plan</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="case-study.html">Case Study</a></li>
                                    <li><a href="404.html">Error</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{ route('mentors') }}">Mentors</a></li>
                            <li><a href="{{ route('blogs') }}">News</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--==================================================-->
            <!----- End petech Main Menu Area ----->
            <!--==================================================-->

            @yield('main_con')


            <!--==================================================-->
            <!----- Start petech Footer Middle Area ----->
            <!--==================================================-->
            <div class="footer-middle style_three pt-40 pb-3">
                <div class="container">
                    <!-- 			<div class="row">
                                                        <div class="col-lg-12">
                                                         <div class="footer_main_logo text-center pb-80">
                                                          <div class="footer_logo_thumb">
                                                           <img src="public_assets/images/logo2-white.png" alt="" />
                                                          </div>
                                                         </div>
                                                        </div>
                                                       </div> -->
                    <div class="row ft-tp pb-40">
                        <!-- 				<div class="col-lg-4">
                                                         <div class="footer_middle_logo">
                                                          <div class="Footer_middle_logo_inner">
                                                           <img src="public_assets/images/logo-white.png" alt="" />
                                                          </div>
                                                         </div>
                                                        </div> -->
                        <div class="col-lg-12">
                            <div class="footer_middle_socail_menu text-center">
                                <div class="footer_middle_socail_menu_inner">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-30">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget widgets-company-info">
                                <h4 class="widget-title pb-4">Join Newsletters</h4>
                                <div class="company-info-desc pr-2">
                                    <p>Bed perspiciatis unde omnis iste natus error voluptatem accusantium oloremque laudantie
                                        totam rem aperiam</p>
                                </div>
                                <form class="footer_buttom" action="#">
                                    <div class="subscribe_form">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Enter Your Email">
                                        <div class="help-block with-errors"></div>
                                        <button type="submit" class="btn">
                                            <span class="arrow flaticon-long-arrow-pointing-to-the-right"></span>
                                        </button>
                                    </div>
                                    <div class="subscribe_form_send">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="widget widget-nav-menu">
                                <h4 class="widget-title pb-4">Quick Links</h4>
                                <div class="menu-quick-link-container">
                                    <ul id="menu-quick-link" class="menu">
                                        <li><a href="/">Home Page</a></li>
                                        <li><a href="/about">Company History</a></li>
                                        <li><a href="/blogs">Latest News</a></li>
                                        <li><a href="/login">Login & Register</a></li>
                                        <li><a href="/contact">Conatct us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget widgets-company-info">
                                <h3 class="widget-title pb-4">Conatct Us</h3>
                                <div class="footer-call-info">
                                    <span class="flaticon-phone-call"><span class="phone_number">&nbsp;&nbsp;&nbsp;0775003020</span></span>
                                </div>
                                <div class="footer-address-info white pt-2">
                                    <h6>Office Address</h6>
                                    <span class="flaticon-pin"></span>
                                    <p>Jordan -Amman Mecca St.60</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div id="em-recent-post-widget">
                                <div class="single-widget-item">
                                    <h4 class="widget-title pb-4">Follow Us</h4>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f1.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f2.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f3.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f4.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f5.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single_widget_thumb">
                                        <div class="single_widget_thumb_inner">
                                            <img src="{{ asset('public_assets/images/resource/f6.jpg') }}" alt="" />
                                            <div class="widget_icon_recent">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row footer-bottom mt-30">
                        <div class="col-lg-12 col-md-12">
                            <div class="footer-bottom-content text-center">
                                <div class="footer-bottom-content-copy">
                                    <p>@Copy 2021. <span style="color: #FF6600;">iT Solutions</span>.All Right Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--==================================================-->
            <!----- End petech Footer Middle Area ----->
            <!--==================================================-->


            <!--==================================================-->
            <!----- Start petech Header Middle Menu Area ----->
            <!--===================================================-->
            <!-- 	<div class="header_middle_menu pt-4 pb-4">
                                                      <div class="container">
                                                       <div class="row">
                                                        <div class="col-lg-3">
                                                         <div class="header_middle_menu_logo">
                                                          <a href="index.html"><img src="public_assets/images/logo2.png" alt="" /></a>
                                                         </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                         <div class="header_middle_address">
                                                          <div class="header_middle_address_inner">
                                                           <div class="header_middle_address_inner_icon">
                                                            <span class="flaticon-phone-call"></span>
                                                           </div>
                                                           <div class="header_address_content">
                                                            <div class="header_address_content_inner">
                                                             <span>Phone Number</span>
                                                             <a href="#">+ 0123 (456)  789</a>
                                                            </div>
                                                           </div>
                                                          </div>
                                                         </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                         <div class="header_middle_address">
                                                          <div class="header_middle_address_inner">
                                                           <div class="header_middle_address_inner_icon">
                                                            <span class="flaticon-email-1"></span>
                                                           </div>
                                                           <div class="header_address_content">
                                                            <div class="header_address_content_inner">
                                                             <span>Email Addresr</span>
                                                             <a href="#">support@gmail.com</a>
                                                            </div>
                                                           </div>
                                                          </div>
                                                         </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                         <div class="header_middle_address">
                                                          <div class="header_middle_address_inner">
                                                           <div class="header_middle_address_inner_icon">
                                                            <span class="flaticon-pin"></span>
                                                           </div>
                                                           <div class="header_address_content">
                                                            <div class="header_address_content_inner">
                                                             <span>Locations</span>
                                                             <a href="#">205 Main Street, USA</a>
                                                            </div>
                                                           </div>
                                                          </div>
                                                         </div>
                                                        </div>
                                                        
                                                       </div>
                                                      </div>
                                                     </div> -->

            <!--==================================================-->
            <!----- End petech Header Middle Menu Area ----->
            <!--===================================================-->

            <!--==================================================-->
            <!----- Start Search Popup Area ----->
            <!--==================================================-->
            <div class="search-popup">
                <button class="close-search style-two"><span class="flaticon-multiply"></span></button>
                <button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
                <form action="{{ route('search') }}" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="search" name="search" value="" placeholder="Search Here" required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <!--==================================================-->
            <!----- Start Search Popup Area ----->
            <!--==================================================-->

            <!-- jquery js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
            <!-- bootstrap js -->
            {{-- <script type="text/javascript" src="public_assets/js/bootstrap.min.js"></script> --}}
            <!-- carousel js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/owl.carousel.min.js') }}"></script>
            <!-- counterup js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/jquery.counterup.min.js') }}"></script>
            <!-- waypoints js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/waypoints.min.js') }}"></script>
            <!-- wow js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/wow.js') }}"></script>
            <!-- imagesloaded js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/imagesloaded.pkgd.min.js') }}"></script>
            <!-- venobox js -->
            <script type="text/javascript" src="{{ asset('venobox/venobox.js') }}"></script>
            <!-- ajax mail js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/ajax-mail.js') }}"></script>
            <!--  animated-text js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/animated-text.js') }}"></script>
            <!-- venobox min js -->
            <script type="text/javascript" src="{{ asset('venobox/venobox.min.js') }}"></script>
            <!-- isotope js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/isotope.pkgd.min.js') }}"></script>
            <!-- jquery nivo slider pack js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/jquery.nivo.slider.pack.js') }}"></script>
            <!-- jquery meanmenu js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/jquery.meanmenu.js') }}"></script>
            <!-- jquery scrollup js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/jquery.scrollUp.js') }}"></script>
            <!-- theme js -->
            <script type="text/javascript" src="{{ asset('public_assets/js/theme.js') }}"></script>
            <!-- jquery js -->

            <script src="{{ asset('dashboard_assets_new/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
            <script src="{{ asset('dashboard_assets_new/assets/pages/jquery.sweet-alert.init.js') }}"></script>

            @yield('script')

        </body>

        {{-- @auth
    <script src="//code.tidio.co/6nt3zbc9ula3wzq0ewpi8oglohqg7pqj.js" async></script>
    @endif --}}

        </html>
