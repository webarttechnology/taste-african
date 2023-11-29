@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Add Amenities</h1>
				</div>
				<div>
					<a href="{{route ('amenities')}}" class="btn btn-primary"> View All </a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">						
						<div class="card-body">
							<div class="row ec-vendor-uploads">						
								<div class="col-lg-12">
									<div class="ec-vendor-upload-detail">
										<form class="row g-3" method="POST" action="{{route ('amenities.storeOrUpdate', ['id' => $data->id])}}" enctype="multipart/form-data">
                                            @csrf
											<div class="col-md-6">
												<label for="inputEmail4" class="form-label">Name</label>
												<input type="text" class="form-control slug-title" id="name" name="name" value="{{$data->name}}">
											</div>
											<div class="col-md-6">
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
		</div> 
	</div> 

@stop