@extends('front.layout.app')
@section('content')



    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
        <div class="abs-list-sec">
            <a href="{{ route('business_listing_add') }}" class="add-list-btn"><i class="fas fa-plus me-2"></i>Add Listing</a>
        </div>
        <div class="container">
            <div class="row" >
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
                    <div class="dashboard-head-author-clicl" >
                        <div class="dashboard-head-author-thumb">
                            <img src="{{asset('front/img/t-7.png')}}" class="img-fluid" alt="" />
                        </div>
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio">
                                <h4>Charles D. Robinson</h4>
                            </div>
                            <div class="dashploio"><span class="agd-location"><i class="lni lni-map-marker me-1"></i>San
                                    Francisco, USA</span></div>
                            <div class="listing-rating high"><i class="fas fa-star active"></i><i
                                    class="fas fa-star active"></i><i class="fas fa-star active"></i><i
                                    class="fas fa-star active"></i><i class="fas fa-star active"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    @include('front.layout.sidebar')

        <div class="goodup-dashboard-content">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Manage Listings</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
                                <li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Listings</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="dashboard-list-wraps bg-white rounded mb-4">
                            <div class="dashboard-list-wraps-head br-bottom py-3 px-3">
                                <div class="dashboard-list-wraps-flx">
                                    <h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file-alt me-2 theme-cl fs-sm"></i>My Listings</h4>
                                </div>
                            </div>

                            <div class="dashboard-list-wraps-body py-3 px-3">
                                <div class="dashboard-listing-wraps">
                                    @foreach ($listings as $listing)
                                        <!-- Single Listing Item -->
                                        <div class="dsd-single-listing-wraps">
                                            <div class="dsd-single-lst-thumb">
                                                @foreach ($listing->images as $listing_image)
                                                    <a href="{{ $listing_image->images }}" class="mfp-gallery">
                                                        <img src="{{ $listing_image->images }}" class="img-fluid mx-auto" alt="{{ $listing->title }}"/>
                                                    </a>
                                                @endforeach
                                            </div>
                                            <div class="dsd-single-lst-caption">
                                                <div class="dsd-single-lst-title">
                                                    <h5>{{ $listing->title }}</h5>
                                                </div>
                                                <span class="agd-location"><i
                                                        class="lni lni-map-marker me-1"></i>{{ $listing->city }}</span>
                                                <div class="ico-content">
                                                    <div class="Goodup-ft-first">
                                                        <div class="Goodup-rating">
                                                            <div class="Goodup-rates">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="Goodup-price-range">
                                                            <span class="ft-medium">34 Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dsd-single-lst-footer">
                                                    <a href="{{ $listing->id }}" class="btn btn-edit mr-1"><i
                                                            class="fas fa-edit me-1"></i>Edit</a>
                                                    <a href="{{ url ('business-listing/show/'.$listing->id) }}" class="btn btn-view mr-1"><i
                                                            class="fas fa-eye me-1"></i>View</a>
                                                    <a href="{{ $listing->id }}" class="btn btn-delete"><i
                                                            class="fas fa-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @stop
