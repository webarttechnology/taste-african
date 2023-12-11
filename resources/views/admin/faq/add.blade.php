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
										<form class="row g-3" method="POST" action="{{route ('admin.faq_store')}}" enctype="multipart/form-data">
											@csrf
											<div class="col-md-12">
												<label for="category" class="form-label">Category</label>
												<select name="category" id="category" required>
													<option value="">Select a category</option>
													@foreach ( $categories as $category )
														<option value="{{ $category->id }}">{{ $category->name }}</option>
													@endforeach
												</select>
											</div>
											<div class="col-md-12">
												<label for="question" class="form-label">Question</label>
												<input type="text" class="form-control slug-title" required id="question" name="question" value="{{old('question')}}">
											</div>
											<div class="col-md-12">
												<label for="answer" class="form-label">Answer</label>
												<textarea class="form-control slug-title" id="answer" required  name="answer" rows="4" cols="150"></textarea>
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