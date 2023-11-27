@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Category Detail</h1>
                </div>   
                <div>
                    <a href="{{ route ('category_listing_add')}}" class="btn btn-primary"> Add </a>
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $categories)
                                            <tr>
                                                <td>{{ $categories->name }}</td>
                                                <td>
                                                    <img src="{{ asset($categories->image) }}" alt="Your Image" width="100px">
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
                                                            <a class="dropdown-item" href="{{ url ('admin/category-listing/edit/'.$categories->id)}}">Edit</a>
                                                            <a  href="{{ url ('admin/category-listing/delete/'.$categories->id)}}" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
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


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() 
	{
        // Click on approve and reject button
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.update-status').on('click', function(e) {
            e.preventDefault();

            var action = $(this).data('action'); 
            var installerId = $(this).data('id'); 
            var statusColumn = $(this).closest('tr').find('.status-column');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{ route('statusChange') }}',
                data: {
                    status: action,
                    user_id: installerId,
                },
                success: function(response) {
                    if (response.success) {
                        statusColumn.text(response.status);
                    } else {
                        console.error('Failed to update status.');
                    }
                },
                error: function() {
                    console.error('Error while making the AJAX request.');
                },
            });
        });
        // Click on approve and reject button
    });
</script>
