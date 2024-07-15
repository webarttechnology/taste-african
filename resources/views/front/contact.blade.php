@extends('front.layout.app')
@section('content')
			
			<!-- ======================= Top Breadcrubms ======================== -->
			<div class="bg-dark py-3">
				<div class="container">
					<div class="row">
						<div class="colxl-12 col-lg-12 col-md-12">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{route ('front')}}" class="text-light">Home / </a>Contact Us</li>
									<li class="breadcrumb-item active theme-cl" aria-current="page"></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- ======================= Top Breadcrubms ======================== -->
			
			<!-- ======================= Contact Page Detail ======================== -->
			<section class="gray cnct">
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
										<input type="text" class="form-control"  name="username" value="{{old('username')}}">
										{{-- @error('username')
											<div style="color: red">{{ $message }}</div>
										@enderror --}}
									</div>
								</div>
								
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Your Email *</label>
										<input type="text" class="form-control" name="email" value="{{old('email')}}">
										{{-- @error('email')
											<div style="color: red">{{ $message }}</div>
										@enderror --}}
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Mobile*</label>
										<input type="text" class="form-control" name="phone" value="{{old('phone')}}">
										{{-- @error('phone')
											<div style="color: red" >{{ $message }}</div>
										@enderror --}}
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Subject*</label>
										<input type="text" class="form-control" name="subject" value="{{old('subject')}}">
										{{-- @error('subject')
											<div style="color: red" >{{ $message }}</div>
										@enderror --}}
									</div>
								</div>
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label class="small text-dark ft-medium">Message</label>
										<textarea class="form-control ht-80" name="message"  placeholder="Your Message...">{{old('message')}}</textarea>
										{{-- @error('message')
											<div style="color: red">{{ $message }}</div>
										@enderror --}}
									</div>
								</div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                                    </div>
                                </div>
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn theme-bg text-light">Send Message</button>
									</div>
								</div>								
							</form>
						</div>
						
						<!--<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">-->
						<!--	<div class="row">-->
						<!--		<div class="col-xl-4 col-lg-4 col-md-12">-->
						<!--			<div class="bg-white rounded p-3 mb-2 contact-details">-->
						<!--				<h4 class="ft-medium mb-3 theme-cl">Address:</h4>-->
						<!--				<p>{{$contact[0]->address}}</p>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="col-xl-4 col-lg-4 col-md-12">-->
						<!--			<div class="bg-white rounded p-3 mb-2 contact-details">-->
						<!--				<h4 class="ft-medium mb-3 theme-cl">Call Us:</h4>-->
						<!--				<p class="mb-2">{{$contact[0]->phone}}</p>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="col-xl-4 col-lg-4 col-md-12">-->
						<!--			<div class="bg-white rounded p-3 mb-2 contact-details">-->
						<!--				<h4 class="ft-medium mb-3 theme-cl">Drop A Mail:</h4>-->
						<!--				<p>Drop mail we will contact you within 24 hours.</p>-->
						<!--				<p class="lh-1 text-dark">{{$contact[0]->email}}</p>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						
					</div>
				</div>
			</section>
			<!-- ======================= Contact Page End ======================== -->

@stop