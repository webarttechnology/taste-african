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
									
									<form class="submit-form" action="{{ route ('user.register')}}" method="POST">
										@csrf
										<div class="row">
											<div class="col-6">
												<div class="form-group">
													<label class="mb-1">Name</label>
													<input type="text" class="form-control rounded" name="name">
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
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Phone Number</label>
													<input type="text" class="form-control rounded" name="phone">
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Password</label>
													<input type="password" class="form-control rounded" name="password">
												</div>
											</div>											
											<div class="col-4">
												<div class="form-group">
													<label class="mb-1">Confirem Password</label>
													<input type="password" class="form-control rounded" name="password_confirmation">
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