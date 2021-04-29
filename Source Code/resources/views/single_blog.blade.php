@extends('layouts.public_app')
@section('title')
    IT Solutions News
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

    <!-- ============================================================== -->
    <!-- Start petech Breatcome Area -->
    <!-- ============================================================== -->
    <div class="breatcome_area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcome_title">
                        <div class="breatcome_title_inner pb-2">
                            <h2>Article Details</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a>
                                    <i class="fa fa-angle-right"></i> <span>Article Details</span>
                                </li>
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

    <!-- BLOG AREA -->
    <div class="blog_area blog-details-area rs pt-115 pb-90" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog_details">
                                <div class="blog_dtl_content">
                                    <div class="blog_details_top_title mb-5">
                                        <div class="petech-blog-meta">
                                            <div class="petech-blog-meta-left">
                                                {{-- <span><i class="far fa-user"></i> Jhonothan Doe</span> --}}
                                                <span><i
                                                        class="far fa-calendar-alt"></i>{{ $post->day }}&nbsp;{{ $post->month }}&nbsp;{{ $post->year }}&nbsp;</span>
                                                <span><i class="fas fa-tag"></i>{{ $post->type }}</span>
                                            </div>
                                        </div>
                                        <h2>{{ $post->title }}</h2>
                                    </div>

                                    <div class="blog_dtl_thumb mb-5">
                                        <img class="" src="{{ asset('/dashboard_assets/postImages')}}/{{ $post->image }}"
                                            alt="{{ $post->type }}" />
                                    </div>
                                    <p>{{ $post->body }}</p>

                                    <h3 class="mt-5 mb-3">Stay Calm And Read Smashing Magazine</h3>
                                    <p>Voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                                        qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci , sed quia non numquam eius modi tempora incidunt ut et dolore aliquam </p>

                                    <div class="blog_details_tp_dex pb-4">
                                        <p> <span class="mr-3"><i class="far fa-check-circle"></i></span>Implementing
                                            Infinite Scroll And Image Lazy Loading In React</p>
                                        <p> <span class="mr-3"><i class="far fa-check-circle"></i></span>Rescheduling
                                            SmashingConf SF And Looking Out For Each Other Stay Calm Read</p>
                                        <p> <span class="mr-3"><i class="far fa-check-circle"></i></span>How Indigo.Design
                                            Usability Testing Takes The Guesswork Out Web Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
                    <div class="blog-left-side widget">
                        <div id="em_recent_post_widget-6" class="widget widget_recent_data">
                            <div class="single-widget-item">
                                <h2 class="widget-title">Popular Post</h2>
                                @foreach ($posts as $post)
                                    <div class="recent-post-item">
                                        <div class="recent-post-image">
                                            <a href="{{ asset('/dashboard_assets/postImages')}}/{{ $post->image }}">
                                                
                                                <img width="100" height="80"
                                                    src="{{ asset('/dashboard_assets/postImages')}}/{{ $post->image }}"
                                                    alt="{{ $post->type }}">
                                            </a>
                                        </div>
                                        <div class="recent-post-text">
                                            <span
                                                class="rcomment">{{ $post->day }}&nbsp;{{ $post->month }}&nbsp;{{ $post->year }}</span>
                                            <h4><a href="{{ $post->id }}">
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
                                <img src="{{ asset('public_assets/images/resource/blog-details-left.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- BLOG_AREA END -->

@endsection
