@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Add Category</h1>
				</div>
				<div>
					<a href="{{route ('category_listing')}}" class="btn btn-primary"> View All </a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">						
						<div class="card-body">
							<div class="row ec-vendor-uploads">						
								<div class="col-lg-12">
									<div class="ec-vendor-upload-detail">
										<form class="row g-3" method="POST" action="{{route ('category_listing_update', ['id' => $category->id])}}" enctype="multipart/form-data">
											@method('PUT')
                                            @csrf
											<div class="col-md-6">
												<label for="inputEmail4" class="form-label">Name</label>
												<input type="text" class="form-control slug-title" id="name" name="name" value="{{$category->name}}">
											</div>
											
											<div class="col-md-6">
												<label class="form-label">Image</label>
												<input class="form-control" type="file" id="image" name="image">
                                                <img src="{{ asset($category->image) }}" alt="Your Image" width="100px">
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