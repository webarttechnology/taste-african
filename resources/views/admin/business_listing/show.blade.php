@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper align-items-center">
                <center>  <h1>Business Listings</h1> </center>                
                <div class="update-success" style="font-size: 20px; color:green"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-default">
                        <div class="card-body product-detail">
                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>                                            
                                            <th scope="col">View Listing </th>
                                            <th scope="col">Publiser Name</th>
											<th scope="col">City</th>
                                            <th scope="col">State</th>
                                            <th scope="col">Mobile</th>
                                           <th scope="col">View</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($listings as $listing)
                                        @php
                                            if( empty($listing->user->name) ) continue;
                                        @endphp
                                            <tr>
                                                 <td>{{ $listing->title }} </td>
                                                <td>{{ $listing->user->name }}</td>
                                                <td>{{ $listing->city }}</td>
                                                <td>{{ $listing->state }}</td>
                                                <td>{{ $listing->mobile }}</td>
                                                <td><a  href="{{ url('business-listing/details/' . $listing->id) }}" style="font-size:20px"> <i class="fas fa-eye eye-icon"></i> </a></td> 
                                                <td class="status-column" 
                                                    data-approvel-status="{{ $listing->status }}">
                                                    @php
                                                        switch ($listing->status) {
                                                            case 'reject':
                                                                echo 'Reject';
                                                                break;
                                                            case 'approve':
                                                                echo 'Approved';
                                                                break;
                                                            default:
                                                                echo 'Pending';
                                                                break;
                                                        }
                                                    @endphp
                                                </td>   
                                                
                                                <td>
                                                    <div class="btn-group mb-1">
                                                        <button type="button"  class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static" style="width: 43px;height: 20px;"></button>
                                                        <!--<button type="button"-->
                                                        <!--    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"-->
                                                        <!--    data-bs-toggle="dropdown" aria-haspopup="true"-->
                                                        <!--    aria-expanded="false" data-display="static">-->
                                                        <!--    <span class="sr-only">Info</span>-->
                                                        <!--</button>-->
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

                                <div class="loaderMain d-none">
                                    <div id="loader"></div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="pagination">                             
                                        {{ $listings->links('vendor.pagination.bootstrap-4') }}
                                    </ul>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@stop


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

{{-- <script>
    $(document).ready(function()           
	{

         // Show loader when AJAX starts
        
        // Hide loader when AJAX completes
        $(document).ajaxStop(function(){
            $(".loaderMain").hide();
        });


        // Click on approve and reject button
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.update-status').on('click', function(e) {
            
            e.preventDefault();

            var action = $(this).data('action'); 
            var listingId = $(this).data('list-id'); 
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

                    if (response.success == true) {

                         $(document).ajaxStart(function(){
                            $(".loaderMain").show();
                        });


                        $('.update-success').text('Check Your Mail Kindly!!!');
                        setTimeout(function() {
                                window.location.reload();
                            }, 4000);
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
</script> --}}


<script>
    $(document).ready(function() {       

        // Click on approve and reject button
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('.update-status').on('click', function(e) {
            e.preventDefault();

            var action = $(this).data('action'); 
            var listingId = $(this).data('list-id'); 
            var statusColumn = $(this).closest('tr').find('.status-column');

            $('.loaderMain').removeClass('d-none')

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
                    if (response.success == true) {
                        $('.loaderMain').addClass('d-none')
                        $('.update-success').text('Check Your Mail Kindly!!!');
                        setTimeout(function() {
                            window.location.reload();
                        }, 4000);
                    } else {
                        console.error('Failed to update status.');
                    }
                },
                error: function() {
                    console.error('Error while making the AJAX request.');
                },
            });
        });
    });
</script>
