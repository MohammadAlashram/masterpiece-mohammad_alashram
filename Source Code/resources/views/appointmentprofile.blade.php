@extends('layouts.public_app')
@section('title')
    IT Solutions Services
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
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
                            <h2>Mentor Details</h2>
                        </div>
                        <div class="breatcome_content">
                            <ul>
                                <li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a>
                                    <i class="fa fa-angle-right"></i> <span>Profile Page</span>
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
    <div id="main_wrapper">
        <div class="container">
            <div class="row utf_sticky_main_wrapper">
                <div class="col-lg-8 col-md-8 margin-top-45">
                    <ul class="utf_box_widget mt-4">
                        <li>
                            <div class="utf_list_box_listing_item">
                                <div class="utf_list_box_listing_item-img utf_message_user  @if (Cache::has('is_online' . $user->id)) online @else @endif">
                                    <a href="#"><img
                                            src="{{ asset('dashboard_assets/adminImages') }}/{{ $user->image }}"
                                            alt=""></a>
                                    {{-- <span class="like-icon"></span> --}}
                                </div>
                                <div class="utf_list_box_listing_item_content">
                                    <div class="inner">
                                        <h3>{{ $user->name }}</h3>
                                        <span><i
                                                class="sl sl-icon-location"></i>{{ $user->email }}&nbsp;||&nbsp;{{ $user->department }}&nbsp;||&nbsp;
                                            @if (Cache::has('is_online' . $user->id))<span
                                                class="text-success">Online</span>@else<span>Offline</span>@endif
                                        </span>
                                        <br>
                                        <span><i class="sl sl-icon-location"></i>{{ $user->phone }}</span>
                                        <br>
                                        <span><i
                                                class="sl sl-icon-location"></i>{{ $user->education }}&nbsp;||&nbsp;{{ $user->gender }}</span>
                                        {{-- <span><i class="sl sl-icon-phone"></i> (415) 796-3633</span> --}}
                                        @if ($user->avg_rating == null)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                            </div>
                                        @endif
                                        @if ($user->avg_rating >= 1 && $user->avg_rating <= 1.99)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                            </div>
                                        @endif
                                        @if ($user->avg_rating >= 2 && $user->avg_rating <= 2.99)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                            </div>
                                        @endif
                                        @if ($user->avg_rating >= 3 && $user->avg_rating <= 3.99)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star empty"></span>
                                                <span class="star empty"></span>
                                            </div>
                                        @endif
                                        @if ($user->avg_rating >= 4 && $user->avg_rating <= 4.99)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star empty"></span>
                                            </div>
                                        @endif
                                        @if ($user->avg_rating == 5)
                                            <div class="utf_star_rating_section">
                                                <div class="utf_counter_star_rating">({{ $user->avg_rating }})</div>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                                <span class="star"></span>
                                            </div>
                                        @endif
                                        <p>{{ $user->description }}</p>
                                        <div id="utf_listing_tags"
                                            class="utf_listing_section listing_tags_section margin-bottom-10 margin-top-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @auth
                        <div id="utf_add_review" class="utf_add_review-box">
                            <h3 class="utf_listing_headline_part margin-bottom-20">Add Your Review</h3>
                            <span class="utf_leave_rating_title">Your email address will not be published.</span>
                            <form action="{{ $user->id }}/rating" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="utf_leave_rating margin-bottom-30">
                                            <input type="radio" name="rating" id="star5" value="5" checked>
                                            <label for="star5" title="Awesome - 5 stars" class="fa fa-star"></label>
                                            <input type="radio" title="Pretty good - 4 stars" name="rating" id="star4"
                                                value="4">
                                            <label for="star4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="star3" value="3">
                                            <label for="star3" title="Meh - 3 stars" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="star2" value="2">
                                            <label for="star2" title="Kinda bad - 2 stars" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="star1" value="1">
                                            <label for="star1" title="Sucks big time - 1 star" class="fa fa-star"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name:</label>
                                        <input type="text" placeholder="Name" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email:</label>
                                        <input type="text" placeholder="Email" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Subject:</label>
                                        <input type="text" placeholder="Subject" value="">
                                    </div>
                                </div>
                                <div>
                                    <label>Review:</label>
                                    <textarea cols="40" placeholder="Your Message..." rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                @if (Session::has('false'))
                                    <div style="padding: 10px; margin-top: 20px;" class="bg-dark alert-success text-white">
                                        {{ Session::get('false') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                    @endauth
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-4 margin-top-75 sidebar-search">
                    <div class="verified-badge with-tip margin-bottom-30"
                        data-tip-content="Listing has been verified and belongs business owner or manager."> <i
                            class="sl sl-icon-check"></i> Now Available</div>
                    <form action="{{ $user->id }}/get" method="post">
                        @csrf
                        <div class="utf_box_widget booking_widget_box">
                            <h3><i class="fa fa-calendar"></i> Booking</h3>
                            <div class="row with-forms margin-top-0">
                                <div
                                    class="col-lg-12 col-md-12 select_date_box {{ $errors->has('date') ? ' has-error' : '' }}">
                                    <input type="date" min='{{$mindate}}' name="date" class="form-control @error('date') is-invalid @enderror">
                                </div>
                            </div>
                            <button class="utf_progress_button button fullwidth_block margin-top-5"
                                type="submit">submit</button>
                        </div>
                    </form>
                    
                    <form action="/book" method="post">
                        @csrf
                        <div class="utf_box_widget booking_widget_box mt-5 mb-5">
                            <h3><i class="fas fa-business-time"></i>Available Appointments</h3>
                            <div style="padding-top: 20px;" class="form-group">
                                {{-- <label class="font-size-h6 font-weight-bolder text-dark">Your Gender</label> --}}
                                <select name="time" class="form-control @error('time') is-invalid @enderror"
                                    id="time">
                                    {{-- <option value="">Select</option> --}}
                                    @foreach ($times as $time)
                                        <option value="{{ $time->time }}">{{ $date }}&nbsp; &nbsp;<span>{{ $time->time }}</span></option>
                                    @endforeach
                                </select>
                                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (session('message'))
                                    <div class="alert alert-danger">{{ session('message') }}</div>
                                @endif

                                <div class="input-group">
                                    <textarea type="text" name="message"
                                        class="form-control @error('message') is-invalid @enderror" placeholder="Please Write a note for your mentor or write the main subject to help the mentor to know more about your request"
                                        style="margin-top: 0px; margin-bottom: 0px; height: 147px;"></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @if (session('message'))
                                        <div class="alert alert-danger">{{ session('message') }}</div>
                                    @endif
                                </div>

                                <input name="mentor_id" type="hidden" value="{{ $user->id }}" placeholder="{{ $user->id }}">
                                @if (Auth::check())
                                <input name="user_id" type="hidden" value="{{ Auth::user()->id }}" placeholder="{{ Auth::user()->id }}">
                                <input name="user_name" type="hidden" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                                <input name="user_image" type="hidden" value="{{ Auth::user()->image }}" placeholder="{{ Auth::user()->image }}">
                                <input name="user_gender" type="hidden" value="{{ Auth::user()->gender }}" placeholder="{{ Auth::user()->gender }}">
                                <input name="user_email" type="hidden" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
                                <input name="date" type="hidden" value="{{ $date }}">
                                @endif

                            </div>
                            @if (Auth::check())
                            <button class="utf_progress_button button fullwidth_block margin-top-5"
                                type="submit">submit</button>
                            @else
                            <a class="utf_progress_button bg-dark button fullwidth_block margin-top-5" href="{{ route('login') }}">Please login</a>
                            @endif                   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
