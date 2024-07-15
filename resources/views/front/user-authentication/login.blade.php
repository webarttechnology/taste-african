@extends('front.layout.app')

@section('content')
			
			<!-- ======================= Login Detail ======================== -->
			<section class="gray">
				<div class="container">
					<div class="row align-items-start justify-content-center">
						<div class="col-xl-5 col-lg-8 col-md-12">
							
							<div class="signup-screen-wrap">
								<div class="signup-screen-single">
									<div class="text-center mb-4">
										<h4 class="m-0 ft-medium">Login Your Account</h4>
									</div>
									
									<form class="submit-form" action="{{ route ('user.login')}}" method="POST">	
										@csrf			
										<div class="form-group">
											<label class="mb-1">Email</label><span class="optional-label" style="color: red">*</span>
											<input type="email" class="form-control rounded" name="email">
										</div>
										
										<div class="form-group">
											<label class="mb-1">Password</label><span class="optional-label" style="color: red">*</span>
											<input type="password" class="form-control rounded" name="password">
										</div>
										
										<div class="form-group">
											<div class="d-flex align-items-center justify-content-between">
												<div class="eltio_k2">
													<a href="{{ route ('user.forgot_Pass')}}" class="checkbox-custom-label">Lost Your Password?</a>
												</div>	
											</div>
										</div>
										
										<div class="form-group">
											<button type="submit" class="btn btn-md full-width theme-bg text-light rounded ft-medium">Sign In</button>
										</div>																		
									</form>
									
									<div class="form-group text-center mt-4 mb-0">
										<p class="mb-0">Have You Already An account?
											<a href="{{ route ('user.registerPage')}}" class="ft-medium text-success">Sign Up</a>
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ======================= Login End ======================== -->
			

			
@stop