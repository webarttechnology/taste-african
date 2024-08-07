@extends('front.layout.app')
@section('content')



    <!-- =============================== Dashboard Header ========================== -->
    <section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
        <div class="abs-list-sec"><a href="{{route ('business_listing_add')}}" class="add-list-btn"><i class="fas fa-plus me-2"></i>Add Listing</a></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        
                    <div class="dashboard-head-author-clicl">
                        <div class="dashboard-head-author-thumb">
                            @if(Auth::user()->image === null)
									<img src="{{asset('front/img/user.png')}}" class="img-fluid" alt="" />
									@else
									<img src="{{ asset(Auth::user()->image) }}" class="img-fluid" alt="" />
									@endif
                        </div>
                        <div class="dashboard-head-author-caption">
                            <div class="dashploio"><h4>{{ Auth::user()->name }}</h4></div>                           
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Dashboard Header ========================== -->

    <!-- ======================= dashboard Detail ======================== -->
    @include('front.layout.sidebar')

        <div class="goodup-dashboard-content detailed">
            <div class="dashboard-tlbar d-block mb-5">
                <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12">
                        <h1 class="ft-medium">Manage Listings</h1>
                    </div>
                </div>
            </div>

            <div class="dashboard-widg-bar d-block">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="dashboard-list-wraps bg-white rounded mb-4">
                            <div class="dashboard-list-wraps-body py-3 px-3">
                                <div class="dashboard-listing-wraps">
                                    @if( count($listings) > 0)
                                    @foreach ($listings as $listing)
                                        <!-- Single Listing Item -->
                                        <div class="dsd-single-listing-wraps">
                                            <div class="dsd-single-lst-thumb">
                                                @foreach ($listing->images->take(1) as $listing_image)
                                                    <a href="{{ $listing_image->images }}" class="mfp-gallery">
                                                        <img src="{{ $listing_image->images }}" class="img-fluid mx-auto" alt="{{ $listing->title }}"/>
                                                    </a>
                                                @endforeach
                                            </div>
                                            <div class="dsd-single-lst-caption">
                                                <div class="dsd-single-lst-title">
                                                    <div class="col-6"> <h5>{{ $listing->title }}</h5> </div>
                                                    @if($listing->approval == 'hide')
                                                    <small style="color: red; font-size:22px;">Inactive</small>
                                                        @endif                                                  
                                                </div>                                                
                                                <span class="agd-location"><i
                                                        class="lni lni-map-marker me-1"></i>{{ $listing->city }}</span>

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
                                                                
                                                            </div>
                                                        </div>
                                                
                                                <div class="dsd-single-lst-footer">
                                                    <a href="{{ url ('business-listing/edit/'.$listing->id) }}" class="btn btn-edit mr-1"><i
                                                            class="fas fa-edit me-1"></i>Edit</a>
                                                    <a href="{{ url ('business-listing/details/'.$listing->id) }}" class="btn btn-view mr-1"><i
                                                            class="fas fa-eye me-1"></i>View</a>
                                                    <!--<a href="{{ url ('business-listing/delete/'.$listing->id) }}" class="btn btn-delete"><i-->
                                                    <!--        class="fas fa-trash me-1"></i>Delete</a>-->
                                                            
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @else
                                    <center>
                                        <p class="zero-listing">You Have Not Listed a single Item. </p>
                                        <a class="btn bg-warning" href="{{route ('business_listing_add')}}"> Add New </a><center>
                                    @endif
                                    <div class="row">
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
</div>
            </div>
        @stop
