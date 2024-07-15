@extends('front.layout.app')

@section('content')
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<section class="gray">
				<div class="container">
					<div class="row align-items-start justify-content-center">
						<div class="col-xl-6 col-lg-8 col-md-12">							
							<div class="signup-screen-wrap">
								<div class="signup-screen-single light">
									<div class="text-center mb-4">
										<h4 class="m-0 ft-medium">Create An Business Account</h4>
									</div>
									
									<form class="submit-form" action="{{ route ('business.register')}}" method="POST">
										@csrf
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Name </label>
													<input type="text" class="form-control rounded" name="username">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
												<label class="mb-1">Email ID</label>
												<input type="text" class="form-control rounded" name="email">
											</div>
											</div>
										</div>										
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Password</label>
													<input type="password" class="form-control rounded" name="Password*">
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Role</label>
													<select class="form-select" aria-label="Default select example">
														<option selected>Open this select menu</option>
														<option value="Business Owner">Business Owner</option>
														<option value="User"> User</option>
														<option value="Admin">Admin</option>
													</select>
												</div>
											</div>
											</div>		
										<div class="form-group">
											<button type="submit" class="btn btn-md full-width bg-sky text-light rounded ft-medium">Sign Up</button>
										</div>
{{-- 										
										<div class="form-group text-center mb-0">
											<p class="extra">Or Signup with</p>
											<div class="option-log">
												<div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img src="assets/img/c-1.png" class="img-fluid" alt="" />Login with Google</a></div>
												<div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img src="assets/img/facebook.png" class="img-fluid" alt="" />Login with Facebook</a></div>
											</div>
										</div> --}}
										
										<div class="form-group text-center mt-4 mb-0">
											<p class="mb-0">Have You Already An account?
												<a href="#" data-bs-toggle="modal" data-bs-target="#login" class="ft-medium text-success">Sign In</a>
											</p>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= Login End ======================== -->
			
			<!-- ======================= Newsletter Start ============================ -->
			{{-- <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
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
			</section> --}}
			<!-- ======================= Newsletter Start ============================ -->
			@stop