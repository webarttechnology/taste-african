@extends('admin.layouts.app')

@section('content')

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Add Information</h1>
                </div>
                <div>
                    <a href="{{ route('admin.contact') }}" class="btn btn-primary"> View All </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body">
                            <div class="row ec-vendor-uploads">
                                <div class="col-lg-12">
                                    <div class="ec-vendor-upload-detail">
                                        <form class="row g-3" method="POST" action="{{ route('admin.contact_store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label for="inputEmail4" class="form-label">Address </label>
                                                <input type="text" class="form-control slug-title" id="address"
                                                    name="address" value="{{ old('address') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Phone</label>
                                                <input type="number" class="form-control slug-title" id="phone"
                                                    name="phone" value="{{ old('phone') }}">
                                            </div>
											<div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control slug-title"
                                                    name="email"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Logo</label>
                                                <input class="form-control" type="file" id="image" name="image">
                                            </div>   

                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Site Name</label>
                                                <input type="text" class="form-control slug-title"
                                                    name="site_name" value="{{ old('site_name') }}">
                                            </div>  

                                            <div class="col-md-12">
                                                <label for="footer_text" class="form-label">Footer Text</label>
                                                <input type="text" class="form-control slug-title" id="footer_text"
                                                    name="footer_text" value="{{ old('footer_text') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="facebook" class="form-label">Facebook</label>
                                                <input type="text" class="form-control slug-title" id="facebook"
                                                    name="facebook" value="{{ old('facebook') }}">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="instragram" class="form-label">Instragram</label>
                                                <input type="text" class="form-control slug-title" name="instragram"
                                                    value="{{ old('instragram') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="linkdin" class="form-label">Linkdin</label>
                                                <input type="text" class="form-control slug-title" name="linkdin"
                                                    value="{{ old('linkdin') }}">
                                            </div>
											<div class="col-md-6">
												<label for="youtube" class="form-label">Youtube</label>
												<input type="text" class="form-control slug-title" name="youtube"
													value="{{ old('youtube') }}">
											</div>
											<div class="col-md-6">
												<label for="youtube" class="form-label">Twitter</label>
												<input type="text" class="form-control slug-title" name="twitter"
													value="{{ old('youtube') }}">
											</div>
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
