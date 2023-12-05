@extends('front.layout.app')
@section('content')
			
			<!-- ======================= Top Breadcrubms ======================== -->
			<div class="bg-dark py-3">
				<div class="container">
					<div class="row">
						<div class="colxl-12 col-lg-12 col-md-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
									<li class="breadcrumb-item"><a href="#" class="text-light">Pages</a></li>
									<li class="breadcrumb-item active theme-cl" aria-current="page">Contact Us</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- ======================= Top Breadcrubms ======================== -->
			
			<!-- ======================= Contact Page Detail ======================== -->
			<section class="gray">
				<div class="container">
				
					<div class="row justify-content-center mb-5">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center">
								<h2 class="off_title">Contact Us</h2>
							</div>
						</div>
					</div>
					
					<div class="row align-items-start justify-content-center">
						
						<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
							<form class="row submit-form py-4 px-3 rounded bg-white mb-4" method="POST" action="{{route('emailSend')}}" >
								@csrf	
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Your Name *</label>
										<input type="text" class="form-control"  name="username">
										@error('username')
											<div style="color: red">{{ $message }}</div>
										@enderror
									</div>
								</div>
								
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Your Email *</label>
										<input type="text" class="form-control" name="email" >
										@error('email')
											<div style="color: red">{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Mobile</label>
										<input type="text" class="form-control" name="phone">
										@error('phone')
											<div style="color: red" >{{ $message }}</div>
										@enderror
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Subject</label>
										<input type="text" class="form-control" name="subject">
										@error('subject')
											<div style="color: red" >{{ $message }}</div>
										@enderror
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Message</label>
										<textarea class="form-control ht-80" name="message" placeholder="Your Message..."></textarea>
										@error('message')
											<div style="color: red">{{ $message }}</div>
										@enderror
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn theme-bg text-light">Send Message</button>
									</div>
								</div>								
							</form>
						</div>
						
						<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="bg-white rounded p-3 mb-2 contact-details">
										<h4 class="ft-medium mb-3 theme-cl">Address:</h4>
										<p>{{$contact[0]->address}}</p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="bg-white rounded p-3 mb-2 contact-details">
										<h4 class="ft-medium mb-3 theme-cl">Call Us:</h4>
										<p class="mb-2">{{$contact[0]->phone}}</p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12">
									<div class="bg-white rounded p-3 mb-2 contact-details">
										<h4 class="ft-medium mb-3 theme-cl">Drop A Mail:</h4>
										<p>Drop mail we will contact you within 24 hours.</p>
										<p class="lh-1 text-dark">{{$contact[0]->email}}</p>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Contact Page End ======================== -->
			
			<!-- ======================= Newsletter Start ============================ -->
			<section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
				<div class="container py-5">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="sec_title position-relative text-center mb-5">
								<h6 class="text-light mb-0">Subscribr Now</h6>
								<h2 class="ft-bold text-light">Get All Updates & Advance Offers</h2>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
							<form class="bg-white rounded p-1">
								<div class="row no-gutters">
									<div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
										<div class="form-group mb-0 position-relative">
											<input type="text" class="form-control b-0" placeholder="Enter Your Email Address">
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
										<div class="form-group mb-0 position-relative">
											<button class="btn full-width btn-height theme-bg text-light fs-md" type="button">Subscribe</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</section>
			<!-- ======================= Newsletter Start ============================ -->
@stop