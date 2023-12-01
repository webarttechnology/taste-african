@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Business Listings</h1>
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
                                            <th scope="col">Publiser Name</th>
                                            <th scope="col">Listing Title</th>
											<th scope="col">City</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Mobile</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listings as $listing)
                                            <tr>
                                                <td>{{ $listing->user->name }}</td>
                                                <td>{{ $listing->title }}</td>
                                                <td>{{ $listing->city }}</td>
                                                <td>{{ $listing->state }}</td>
                                                <td>{{ $listing->mobile }}</td>
                                                <td>{{ $listing->email }}</td>   
                                                <td class="status-column" 
                                                    data-approvel-status="{{ $listing->status }}">
                                                    @php
                                                        switch ($listing->status) {
                                                            case 'pending':
                                                                echo 'Pending';
                                                                break;
                                                            case 'approve':
                                                                echo 'Approved';
                                                                break;
                                                            default:
                                                                echo 'Rejected';
                                                                break;
                                                        }
                                                    @endphp
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
                                                        <div class="dropdown-menu">
															<a class="dropdown-item update-status" data-list-id="{{ $listing->id }}" href="#" data-action="approved">Approve</a>
                                                            <a class="dropdown-item update-status" data-list-id="{{ $listing->id }}" href="#"  data-action="reject">Reject</a>
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
           // alert(action);
            var listingId = $(this).data('list-id'); 

            console.log(this, listingId);
            var statusColumn = $(this).closest('tr').find('.status-column');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });

            $.ajax({
                type: 'POST',
                url: '{{ route('admin.statusChange') }}',
                data: {
                    status: action,
                    listingId: listingId,
                },
                success: function(response) {
                    console.log(response);
                    if (response.success) {
                        window.location.reload();
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
