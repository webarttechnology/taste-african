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
											<th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td style="text-transform: capitalize" class="status-column" data-users-id="{{ $user->id }}"
												data-approvel-status="{{ $user->status }}"> {{ $user->status }} </td>
                                                <td>
                                                    @if ($user->status == 'active')
                                                       <a class="btn btn-primary status-change" href="{{ route('statusChange', ['id' => $user->id, 'status' => 'deactive'] )}}" onclick="return confirm('Are you sure you want to deactive this item?');">Deactive</a>
                                                    @else ($user->status == 'deactive')
                                                       <a class="btn btn-info status-change" href="{{ route('statusChange', ['id' => $user->id, 'status' => 'active'])}}" onclick="return confirm('Are you sure you want to active this item?');">Active</a>
                                                    @endif
                                                  <a class="btn btn-danger status-change" href="{{ route('statusChange', ['id' => $user->id, 'status' => 'delete'])}}" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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
        });

    });
</script>
