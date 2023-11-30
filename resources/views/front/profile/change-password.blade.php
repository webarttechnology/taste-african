@extends('front.layout.app')
@section('content')

    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
        <div class="abs-list-sec">
			<a href="dashboard-add-listing.html" class="add-list-btn"><i class="fas fa-plus me-2">
				</i>Add Listing</a>
		</div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="dashboard-head-author-clicl">
                        <div class="dashboard-head-author-thumb">
                            <img src="{{asset('front/img/t-7.png')}}" class="img-fluid" alt="" />
                        </div>
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio"><h4>{{ Auth::user()->name }}</h4></div>
                            {{-- <div class="dashploio"><span class="agd-location"><i class="lni lni-map-marker me-1"></i>San Francisco, USA</span></div>
                            <div class="listing-rating high"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    <div class="goodup-dashboard-wrap gray px-4 py-5">
        <a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
            aria-controls="MobNav">
            <i class="fas fa-bars me-2"></i>Dashboard Navigation
        </a>
        @include('front.layout.sidebar')

        <div class="goodup-dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Change Password</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="theme-cl">Change Password</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="_dashboard_content bg-white rounded mb-4">
                            <div class="_dashboard_content_header br-bottom py-3 px-3">
                                <div class="_dashboard__header_flex">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-lock me-2 theme-cl fs-sm"></i>Change
                                        Password</h4>
                                </div>
                            </div>

                            <div class="_dashboard_content_body py-3 px-3">
                                <form class="row submit-form" action="{{ route ('user.changepasswordStore')}}" method="POST">
									@csrf
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control rounded" name="old_password">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control rounded" name="password">
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control rounded" name="confirm_password">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes
											</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @stop
