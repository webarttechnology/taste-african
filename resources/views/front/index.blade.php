<style>
     #search-results {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: white;
        font-size: 16px;
        outline: none;
    }

    #search-results option {
        padding: 8px;
        font-size: 16px;
    }
    .test a {
        display: inline;
    }
</style>


@extends('front.layout.app')
@section('content')

    <!-- ======================= Home Banner ======================== -->
    <div class="home-banner margin-bottom-0" style="background:url({{ asset('front/img/banner-6.png') }}) no-repeat #C90000;"
        data-overlay="5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="banner_caption text-center mb-5">
                        <h1 class="banner_title ft-bold mb-1">Find Great Place in Your Areas</h1>
                        <p class="fs-md ft-medium">Explore wonderful place to stay, salon, shoping, massage or visit
                            local areas.</p>
                    </div>

                    <div class="Goodup-top-cates">
                        <ul>
                            @foreach ($business_category->take(7) as $category)
                                <li><a href="{{url('category/listings/'.$category->id)}}" class="Goodup-top-cat-box">
                                        <div class="Goodup-tp-ico">
                                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                                width="40px">
                                        </div>
                                        <div class="Goodup-tp-title">
                                            <h5>{{ $category->name }}</h5>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--<input type="text" class="form-control mt-2" id="name" name="name" placeholder="Search for Resturent Name..." autocomplete="off">-->
                    <!--<div id="search-results" class="d-none"></div>-->
                    
              
                
                @include('search-listings.search')
                
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Home Banner ======================== -->

    @if(count($listings) > 0)
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <!--<h6 class="theme-cl mb-0">Featured Listings</h6>-->
                        <h2 class="ft-bold">Featured Listings</h2>
                        <!--<h2 class="ft-bold">African Taste in Los Angeles</h2>-->
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">         
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="tab-content" id="myTabsContent">
                        <!-- Places -->
                        <div class="tab-pane fade show active" id="places" role="tabpanel"
                            aria-labelledby="places-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                @foreach ($listings as $index => $listing)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="Goodup-grid-wrap">
                                            <div class="Goodup-grid-upper">
                                                <div class="Goodup-pos ab-left">
                                                    {{-- <div class="Goodup-status close me-2">Open</div> --}}
                                                </div>
                                                <div class="Goodup-grid-thumb">
                                                    @auth
                                                    <a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                        class="d-block text-center m-auto"><img
                                                            src="{{ asset($listing->images[0]->images) }}"
                                                            class="img-fluid" alt=""></a>
                                                    @endauth                                                     
                                                    @guest
                                                    <a href="{{ url('business-listing/details/' . $listing->id) }}"
                                                        class="d-block text-center m-auto"><img
                                                            src="{{ asset($listing->images[0]->images) }}"
                                                            class="img-fluid" alt=""></a>
                                                    @endguest
                                                </div>
                                                <div class="Goodup-rating overlay">
                                                    @php
                                                        $totalStars = 0;
                                                        $totalReviews = count($listing->reviews);

                                                        foreach ($listing->reviews as $review) {
                                                            $totalStars += $review->star;
                                                        }

                                                        $averageStars = $totalReviews > 0 ? round($totalStars / $totalReviews, 2) : 0;
                                                    @endphp
                                                    <div class="Goodup-pr-average high">{{ $averageStars }}</div>
                                                    <div class="Goodup-aldeio">
                                                        <div class="Goodup-rates">
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $averageStars)
                                                                    <i class="fas fa-star"></i>
                                                                @else
                                                                    <i class="far fa-star"></i>
                                                                @endif
                                                            @endfor
                                                        </div>
                                                        <div class="Goodup-all-review"><span>{{ $totalReviews }} Reviews</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-fl-wrap">
                                                <div class="Goodup-caption px-3 py-2">
                                                    <div class="Goodup-author">
                                                       
                                                            <img
                                                                src="assets/img/t-1.png" class="img-fluid circle"
                                                                alt=""></div>
                                                    <h4 class="mb-0 ft-medium medium">
                                                             <a href="{{ url('business-listing/details/' . $listing->id) }}" class="text-dark fs-md">
                                                                {{ $listing->title }}
                                                            </a>
                                                            @auth
                                                            
                                                            
                                                            <a href="{{ url('user/author-listing-details/' . $listing->id) }}" class="text-dark fs-md">
                                                                {{ $listing->title }}
                                                            </a>
                                                            @endauth
                                                        </h4>
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>{{ $listing->city }},
                                                        {{ $listing->state }}</div>
                                                    <div class="Goodup-middle-caption mt-3">
                                                        <p>{{ Illuminate\Support\Str::limit($listing->description, $limit = 50, $end = '...') }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="Goodup-grid-footer py-2 px-3">
                                                    <div class="Goodup-ft-first">
                                                        <a href="#" class="Goodup-cats-wrap">
                                                            <div class="cats-ico bg-2"><i class="lni lni-slim"></i>
                                                            </div><span
                                                                class="cats-title">{{ $listing->category->name }}</span>
                                                        </a>
                                                    </div>
                                                    <div class="Goodup-ft-last">
                                                        <div class="Goodup-inline">
                                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (($index + 1) % 4 == 0)
                                    @break
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- /Places -->


                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
    </section>
    @endif
    <!-- ======================= All Types Listing ======================== -->

    <!-- ======================= Listing Categories ======================== -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="mb-0 theme-cl">Popular Blogs</h6>
                        <h2 class="ft-bold">Browse Top Blogs</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row justify-content-center">
                @foreach ($blog as $blogs)
                     <!-- Single Item -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="gup_blg_grid_box">
                        <div class="gup_blg_grid_thumb">
                            <a href="{{ url('blog/'.$blogs->slug)  }}"><img src="{{ asset($blogs->image) }}" class="img-fluid" alt="{{ $blogs->title }}"></a>
                        </div>
                        <div class="gup_blg_grid_caption">
                            <div class="blg_tag"><span>{{ $blogs->category }}</span></div>
                            <div class="blg_title"><h4><a href="{{ url('blog/'.$blogs->slug)  }}">{{ $blogs->title }}</a></h4></div>
                            <div class="blg_desc"><p>{!! Illuminate\Support\Str::limit($blogs->description, 100) !!}</p></div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                <div class="crs_fl_first">
                                    <div class="crs_tutor">
                                        <div class="crs_tutor_thumb"><a href="javascript:void(0);"><img src="{{ asset($blogs->category_icon) }}" class="img-fluid circle" width="35" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="foot_list_info">
                                        <ul>
                                            <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">{{ $blogs->created_at->format('d F Y') }}</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
        </div>
    </section>
    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative about-section">
                            <div class="mb-2"><span
                                    class="bg-light-sky text-sky px-2 py-1 rounded">{{ $abouts[0]->about_short_title }}</span>
                            </div>
                            <h2 class="ft-bold mb-3">{{ $abouts[0]->about_long_title }}</h2>
                            <p> {!! $abouts[0]->description !!} </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="{{ asset($abouts[0]->image) }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>

        </div>
    </section>
    

    <!-- ======================= About Start ============================ -->
    <section class="space min gray" id="categories-div">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="mb-0 theme-cl">Popular Categories</h6>
                        <h2 class="ft-bold">Browse Top Categories</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row align-items-center">
                @foreach ($business_category->take(2) as $category)
                    @if ($category->listings_count  > 0)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="cats-wrap text-center">
                                <a href="{{url('category/listings/'.$category->id)}}" class="Goodup-catg-wrap">
                                    <div class="Goodup-catg-icon"><img src="{{ asset($category->image) }}"
                                            alt="{{ $category->name }}" width="40px"></div>
                                    <div class="Goodup-catg-caption">
                                        <h4 class="fs-md mb-0 ft-medium m-catrio">{{ $category->name }}</h4>
                                        <span class="text-muted">{{ $category->listings_count }} Listings</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div> 
        </div>
    </section>
    <!-- ======================= Listing Categories End ======================== -->

  

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="{{ asset($abouts[0]->image_1) }}" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative about-section">
                            <div class="mb-1"><span
                                    class="bg-light-success text-success px-2 py-1 rounded">{{ $abouts[0]->about_short_title_1 }}</span>
                            </div>
                            <h2 class="ft-bold mb-3"> {{ $abouts[0]->about_long_title_1 }}</h2>
                        <p>    The beauty of enlisting with African Food USA, is an opportunity to amplify your profile, where you are not just a name on the directory, but a joyful filled journey awaiting to be discovered by millions. At African Food USA, we're not just a directory; we are a flavorful venture awaiting to be explored.</p>
                        </div>
                    </div>

                </div>

            </div>
    </section>
    <!-- ======================= About Start ============================ -->

@include('front.newsletter')

@stop


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#name').on('keyup', function () {
            $('#search-results').removeClass('d-none');
            var name = $(this).val();

            if (name.trim() === '') {
               $('#search-results').addClass('d-none');
                return; 
            }
            $.ajax({
                url: '/smart-search',
                method: 'GET',
                data: { 'name': name },
                success: function (data) {
                    $('#search-results').html(data);
                }
            });
        });    

        // Initialize Select2 for state dropdown
        $('#states').select2({
            placeholder: "Select a State",
            allowClear: true // Option to clear selected state
        });

        // Initialize Select2 for city dropdown
        $('#cities').select2({
            placeholder: "Select a City",
            allowClear: true // Option to clear selected city
        });

        $('#states').change(function() {
            var stateId = $(this).val();
            if (stateId) {
                $.ajax({
                    url: '/get-all-cities/' + stateId, // Replace with your Laravel route for fetching cities
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#cities').empty();
                        $('#cities').append('<option value="" selected disabled>Select a City</option>');
                        $.each(data, function(key, value) {
                            $('#cities').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching cities: ' + error);
                    }
                });
            } else {
                $('#cities').empty();
                $('#cities').append('<option value="" selected disabled>Select a City</option>');
            }
        });

        // Configure Toastr options to show notifications in the center
        toastr.options = {
            "positionClass": "toast-top-center",
            "timeOut": "3000",
            "showDuration": "300",
            "hideDuration": "1000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    });

    function validateForm() {
        let isValid = false;
        $('select').each(function() {
            if ($(this).val()) {
                isValid = true;
                return false; // Break out of the loop
            }
        });

        if (!isValid) {
            toastr.error('Please select at least one option from Category, State, or City.');
        }

        return isValid;
    }
</script>
