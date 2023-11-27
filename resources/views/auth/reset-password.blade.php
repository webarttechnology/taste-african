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
										<h4 class="m-0 ft-medium">Change your Password</h4>
									</div>									
									<form class="submit-form" action="{{ route ('password.reset')}}" method="POST">
										@csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
										<div class="row">
                                            <div class="form-group col-md-12 ">
                                                <label class="mb-1">Password</label>
                                                <input type="password" class="form-control rounded" name="password">
                                              </div>
                              
                                              <div class="form-group col-md-12 ">
                                                <label class="mb-1">Confirm Password</label>
                                                <input type="password" class="form-control" id="cpassword" name="password_confirmation">
                                              </div>
											</div>
										</div>										
											
										<div class="form-group">
											<button type="submit" class="btn btn-md full-width bg-sky text-light rounded ft-medium">Submit</button>
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