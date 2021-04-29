@extends('layouts.public_app')

@section('main_con')
    <!-- ============================================================== -->
    <!-- Start petech Breatcome Area -->
    <!-- ============================================================== -->
    <div class="breatcome_area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>About Us</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="/">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a> <i
                                        class="fa fa-angle-right"></i> <span>About Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End petech Breatcome Area -->
    <!-- ============================================================== -->

    <div class="about_area rsp pt-100 pb-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single_about_thumb mr-2">
                        <div class="single_about_thumb_inner im_rs_bt">
                            <img src="{{ asset('public_assets/images/team/team-pages.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_shape">
                        <div class="about_shape_inner5">
                            <img src="{{ asset('public_assets/images/shape/ab2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="single_about pl-2">
                        <div class="section_title text-left mb-5">
                            <div class="sub_title brd_ab pb-3">
                                <h5>About company</h5>
                            </div>
                            <div class="main_title">
                                <h1>We Discover About </h1>
                                <h2>45 Years About IT</h2>
                            </div>
                            <div class="section_text pt-4">
                                <p>Sed perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    udantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo</p>
                            </div>
                        </div>
                        <div class="single_about_content">
                            <div class="single_about_icon">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="single_about_content_inner">
                                <h5>Company Experience</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan<br>
                                    tium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            </div>
                        </div>
                        <div class="single_about_content pt-2">
                            <div class="single_about_icon">
                                <i class="far fa-check-circle"></i>
                            </div>
                            <div class="single_about_content_inner">
                                <h5>Quick Support</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan<br>
                                    tium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            </div>
                        </div>
                        <div class="about_button pt-4">
                            <div class="button">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="/blogs">Latest News</a>
                                    @else
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Join Company <span>+</span></a>
                                        @endif
                                    @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="about_area style_three pt-60 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="single_about_thumb">
                            <div class="single_about_thumb_inner im_rs_bt mr-3">
                                <img src="{{ asset('public_assets/images/about/ab3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 gave0">
                        <div class="single_about">
                            <div class="section_title text-left mb-4">
                                <div class="sub_title pb-3">
                                    <h5>Who We Are</h5>
                                </div>
                                <div class="main_title">
                                    <h1>Business Goal Is</h1>
                                    <h2>Make Success</h2>
                                </div>
                                <div class="section_text bold pt-4 ">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi e</p>
                                </div>
                            </div>
                            <div class="single_about_content pr-3">
                                <div class="single_about_icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <div class="single_about_content_inner">
                                    <h5>Company Experience</h5>
                                </div>
                            </div>
                            <div class="single_about_content pb-3">
                                <div class="single_about_icon">
                                    <i class="far fa-lightbulb"></i>
                                </div>
                                <div class="single_about_content_inner">
                                    <h5>Quick Support &amp; Help</h5>
                                </div>
                            </div>
                            <div class="section_text bold">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. </p>
                            </div>
                            {{-- <div class="about_button pt-2">
                                <div class="button_three">
                                    <a href="#">Read More</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
