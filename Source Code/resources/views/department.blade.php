@extends('layouts.public_app')
@section('title')
    Mentors
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
    <div class="owl-item" style="width: 100%;">
        <div class="slider_area d-flex align-items-center slider6" id="home2">
            <div class="container">
                <div class="row">
                    <!--Start Single Portfolio -->
                    <div class="col-lg-12">
                        <div class="single_slider">
                            <div class="slider_content">
                                <div class="slider_text text-center">
                                    <div class="slider_text_inner white">
                                        <h2>Professional</h2>
                                        <h2><span style="color: #FF6600">{{ $department }}</span> Mentors</h2>
                                    </div>
                                    {{-- <div class="slider_button pt-5">
                                        <div class="button">
                                            <a href="#">Get Started</a>
                                            <a class="active" href="#">Learn More</a>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA -->
    <div class="blog-grid left-sidebar rs pt-115 pb-90" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @forelse ($allmentors as $mentor)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single_team_two">
                                    <div class="single_team_two_inner">
                                        <div class="single_team_two_thumb">
                                            <img style="width: 120px; height: 120px; border: 7px solid @if (Cache::has('is_online' . $mentor->id)) #1BC5BD;
                                        @else #FF6600; @endif"
                                            src="{{ asset('dashboard_assets/adminImages') }}/{{ $mentor->image }}"
                                            alt="">
                                        </div>
                                        <div style="height: 500px;" class="single_team_content_two">
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
                                                <p style="height: 175px;">
                                                    Bio :
                                                    {{-- {{ $mentor->description }} --}}
                                                    {{ substr(strip_tags($mentor->description), 0, 400) }}
                                                    {{ strlen(strip_tags($mentor->description)) > 400 ? '...ReadMore' : '' }}
                                                </p>
                                            </div>
                                            {{-- <div class="single_team_two_icon">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </div> --}}
                                            @if ($mentor->avg_rating == null)
                                                <div class="petech_blog_meta">
                                                    <a href="#">No Review Yet </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#a1a09f;" class="fas fa-star"></i>
                                                    <i style="color:#a1a09f;" class="fas fa-star"></i>
                                                    <i style="color:#a1a09f;" class="fas fa-star"></i>
                                                    <i style="color:#a1a09f;" class="fas fa-star"></i>
                                                    <i style="color:#a1a09f;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 1 && $mentor->avg_rating <= 1.99)
                                                <div class="petech_blog_meta">
                                                    <a href="#">Average Rating </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 2 && $mentor->avg_rating <= 2.99)
                                                <div class="petech_blog_meta">
                                                    <a href="#">Average Rating </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 3 && $mentor->avg_rating <= 3.99)
                                                <div class="petech_blog_meta">
                                                    <a href="#">Average Rating </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color: #FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 4 && $mentor->avg_rating <= 4.99)
                                                <div class="petech_blog_meta">
                                                    <a href="#">Average Rating </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating == 5)
                                                <div class="petech_blog_meta">
                                                    <a href="#">Average Rating </a>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif
                                            <div class="header_top_menu_icon_inner pb-5 pt-3">
                                                <ul id="quick">
                                                    {{-- <form method="post" action="mentor/profile/{{ $mentor->id }}">
                                                    @csrf
                                                    <input type="hidden" value="{{ $mentor->id }}">
                                                    <button type="submit">submit</button>
                                                    </form> --}}
                                                    <li class=""><a style="width: 150px" href="mentor/profile/{{ $mentor->id }}"><i class="fas fa-plus">&nbsp;Quick View</i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 pb-20">
                                        <div class="section_title text-center">
                                            <div class="sub_title pb-3">
                                                <h1 style="color:#FF6600">Ops!!</h1>
                                            </div>
                                            <div class="main_title">
                                                <h1>No results found</h1>
                                            </div>
                                            <div class="single_error_button mb-5">
                                                <a href="{{ route('/') }}">Back To Home</a>
                                            </div>
                                            <div class="em_bar_bg"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <!-- start pagination -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                {!! $allmentors->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG_AREA END -->
@endsection
