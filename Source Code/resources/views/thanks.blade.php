@extends('layouts.public_app')

@section('main_con')
	<!--==================================================-->
	<!----- Start petech Error page Area ----->
	<!--==================================================-->
	<div class="error_page_area rs pt-115 pb-90 breatcome_area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_error">
						<div class="single_error_inner">
							<h1 style="font-size: 60px; color:white;">Th<span>a</span>nks <span>!</span></h1>
							<h2 style="color:white;">For Contact Us .</h2>
							<h2 style="color:white;">Our Team Will Contact You Soon...</h2>
							<div class="single_error_button mb-5">
								<a href="{{ route('/') }}">Back To Home</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================================================-->
	<!----- End petech Error Page Area ----->
	<!--==================================================-->

	<!--==================================================-->
	<!----- Start petech Error page Area ----->
	<!--==================================================-->
	<div class="error_page_area rs pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_error">
						<div  class="single_error_inner pt-20 pb-20">
							<h2 style="color:#211E3B;">Need more help?</h2>
							<h2 style="color:#FF6600;"><a href="{{ route('contact') }}" style="color: #FF6600;">We&rsquo;re here to help you out</a></h2>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==================================================-->
	<!----- End petech Error Page Area ----->
	<!--==================================================-->
	@endsection