@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Information Detail</h1>
                </div>  
                         
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">

                        <div class="card-body product-detail">
                            <div class="row">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Banner Image</th>
                                            <th scope="col">Banner Sub Heading</th>
                                            <th scope="col">Banner Main Heading</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($about as $abouts)
                                            <tr>
                                                <td>{{ $abouts->about_short_title }}</td>
                                                <td>{{ $abouts->banner_sub_heading }}</td>
                                                <td>{{ $abouts->banner_main_heading }}</td>
                                                <td>
                                                    <img src="{{ asset($abouts->banner_image) }}" alt="Your Image" width="100px">
                                                </td>
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button" class="btn btn-outline-success">Info</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>                                                       
                                                        <div class="dropdown-menu dropdown-custom-button">
                                                            <a class="dropdown-item" href="{{ url ('admin/about/edit/'.$abouts->id)}}">Edit</a>                                                           
                                                        </div>                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->


@stop



