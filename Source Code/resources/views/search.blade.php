@extends('layouts.public_app')

@section('main_con')
    <!--==================================================-->
    <!----- Start petech Blog Area ----->
    <!--==================================================-->
    @if ($users->isNotEmpty() || $posts->isNotEmpty())
        <div id="mentor" class="team_area pt-115">
            <div class="container">
                @if ($users->isNotEmpty())
                <div class="row">
                    <div class="col-lg-12 pb-20">
                        <div class="section_title text-center mb-110">
                            <div class="sub_title pb-3">
                                <h5>Top Search Results</h5>
                            </div>
                            <div class="main_title">
                                <h1>The Creative Crew</h1>
                            </div>
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="row pt-20">
                    @foreach ($users as $mentor)
                        @if ($mentor->role == 'mentor')
                            <div class="col-lg-4 col-md-6">
                                <div class="single_team_two">
                                    <div class="single_team_two_inner">
                                        <div class="single_team_two_thumb">
                                            <img style="width: 120px; height: 120px; border: 7px solid @if (Cache::has('is_online' . $mentor->id)) #1BC5BD;
                                        @else #FF6600; @endif"
                                            src="dashboard_assets/adminImages/{{ $mentor->image }}" alt="">
                                        </div>
                                        <div style="height: 500px;" class="single_team_content_two">
                                            <div class="single_team_content_two_title">
                                                <h4>{{ $mentor->name }}</h4>
                                                <div class="single_team_content_two_title">
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
                                                    {{ substr(strip_tags($mentor->description), 0, 280) }}
                                                    {{ strlen(strip_tags($mentor->description)) > 280 ? '...ReadMore' : '' }}
                                                </p>
                                            </div>
                                            @if ($mentor->avg_rating == null)
                                                <div class="petech_blog_meta">
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        No Review Yet</span>
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
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        Average Rating</span>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 2 && $mentor->avg_rating <= 2.99)
                                                <div class="petech_blog_meta">
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        Average Rating</span>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 3 && $mentor->avg_rating <= 3.99)
                                                <div class="petech_blog_meta">
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        Average Rating</span>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color: #FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating >= 4 && $mentor->avg_rating <= 4.99)
                                                <div class="petech_blog_meta">
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        Average Rating</span>
                                                    <span class="meta-date pl-3"> {{ $mentor->avg_rating }}</span>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                    <i style="color:#FF6600;" class="fas fa-star"></i>
                                                </div>
                                            @endif

                                            @if ($mentor->avg_rating == 5)
                                                <div class="petech_blog_meta">
                                                    <span style="color: #FF6600; font-weight: bold" class="meta-date pl-3">
                                                        Average Rating</span>
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
                                                    <li class=""><a style="width: 150px" href="mentor/profile/{{ $mentor->id }}"><i class="fas fa-plus">&nbsp;Quick View</i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div id="mentor" class="team_area pt-0">
            <div class="container">
                @if ($posts->isNotEmpty())
                <div class="row">
                    <div class="col-lg-12 pb-20">
                        <div class="section_title text-center mb-20">
                            <div class="sub_title pb-3">
                                <h5>Top Search Results</h5>
                            </div>
                            <div class="main_title">
                                <h1>Latest Articles</h1>
                            </div>
                            <div class="em_bar_bg"></div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="blog_area style_two grid rs pt-0 pb-100">
                    <div class="container">
                        <div class="row">
                            @foreach ($posts as $post)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="single_blog">
                                        <div class="single_blog_thumb fixedBoxImglarge">
                                            <a href="blog-details.html"><img class="ImgSize"
                                                    src="dashboard_assets/postImages/{{ $post->image }}"
                                                    alt="{{ $post->type }}" /></a>
                                        </div>
                                        <div class="single_blog_content">
                                            <div class="petech_blog_meta">
                                                <a href="single/{{ $post->id }}"><i
                                                        class="far fa-calendar-alt"></i>{{ $post->day }}&nbsp;{{ $post->month }}&nbsp;{{ $post->year }}&nbsp;</a>
                                                <span class="meta-comment pl-3"><i class="fas fa-tag"></i>{{ $post->type }}</span>
                                            </div>
                                            <div class="blog_page_title pb-2">
                                                <h4><a href="single/{{ $post->id }}">{{ $post->title }}</a></h4>
                                            </div>
                                            <div class="blog_description">
                                                <p>
                                                    {{-- {{ substr(strip_tags($post->body), 0, 100) }} --}}
                                                    {{ substr(strip_tags($post->body), 0, 100) }}
                                                    {{ strlen(strip_tags($post->body)) > 100 ? "etc..." : "" }}
                                                </p>
                                            </div>
                                            <div class="button_two">
                                                <a href="single/{{ $post->id }}">Read More <span>+</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="blog_area rs pt-40 pb-60">
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
        </div>
    @endif
    <!--==================================================-->
    <!----- End petech Blog Area ----->
    <!--==================================================-->
@endsection
