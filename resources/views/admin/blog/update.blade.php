@extends('admin.layouts.app')

@section('content')

	<!-- CONTENT WRAPPER -->
	<div class="ec-content-wrapper">
		<div class="content">
			<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
				<div>
					<h1>Add Blog</h1>
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
										<form class="row g-3" method="POST" action="{{route ('admin.blog_update', ['id' => $blog->id ])}}" enctype="multipart/form-data">
											@method('PUT')
											@csrf
											<div class="col-md-6">
												<label for="Title" class="form-label">Title</label>
												<input type="text" class="form-control slug-title" id="title" name="title" value="{{old('title', $blog->title )}}">
											</div>
											<div class="col-md-6">
												<label for="category" class="form-label">Category</label>
												<input type="text" class="form-control slug-title" id="category" name="category" value="{{old('category', $blog->category )}}">
											</div>
											<div class="col-md-6">
												<label for="inputEmail4" class="form-label">Category Icon</label>
												<input class="form-control" type="file" id="icon" name="icon">
												<img src="{{ asset($blog->category_icon) }}" alt="Your Image" width="50px">
											</div>
											<div class="col-md-6">
												<label class="form-label">Image</label>
												<input class="form-control" type="file" id="image" name="image">
												<img src="{{ asset($blog->category_icon) }}" alt="Your Image" width="50px">
											</div>											
										
											
												<div class="col-md-12">
                                                    <label class="form-label"> Description</label>
                                                    <textarea class="form-control ckeditor" name="description" id="short_desc" rows="2">{{old('description', $blog->description)}}</textarea>
                                                </div>

											<div class="col-md-12 mt-2">
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
<script>
        CKEDITOR.replaceAll('ck-editor');
    </script>