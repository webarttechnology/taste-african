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
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Footer Text</th>
                                            <th scope="col">Facebook</th>
                                            <th scope="col">Instragram</th>
                                            <th scope="col">Linkdin</th>
                                            <th scope="col">Youtube</th>
                                            <th scope="col">Twitter</th>
                                            <th scope="col">Logo</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactdetails as $contactdetail)
                                            <tr>
                                                <td>{{ $contactdetail->address }}</td>
                                                <td>{{ $contactdetail->phone }}</td>
                                                <td>{{ $contactdetail->email }}</td>
                                                <td>{{ $contactdetail->footer_text }}</td>
                                                <td>{{ $contactdetail->facebook }}</td>
                                                <td>{{ $contactdetail->instragram }}</td>
                                                <td>{{ $contactdetail->linkdin }}</td>
                                                <td>{{ $contactdetail->youtube }}</td>
                                                <td>{{ $contactdetail->twitter }}</td>                                                
                                                <td>
                                                    <img src="{{ asset($contactdetail->logo) }}" alt="Your Image" width="50px">
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
                                                            <a class="dropdown-item" href="{{ url ('admin/contact/edit/'.$contactdetail->id)}}">Edit</a>                                                           
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



