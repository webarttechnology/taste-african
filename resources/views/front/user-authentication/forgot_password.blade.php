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
										<h4 class="m-0 ft-medium">Enter Email Address For Password Verification</h4>
									</div>
									
									

									<form action="{{ route('user.forgot_Pass_action') }}" method="POST">
										@csrf
										<div class="row">
											<div class="form-group col-md-12 mb-4">
												<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email Here">
												@error('email')
													<span class="text-danger">{{ $message }}</span>
												@enderror
											</div>
											<button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
										</div>
									</form>
									
									
									<div class="form-group text-center mb-0">
										<p class="mb-0"><a href="{{ route ('login')}}" class="ft-medium text-success">Sign In</a>
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