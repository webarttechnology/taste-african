@extends('front.layout.app')
@section('content')



    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{ asset('front/img/cover.jpg') }}) no-repeat #C90000;">
        <div class="abs-list-sec">
            {{-- <a href="{{route ('business_listing_add')}}" class="add-list-btn"><i class="fas fa-plus me-2"></i>Add Listing</a> --}}
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard-head-author-clicl">
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio">
                                <h4></h4>
                            </div>
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

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="dashboard-list-wraps bg-white rounded mb-4">

                        <div class="dashboard-list-wraps-body py-3 px-3">
                            <div class="dashboard-listing-wraps">
                                @if( !$listings->isEmpty() && count($listings) > 0)
                                    @foreach ($listings as $listing)
                                        <!-- Single Listing Item -->
                                        <div class="dsd-single-listing-wraps">
                                            <div class="dsd-single-lst-thumb"><img
                                                    src="{{ asset($listing->images[0]->images) }}" class="img-fluid"
                                                    alt="" /></div>
                                            <div class="dsd-single-lst-caption">
                                                <div class="dsd-single-lst-title">
                                                    <h5>{{ $listing->title }}</h5>
                                                </div>
                                                <span class="agd-location"><i class="fa fa-user-o"
                                                        aria-hidden="true"></i>Author:
                                                    <a href="{{ url('author-deatils/' . $listing->user->id) }}"
                                                        class="dsd-single-lst-title"> {{ $listing->user->name }}</a>
                                                </span>
                                                <div class="ico-content">
                                                    @php
                                                        $totalStars = 0;
                                                        $totalReviews = count($listing->reviews);

                                                        foreach ($listing->reviews as $review) {
                                                            $totalStars += $review->star;
                                                        }

                                                        $averageStars = $totalReviews > 0 ? round($totalStars / $totalReviews, 2) : 0;
                                                    @endphp
                                                    <div class="Goodup-ft-first">
                                                        <div class="Goodup-rating">
                                                            <div class="Goodup-rates">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($i <= $averageStars)
                                                                        <i class="fas fa-star"></i>
                                                                    @else
                                                                        <i class="far fa-star"></i>
                                                                    @endif
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="Goodup-price-range">
                                                            <span class="ft-medium">{{ $totalReviews }} Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dsd-single-lst-footer">
                                                    <a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                        class="btn btn-edit mr-1"><i class="fas fa-eye me-1"></i>View</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="dsd-single-lst-footer">
                                        <a href="" class="btn btn-edit mr-1"><i class="fas fa-eye me-1"></i> There
                                            are Not Listing in this category.</a>
                                    </div>
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @stop
