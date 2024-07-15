<style>
       
    h1 {
        color: #333;
    }
    p {
        color: #666;
    }
    .emoji {
        font-size: 48px;
        margin-bottom: 20px;
    }
    .link {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }
    .link:hover {
        text-decoration: underline;
    }
</style>


@extends('front.layout.app')
@section('content')

<!-- =============================== Dashboard Header ========================== -->
<section class="bg-cover position-relative" style="background:url({{ asset('front/img/cover.jpg') }}) no-repeat #C90000;">
<div class="container">
    <div class="row ">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 d-flex justify-content-between">
            <div class="dashboard-head-author-clicl">
                <div class="dashboard-head-author-caption">
                    <h1>Listings </h1>
                </div>
            </div>
           <a href="{{route('front')}}" class="btn btn-primary">Back To main Page</a>
        </div>
    </div>
</div>
</section>
<!-- =============================== Dashboard Header ========================== -->


<!-- ======================= Home Search ======================== -->
<section class="p-0">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-12 col-md-12 col-12">
            <div class="Goodup-search-shadow">
                <h2 class="ft-bold">Search Vendors Here</h2>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="placesseach" role="tabpanel"
                        aria-labelledby="placesseach-tab">
                        {{-- <form class="main-search-wrap fl-wrap" action="{{ route('listings.search') }}"
                            method="POST">
                            @csrf --}}
                        <div class="main-search-item">
                            <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                            <select class="form-control" name="category" id="category" required>
                                <option value="">-- Select --</option>
                                @foreach ($business_category as $categoryItem)
                                    <option value="{{ $categoryItem->id }}"
                                        {{ $category == $categoryItem->id ? 'selected' : '' }}>
                                        {{ $categoryItem->name }}
                                    </option>
                                @endforeach
                            </select>
                            

                        </div>
                        <div class="main-search-item">
                            <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                            <select class="form-control" name="title" id="states" required>
                                <option value="">-- Select --</option>
                                @foreach ($states as $listing_states)
                                    <option value="{{ $listing_states->state }}" 
                                        {{ $state == $listing_states->state ? 'selected' : '' }}>
                                        {{ $listing_states->state }}
                                    </option>
                                @endforeach
                            </select>
                            <select class="form-control" name="title" id="cities" required>
                                <option value="">-- Select --</option>
                                @foreach ($cities as $listing_cities)
                                    <option value="{{ $listing_cities->city }}"
                                        {{ $city == $listing_cities->city ? 'selected' : '' }}>
                                        {{ $listing_cities->city }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="main-search-button">
                                <button class="btn full-width theme-bg text-white" type="submit">Search</button>
                            </div> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- ======================= Home Search End ======================== -->


<div class="goodup-dashboard-wrap gray px-4 py-5">
<a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false"
    aria-controls="MobNav"> <i class="fas fa-bars me-2"></i>Dashboard Navigation
</a>
{{-- <div class="collapse" id="MobNav">
    <div class="goodup-dashboard-nav sticky-top">
        <div class="goodup-dashboard-inner">
            <ul data-submenu-title="Main Navigation">
                <li class="">
                    <a href="#"><i class="lni lni-files me-2"></i>All Listings </a>
                </li>
            </ul>
        </div>
    </div>
</div> --}}  
<div class="goodup-dashboard-content">    
        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="dashboard-list-wraps bg-white rounded mb-4">
                        <div class="dashboard-list-wraps-body py-3 px-3">
                            <div class="dashboard-listing-wraps" id="listings-container">
                                @if (count($listings) > 0)
                                    @foreach ($listings as $listing)
                                        <!-- Single Listing Item -->
                                        <div class="dsd-single-listing-wraps">
                                            <div class="dsd-single-lst-thumb">
                                                @foreach ($listing->images->take(1) as $listing_image)
                                                    <a href="{{ $listing_image->images }}" class="mfp-gallery">
                                                        <img src="{{ $listing_image->images }}" class="img-fluid mx-auto" alt="{{ $listing->title }}" />
                                                    </a>
                                                @endforeach
                                            </div>
                                            <div class="dsd-single-lst-caption">
                                                <div class="dsd-single-lst-title">
                                                    <div class="col-6">
                                                        <h5>{{ $listing->title }}</h5>
                                                    </div>
                                                    @if ($listing->approval == 'hide')
                                                        <small style="color: red; font-size:22px;">Inactive</small>
                                                    @endif
                                                </div>
                                                <span class="agd-location"><i
                                                        class="lni lni-map-marker me-1"></i>{{ $listing->city }} </span>

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
                                                    <a href="{{ url('business-listing/details/' . $listing->id) }}" class="btn btn-view mr-1">
                                                        <i class="fas fa-eye me-1"></i>View
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <center>                                           
                                        @guest
                                        <div class="emoji">😢</div>
                                        <h1>No listing here, have a favorite business that should be here!!!</h1>
                                        <p> <a class="btn btn-info" href="{{route('front.contact')}}" class="link">Tell us about them.</a> </p>
                                        @endguest
                                        @auth
                                        <div class="emoji">😢</div>
                                        <h1>No listing here, have a favorite business that should be here!!!</h1>
                                        <p> <a class="btn btn-info" href="{{route('front.contact')}}" class="link">Tell us about them.</a> </p>
                                        @endauth
                                       
                                    <center>
                                @endif
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <ul class="pagination">
                                            {{-- {{ $listings->links('vendor.pagination.bootstrap-4') }} --}}
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

<a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>

@stop

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // AJAX call for combined category, state, and city search
        $('#category, #states, #cities').change(function() {
            $('#listings-container').empty();
            var categoryId = $('#category').val();
            var state = $('#states').val();
            var city = $('#cities').val();

            $.ajax({
                url: '{{ route('listings.search') }}', // Replace with your actual route
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Include the CSRF token
                    category_id: categoryId,
                    state: state,
                    city: city
                },
                success: function(response) {
                    console.log(response);
                    if (response.html === '') {
                        $('#listings-container').html('<p>No listings found for this category.</p>');
                    } else {
                        $('#listings-container').html(response.html);
                    }
                },
                error: function(xhr) {
                    // Handle error - you can display an error message to the user
                    console.error(xhr.responseText);
                }
            });
        });

});

</script>