@extends('front.layout.app')
@section('content')

    <!-- ======================= Home Banner ======================== -->
    <div class="home-banner margin-bottom-0" style="background:url({{ asset('front/img/banner-6.jpg') }}) no-repeat #C90000;"
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
                            @foreach ($business_category as $category)
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
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Home Banner ======================== -->

    <!-- ======================= Home Search ======================== -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-12 col-md-12 col-12">

                    <div class="Goodup-search-shadow">

                        <ul class="nav nav-tabs search-tab mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="placesseach-tab" data-bs-toggle="tab"
                                    data-bs-target="#placesseach" type="button" role="tab" aria-controls="placesseach"
                                    aria-selected="true">Places</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="carseach-tab" data-bs-toggle="tab" data-bs-target="#carseach"
                                    type="button" role="tab" aria-controls="carseach"
                                    aria-selected="false">Car</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="realseach-tab" data-bs-toggle="tab" data-bs-target="#realseach"
                                    type="button" role="tab" aria-controls="realseach" aria-selected="false">Real
                                    Estate</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="eventseach-tab" data-bs-toggle="tab"
                                    data-bs-target="#eventseach" type="button" role="tab" aria-controls="eventseach"
                                    aria-selected="false">Events</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="placesseach" role="tabpanel"
                                aria-labelledby="placesseach-tab">
                                <form class="main-search-wrap fl-wrap">
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                        <input type="text" class="form-control radius"
                                            placeholder="What are you looking for?" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="San Francisco, CA" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                        <select class="form-control">
                                            <option value="">Choose Category</option>
                                            <option value="1">Restaurants</option>
                                            <option value="2">Information Technology</option>
                                            <option value="3">Hotel Booking</option>
                                            <option value="4">Cafe & Night Bars</option>
                                            <option value="5">Healthcare/Pharma</option>
                                            <option value="6">Wedding & Marriage</option>
                                            <option value="7">Finance/Insurance</option>
                                        </select>
                                    </div>
                                    <div class="main-search-button">
                                        <button class="btn full-width theme-bg text-white" type="button">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="carseach" role="tabpanel" aria-labelledby="carseach-tab">
                                <form class="main-search-wrap fl-wrap">
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                        <input type="text" class="form-control radius"
                                            placeholder="car type, car name" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="Price" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                        <select class="form-control">
                                            <option value="">Choose Car Brand</option>
                                            <option value="1">Tata Nexon</option>
                                            <option value="2">BMW Brand</option>
                                            <option value="3">Maruti Suzuki</option>
                                            <option value="4">Hundai Company</option>
                                            <option value="5">Kia Company</option>
                                            <option value="6">Mahindra Company</option>
                                        </select>
                                    </div>
                                    <div class="main-search-button">
                                        <button class="btn full-width theme-bg text-white" type="button">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="realseach" role="tabpanel" aria-labelledby="realseach-tab">
                                <form class="main-search-wrap fl-wrap">
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                        <input type="text" class="form-control radius"
                                            placeholder="Job Title, Keyword or Company" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="Location or Zip Code" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                        <select class="form-control">
                                            <option value="">Property Type</option>
                                            <option value="1">Homes & Villa</option>
                                            <option value="2">Apartment</option>
                                            <option value="3">Condos</option>
                                            <option value="4">Space & Office</option>
                                            <option value="5">Town Hall</option>
                                            <option value="6">Buildings</option>
                                        </select>
                                    </div>
                                    <div class="main-search-button">
                                        <button class="btn full-width theme-bg text-white" type="button">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="eventseach" role="tabpanel" aria-labelledby="eventseach-tab">
                                <form class="main-search-wrap fl-wrap">
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-keyboard"></i></span>
                                        <input type="text" class="form-control radius"
                                            placeholder="Job Title, Keyword or Company" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="Location or Zip Code" />
                                    </div>
                                    <div class="main-search-item">
                                        <span class="search-tag"><i class="lni lni-briefcase"></i></span>
                                        <select class="form-control">
                                            <option value="">Choose Categories</option>
                                            <option value="1">Festaurants</option>
                                            <option value="2">Information Technology</option>
                                            <option value="3">Cloud Computing</option>
                                            <option value="4">Engineering Services</option>
                                            <option value="5">Healthcare/Pharma</option>
                                            <option value="6">Telecom/ Internet</option>
                                            <option value="7">Finance/Insurance</option>
                                        </select>
                                    </div>
                                    <div class="main-search-button">
                                        <button class="btn full-width theme-bg text-white" type="button">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Home Search End ======================== -->

    <!-- ======================= All Types Listing ======================== -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0">Featured Listings</h6>
                        <h2 class="ft-bold">African Taste in Los Angeles</h2>
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
                                @foreach ($listings as $listing)
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                        <div class="Goodup-grid-wrap">
                                            <div class="Goodup-grid-upper">
                                                <div class="Goodup-pos ab-left">
                                                    <div class="Goodup-status close me-2">Open</div>
                                                </div>
                                                <div class="Goodup-grid-thumb">
                                                    <a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                        class="d-block text-center m-auto"><img
                                                            src="{{ asset($listing->images[0]->images) }}"
                                                            class="img-fluid" alt=""></a>
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
                                                    <div class="Goodup-author"><a href="#"><img
                                                                src="assets/img/t-1.png" class="img-fluid circle"
                                                                alt=""></a></div>
                                                    <h4 class="mb-0 ft-medium medium"><a
                                                            href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                            class="text-dark fs-md">{{ $listing->title }}</a></h4>
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>{{ $listing->city }},
                                                        {{ $listing->state }}</div>
                                                    <div class="Goodup-middle-caption mt-3">
                                                        <p>{{ Illuminate\Support\Str::limit($listing->description, $limit = 150, $end = '...') }}
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
                                                                        class="lni lni-envelope position-absolute"></i></button>
                                                            </div>
                                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- /Places -->

                        <!-- Events -->
                        <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-1.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Amagansett Go Around</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>Meltron Silver, UK
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Sport & Football
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">9 Fab 09:30 - 10:30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-2.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Amateur Barber Night</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>California, USA</div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Sport & Football
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">10 Fab 09:00 - 10:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-3.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Apex Muker Trys</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>Montreal, Australia
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        It Services
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">12 Apr 14:30 - 15:45</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-4.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Ragni Book Launching</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>Old Denver, USA</div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Education
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">18 Oct 10:00 - 11:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-5.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Madhu Spa Salon</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>104 Washington, USA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Spa & Salon
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">12 Sep 10:00 - 10:30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-6.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Blue Light Cafe</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>California, Canada
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Party & Cafe
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">17 Jul 12:00 - 14:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-7.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Allante Mall Opening</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>Liverpool, London
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Shopping
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">10 June 10:00 - 11:30</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/listing/l-8.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-overlay-caps">
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-white fs-md">Antisocial Darwinism</a></h4>
                                                <div class="Goodup-location text-white"><i
                                                        class="fas fa-map-marker-alt me-1"></i>San Francisco, USA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-grid-footer py-3 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-catsin">
                                                        Social Network
                                                    </div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <span class="small">15 May 10:00 - 11:00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Events -->

                        <!-- Doctor -->
                        <div class="tab-pane fade" id="doctor" role="tabpanel" aria-labelledby="doctor-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-1.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Heather D. Birch</a>
                                                </h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-2.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Joyce G. Howell</a>
                                                </h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-3.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Juliana J.
                                                        GGoodupry</a></h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-4.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Elizabeth J.
                                                        Vergara</a></h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-5.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Michelle R.
                                                        McIntyre</a></h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-6.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Mary F.
                                                        Holliday</a>
                                                </h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-7.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Dennis K. Bales</a>
                                                </h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="doctor-grid-view">
                                        <div class="doctor-grid-thumb">
                                            <a href="#"><img src="assets/img/doc-8.jpg" class="img-fluid"
                                                    alt=""></a>
                                        </div>

                                        <div class="doctor-grid-caption">
                                            <div class="doc-title-wrap">
                                                <h4 class="doc-title verified"><a href="#">Dr. Donald S.
                                                        Herring</a></h4>
                                            </div>
                                            <span class="doc-designation">MBBS, MS - General Surgery, MCh</span>

                                            <div class="doc-inner-wrap">
                                                <div class="doc-ratting-boxes">
                                                    <ul class="doc ratting-view">
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star filled"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <span class="doctor-review-list">(44 Reviews)</span>
                                                </div>
                                                <div class="doc-location"><i
                                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>G87P,
                                                    Birmingham, UK</div>
                                            </div>
                                        </div>

                                        <div class="doctor-grid-footer">
                                            <div class="doc-foot-first"><span class="av-status available">Available
                                                    Today</span></div>
                                            <div class="doc-foot-last"><a href="#" class="btn doc-book-btn">Book
                                                    Now</a></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Doctor -->

                        <!-- car -->
                        <div class="tab-pane fade" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-1.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>30,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Hyundai</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta</a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Petrol</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2018</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>20
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>500 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-2.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>22,500</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#" class="cats-1">Tata</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Diesel</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2017</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>22
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>512 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-3.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>40,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Maruti</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta</a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Petrol</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2013</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>26
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>700 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-4.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>32,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Hyundai</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Diesel</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2017</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>18
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>450 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-5.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>50,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Nexon</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta</a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Petrol</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2020</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>22
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>600 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-6.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>35,500</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Maruti</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta</a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Diesel</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2012</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>21
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>520 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-7.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>25,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Tata</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Diesel</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2016</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>24
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>450 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/car/c-8.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>34,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-cates multi"><a href="#"
                                                        class="cats-1">Maruti</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">New Hyundai Creta</a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-gas-pump"></i><span>Petrol</span>
                                                            </li>
                                                            <li><i class="far fa-calendar-alt"></i><span>2019</span>
                                                            </li>
                                                            <li><i class="fas fa-blender-phone"></i><span>23
                                                                    KM/L</span></li>
                                                            <li><i class="fab fa-accusoft"></i><span>540 CC</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /car -->

                        <!-- Real -->
                        <div class="tab-pane fade" id="real" role="tabpanel" aria-labelledby="real-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status open me-2">For Rent</div>
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-1.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>30,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-1.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.8</span><a href="#"
                                                        class="cats-1">Apartment</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Liverpool London, LC345AC<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                                        Francisco, USA</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status me-2">For Sale</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-2.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>44,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-2.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.7</span><a href="#"
                                                        class="cats-1">Condos</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Montreal Canada, HAQC445<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>Liverpool,
                                                        London UK</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status open me-2">For Rent</div>
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-3.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>37,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-3.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.5</span><a href="#"
                                                        class="cats-1">Villa</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Huwai Denever USA, AWE789O<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>California,
                                                        Canada</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status me-2">For Sale</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-4.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>45,000K</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-4.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.9</span><a href="#"
                                                        class="cats-1">House</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Alameda Canada, SHQT45O<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>104
                                                        Washington, USA</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status open me-2">For Rent</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-5.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>35,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-5.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.6</span><a href="#"
                                                        class="cats-1">Building</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Henever Canada, QWUI98<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>Old
                                                        Denver, USA</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status open me-2">For Rent</div>
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-6.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>42,000</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-6.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.2</span><a href="#"
                                                        class="cats-1">Apartment</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Barghimbar USA, ERIO098<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>Montreal,
                                                        Australia</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status me-2">For Sale</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-7.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>31,950</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-7.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.5</span><a href="#"
                                                        class="cats-1">Villa</a></div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Burbank Canada, ECH15462<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>California,
                                                        USA</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status open me-2">For Rent</div>
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/real/r-1.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-prt-price">$<span>46,999</span></div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-author"><a href="#"><img
                                                            src="assets/img/t-8.png" class="img-fluid circle"
                                                            alt=""></a></div>
                                                <div class="Goodup-cates multi"><span class="Goodup-apr-rates"><i
                                                            class="fas fa-star"></i>4.7</span><a href="#"
                                                        class="cats-1">Work Space</a>
                                                </div>
                                                <h4 class="mb-0 ft-medium medium"><a href="#"
                                                        class="text-dark fs-md">Emeryville Green Vally<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-middle-caption mt-2">
                                                    <div class="Goodup-options-list">
                                                        <ul class="no-list-style">
                                                            <li><i class="fas fa-bed"></i><span>3 Beds</span></li>
                                                            <li><i class="fas fa-bath"></i><span>2 Baths</span></li>
                                                            <li><i class="fas fa-clone"></i><span>1.2k sqft</span>
                                                            </li>
                                                            <li><i class="fas fa-calendar"></i><span>3 Days
                                                                    Ago</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Goodup-grid-footer py-2 px-3">
                                                <div class="Goodup-ft-first">
                                                    <div class="Goodup-location"><i
                                                            class="fas fa-map-marker-alt me-1 theme-cl"></i>Meltron
                                                        Silver, UK</div>
                                                </div>
                                                <div class="Goodup-ft-last">
                                                    <div class="Goodup-inline">
                                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                                    class="lni lni-envelope position-absolute"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Real -->

                        <!-- Hotels -->
                        <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                            <div class="row justify-content-center">

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/1.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status offer me-2">-20% Off</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/2.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/3.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/4.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status offer me-2">-20% Off</div>
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/5.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status offer me-2">-20% Off</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/6.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-featured-tag">Featured</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/7.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="Goodup-grid-wrap">
                                        <div class="Goodup-grid-upper">
                                            <div class="Goodup-bookmark-btn"><button type="button"><i
                                                        class="lni lni-heart-filled position-absolute"></i></button>
                                            </div>
                                            <div class="Goodup-pos ab-left">
                                                <div class="Goodup-status offer me-2">-20% Off</div>
                                            </div>
                                            <div class="Goodup-grid-thumb">
                                                <a href="#" class="d-block text-center m-auto"><img
                                                        src="assets/img/rooms/8.jpg" class="img-fluid"
                                                        alt=""></a>
                                            </div>
                                            <div class="Goodup-rating overlay">
                                                <div class="Goodup-pr-average high">4.2</div>
                                                <div class="Goodup-aldeio">
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <div class="Goodup-all-review"><span>42 Reviews</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-fl-wrap">
                                            <div class="Goodup-caption px-3 py-2">
                                                <div class="Goodup-room-price"><span>$199</span>per night</div>
                                                <h4 class="mb-0 ft-medium medium mb-0"><a href="#"
                                                        class="text-dark fs-md">3112 Comfort Deluxe Space<span
                                                            class="verified-badge"><i
                                                                class="fas fa-check-circle"></i></span></a></h4>
                                                <div class="Goodup-distance">1.5 km to Town Center</div>
                                                <div class="Goodup-middle-caption mt-3">
                                                    <div class="Goodup-facilities-wrap Goodup-flx mb-0">
                                                        <div class="Goodup-facility-list">
                                                            <ul class="no-list-style">
                                                                <li><i class="fas fa-wifi"></i></li>
                                                                <li><i class="fas fa-swimming-pool"></i></li>
                                                                <li><i class="fas fa-parking"></i></li>
                                                                <li><i class="fas fa-dog"></i></li>
                                                                <li><i class="fas fa-fan"></i></li>
                                                                <li><i class="fas fa-wine-glass-alt"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="Goodup-booking-button">
                                                        <a href="#" class="Goodup-btn-book">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Hotels -->

                        <!-- jobs -->
                        <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                            <div class="row justify-content-center">

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-1.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">Application Designer</a>
                                                </h4>
                                                <div class="_times_jb">$70k - 80k</div>
                                                <div class="_jb_types fulltime_lite">Full Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">Just now</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-2.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">IOS
                                                        Developer</a></h4>
                                                <div class="_times_jb">$55k - 80k</div>
                                                <div class="_jb_types parttime_lite">Part Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">10 min ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-3.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">Web
                                                        Developer</a></h4>
                                                <div class="_times_jb">$50k - 60k</div>
                                                <div class="_jb_types internship_lite">Internship</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">02 min ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-4.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">Product
                                                        Designer</a></h4>
                                                <div class="_times_jb">$40k - 60k</div>
                                                <div class="_jb_types parttime_lite">Part Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">05 min ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-5.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">UI/UX
                                                        Designer</a></h4>
                                                <div class="_times_jb">$60k - 80k</div>
                                                <div class="_jb_types remote">Remote</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">10 min ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-6.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">SEO
                                                        Expert</a></h4>
                                                <div class="_times_jb">$30k - 50k</div>
                                                <div class="_jb_types fulltime_lite">Full Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">20 min ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-7.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">Magento
                                                        Developer</a></h4>
                                                <div class="_times_jb">$50k - 60k</div>
                                                <div class="_jb_types internship_lite">Internship</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">1 hour ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-8.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">WordPress Developer</a>
                                                </h4>
                                                <div class="_times_jb">$40k - 60k</div>
                                                <div class="_jb_types fulltime_lite">Full Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">6 hour ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-9.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">PHP
                                                        Developer</a></h4>
                                                <div class="_times_jb">$25k - 40k</div>
                                                <div class="_jb_types remote">Remote</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">3 hour ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-10.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">Content
                                                        Writer</a></h4>
                                                <div class="_times_jb">$30k - 40k</div>
                                                <div class="_jb_types fulltime_lite">Full Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">5 hour ago</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Jobs -->
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                                    <div class="_jb_list72">
                                        <div class="jobs-like bookmark">
                                            <label class="toggler toggler-danger"><input type="checkbox"><i
                                                    class="fa fa-bookmark"></i></label>
                                        </div>
                                        <div class="_jb_list72_flex">
                                            <div class="_jb_list72_first">
                                                <div class="_jb_list72_yhumb">
                                                    <img src="assets/img/c-11.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="_jb_list72_last">
                                                <h4 class="_jb_title"><a href="#">UI/UX
                                                        Designer</a></h4>
                                                <div class="_times_jb">$30k - 55k</div>
                                                <div class="_jb_types parttime_lite">Part Time</div>
                                            </div>
                                        </div>
                                        <div class="_jb_list72_foot">
                                            <div class="_times_jb">7 hour ago</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /jobs -->

                    </div>
                </div>

            </div>
            <!-- /row -->

        </div>
    </section>
    <!-- ======================= All Types Listing ======================== -->

    <!-- ======================= Listing Categories ======================== -->
    <section class="space min gray">
        <div class="container">

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
                @foreach ($business_category as $category)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- ======================= Listing Categories End ======================== -->

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-2"><span
                                    class="bg-light-sky text-sky px-2 py-1 rounded">{{ $abouts[0]->about_short_title }}</span>
                            </div>
                            <h2 class="ft-bold mb-3">{{ $abouts[0]->about_long_title }}</h2>
                            <p> {{ $abouts[0]->description }} </p>
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

    <!-- ======================= About Start ============================ -->
    <section class="space pt-0">
        <div class="container">

            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <div class="position-relative">
                        <img src="{{ asset($abouts[0]->image_1) }}" class="img-fluid" alt="" />
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-1"><span
                                    class="bg-light-success text-success px-2 py-1 rounded">{{ $abouts[0]->about_short_title_1 }}</span>
                            </div>
                            <h2 class="ft-bold mb-3"> {{ $abouts[0]->about_long_title_1 }}</h2>
                            {!! $abouts[0]->description_1 !!}
                        </div>
                    </div>

                </div>

            </div>
    </section>
    <!-- ======================= About Start ============================ -->

    <!-- ============================ Pricing Start ==================================== -->
    {{-- <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0">Our Pricing</h6>
                        <h2 class="ft-bold">Choose Your Package</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="Goodup-price-wrap">
                        <div class="Goodup-author-header">
                            <div class="Goodup-price-currency">
                                <h3><span class="Goodup-new-price">$<del>49</del></span><span
                                        class="Goodup-old-price">$<del>149</del></span></h3>
                            </div>
                            <div class="Goodup-price-title">
                                <div class="Goodup-price-tlt">
                                    <h4>Personal</h4>
                                </div>
                                <div class="Goodup-price-ribbon"><span class="Goodup-ribbon-offer all">50%
                                        Off</span></div>
                            </div>
                            <div class="Goodup-price-subtitle">Best Choice for Individuals </div>
                        </div>
                        <div class="Goodup-price-body">
                            <ul class="price__features">
                                <li><i class="fa fa-angle-right"></i>Lifetime Bandwidth Usage</li>
                                <li><i class="fa fa-angle-right"></i>6 Months Support &amp; Updates</li>
                                <li><i class="fa fa-angle-right"></i>10 Website License</li>
                                <li><i class="fa fa-angle-right"></i>Quickstart Included</li>
                                <li><i class="fa fa-angle-right"></i>Access to Plugins &amp; Theme</li>
                                <li><i class="fa fa-angle-right"></i>Branding/Copyright Removal</li>
                            </ul>
                        </div>
                        <div class="Goodup-price-bottom">
                            <a class="Goodup-price-btn" href="#"><i class="fas fa-utensils"></i> Purchase
                                Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="Goodup-price-wrap">
                        <div class="Goodup-author-header">
                            <div class="Goodup-price-currency">
                                <h3><span class="Goodup-new-price theme-cl">$<del>129</del></span><span
                                        class="Goodup-old-price">$<del>199</del></span></h3>
                            </div>
                            <div class="Goodup-price-title">
                                <div class="Goodup-price-tlt">
                                    <h4>Platinum</h4>
                                </div>
                                <div class="Goodup-price-ribbon"><span class="Goodup-ribbon-offer">50% Off</span>
                                </div>
                            </div>
                            <div class="Goodup-price-subtitle">Best Choice for Individuals </div>
                        </div>
                        <div class="Goodup-price-body">
                            <ul class="price__features">
                                <li><i class="fa fa-angle-right"></i>Lifetime Bandwidth Usage</li>
                                <li><i class="fa fa-angle-right"></i>12 Months Support &amp; Updates</li>
                                <li><i class="fa fa-angle-right"></i>20 Website License</li>
                                <li><i class="fa fa-angle-right"></i>Quickstart Included</li>
                                <li><i class="fa fa-angle-right"></i>Access to Plugins &amp; Theme</li>
                                <li><i class="fa fa-angle-right"></i>Branding/Copyright Removal</li>
                            </ul>
                        </div>
                        <div class="Goodup-price-bottom">
                            <a class="Goodup-price-btn active" href="#"><i class="fas fa-utensils"></i>
                                Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="Goodup-price-wrap">
                        <div class="Goodup-author-header">
                            <div class="Goodup-price-currency">
                                <h3><span class="Goodup-new-price">$<del>149</del></span><span
                                        class="Goodup-old-price">$<del>249</del></span></h3>
                            </div>
                            <div class="Goodup-price-title">
                                <div class="Goodup-price-tlt">
                                    <h4>Standard</h4>
                                </div>
                                <div class="Goodup-price-ribbon"><span class="Goodup-ribbon-offer all">50%
                                        Off</span></div>
                            </div>
                            <div class="Goodup-price-subtitle">Best Choice for Individuals </div>
                        </div>
                        <div class="Goodup-price-body">
                            <ul class="price__features">
                                <li><i class="fa fa-angle-right"></i>Lifetime Bandwidth Usage</li>
                                <li><i class="fa fa-angle-right"></i>Lifetime Support &amp; Updates</li>
                                <li><i class="fa fa-angle-right"></i>50 Website License</li>
                                <li><i class="fa fa-angle-right"></i>Quickstart Included</li>
                                <li><i class="fa fa-angle-right"></i>Access to Plugins &amp; Theme</li>
                                <li><i class="fa fa-angle-right"></i>Branding/Copyright Removal</li>
                            </ul>
                        </div>
                        <div class="Goodup-price-bottom">
                            <a class="Goodup-price-btn" href="#"><i class="fas fa-utensils"></i> Purchase
                                Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
    <!-- ============================ Pricing End ==================================== -->

    <!-- ======================= Newsletter Start ============================ -->
    <section class="space bg-cover" style="background:#03343b url(assets/img/landing-bg.png) no-repeat;">
        <div class="container py-5">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="text-light mb-0">Subscribr Now</h6>
                        <h2 class="ft-bold text-light">Get All Updates & Advance Offers</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-7 col-lg-10 col-md-12 col-sm-12 col-12">
                    <form class="bg-white rounded p-1" action="{{route ('subscribe_store')}}" method="POST">
                        @csrf
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="email" class="form-control b-0"
                                        placeholder="Enter Your Email Address" name="email">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width btn-height theme-bg text-light fs-md"
                                        type="submit">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- ======================= Newsletter Start ============================ -->

@stop
