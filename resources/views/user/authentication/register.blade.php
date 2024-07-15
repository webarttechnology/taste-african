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
										<h4 class="m-0 ft-medium">Create User Account</h4>
									</div>
									
									<form class="submit-form" action="{{ route ('user.register')}}" method="POST" enctype="multipart/form-data">
										@csrf
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Name</label><span class="optional-label" style="color: red">*</span>
													<input type="text" class="form-control rounded" name="name" value="{{old('name')}}" >
												</div>
											</div>
											<div class="col-6">
												<div class="form-group">
												<label class="mb-1">Email</label><span class="optional-label" style="color: red">*</span>
												<input type="text" class="form-control rounded" name="email" value="{{old('email')}}">
											</div>
											</div>
										</div>										
										<div class="row">
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Phone Number</label><span class="optional-label" style="color: red">*</span>
													<input type="text" class="form-control rounded" name="phone" value="{{old('phone')}}" >												
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Password</label><span class="optional-label" style="color: red">*</span>
													<input type="password" class="form-control rounded" name="password">
													<small class="form-text text-muted">
														Password must be at least 8 characters long.
													</small>
												</div>
											</div>											
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Confirem Password</label><span class="optional-label" style="color: red">*</span>
													<input type="password" class="form-control rounded" name="password_confirmation">
													<small class="form-text text-muted">
														Confirem Password must be same with password field.
													</small>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label class="mb-1">Image <span class="optional-label" >(Optional)</span></label>
													<input type="file" class="form-control rounded" name="image">
												</div>
											</div>
											</div>		
										<div class="form-group">
											<button type="submit" class="btn btn-md full-width bg-sky text-light rounded ft-medium">Sign Up</button>
										</div>

										<div class="form-group text-center mt-4 mb-0">
											<p class="mb-0">Have You Already An account?
												<a href="{{ route ('login')}}" class="ft-medium text-success">Sign In</a>
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
			@stop