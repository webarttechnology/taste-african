@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Update Information</h1>
				</div>
				<div>
					<a href="{{route ('admin.about')}}" class="btn btn-primary"> View All </a>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card card-default">						
						<div class="card-body">
							<div class="row ec-vendor-uploads">						
								<div class="col-lg-12">
									<div class="ec-vendor-upload-detail">
										<form class="row g-3" method="POST" action="{{route ('admin.about_update', ['id' => $about->id])}}" enctype="multipart/form-data">
											@method('PUT')
											@csrf
											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">About Short Title</label>
												<input type="text" class="form-control slug-title" name="about_short_title" value="{{old('about_short_title', $about->about_short_title)}}">
											</div>
											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">About Long Title</label>
												<input type="text" class="form-control slug-title" name="about_long_title" value="{{old('about_long_title', $about->about_long_title)}}">
											</div>
											<div class="col-md-4">
												<label class="form-label">Image</label>
												<input class="form-control" type="file" id="image" name="image">
												<img src="{{ asset($about->image) }}" alt="Your Image" width="100px">
											</div>											
										
											
											  <div class="col-md-12">
                                                    <label class="form-label">About Description</label>
                                                    <textarea class="form-control ckeditor" name="description" id="description" rows="2">{{$about->description}}</textarea>
                                                </div>

											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">About Short Title 1</label>
												<input type="text" class="form-control slug-title" name="about_short_title_1" value="{{old('about_short_title_1', $about->about_short_title_1)}}">
											</div>
											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">About Long Title 1</label>
												<input type="text" class="form-control slug-title" name="about_long_title_1" value="{{old('about_long_title_1', $about->about_long_title_1)}}">
											</div>
											<div class="col-md-4">
												<label class="form-label">About Image 1</label>
												<input class="form-control" type="file" id="image" name="image_1">
												<img src="{{ asset($about->image_1) }}" alt="Your Image" width="100px">
											</div>											
											<!--<div class="col-md-12">-->
											<!--	<label for="inputEmail4" class="form-label">About Description 1</label>												-->
											<!--	<textarea class="form-control slug-title" id="file-picker" name="description_1" rows="15" cols="150">{!! $about->description_1 !!}</textarea>-->
											<!--</div>-->


											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">Banner Sub Heading</label>
												<input type="text" class="form-control slug-title" name="banner_sub_heading" value="{{old('banner_sub_heading', $about->banner_sub_heading)}}">												
											</div>
											<div class="col-md-4">
												<label for="inputEmail4" class="form-label">Banner Main Heading</label>
												<input type="text" class="form-control slug-title" name="banner_main_heading" value="{{old('banner_main_heading', $about->banner_main_heading)}}">
											</div>																				
											<div class="col-md-4">
												<label class="form-label">Banner Image</label>
												<input class="form-control" type="file" id="banner_image" name="banner_image">
												<img src="{{ asset($about->banner_image) }}" alt="Your Image" width="100px">
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
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script> CKEDITOR.replaceAll('ck-editor');  </script>