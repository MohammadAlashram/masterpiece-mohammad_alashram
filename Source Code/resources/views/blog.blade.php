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
                            <h2>New Articles</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a>
                                    <i class="fa fa-angle-right"></i> <span>News</span></li>
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

    <!--==================================================-->
    <!----- Start petech Blog Area ----->
    <!--==================================================-->
    <div class="blog_area style_two grid rs pt-115 pb-100">
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
			<div class="d-flex justify-content-center">
				{!! $posts->links() !!}
			</div>
        </div>
    </div>
    <!--==================================================-->
    <!----- End petech Blog Area ----->
    <!--==================================================-->
@endsection
