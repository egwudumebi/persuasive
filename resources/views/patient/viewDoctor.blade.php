<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		{{-- <meta name="csrf-token" content="{{ session()->token() }}"> --}}
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<!-- Favicons -->
		<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
		
		<!-- Fancybox CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.css') }}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index-2.html" class="navbar-brand logo">
							<img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="{{ asset('assets/img/logo.png') }}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="index-2.html">Home</a>
							</li>
							<li class="has-submenu">
								<a href="#">Doctors <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
									<li><a href="appointments.html">Appointments</a></li>
									<li><a href="schedule-timings.html">Schedule Timing</a></li>
									<li><a href="my-patients.html">Patients List</a></li>
									<li><a href="patient-profile.html">Patients Profile</a></li>
									<li><a href="chat-doctor.html">Chat</a></li>
									<li><a href="invoices.html">Invoices</a></li>
									<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
									<li><a href="reviews.html">Reviews</a></li>
									<li><a href="doctor-register.html">Doctor Register</a></li>
								</ul>
							</li>	
							<li class="has-submenu active">
								<a href="#">Patients <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="search.html">Search Doctor</a></li>
									<li class="active"><a href="doctor-profile.html">Doctor Profile</a></li>
									<li><a href="booking.html">Booking</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="booking-success.html">Booking Success</a></li>
									<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
									<li><a href="favourites.html">Favourites</a></li>
									<li><a href="chat.html">Chat</a></li>
									<li><a href="profile-settings.html">Profile Settings</a></li>
									<li><a href="change-password.html">Change Password</a></li>
								</ul>
							</li>	
							<li class="has-submenu">
								<a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="voice-call.html">Voice Call</a></li>
									<li><a href="video-call.html">Video Call</a></li>
									<li><a href="search.html">Search Doctors</a></li>
									<li><a href="calendar.html">Calendar</a></li>
									<li><a href="components.html">Components</a></li>
									<li class="has-submenu">
										<a href="invoices.html">Invoices</a>
										<ul class="submenu">
											<li><a href="invoices.html">Invoices</a></li>
											<li><a href="invoice-view.html">Invoice View</a></li>
										</ul>
									</li>
									<li><a href="blank-page.html">Starter Page</a></li>
									<li><a href="login.html">Login</a></li>
									<li><a href="register.html">Register</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li>
								<a href="admin/index.html" target="_blank">Admin</a>
							</li>
							<li class="login-link">
								<a href="login.html">Login / Signup</a>
							</li>
						</ul>	 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="login.html">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Doctor Profile</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<!-- Doctor Widget -->
					<div class="card">
						<div class="card-body">
							<div class="doctor-widget">
								<div class="doc-info-left">
									<div class="doctor-img">
										<img src="{{ asset($doctor->profile ? $doctor->profile : '') }}" class="img-fluid" alt="User Image">
									</div>
									<div class="doc-info-cont">

										<h4 class="doc-name">Dr. {{ $doctor->firstname . ' ' .$doctor->lastname }}</h4>
										@php
											$qualification_list = [];
											foreach($doctor->qualifications as $qualification) {
												$qualification_list[] = $qualification->qualification;
											}
											$qualifications_string = implode(', ', $qualification_list);
										@endphp
										<p class="doc-speciality">{{ $qualifications_string }}</p>
										<hr>
										@foreach($doctor->specializations as $specialization)
											<p class="doc-department"><img src="{{ asset('assets/img/specialities/' .  $specialization->title  . '.png') }}" class="img-fluid" alt="Speciality">{{ $specialization->title }}</p>
										@endforeach
										<div class="rating">
											@php 
												$total_review = $doctor->reviews_sum_rating;
												$reviewers = $doctor->reviews_count;
												$av_rating = $total_review / $reviewers;
												$av_rating = round($av_rating, 1);
												$int_av_rating = floor($av_rating);
												$count = 0;
											@endphp
											@for($j = 0; $j < $int_av_rating; $j++)
												<i class="fas fa-star filled"></i>
												@php $count++; @endphp
											@endfor
											@if($av_rating > $int_av_rating)
												<i class="fas fa-star-half-alt half-alt"></i>
												@php $count++; @endphp
											@endif
											@php $diff_stars = 5 - $count; @endphp
											@for($k = 0; $k < $diff_stars; $k++)
												<i class="fas fa-star"></i>
											@endfor


											<span class="d-inline-block average-rating">({{ $av_rating }})</span>
											<span style="font-weight: bold; color: green"> {{ $reviewers }} 
												<i class="fa fa-user" style="font-weight: bold; color: green"></i>
											</span>
										</div>
										<div class="clinic-details">
											<p class="doc-location"><i class="fas fa-map-marker-alt"></i> {{ $doctor->city . ', ' . $doctor->state }} - <a href="javascript:void(0);">Get Directions</a></p>
											<ul class="clinic-gallery">
												<li>
													<a href="{{ asset('assets/img/features/feature-01.jpg') }}" data-fancybox="gallery">
														<img src="{{ asset('assets/img/features/feature-01.jpg') }}" alt="Feature">
													</a>
												</li>
												<li>
													<a href="{{ asset('assets/img/features/feature-02.jpg') }}" data-fancybox="gallery">
														<img  src="{{ asset('assets/img/features/feature-02.jpg') }}" alt="Feature Image">
													</a>
												</li>
												<li>
													<a href="{{ asset('assets/img/features/feature-03.jpg') }}" data-fancybox="gallery">
														<img src="{{ asset('assets/img/features/feature-03.jpg') }}" alt="Feature">
													</a>
												</li>
												<li>
													<a href="{{ asset('assets/img/features/feature-04.jpg') }}" data-fancybox="gallery">
														<img src="{{ asset('assets/img/features/feature-04.jpg') }}" alt="Feature">
													</a>
												</li>
											</ul>
										</div>
										<div class="clinic-services">
											<span>Dental Fillings</span>
											<span>Teeth Whitneing</span>
										</div>
									</div>
								</div>
								<div class="doc-info-right">
									<div class="clini-infos">
										<ul>
											<li><i class="far fa-thumbs-up"></i> 99%</li>
											<li><i class="far fa-comment"></i> 35 Feedback</li>
											<li><i class="fas fa-map-marker-alt"></i> {{ $doctor->address }}</li>
											<li><i class="far fa-money-bill-alt"></i> $100 per hour </li>
										</ul>
									</div>
									<div class="doctor-action">
										<a href="javascript:void(0)" class="btn btn-white fav-btn">
											<i class="far fa-bookmark"></i>
										</a>
										<a href="chat.html" class="btn btn-white msg-btn">
											<i class="far fa-comment-alt"></i>
										</a>
										<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#voice_call">
											<i class="fas fa-phone"></i>
										</a>
										<a href="javascript:void(0)" class="btn btn-white call-btn" data-toggle="modal" data-target="#video_call">
											<i class="fas fa-video"></i>
										</a>
									</div>
									<div class="clinic-booking">
										<a class="apt-btn" href="booking.html">Book Appointment</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Doctor Widget -->
					
					<!-- Doctor Details Tab -->
					<div class="card">
						<div class="card-body pt-0">
						
							<!-- Tab Menu -->
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_locations" data-toggle="tab">Locations</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#doc_business_hours" data-toggle="tab">Business Hours</a>
									</li>
								</ul>
							</nav>
							<!-- /Tab Menu -->
							
							<!-- Tab Content -->
							<div class="tab-content pt-0">
							
								<!-- Overview Content -->
								<div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
									<div class="row">
										<div class="col-md-12 col-lg-9">
										
											<!-- About Details -->
											<div class="widget about-widget">
												<h4 class="widget-title">About Me</h4>
												<p>{{ $doctor->about_me }}</p>
											</div>
											<!-- /About Details -->
										
											<!-- Education Details -->
											<div class="widget education-widget">
												<h4 class="widget-title">Education</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">American Dental Medical University</a>
																	<div>BDS</div>
																	<span class="time">1998 - 2003</span>
																</div>
															</div>
														</li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">American Dental Medical University</a>
																	<div>MDS</div>
																	<span class="time">2003 - 2005</span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /Education Details -->
									
											<!-- Experience Details -->
											<div class="widget experience-widget">
												<h4 class="widget-title">Work & Experience</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">Glowing Smiles Family Dental Clinic</a>
																	<span class="time">2010 - Present (5 years)</span>
																</div>
															</div>
														</li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">Comfort Care Dental Clinic</a>
																	<span class="time">2007 - 2010 (3 years)</span>
																</div>
															</div>
														</li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<a href="#/" class="name">Dream Smile Dental Practice</a>
																	<span class="time">2005 - 2007 (2 years)</span>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /Experience Details -->
								
											<!-- Awards Details -->
											<div class="widget awards-widget">
												<h4 class="widget-title">Awards</h4>
												<div class="experience-box">
													<ul class="experience-list">
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">July 2019</p>
																	<h4 class="exp-title">Humanitarian Award</h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																</div>
															</div>
														</li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">March 2011</p>
																	<h4 class="exp-title">Certificate for International Volunteer Service</h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																</div>
															</div>
														</li>
														<li>
															<div class="experience-user">
																<div class="before-circle"></div>
															</div>
															<div class="experience-content">
																<div class="timeline-content">
																	<p class="exp-year">May 2008</p>
																	<h4 class="exp-title">The Dental Professional of The Year Award</h4>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
																</div>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<!-- /Awards Details -->
											
											<!-- Services List -->
											<div class="service-list">
												<h4>Specializations</h4>
												<ul class="clearfix">
													@foreach($doctor->specializations as $specialization)
														<li>{{ $specialization->title }}</li>
													@endforeach
												</ul>
											</div>
											<!-- /Services List -->

										</div>
									</div>
								</div>
								<!-- /Overview Content -->
								
								<!-- Locations Content -->
								<div role="tabpanel" id="doc_locations" class="tab-pane fade">
								
									<!-- Location List -->
									<div class="location-list">
										<div class="row">
										
											<!-- Clinic Content -->
											<div class="col-md-6">
												<div class="clinic-content">
													<h4 class="clinic-name"><a href="#">Smile Cute Dental Care Center</a></h4>
													<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<span class="d-inline-block average-rating">(4)</span>
													</div>
													<div class="clinic-details mb-0">
														<h5 class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2286  Sundown Lane, Austin, Texas 78749, USA <br><a href="javascript:void(0);">Get Directions</a></h5>
														<ul>
															<li>
																<a href="{{ asset('assets/img/features/feature-01.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-01.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-02.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-02.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-03.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-03.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-04.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-04.jpg') }}" alt="Feature Image">
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<!-- /Clinic Content -->
											
											<!-- Clinic Timing -->
											<div class="col-md-4">
												<div class="clinic-timing">
													<div>
														<p class="timings-days">
															<span> Mon - Sat </span>
														</p>
														<p class="timings-times">
															<span>10:00 AM - 2:00 PM</span>
															<span>4:00 PM - 9:00 PM</span>
														</p>
													</div>
													<div>
													<p class="timings-days">
														<span>Sun</span>
													</p>
													<p class="timings-times">
														<span>10:00 AM - 2:00 PM</span>
													</p>
													</div>
												</div>
											</div>
											<!-- /Clinic Timing -->
											
											<div class="col-md-2">
												<div class="consult-price">
													$250
												</div>
											</div>
										</div>
									</div>
									<!-- /Location List -->
									
									<!-- Location List -->
									<div class="location-list">
										<div class="row">
										
											<!-- Clinic Content -->
											<div class="col-md-6">
												<div class="clinic-content">
													<h4 class="clinic-name"><a href="#">The Family Dentistry Clinic</a></h4>
													<p class="doc-speciality">MDS - Periodontology and Oral Implantology, BDS</p>
													<div class="rating">
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
														<span class="d-inline-block average-rating">(4)</span>
													</div>
													<div class="clinic-details mb-0">
														<p class="clinic-direction"> <i class="fas fa-map-marker-alt"></i> 2883  University Street, Seattle, Texas Washington, 98155 <br><a href="javascript:void(0);">Get Directions</a></p>
														<ul>
															<li>
																<a href="{{ asset('assets/img/features/feature-01.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-01.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-02.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-02.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-03.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-03.jpg') }}" alt="Feature Image">
																</a>
															</li>
															<li>
																<a href="{{ asset('assets/img/features/feature-04.jpg') }}" data-fancybox="gallery2">
																	<img src="{{ asset('assets/img/features/feature-04.jpg') }}" alt="Feature Image">
																</a>
															</li>
														</ul>
													</div>

												</div>
											</div>
											<!-- /Clinic Content -->
											
											<!-- Clinic Timing -->
											<div class="col-md-4">
												<div class="clinic-timing">
													<div>
														<p class="timings-days">
															<span> Tue - Fri </span>
														</p>
														<p class="timings-times">
															<span>11:00 AM - 1:00 PM</span>
															<span>6:00 PM - 11:00 PM</span>
														</p>
													</div>
													<div>
														<p class="timings-days">
															<span>Sat - Sun</span>
														</p>
														<p class="timings-times">
															<span>8:00 AM - 10:00 AM</span>
															<span>3:00 PM - 7:00 PM</span>
														</p>
													</div>
												</div>
											</div>
											<!-- /Clinic Timing -->
											
											<div class="col-md-2">
												<div class="consult-price">
													$350
												</div>
											</div>
										</div>
									</div>
									<!-- /Location List -->

								</div>
								<!-- /Locations Content -->
								
								<!-- Reviews Content -->
								<div role="tabpanel" id="doc_reviews" class="tab-pane fade">
								
									<!-- Review Listing -->
									<div class="widget review-listing">
										<ul class="comments-list">
											
											<!-- Comment List -->
											@foreach($reviews as $review)
											<li id="{{ $review->id }}">
												<div class="comment">
													<img class="avatar avatar-sm rounded-circle" alt="User Image" src="{{ (asset($review->patient->profile ? $review->patient->profile : '')) }}">
													<div class="comment-body">
														<div class="meta-data">
															<span class="comment-author">{{ $review->patient->firstname . ' ' . $review->patient->lastname }}</span>
															<span class="comment-date">{{ $review->created_at->format('M d, Y') }}</span>
															<div class="review-count rating">
																@php 
																	$rating = $review->rating;
																	$unfilled_star = 5 - $rating;
																@endphp
																@for($i = 0; $i < $rating; $i++)
																	<i class="fas fa-star filled"></i>
																@endfor
																@if($unfilled_star != 0)
																	@for($j = 0; $j < $unfilled_star; $j++)
																		<i class="fas fa-star"></i>
																	@endfor
																@endif
															</div>
														</div>
														<p class="recommended"><i class="far fa-thumbs-up"></i>{{ $review->title }}</p>
														<p class="comment-content">{{ $review->content }}</p>
														<div class="comment-reply">
															{{-- Check if this user is the creator of the review --}}
															@if($review->patient->id === Auth::id())
																<a class="btn btn-sm bg-danger-light delete-review" data-toggle="modal" href="#delete_modal" review-id="{{ $review->id }}" data-model="Review" title="Delete">
																	<i class="fa fa-trash"></i> Delete
																</a>
																<a class="btn btn-sm bg-success-light edit-review" href="#edit_invoice_report" title="Edit" data-toggle="modal" review-id="{{ $review->id }}" data-model="Review" review-title="{{ $review->title }}" review-content="{{ $review->content }}">
																	<i class="fa fa-pen"></i> Edit
																</a>
															@else
															{{-- The eventListnere doesn't work on other reviews --}}
																<p class="recommend-btn">
																	<span>Was this review helpful?</span>
																	<a class="like-btn like" review-id="{{ $review->id }}">
																		<i class="far fa-thumbs-up"></i> Yes
																	</a>
																	<a class="dislike-btn dislike" review-id="{{ $review->id }}">
																		<i class="far fa-thumbs-down"></i> No
																	</a>
																</p>
															@endif

															{{-- With Policy --}}
															{{-- @canany(['update', 'delete'], Review::class)
																<a class="btn btn-sm bg-success-light edit-review" href="#edit_invoice_report" title="Edit" data-toggle="modal" review-id="{{ $review->id }}" data-model="Review" review-title="{{ $review->title }}" review-content="{{ $review->content }}">
																	<i class="fa fa-pen"></i> Edit
																</a>

																<a class="btn btn-sm bg-danger-light delete-review" data-toggle="modal" href="#delete_modal" review-id="{{ $review->id }}" data-model="Review" title="Delete">
																	<i class="fa fa-trash"></i> Delete
																</a>
															@else
																<p class="recommend-btn">
																	<span>Was this review helpful?</span>
																	<a class="like-btn like" review-id="{{ $review->id }}">
																		<i class="far fa-thumbs-up"></i> Yes
																	</a>
																	<a class="dislike-btn dislike" review-id="{{ $review->id }}">
																		<i class="far fa-thumbs-down"></i> No
																	</a>
																</p>
															@endcan --}}
														</div>
													</div>
												</div>
											</li>
											@endforeach
											<!-- /Comment List -->
											
										</ul>
										
										<!-- Show All -->
										<div class="all-feedback text-center">
											<a href="#" class="btn btn-primary btn-sm">
												Show all feedback <strong>(167)</strong>
											</a>
										</div>
										<!-- /Show All -->
										
									</div>
									<!-- /Review Listing -->
								
									<!-- Write Review -->
									<div class="write-review">
										<h4>Write a review for <strong>Dr. {{ $doctor->firstname . ' ' . $doctor->lastname }}</strong></h4>
										
										<!-- Write Review Form -->
										<form id="review-form">
											{{-- @csrf --}}
											{{-- Not needed here, use meta tag --}}
											<div class="form-group">
												{{-- Success message - Hidden by default --}}
												<div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
													<strong id="success-msg"></strong>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>

												{{-- Error message - Hidden by default --}}
												<div id="error-alert" class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none">
													<strong id="error-msg"></strong>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												{{-- END OF AJAX MESSAGES --}}
												<label>Rating</label>
												<div class="star-rating">
													<input id="star-5" type="radio" name="rating" value="5">
													<label for="star-5" title="5 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-4" type="radio" name="rating" value="4">
													<label for="star-4" title="4 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-3" type="radio" name="rating" value="3">
													<label for="star-3" title="3 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-2" type="radio" name="rating" value="2">
													<label for="star-2" title="2 stars">
														<i class="active fa fa-star"></i>
													</label>
													<input id="star-1" type="radio" name="rating" value="1">
													<label for="star-1" title="1 star">
														<i class="active fa fa-star"></i>
													</label>
												</div>
											</div>
											<div class="form-group">
												<div class="form-group">
													<label>Title of your review</label>
													<input id="title" name="title" maxlength="30" class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
												</div>
												<label>Description</label>
												<textarea id="review_desc" maxlength="100" class="form-control" required></textarea>
												<code id="error"></code>
											  <div class="d-flex justify-content-between mt-3"><small class="text-muted"><span id="chars">100</span> characters remaining</small></div>
											</div>
											<hr>
											<div class="form-group">
												<div class="terms-accept">
													<div class="custom-checkbox">
													   <input type="checkbox" id="terms_accept">
													   <label for="terms_accept">I have read and accept <a href="#">Terms &amp; Conditions</a></label>
													</div>
												</div>
											</div>
											<div class="submit-section">
												<button type="submit" id="review-btn" class="btn btn-primary submit-btn">Add Review</button>
											</div>
										</form>
										<!-- /Write Review Form -->
										
									</div>
									<!-- /Write Review -->
								
								</div>
								<!-- /Reviews Content -->
								
								<!-- Business Hours Content -->
								<div role="tabpanel" id="doc_business_hours" class="tab-pane fade">
									<div class="row">
										<div class="col-md-6 offset-md-3">
										
											<!-- Business Hours Widget -->
											<div class="widget business-widget">
												<div class="widget-content">
													<div class="listing-hours">
														<div class="listing-day current">
															<div class="day">Today <span>5 Nov 2019</span></div>
															<div class="time-items">
																<span class="open-status"><span class="badge bg-success-light">Open Now</span></span>
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Monday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Tuesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Wednesday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Thursday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Friday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day">
															<div class="day">Saturday</div>
															<div class="time-items">
																<span class="time">07:00 AM - 09:00 PM</span>
															</div>
														</div>
														<div class="listing-day closed">
															<div class="day">Sunday</div>
															<div class="time-items">
																<span class="time"><span class="badge bg-danger-light">Closed</span></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- /Business Hours Widget -->
									
										</div>
									</div>
								</div>
								<!-- /Business Hours Content -->
								
							</div>
						</div>
					</div>
					<!-- /Doctor Details Tab -->

				</div>
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<img src="{{ asset('assets/img/footer-logo.png') }}" alt="logo">
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Patients</h2>
									<ul>
										<li><a href="search.html"><i class="fas fa-angle-double-right"></i> Search for Doctors</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="booking.html"><i class="fas fa-angle-double-right"></i> Booking</a></li>
										<li><a href="patient-dashboard.html"><i class="fas fa-angle-double-right"></i> Patient Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">For Doctors</h2>
									<ul>
										<li><a href="appointments.html"><i class="fas fa-angle-double-right"></i> Appointments</a></li>
										<li><a href="chat.html"><i class="fas fa-angle-double-right"></i> Chat</a></li>
										<li><a href="login.html"><i class="fas fa-angle-double-right"></i> Login</a></li>
										<li><a href="doctor-register.html"><i class="fas fa-angle-double-right"></i> Register</a></li>
										<li><a href="doctor-dashboard.html"><i class="fas fa-angle-double-right"></i> Doctor Dashboard</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+1 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											doccure@example.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
									<div class="copyright-text">
										<p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
		
		
		

		<!-- Voice Call Modal -->
		<div class="modal fade call-modal" id="voice_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<!-- Outgoing Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img alt="User Image" src="{{ asset('assets/img/doctors/doctor-thumb-02.jpg') }}" class="call-avatar">
										<h4>Dr. {{ $doctor->firstname . ' ' . $doctor->lastname }}</h4>
										<span>Connecting...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="voice-call.html" class="btn call-item call-start"><i class="material-icons">call</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- Outgoing Call -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Voice Call Modal -->
		
		<!-- Video Call Modal -->
		<div class="modal fade call-modal" id="video_call">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-body">
					
						<!-- Incoming Call -->
						<div class="call-box incoming-box">
							<div class="call-wrapper">
								<div class="call-inner">
									<div class="call-user">
										<img class="call-avatar" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										<h4>Dr. {{ $doctor->firstname . ' ' . $doctor->lastname }}</h4>
										<span>Calling ...</span>
									</div>							
									<div class="call-items">
										<a href="javascript:void(0);" class="btn call-item call-end" data-dismiss="modal" aria-label="Close"><i class="material-icons">call_end</i></a>
										<a href="video-call.html" class="btn call-item call-start"><i class="material-icons">videocam</i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- /Incoming Call -->
						
					</div>
				</div>
			</div>
		</div>
		<!-- Video Call Modal -->

		<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Delete</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-content p-2" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete?</p>
								<div style="display: flex; flex-direction: row; justify-content: space-between; padding: 0 20px">
									<button type="button" class="btn btn-primary" style="margin: 0 20px 0 0;" id="delete-yes">Yes </button>
									<button type="button" class="btn btn-danger" data-dismiss="modal" style="margin: 0 0 0 20px;">No</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->

			<!-- Edit Review Modal -->
			<div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Review</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="edit-review-form" method="POST">
								@csrf
								<div class="col-12">
									<div class="form-group">
										<label>Rating</label>
										<div class="star-rating">
											<input id="star-5" type="radio" name="rating" value="5">
											<label for="star-5" title="5 stars">
												<i class="active fa fa-star"></i>
											</label>
											<input id="star-4" type="radio" name="rating" value="4">
											<label for="star-4" title="4 stars">
												<i class="active fa fa-star"></i>
											</label>
											<input id="star-3" type="radio" name="rating" value="3">
											<label for="star-3" title="3 stars">
												<i class="active fa fa-star"></i>
											</label>
											<input id="star-2" type="radio" name="rating" value="2">
											<label for="star-2" title="2 stars">
												<i class="active fa fa-star"></i>
											</label>
											<input id="star-1" type="radio" name="rating" value="1">
											<label for="star-1" title="1 star">
												<i class="active fa fa-star"></i>
											</label>
										</div>
									</div>
								</div>
								<div class="column form-column">
									<div class="col-12">
										<div class="form-group">
											<label>Title of your Review</label>
											<input type="text" id="edit_review_title" name="edit_title" class="form-control" value="{{ old('title', $review->title) }}">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label>Description</label>
											<textarea type="text" id="edit_review_content" name="edit_review_desc" class="form-control" value="{{ old('description', $review->description) }}"></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-block" id="submit-change">Save Changes</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Edit Details Modal -->
		
		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Fancybox JS -->
		<script src="{{ asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ asset('assets/js/script.js') }}"></script>
		{{-- Process, submit the review form --}}
		<script>
			// FOR PROCESSING THE REVIEW FORM
			document.addEventListener('DOMContentLoaded', function() {
				var btn = document.getElementById("review-btn")
				btn.addEventListener('click', async () => {
					// Prevent default form submission
					const form = document.getElementById("review-form");
					form.addEventListener('submit', (e) => {
						e.preventDefault();
					});

					btn.disabled = true;
					// Get the selected rating value
					var ratingElem = document.querySelector('input[name="rating"]:checked');
					var rating = ratingElem ? ratingElem.value : 1;
					var title = document.getElementById("title").value;
					var review_desc = document.getElementById('review_desc').value;
					// Check for empty inputs
					if(review_desc) {
						let data = {
							'patient_id': {{ Auth::guard('web')->id() }},
							'doctor_id': {{ $doctor->id }},
							'rating': rating,
							'title': title,
							'content': review_desc,
						};
						// console.log(data);

						// Fetch the CSRF token from the meta tag
						const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
						console.log(token)
						var url = "{{ url('dashboard/view-doctor/review') }}";
						const res = await fetch(
							url, {
							method: "POST",
							mode: "same-origin",
							credentials: "same-origin",
							headers: {
								"Content-Type": "application/json",
								"Accept": "application/json",
								"X-CSRF-TOKEN": token,
							},
							body: JSON.stringify(data)
							}
						);

						const output = await res.json();
						console.log(output);
						var success_alert = document.getElementById("success-alert");
						var error_alert = document.getElementById("error-alert");
						var success_msg = document.getElementById("success-msg");
						var error_msg = document.getElementById("error-msg");
						if (output.success == true) {
							success_alert.style.display = "block";
							success_msg.innerHTML = output.message;
							console.log(output.message);
							// Force a page refresh
							setTimeout(() => {
								location.reload();
							}, 2000);
							
						}else{
							error_alert.style.display = "block";
							error_msg.innerHTML = output.message;
							console.log(output.message);
							setTimeout(() => {
								error_alert.style.display = "none";
							}, 5000);
						}
					}
						
				})
			})
			
		</script>

		{{-- Like & Dislike a review --}}
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const likeButton = document.querySelectorAll('.like');
				likeButton.forEach(like_button => {
					like_button.addEventListener('click', async () => {
						const review_id = like_button.getAttribute('review-id');
						console.log(review_id);
						let url = "{{ url('reviews/like//') }}" + '/' + review_id;
						console.log(url);
						// //Send asyncronous request to the backend
						// const res = await fetch (
						// 	url, {
						// 	method: "GET",
						// });
					});
				});

				const dislikeButton = document.querySelectorAll('.dislike');
				dislikeButton.forEach(dislike_button => {
					dislike_button.addEventListener('click', async () => {
						const review_id = dislike_button.getAttribute('review-id');
						console.log(review_id);
						let url = "{{ url('reviews/like/') }}" + '/' + review_id;
						console.log(url);
					});
				});
			});
		</script>

		{{-- Delete a review (by the author) --}}
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				let currentReviewId = null;
				let currentModel = null;
				
				// Select all delete buttons with the class 'delete-review'
				const deleteButtons = document.querySelectorAll('.delete-review');
			
				// Attach event listeners to delete buttons
				deleteButtons.forEach(delete_button => {
					delete_button.addEventListener('click', () => {
						// Set the current review ID and model for deletion
						currentReviewId = delete_button.getAttribute('review-id');
						currentModel = delete_button.getAttribute('data-model');
						
						// Show the delete confirmation modal
						let modal = document.getElementById("delete_modal");
						if (modal) {
							// Assuming you have code to show the modal
							$(modal).modal('show'); // Bootstrap modal example
						}
					});
				});
				
				// Attach a single event listener to the "Yes" button
				const deleteYesButton = document.getElementById("delete-yes");
				deleteYesButton.addEventListener('click', async () => {
					if (currentReviewId && currentModel) {
						deleteYesButton.disabled = true;
						const deleteRouteBase = "{{ url('/') }}";
						const url = `${deleteRouteBase}/${currentModel}/${currentReviewId}`;
						const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
						console.log(url);
		
						try {
							const res = await fetch(url, {
								method: "GET",
								headers: {
									'X-CSRF-Token': token,
								}
							});
							const output = await res.json();
							if (output['success']) {
								let review_box = document.getElementById(currentReviewId);
								let modal = document.getElementById("delete_modal");
								if (review_box) {
									review_box.style.backgroundColor = "rgba(255, 99, 71, 0.1)"; // Tomato color with 10% opacity
									setTimeout(() => {
										if (review_box) review_box.style.display = "none";
										deleteYesButton.disabled = false;
									}, 1500);
								}
								if (modal) $(modal).modal('hide'); // Hide the modal
							} else {
								alert(output['message']);
							}
						} catch (error) {
							console.error('Error:', error);
							alert('An error occurred while trying to delete the review.');
						}
					}
				});
			});
		</script>
		

		{{-- Edit a Review by the author --}}
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				const editButtons = document.querySelectorAll('.edit-review');
				editButtons.forEach(edit_button => {
					edit_button.addEventListener('click', async () => {
						const review_id = edit_button.getAttribute('review-id');
						const model = edit_button.getAttribute('data-model');
						// Retain the Review values in the Edit form
						const review_title = edit_button.getAttribute('review-title');
						const review_content = edit_button.getAttribute('review-content');
						
						// Impute the initial values in the form input
						var title_element = document.getElementById('edit_review_title');
						var review_content_element = document.getElementById('edit_review_content')
						title_element.value = review_title;
						review_content_element.value = review_content;

						const edit_review_form = document.getElementById("edit-review-form");
						edit_review_form.addEventListener('submit', (event) => {
							event.preventDefault();
						});

						const submit_change = document.getElementById('submit-change');
						submit_change.addEventListener('click', async () => {
							// let file_path = "{{ url('reviews/edit/') }}/" + review_id
							// alert(file_path);
							const editRouteBase = "{{ url('/') }}";
							// Construct the full URL
							const url = `${editRouteBase}/${model}/edit/${review_id}`;
							const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
							console.log(url);
							let new_title = document.getElementById('edit_review_title').value;
							let new_content = document.getElementById('edit_review_content').value;
							let data = {
								'new-title': new_title,
								'new-content': new_content,
							}
							console.log(data);
							//Send asyncronous request to the backend
							// const res = await fetch (
							// 	url, {
							// 	method: "POST",
							// 	{
							// 		method: "PUT",
							// 		mode: "same-origin",
							// 		credentials: "same-origin",
							// 		headers: {"Content-Type": "application/json",
							// 				"Accept": "application/json"},
							// 		body: JSON.stringify(data)
							// 	}
							// });
							// const output = await res.json();
							// if(output['success'] == true) {
							// 	alert(output['message']);
							// }else {
							// 	alert(output['message']);
							// }
						})
					});
				});
			});
		</script>
		
	</body>

<!-- doccure/doctor-profile.html  30 Nov 2019 04:12:16 GMT -->
</html>