@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>FAQ's</h1>
                </div>  
                <div>
                    <a href="{{ route ('admin.faq_add')}}" class="btn btn-primary"> Add </a>
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
                                            <th scope="col">Category</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Answer</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $faq)
                                            <tr>
                                                <td>{{ $faq->selected_category->name }}</td>
                                                <td>{{ $faq->question }}</td>
                                                <td>{{ $faq->ans }}</td>                                               
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
                                                            <a class="dropdown-item" href="{{ url ('admin/faq/edit/'.$faq->id)}}">Edit</a>                                                           
                                                            <a class="dropdown-item delete-faq" data-id="{{ $faq->id }}" href="{{ url ('admin/faq/delete/'.$faq->id)}}">Delete</a>                                                           
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

@endsection

@section('custom_js')
    <script>
        $(".delete-faq").on('click', function(e) {
            e.preventDefault();

            var id = $(this).data('id');

            if( confirm('Are you sure you want to delete this faq?') ) {
                return window.location.href = '{{ url('admin/faq/delete') }}' + '/' + id;
            }
        })
    </script>

@endsection