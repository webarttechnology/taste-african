@extends('front.layout.app')
@section('content')

    <!-- ======================= dashboard Detail ======================== -->
    <div class="goodup-dashboard-wrap gray px-4 py-5">
        {{-- <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
            aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>Dashboard Navigation </a> --}}

        @include('front.layout.sidebar')

        <div class="goodup-dashboard-content detailed">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Profile Info</h1>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-9 col-md-8 col-sm-12">
                        <form class="submit-form" method="POST" action="{{ route('user.updateOrCreate') }}">
                            @csrf
                            <div class="dashboard-list-wraps bg-white rounded mb-4">
                                <!--<div class="dashboard-list-wraps-head br-bottom py-3 px-3">-->
                                <!--    <div class="dashboard-list-wraps-flx">-->
                                <!--        <h4 class="mb-0 ft-medium fs-md">-->
                                <!--            <i class="fa fa-user-check me-2 theme-cl fs-sm"></i>My Profile-->
                                <!--        </h4>-->
                                <!--    </div>-->
                                <!--</div>-->

                                <div class="dashboard-list-wraps-body py-3 px-3">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Name</label>
                                                <input type="text" class="form-control rounded" name="name"
                                                    value="{{ $userWithInfo->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Email ID</label>
                                                <input type="text" class="form-control rounded" name="email"
                                                    value="{{ $userWithInfo->email }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Mobile</label>
                                                <input type="text" class="form-control rounded" name="phone"
                                                    value="{{ $userWithInfo->phone }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">State</label>
                                                <input type="text" class="form-control rounded" name="state"
                                                    value="{{ $userWithInfo->info == null ? '' : $userWithInfo->info->state }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">City</label>
                                                <input type="text" class="form-control rounded" name="city"
                                                    value="{{ $userWithInfo->info == null ? '' : $userWithInfo->info->city }}" />

                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Address</label>
                                                <input type="text" class="form-control rounded" name="address"
                                                    value="{{ $userWithInfo->info == null ? '' : $userWithInfo->info->address }}" />
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label class="mb-1">Zip Code</label>
                                                <input type="text" class="form-control rounded" name="zip_code"
                                                    value="{{ $userWithInfo->info == null ? '' : $userWithInfo->info->zip_code }}" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center style="padding-bottom: 12px;"> <button class="btn btn-info"
                                        type="submit">Submit</button>
                                    <a class="btn btn-danger" href="{{ route ('user.deleteprofile')}}">Delete Account</a>
                                </center>
                            </div>



                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
        @stop
