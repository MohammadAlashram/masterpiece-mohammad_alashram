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
                                        <h2>We Creat Perfect</h2>
                                        <h2>IT Solutions</h2>
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
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                            @foreach ($allmentors as $mentor)
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="single_team_two">
                                    <div class="single_team_two_inner">
                                        <div class="single_team_two_thumb">
                                            <img style="width: 120px; height: 120px; border: 7px solid @if (Cache::has('is_online' . $mentor->id)) #1BC5BD; @else #FF6600; @endif" src="dashboard_assets/adminImages/{{ $mentor->image }}" alt="">
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
                                                    {{ substr(strip_tags($mentor->description), 0, 275) }}
                                                    {{ strlen(strip_tags($mentor->description)) > 275 ? "...ReadMore" : "" }} 
                                                </p>
                                            </div>
                                            {{-- <div class="single_team_two_icon">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </div> --}}
                                            @if ($mentor->avg_rating == null )
                                            <div class="petech_blog_meta">
                                                <a href="#">No Review Yet </a>
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
                                                <a href="#">Average Rating </a>
                                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                                            <i style="color:#FF6600;" class="fas fa-star"></i> 
                                            </div>    
                                            @endif
                    
                                            @if ($mentor->avg_rating >= 2 && $mentor->avg_rating <= 2.99)
                                            <div class="petech_blog_meta">
                                                <a href="#">Average Rating </a>
                                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                                            <i style="color:#FF6600;" class="fas fa-star"></i>
                                            </div>     
                                            @endif
                
                                            @if ($mentor->avg_rating >= 3 && $mentor->avg_rating <= 3.99)
                                            <div class="petech_blog_meta">
                                                <a href="#">Average Rating </a>
                                                <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                                                <i style="color: #FF6600;" class="fas fa-star"></i>     
                                                <i style="color:#FF6600;" class="fas fa-star"></i>     
                                                <i style="color:#FF6600;" class="fas fa-star"></i> 
                                            </div>
                                            @endif
                    
                                            @if ($mentor->avg_rating >= 4 && $mentor->avg_rating <= 4.99)
                                            <div class="petech_blog_meta">
                                                <a href="#">Average Rating </a>
                                            <span class="meta-date pl-3"> {{$mentor->avg_rating}}</span>
                                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                                            <i style="color:#FF6600;" class="fas fa-star"></i>     
                                            <i style="color:#FF6600;" class="fas fa-star"></i> 
                                            </div>    
                                            @endif
                    
                                            @if ($mentor->avg_rating == 5)
                                            <div class="petech_blog_meta">
                                                <a href="#">Average Rating </a>
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
                            </div>                     
                            @endforeach
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
                <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
                    <div class="blog-left-side widget">
                        <div id="search-3" class="widget widget_search">
                            <div class="search">
                                <form action="#" method="get">
                                    <input type="text" name="s" value="" placeholder="Type Your Keyword"
                                        title="Search for:">
                                    <button type="submit" class="icons">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div id="categories-3" class="widget widget_categories">
                            <h2 class="widget-title">Category</h2>
                            <ul>
                                @foreach ($departments as $department)
                                <li class="cat-item cat-item-8"><a class="" href="department/{{$department->id}}"><i
                                            class="fa fa-youtube-play"></i>{{$department->department_name}}<span></span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div id="em_recent_post_widget-6" class="widget widget_recent_data">
                            <div class="single-widget-item">
                                <h2 class="widget-title">Popular Post</h2>
                                @foreach ($posts as $post)
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <a href="dashboard_assets/postImages/{{ $post->image }}">
                                            <img width="100" height="80" src="dashboard_assets/postImages/{{ $post->image }}"
                                                alt="{{ $post->type }}">
                                        </a>
                                    </div>
                                    <div class="recent-post-text">
                                        <span class="rcomment">{{ $post->day }}&nbsp;{{ $post->month }}&nbsp;{{ $post->year }}</span>
                                        <h4><a href="single/{{ $post->id }}">
                                            {{ $post->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="dfd" class="widget thumb">
                            <div class="blog_details_widget_thumb">
                                <img src="public_assets/images/resource/blog-details-left.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BLOG_AREA END -->
@endsection
