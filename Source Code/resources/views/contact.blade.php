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
							<h2>Contact Us</h2>
						</div>
						<div class="breatcome_content">
							<ul>
								<li><a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <a href="#"> Pages</a> <i class="fa fa-angle-right"></i> <span>Contact</span></li>
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
	<!----- Start petech Contact Address Area ----->
	<!--==================================================-->
	
	<div class="contact_address_area pt-80 pb-200">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="section_title text-left mb-5">
						<div class="sub_title brd_ab pb-3">
							<h5>What We Do</h5>
						</div>
						<div class="main_title">
							<h1>We Are Always With</h1>
							<h2>You So Don't Hesitated</h2>
							<h1>To Contact Us</h1>
						</div>
						<div class="section_text pt-4">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas </p>
						</div>
					</div>
<!-- 					<div class="about_button">
						<div class="button">
							<a href="#">Get Started <span>+</span></a>
						</div>
					</div> -->
				</div>
				<div class="col-lg-6">
					<div class="single_contact_address">
						<div class="single_contact_address_content">
							<div class="single_address_icon">
								<span class="flaticon-pin"></span>
							</div>
							<div class="single_address_content_inner mb-3">
								<h4>Head Office</h4>
								<span>2596 Main Street, D - Block</span>
								<span>5th Floor, New York</span>
							</div>
						</div>
						<div class="single_contact_address_content mb-3">
							<div class="single_address_icon">
								<span class="flaticon-email-1"></span>
							</div>
							<div class="single_address_content_inner">
								<h4>Email Us</h4>
								<span>support@gmail.com</span>
							</div>
						</div>
						<div class="single_contact_address_content mb-3">
							<div class="single_address_icon">
								<span class="flaticon-phone-call"></span>
							</div>
							<div class="single_address_content_inner">
								<h4>Phone Us</h4>
								<span>+012 (345) 789999</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!----- End petech Contact Address Area ----->
	<!--==================================================-->
	
	<!--==================================================-->
	<!----- Start petech Google Map Area ----->
	<!--==================================================-->
	
<!-- 	<div class="google_map_area">
		<div class="row-fluid">
			<div class="col-lg-12 p0">
				<div class="google_map_area">
					<iframe class="map" src="https://www.google.com/maps/d/embed?mid=1fzAzrqiFP2P-zyP_EfIfs9DKvv0&amp;hl=en" width="640" height="480"></iframe>
					
				</div>
			</div>				
		</div>
	</div> -->
	
	<!--==================================================-->
	<!----- End petech Google Map Area ----->
	<!--==================================================-->
	
	<div class="contact_area pb-50">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="contact_from single_contact_address">
						<div class="contact_title pb-4">
							<h3>Send Us Message</h3>
						</div>
							<form id="" action="{{url('contact/message')}}" method="post">
								@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="fname" required  placeholder="First Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="lname" required placeholder="Last Name">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="email" name="email" required placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="phone" required placeholder="Phone Number">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="subject" required placeholder="Main Subject">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box mb-30">
										<input type="text" name="jobtitle" required placeholder="Your Job Title">
									</div>
								</div>
								<div style="" class="col-lg-12 mt-1 mb-2">
									<label style="color: #211E3B">How do you see our services</label>
									<div class="radio-inline">
										<label class="radio radio-solid mr-2">
											<input type="radio" name="customersatisfaction" checked="checked" value="Excellent">
											<span style="color: #211E3B">Excellent</span>
										</label>
										<label class="radio radio-solid mr-2">
											<input type="radio" name="customersatisfaction" value="Very Good">
											<span style="color: #211E3B">Very Good</span>	
										</label>
										<label class="radio radio-solid mr-2">
											<input type="radio" name="customersatisfaction" value="Good">
											<span style="color: #211E3B">Good</span>	
										</label>
										<label class="radio radio-solid mr-2">
											<input type="radio" name="customersatisfaction" value="Fair">
											<span style="color: #211E3B">Fair</span>	
										</label>
									</div>
								</div>
								{{-- <div class="col-lg-4">
									<div class="form_box mb-30">
										<input type="hidden" name="" value="unread">
									</div>
								</div> --}}
								<div class="col-lg-12">
									<div class="form_box mb-30">
										<textarea name="message" id="message" required cols="30" rows="10" placeholder="Write a Message"></textarea>
									</div>
									<div class="quote_btn text_center">
										<button class="btn" type="submit">Send Message</button>
									</div>
								</div>
							</div>
						</form>
						{{-- <p class="form-message"></p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection
	
	
	<!--==================================================-->
	<!----- Start petech Brand Area ----->
	<!--==================================================-->
	
<!-- 	<div class="brand_area pt-50 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
					<div class="row">
						<div class="brand_list owl-carousel curosel-style">
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br1.png" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br2.png" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br3.png" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br4.png" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br5.png" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="single_brand">
									<div class="single_brand_thumb">
										<img src="public_assets/images/resource/br6.png" alt="" />
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--==================================================-->
	<!----- End petech Brand Area ----->
	<!--==================================================-->
