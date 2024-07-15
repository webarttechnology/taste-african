@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Edit Pricacy Policy</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">						
						<div class="card-body">
							<div class="row ec-vendor-uploads">						
								<div class="col-lg-12">
									<div class="ec-vendor-upload-detail">
										<form class="row g-3" method="POST" action="{{ route('admin.privacy_policy_update', $data->id) }}" enctype="multipart/form-data">
											@method('put')
											@csrf
											
											<div class="col-md-12">
												<label for="heading" class="form-label">Heading</label>
												<input type="text" class="form-control" required id="heading" name="heading" value="{{ old('heading', $data->heading) }}">
											</div>
											<div class="col-md-12 mb-5">
												<label for="description" class="form-label">Description</label>
												<textarea class="form-control ckeditor" name="description" id="description" rows="5" required>{{ old('description', $data->description) }}</textarea>
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