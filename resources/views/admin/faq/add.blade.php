@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Add FAQ</h1>
				</div>
				<div>
					<a href="{{route ('admin.faq')}}" class="btn btn-primary"> View All </a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">						
						<div class="card-body">
							<div class="row ec-vendor-uploads">						
								<div class="col-lg-12">
									<div class="ec-vendor-upload-detail">
										<form class="row g-3" method="POST" action="{{route ('admin.about_store')}}" enctype="multipart/form-data">
											@csrf
											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">About Short Title</label>
												<input type="text" class="form-control slug-title" id="name" name="about_short_title" value="{{old('about_short_title')}}">
											</div>
											<div class="col-md-6">
												<label for="inputEmail4" class="form-label">About Description</label>
												<textarea class="form-control slug-title"  name="description" rows="4" cols="150"></textarea>
											</div>
											<div class="col-md-2">
												<label for="inputEmail4" class="form-label"></label>
												<button type="submit" class="btn btn-primary">Add New</button>
											</div>
										
											
																					


											<div class="col-md-12">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- End Content -->
	</div> <!-- End Content Wrapper -->

@stop