@extends('admin.layouts.app')

@section('content')
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <center>
                    <h1>Blog Detail</h1>
                </center>  
                <div>
                   <a class="btn btn-info" href="{{route('admin.blog_add')}}">Add</a>
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
                                            <th scope="col">Category</th>
                                            <th scope="col">Icon</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blog as $blogs)
                                            <tr>
                                                <td>{{ $blogs->title }}</td>
                                                <td>{{ $blogs->category }}</td>
                                                <td>
                                                    <img src="{{ asset($blogs->category_icon) }}" alt="Your Image" width="50px">
                                                </td>
                                               
                                               <td>{!! \Illuminate\Support\Str::limit($blogs->description, 100) !!}</td>

                                                <td>
                                                    <img src="{{ asset($blogs->image) }}" alt="Your Image" width="50px">
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
                                                            <a class="dropdown-item" href="{{ url ('admin/blog/edit/'.$blogs->id)}}">Edit</a>                                                           
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
        </div> 
    </div> 
@stop



