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
    <section class="p-0 top_search">
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
                                        <option value="">Select Category</option>
                                        @foreach ($business_category as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category_id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="main-search-item">
                                    <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                    <select class="form-control" name="title" id="states" required>
                                        <option value="">Select State</option>
                                        @foreach ($states as $listing_states)
                                            <option value="{{ $listing_states->state }}">{{ $listing_states->state }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <select class="form-control" name="title" id="cities" required>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $listing_cities)
                                            <option value="{{ $listing_cities->city }}">{{ $listing_cities->city }}
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
    <!-- ======================= dashboard Detail ======================== -->
    @auth
    @include('front.layout.sidebar')
    @endauth
   

    <div class="goodup-dashboard-content detail_cnt">

        <div class="dashboard-widg-bar d-block">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="dashboard-list-wraps bg-white rounded mb-4">

                        <div class="dashboard-list-wraps-body py-3 px-3">
                            <div class="dashboard-listing-wraps" id="listings-container">
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
                                                    @auth                                                   
                                                        <a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                            class="btn btn-edit mr-1"><i class="fas fa-eye me-1"></i>View
                                                        </a>
                                                    @endauth                                                     
                                                    @guest                                                  
                                                        <a href="{{ url('business-listing/details/' . $listing->id) }}"
                                                            class="btn btn-edit mr-1"><i class="fas fa-eye me-1"></i>View
                                                        </a>    
                                                    @endguest
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                   <center> 
                                       <div class="dsd-single-lst-footer p-5">
                                            <h1>
                                            <div class="emoji">😢</div>
                                            <h1>No listing here, have a favorite business that should be here!!!</h1>
                                            <p> <a class="btn btn-edit mt-3" href="{{route('front.contact')}}" class="link">Tell us about them.</a> </p></h1>
                                        </div>
                                    </center>
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         </div>
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
                            $('#listings-container').html(` <center>
                            <div class="emoji">😢</div>
                                            <h1>No listing here, have a favorite business that should be here!!!</h1>
                                            <p> <a class="btn btn-info" href="{{route('front.contact')}}" class="link">Tell us about them.</a> </p></center>`);
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