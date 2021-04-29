@extends('layouts.public_app')
@section('title')
    IT Solutions Services
@endsection
@section('main_con')
    @if (Session::has('message'))
        <input type="hidden" id="sa-mixin">
        {{ Session::get('message') }}
        <script>
            jQuery(function() {
                jQuery('#sa-mixin').click();
            });

        </script>
    @endif
    <!--==================================================-->
    <!----- Start petech Slider Area ----->
    <!--==================================================-->
    <div class="slider_list owl-carousel">
        <div class="slider_area d-flex align-items-center slider3" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_slider text-center">
                            <div class="slider_content">
                                <div class="slider_text">
                                    <div class="slider_text_inner white">
                                        <h4>IT Services Provider</h4>
                                        <h1>Real Economy</h1>
                                        <h2>IT Solutions</h2>
                                    </div>
                                    <div class="slider_button pt-5">
                                        <div class="button">
                                            @if (Route::has('login'))
                                            @auth
                                            <a href="/blogs">Appointment Booking</a>
                                            @else
                                                @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Get Started <span>+</span></a>
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
            </div>
        </div>
        <div class="slider_area d-flex align-items-center slider4" id="home2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_slider text-center">
                            <div class="slider_content">
                                <div class="slider_text">
                                    <div class="slider_text_inner white">
                                        <h4>IT Consulting</h4>
                                        <h1>Best IT Solutions</h1>
                                        <h2>For Your Petech</h2>
                                    </div>
                                    <div class="slider_button pt-5">
                                        <div class="button">
                                            @if (Route::has('login'))
                                            @auth
                                            <a href="/blogs">Latest Articles & News</a>
                                            @else
                                                @if (Route::has('register'))
                                                <a href="/contact">Contact Us</a>
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
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Slider Area ----->
    <!--==================================================-->

    

    <!--==================================================-->
    <!----- Start petech department  Area ----->
    <!--==================================================-->

    <div class="service_area rs pt-40 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-5">
                        <div class="sub_title pb-3">
                            <h5>what we offers</h5>
                        </div>
                        <div class="main_title">
                            <h1>Departments Categories</h1>
                        </div>
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($departments as $department)
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                        <div class="single_service_thumb fixedBoxImglarge">
                            {{-- <div class="single_service_icon">
                                <span class="icon flaticon-planet-earth"></span>
                            </div> --}}
                            <a href="department/{{$department->id}}">
                            <img class="ImgSize" src="dashboard_assets/departmentImages/{{ $department->image }}" alt="{{ $department->department_name }}" />
                            </a>
                        </div>
                        <div class="single_service_content">
                            <div class="single_service_content_inner">
                                <h4><a href="department/{{$department->id}}">{{ $department->department_name }}</a></h4>
                            </div>
                            {{-- <div class="service_button">
                                <div class="button_two">
                                    <a href="#">Read More <span>+</span></a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>         
                @endforeach
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!----- END petech department  Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start petech About  Area ----->
    <!--==================================================-->
    <div class="about_area abg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 gave0">

                    <div class="single_about_thumb">
                        <div class="single_about_thumb_inner im_rs_bt">
                            <img src="public_assets/images/about/about1.jpg" alt="" />
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_shape">
                        <div class="about_shape_inner2 bounce-animate">
                            <img src="public_assets/images/shape/2.png" alt="" />
                        </div>
                    </div>
                    <div class="single_about ml-50 mr-70">
                        <div class="section_title text-left mb-5">
                            <div class="sub_title pb-3">
                                <h5>Who We Are</h5>
                            </div>
                            <div class="main_title">
                                <h1>Simple Solutions</h1>
                                <h2>Platforms</h2>
                            </div>
                            <div class="section_text bd-left pt-4 pr-5">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
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
                                <h5>Company Experience</h5>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan<br>
                                    tium doloremque laudantium, totam rem aperiam, eaque ipsa</p>
                            </div>
                        </div>
                        <div class="about_button rsp pt-4">
                            <div class="button">
                                @if (Route::has('login'))
                                @auth
                                @else
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Get Started <span>+</span></a>
                                    @endif
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="about_shape">
                        <div class="about_shape_inner3 bounce-animate">
                            <img src="public_assets/images/shape/3.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech About  Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start petech Mentor  Area ----->
    <!--==================================================-->

    {{-- <div class="team_area pt-115">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text-center mb-110">
						<div class="sub_title pb-3">
							<h5>Team Member</h5>
						</div>
						<div class="main_title">
							<h1>The Creative Crew </h1>
							<h2>Behind Lounge</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-50">
                @forelse ($mentors as $mentor)
				<div class="col-lg-4 col-md-6">
					<div class="single_team_two">
						<div class="single_team_two_inner">
							<div class="single_team_two_thumb">
								<img style="width: 120px; height: 120px;" src="dashboard_assets/adminImages/{{ $mentor->mentor->image }}" alt="">
							</div>
							<div class="single_team_content_two">
								<div class="single_team_content_two_title">
									<h4>{{ $mentor->mentor->name }}</h4>
									<span>{{ $mentor->mentor->department }}</span>
								</div>
								<div class="single_team_content_two_title">
									<span>{{ $mentor->mentor->education }}</span>
								</div>
								<div class="single_team_content_two_text pt-2 pb-3">
									<p>Bio : {{ $mentor->mentor->description }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                @empty
                <td>No doctors available today</td>	                     
                @endforelse
			</div>
		</div>
	</div> --}}

    <!--==================================================-->
    <!----- END petech Mentor  Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start petech Mentor  Area ----->
    <!--==================================================-->
    <div id="mentor" class="team_area pt-115">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section_title text-center mb-110">
						<div class="sub_title pb-3">
							<h5>Top Rated Mentors</h5>
						</div>
						<div class="main_title">
							<h1>The Creative Crew </h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row pt-50">
                @foreach ($allmentors as $mentor)
				<div class="col-lg-4 col-md-6">
					<div class="single_team_two">
						<div class="single_team_two_inner">
							<div class="single_team_two_thumb">
                                <a href="mentor/profile/{{ $mentor->id }}">
								<img style="width: 120px; height: 120px; border: 7px solid @if (Cache::has('is_online' . $mentor->id)) #1BC5BD; @else #FF6600; @endif" src="dashboard_assets/adminImages/{{ $mentor->image }}" alt="">
                                </a>
							</div>
							<div style="height: 400px;" class="single_team_content_two">
								<div class="single_team_content_two_title">
									<h4>{{ $mentor->name }}</h4>
                                    <div class="single_team_content_two_title">
                                        {{-- <h4>{{ $mentor->name }}</h4> --}}
                                        <span>
                                        @if (Cache::has('is_online' . $mentor->id))
                                            <i class="symbol-badge text-success">online</i>
                                        @else
                                            <i class="symbol-badge text-secondary">offline</i>
                                        @endif
                                        </span>
                                    </div>
									<span>{{ $mentor->department }}</span>
								</div>
								<div class="single_team_content_two_title">
									<span>{{ $mentor->education }}</span>
								</div>
								<div class="single_team_content_two_text pt-2 pb-3">
									<p style="height: 235px;">
                                        Bio : 
                                        {{-- {{ substr(strip_tags($mentor->description), 0, 350),'etc..' }}  --}}
                                        {{ substr(strip_tags($mentor->description), 0, 300) }}
                                        {{ strlen(strip_tags($mentor->description)) > 300 ? "...ReadMore" : "" }} 
                                    </p>
								</div>
                               
							</div>
                            @if ($mentor->avg_rating == null )
                            <div class="petech_blog_meta">
                                {{-- <a href="#">No Review Yet </a> --}}
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> No Review Yet</span>
                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                            <i style="color:#a1a09f;" class="fas fa-star"></i> 
                            <i style="color:#a1a09f;" class="fas fa-star"></i> 
                            <i style="color:#a1a09f;" class="fas fa-star"></i> 
                            <i style="color:#a1a09f;" class="fas fa-star"></i> 
                            <i style="color:#a1a09f;" class="fas fa-star"></i> 
                            </div>    
                            @endif

                            @if ($mentor->avg_rating >= 1 && $mentor->avg_rating <= 1.99)
                            <div class="petech_blog_meta">
                                {{-- <a href="#">Average Rating </a> --}}
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> Average Rating</span>
                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                            <i style="color:#FF6600;" class="fas fa-star"></i> 
                            </div>    
                            @endif
    
                            @if ($mentor->avg_rating >= 2 && $mentor->avg_rating <= 2.99)
                            <div class="petech_blog_meta">
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> Average Rating</span>
                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>
                            </div>     
                            @endif

                            @if ($mentor->avg_rating >= 3 && $mentor->avg_rating <= 3.99)
                            <div class="petech_blog_meta">
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> Average Rating</span>
                                <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                                <i style="color: #FF6600;" class="fas fa-star"></i>     
                                <i style="color:#FF6600;" class="fas fa-star"></i>     
                                <i style="color:#FF6600;" class="fas fa-star"></i> 
                            </div>
                            @endif
    
                            @if ($mentor->avg_rating >= 4 && $mentor->avg_rating <= 4.99)
                            <div class="petech_blog_meta">
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> Average Rating</span>
                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i> 
                            </div>    
                            @endif
    
                            @if ($mentor->avg_rating == 5)
                            <div class="petech_blog_meta">
                                <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3"> Average Rating</span>
                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                            <i style="color:#FF6600;" class="fas fa-star"></i> 
                            </div>    
                            @endif
                            <div class="header_top_menu_icon_inner pb-5 pt-3">
                                <ul id="quick">
                                    <li class=""><a style="width: 150px" href="mentor/profile/{{ $mentor->id }}"><i class="fas fa-plus">&nbsp;Quick View</i></a></li>
                                </ul>
                            </div>
						</div>
					</div>
				</div> 
                @endforeach
			</div>
            {{-- <div class="d-flex justify-content-center">
                {!! $allmentors->links() !!}
            </div> --}}
		</div>
	</div>

    <!--==================================================-->
    <!----- END petech Mentor  Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!----- Start petech Video  Area ----->
    <!--==================================================-->
    <div class="video_area pb-250">
        <div class="container">
            <div class="row margin_bottom-">
                <div class="col-lg-12">
                    <div class="single_video">
                        <div class="single_video_thumb">
                            <img src="public_assets/images/resource/video.jpg" alt="" />
                        </div>
                        <div class="bd-video">
                            <div class="video-icon">
                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                    href="https://youtu.be/BS4TUd7FJSg"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Video  Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start petech Whay Choose Us  Area ----->
    <!--==================================================-->
    <div class="whay_choose_us_area pt-30 pb-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pt-30">
                    <div class="single_choose">
                        <div class="single_choose_content pb-3">
                            <div class="single_choose_icon">
                                <span class="icon flaticon-award-1"></span>
                            </div>
                            <div class="single_choose_content_inner white">
                                <h4>Professional and Expert</h4>
                                <p>Serspiciatis unde omnis natus voluptatem accusantium
                                    doloremque laudantium totam rem aperiam eaque ipsa quae
                                    veritatis et quasi architecto beatae vitae</p>
                            </div>
                        </div>
                        <div class="single_choose_content">
                            <div class="single_choose_icon">
                                <span class="flaticon-web-browser"></span>
                            </div>
                            <div class="single_choose_content_inner white">
                                <h4>Clean Unique & Easy</h4>
                                <p>Serspiciatis unde omnis natus voluptatem accusantium
                                    doloremque laudantium totam rem aperiam eaque ipsa quae
                                    veritatis et quasi architecto beatae vitae</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Whay Choose Us  Area ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start petech Case Study Area  ----->
    <!--==================================================-->
    <!-- 	<div class="portfolio_area style_two rs pt-40 pb-40"> -->
    {{-- <div class="portfolio_area rs pt-40 pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-5">
                        <div class="sub_title pb-3">
                            <h5>What We Do</h5>
                        </div>
                        <div class="main_title">
                            <h1>Discover Best Product</h1>
                            <h2>Design Strategy</h2>
                        </div>
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt1.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt2.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt3.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt1.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt4.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt5.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt6.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_portfolio">
                        <div class="single_portfolio_inner">
                            <div class="single_portfolio_thumb">
                                <img src="public_assets/images/project/pt4.jpg" alt="" />
                            </div>
                            <div class="single_portfolio_icon">
                                <a href="#"><i class="fas fa-arrow-right"></i></a>
                            </div>
                            <div class="single_portfolio_content">
                                <h5><a href="#">Product Strategy</a></h5>
                                <span>IT Service & Solutions</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--==================================================-->
    <!----- End petech Case Study Area  ----->
    <!--==================================================-->

    <!--==================================================-->
    <!----- Start petech Testimonial Area ----->
    <!--==================================================-->
    <div class="testimonial_area pb-40 pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-5">
                        <div class="sub_title pb-3">
                            <h5>clients testimonials</h5>
                        </div>
                        <div class="main_title">
                            <h1>What Our Client’s </h1>
                            <h2>Say About us</h2>
                        </div>
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <!--testimonial owl curousel -->
                        <div class="testimonial_list owl-carousel curosel-style">
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">
                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi5.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Jeffrey A. Burwell</h4>
                                                <span>Web Development</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">

                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Hossen Babu Orfe Hira</h4>
                                                <span>Web Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">

                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi2.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Anowar Hosen Omio</h4>
                                                <span>Seo Marketing</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">

                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi3.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Mehedi Hassan Miraz</h4>
                                                <span>UXI Designer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">

                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi4.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Mostofa Kamal</h4>
                                                <span>Ceo Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Single Testimonial -->
                            <div class="col-lg-12">
                                <div class="single_testimonial">

                                    <div class="single_testimonial_content">
                                        <div class="single_testimonial_thumb">
                                            <img src="public_assets/images/resource/testi4.png" alt="" />
                                        </div>
                                        <div class="single_testimonial_content_inner">
                                            <div class="single_testimonial_bold_text">
                                                <p>Sed perspiciatis unde omnis natus voluptatem accusantium doloremme
                                                    laudantium aperiam inventore</p>
                                            </div>
                                            <div class="single_testimonial_content_text">
                                                <p>But I must explain to you how all this mistaken idea of denouncing
                                                    pleasure and praising pain was born and I will give you a complete
                                                    account of thsystem, and expound the actual teachings of the great
                                                    explorer of the truth,</p>
                                            </div>
                                            <div class="single_testimonial_content_title">
                                                <h4>Saad Alam Sado</h4>
                                                <span>PHP Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Testimonial Area ----->
    <!--==================================================-->


    <!--==================================================-->
    <!-----Start petech how can we help you Area Area  ----->
    <!--==================================================-->

    <div class="asked_question_area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section_title text-left mb-4">
                        <div class="sub_title pb-3">
                            <h5>Asked Questions</h5>
                        </div>
                        <div class="main_title white">
                            <h1>How Can We</h1>
                            <h2>Help You?</h2>
                        </div>
                    </div>
                    <div class="single_asked_desk">
                        <div class="single_asked_icon mr-3">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="single_asket_text">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <div class="single_asked_desk">
                        <div class="single_asked_icon mr-3">
                            <i class="far fa-check-circle"></i>
                        </div>
                        <div class="single_asket_text">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                    </div>
                    <form class="pt-4 pb-35" action="#">
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
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="asked_bx_qs">
                                <div class="asked_bx_qs_icon mr-3">
                                    <span class="flaticon-coding-3"></span>
                                </div>
                                <div class="asked_bx_content white">
                                    <h5 class="mt-0">Guide</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="asked_bx_qs">
                                <div class="asked_bx_qs_icon mr-3">
                                    <span class="icon flaticon-human-resources"></span>
                                </div>
                                <div class="asked_bx_content white">
                                    <h5 class="mt-0">FAQ</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single_accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card mb-3">
                                <div class="card-header" id="headingOne">
                                    <h2 class="accordion_content mb-0">
                                        <button class="btn btn-link btn-block text-left" type="button"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Should Designers Learn Code Terminal
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="accordion_content mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            How Indigo Design Usability Testing Takes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingThree">
                                    <h2 class="accordion_content mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Implementing Infinite Scroll And Image Lazy
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header" id="headingFour">
                                    <h2 class="accordion_content mb-0">
                                        <button class="btn btn-link btn-block text-left collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Accessible Inclusiveness Beyond Patterns
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
    <!----- End petech how can we help you Area ----->
    <!--==================================================-->

    <div class="counter_area rs pt-115 pb-90">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">35</span></h1>
						</div>
						<div class="counter_desc">
							<h5>Years Experience</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum doloremque laudantium,</p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">75</span></h1>
						</div>
						<div class="counter_desc">
							<h5>Team  Members</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum doloremque laudantium,</p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">85</span></h1>
						</div>
						<div class="counter_desc">
							<h5>Awards Winning</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum doloremque laudantium,</p>
						</div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single_counter text_center mb-4">
						<div class="countr_text">
							<h1><span class="counter">49</span></h1>
						</div>
						<div class="counter_desc">
							<h5>Project Complate</h5>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusaum doloremque laudantium,</p>
						</div>
						
					</div>
				</div>		
			</div>
		</div>
	</div>

    <!--==================================================-->
    <!----- Start petech Blog Area ----->
    <!--==================================================-->
    <div class="blog_area rs pt-40 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-20">
                    <div class="section_title text-center">
                        <div class="sub_title pb-3">
                            <h5>Our latest Blog</h5>
                        </div>
                        <div class="main_title">
                            <h1>Our Recent Article</h1>
                            <h2>News & Tips</h2>
                        </div>
                        <div class="em_bar_bg"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="single_blog">
                            <div class="single_blog_thumb fixedBoxImglarge">
                                <a href="single/{{ $post->id }}"><img class="ImgSize"
                                        src="dashboard_assets/postImages/{{ $post->image }}"
                                        alt="{{ $post->type }}" /></a>
                            </div>
                            <div class="single_content_date">
                                <div class="single_content_date_inner">
                                    <h3>{{ $post->day }}</h3>
                                    <span>{{ $post->month }}</span>
                                    <span class="years">{{ $post->year }}</span>
                                </div>
                            </div>
                            <div class="single_blog_content fixedBoxlarge">
                                <div class="petech_blog_meta">
                                    <a href="single/{{ $post->id }}">Consulting </a>
                                    <span class="meta-date pl-3">{{ $post->type }}</span>
                                </div>
                                <div class="blog_page_title pb-1">
                                    <h4><a href="single/{{ $post->id }}">{{ $post->title }}</a></h4>
                                </div>
                                <div class="blog_description">
                                    <p>
                                        {{-- {{ substr(strip_tags($post->body), 0, 220) }} etc.. --}}
                                        {{ substr(strip_tags($post->body), 0, 190) }}
                                        {{ strlen(strip_tags($post->body)) > 190 ? "...ReadMore" : "" }} 
                                    </p>
                                </div>

                            </div>
                            <div class="blog_page_button">
                                <a href="single/{{ $post->id }}">Read More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Blog Area ----->
    <!--==================================================-->
@endsection
