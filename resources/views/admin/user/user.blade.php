@extends('admin.layouts.app')

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                <div>
                    <h1>Users Detail</h1>
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
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Role</th>
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $users)
                                            <tr>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->role }}</td>
                                                <td style="text-transform: capitalize" class="status-column" data-users-id="{{ $users->id }}"
												data-approvel-status="{{ $users->status }}"> {{ $users->status }} </td>
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
															@if ($users->status == 'active')
																<a class="dropdown-item update-status" href="#" data-id="{{ $users->id }}"
																	data-action="inactive">Inactive</a>
															@else
																<a class="dropdown-item update-status" href="#" data-id="{{ $users->id }}"
																	data-action="active">Active</a>																
															@endif
                                                        </div>
                                                    </div>
                                                </td>
												<td>
													<a href="{{ url ('admin/user/delete/'.$users->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"><i class="far fa-trash-alt mr-2" ></i>Delete</a>
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
