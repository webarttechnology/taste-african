@extends('front.layout.app')
@section('content')

    <!-- ======================= Searchbar Banner ======================== -->
    {{-- @foreach ($data as $listing) --}}
    <div class="featured-slick">
        <div class="featured-gallery-slide">
            @if ($listing->images && is_iterable($listing->images))
                @foreach ($listing->images as $listing_image)
                    <div class="dlf-flew">
                        <a href="{{ asset($listing_image->images) }}" class="mfp-gallery">
                            <img src="{{ asset($listing_image->images) }}" class="img-fluid mx-auto" alt="" />
                        </a>
                    </div>
                @endforeach
            @else
                <p>No images available for this listing.</p>
            @endif
        </div>


        <div class="Goodup-ops-bhri">
            <div class="Goodup-lkp-flex d-flex align-items-start justify-content-start">
                <div class="Goodup-lkp-thumb">
                    <img src="{{ asset('front/img/burger-king.png') }}" class="img-fluid" width="90" alt="" />
                </div>
                <div class="Goodup-lkp-caption ps-3">
                    <div class="Goodup-lkp-title">
                        <h1 class="text-light mb-0 ft-bold">{{ $listing->title }}</h4>
                    </div>
                    
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

                    
                    <div class="d-block mt-3">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-info"><i
                                        class="fas fa-check-circle me-1"></i>Keywords</span></div>
                            <div class="list-lioe-single ms-2 ps-3 seperate">
                                @foreach ($listing->keywords as $listing_keywords)
                                    <a href="javascript:void(0);"
                                        class="text-light ft-medium">{{ $listing_keywords->keywords }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="d-block mt-1">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-danger">Today </span>
                                @php
                                    $currentDayOfWeek = date('N');
                                    $currentDayName = strtolower(date('l'));

                                    $currentDayOpeningKey = $currentDayName . '_opening_time';
                                    $currentDayClosingKey = $currentDayName . '_closing_time';

                                    $openingTime = $listing->infos[$currentDayOpeningKey];
                                    $closingTime = $listing->infos[$currentDayClosingKey];
                                @endphp
                                <!--<span class="text-light ft-medium ms-2"> {{ $openingTime }} - {{ $closingTime }}</span>-->
                                <span class="text-light ft-medium ms-2">
                                    @if($openingTime == 'Closed' && $closingTime == 'Closed')
                                        Closed
                                    @else
                                        {{ $openingTime }} - {{ $closingTime }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Searchbar Banner ======================== -->

    <!-- ============================ Listing Details Start ================================== -->
    <section class="gray py-5 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                   @if(isset($listing->description))
                    <!-- About The Business -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details">
                                <h5 class="ft-bold fs-lg">About the Business</h5>

                                <div class="d-block mt-3">
                                    <p>{{ $listing->description }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                    <!-- Business Menu -->
                    @if (count($listing->menuitems) > 0)
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-4">
                                    <h5 class="ft-bold fs-lg">Business Menu</h5>

                                    <div class="d-block mt-3">
                                        <div class="row g-3">
                                            @foreach ($listing->menuitems as $listing_menuitems)
                                                <!-- Single Menu -->
                                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-6">
                                                    <div class="Goodup-sng-menu">
                                                        <div class="Goodup-sng-menu-thumb">
                                                            <img src="{{ asset($listing_menuitems->image) }}"
                                                                class="img-fluid" height="250px" />
                                                        </div>
                                                        <div class="Goodup-sng-menu-caption">
                                                            <h4 class="ft-medium fs-md">{{ $listing_menuitems->item_name }}
                                                            </h4>
                                                            <div class="lkji-oiyt"><span>Start From</span>
                                                                <h5 class="theme-cl ft-bold">
                                                                    {{ $listing_menuitems->price }}</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    <!-- Amenities and More -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Amenities and More</h5>

                                <div class="Goodup-all-features-list mt-3">
                                    <ul>
                                        @foreach ($listing->amenties as $listing_amenties)
                                            <li>
                                                <div class="Goodup-afl-pace"><img src="{{ asset('front/img/verify.svg') }}"
                                                        class=""
                                                        alt="" /><span>{{ $listing_amenties->amenities }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Location & Hours -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <div class="Goodup-lot-wrap d-block">
                                    <div class="row g-4">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <h5 class="ft-bold fs-lg">Location</h5>
                                            {{-- <div class="list-map-lot">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.0148908503734!2d!3d26.871267983145383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd9a9f6d1727%3A0xb87eabf63f7e4cee!2sCafe%20Repertwahr!5e0!3m2!1sen!2sin!4v1649059491407!5m2!1sen!2sin"
                                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div> --}}
                                            <div class="list-map-capt">
                                                <div class="lio-pact"><span
                                                        class="ft-medium text-info">{{ $listing->address }}</span></div>
                                                <div class="lio-pact"><span
                                                        class="hkio-oilp ft-bold">{{ $listing->city . ','. $listing->state }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <h5 class="ft-bold fs-lg">Timings</h5>
                                            <table class="table table-borderless">
                                                <tbody>
                                                     <tr>
                                                        <td>Mon</td>
                                                        <td>
                                                            @if($listing->infos->monday_opening_time == 'Closed' && $listing->infos->monday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->monday_opening_time }} - {{ $listing->infos->monday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tue</td>
                                                        <td>
                                                            @if($listing->infos->tuesday_opening_time == 'Closed' && $listing->infos->tuesday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->tuesday_opening_time }} - {{ $listing->infos->tuesday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wed</td>
                                                        <td>
                                                            @if($listing->infos->wednesday_opening_time == 'Closed' && $listing->infos->wednesday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->wednesday_opening_time }} - {{ $listing->infos->wednesday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu</td>
                                                        <td>
                                                            @if($listing->infos->thursday_opening_time == 'Closed' && $listing->infos->thursday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->thursday_opening_time }} - {{ $listing->infos->thursday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fri</td>
                                                        <td>
                                                            @if($listing->infos->friday_opening_time == 'Closed' && $listing->infos->friday_closing_time == 'Closed')
                                                                Closed
                                                            @else
                                                                {{ $listing->infos->friday_opening_time }} - {{ $listing->infos->friday_closing_time }}
                                                            @endif
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <!-- Business Inof -->
                    <div class="jb-apply-form bg-white rounded py-4 px-4 box-static mb-4">
                        <div class="uli-list-info">
                            <ul>
                               @if ($listing->website)
                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-globe"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Live Site</h5>
                                            <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a>
                                        </div>
                                    </div>
                                </li>
                                @endif 
                                
                                @if ($listing->email)
                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-envelope"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Drop a Mail</h5>
                                            <p>{{ $listing->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                @endif                               

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-phone"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Call Us</h5>
                                            <p> <a href="tel:{{ $listing->mobile }}" target="_blank" >{{ $listing->mobile }}</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Get Directions</h5>
                                            <p>{{ $listing->address }}</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Listing Details End ================================== -->

    <!-- ======================= Related Listings ======================== -->
    {{-- <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0">Related Listing</h6>
                        <h2 class="ft-bold">Recently Viewed Listing</h2>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row justify-content-center">

                <!-- Single -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="Goodup-grid-wrap">
                        <div class="Goodup-grid-upper">
                            <div class="Goodup-pos ab-left">
                                <div class="Goodup-status close me-2">Closed</div>
                            </div>
                            <div class="Goodup-grid-thumb">
                                <a href="#" class="d-block text-center m-auto"><img
                                        src="assets/img/listing/l-5.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-rating overlay">
                                <div class="Goodup-pr-average high">4.8</div>
                                <div class="Goodup-aldeio">
                                    <div class="Goodup-rates">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="Goodup-all-review"><span>46 Reviews</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="Goodup-grid-fl-wrap">
                            <div class="Goodup-caption px-3 py-2">
                                <div class="Goodup-author"><a href="#"><img src="assets/img/t-1.png"
                                            class="img-fluid circle" alt=""></a></div>
                                <h4 class="mb-0 ft-medium medium"><a href="#" class="text-dark fs-md">Pretty Woman
                                        Smart Batra</a></h4>
                                <div class="Goodup-location"><i
                                        class="fas fa-map-marker-alt me-1 theme-cl"></i>California, USA</div>
                                <div class="Goodup-middle-caption mt-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                </div>
                            </div>
                            <div class="Goodup-grid-footer py-2 px-3">
                                <div class="Goodup-ft-first">
                                    <a href="#" class="Goodup-cats-wrap">
                                        <div class="cats-ico bg-2"><i class="lni lni-slim"></i></div><span
                                            class="cats-title">Beauty &amp; Makeup</span>
                                    </a>
                                </div>
                                <div class="Goodup-ft-last">
                                    <div class="Goodup-inline">
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-envelope position-absolute"></i></button></div>
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-heart-filled position-absolute"></i></button>
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
                            <div class="Goodup-pos ab-left">
                                <div class="Goodup-status open me-2">Open</div>
                                <div class="Goodup-featured-tag">Featured</div>
                            </div>
                            <div class="Goodup-grid-thumb">
                                <a href="#" class="d-block text-center m-auto"><img
                                        src="assets/img/listing/l-6.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-rating overlay">
                                <div class="Goodup-pr-average high">4.1</div>
                                <div class="Goodup-aldeio">
                                    <div class="Goodup-rates">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="Goodup-all-review"><span>17 Reviews</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="Goodup-grid-fl-wrap">
                            <div class="Goodup-caption px-3 py-2">
                                <div class="Goodup-author"><a href="#"><img src="assets/img/t-2.png"
                                            class="img-fluid circle" alt=""></a></div>
                                <h4 class="mb-0 ft-medium medium"><a href="#" class="text-dark fs-md">The Sartaj
                                        Blue Night</a></h4>
                                <div class="Goodup-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i>San
                                    Francisco, USA</div>
                                <div class="Goodup-middle-caption mt-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                </div>
                            </div>
                            <div class="Goodup-grid-footer py-2 px-3">
                                <div class="Goodup-ft-first">
                                    <a href="#" class="Goodup-cats-wrap">
                                        <div class="cats-ico bg-3"><i class="lni lni-cake"></i></div><span
                                            class="cats-title">Night Party</span>
                                    </a>
                                </div>
                                <div class="Goodup-ft-last">
                                    <div class="Goodup-inline">
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-envelope position-absolute"></i></button></div>
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-heart-filled position-absolute"></i></button>
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
                            <div class="Goodup-pos ab-left">
                                <div class="Goodup-status open me-2">Open</div>
                            </div>
                            <div class="Goodup-grid-thumb">
                                <a href="#" class="d-block text-center m-auto"><img
                                        src="assets/img/listing/l-7.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-rating overlay">
                                <div class="Goodup-pr-average mid">3.6</div>
                                <div class="Goodup-aldeio">
                                    <div class="Goodup-rates">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="Goodup-all-review"><span>30 Reviews</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="Goodup-grid-fl-wrap">
                            <div class="Goodup-caption px-3 py-2">
                                <div class="Goodup-author"><a href="#"><img src="assets/img/t-3.png"
                                            class="img-fluid circle" alt=""></a></div>
                                <h4 class="mb-0 ft-medium medium"><a href="#" class="text-dark fs-md">Pizza Delight
                                        Cafe Shop</a></h4>
                                <div class="Goodup-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i>102
                                    Satirio, Canada</div>
                                <div class="Goodup-middle-caption mt-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                </div>
                            </div>
                            <div class="Goodup-grid-footer py-2 px-3">
                                <div class="Goodup-ft-first">
                                    <a href="#" class="Goodup-cats-wrap">
                                        <div class="cats-ico bg-4"><i class="lni lni-coffee-cup"></i></div><span
                                            class="cats-title">Coffee &amp; Bars</span>
                                    </a>
                                </div>
                                <div class="Goodup-ft-last">
                                    <div class="Goodup-inline">
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-envelope position-absolute"></i></button></div>
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-heart-filled position-absolute"></i></button>
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
                            <div class="Goodup-pos ab-left">
                                <div class="Goodup-status close me-2">Closed</div>
                                <div class="Goodup-featured-tag">Featured</div>
                            </div>
                            <div class="Goodup-grid-thumb">
                                <a href="#" class="d-block text-center m-auto"><img
                                        src="assets/img/listing/l-8.jpg" class="img-fluid" alt=""></a>
                            </div>
                            <div class="Goodup-rating overlay">
                                <div class="Goodup-pr-average poor">2.3</div>
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
                                <div class="Goodup-author"><a href="#"><img src="assets/img/t-4.png"
                                            class="img-fluid circle" alt=""></a></div>
                                <h4 class="mb-0 ft-medium medium"><a href="#" class="text-dark fs-md">The Great
                                        Allante Shop</a></h4>
                                <div class="Goodup-location"><i class="fas fa-map-marker-alt me-1 theme-cl"></i>Oliy
                                    Denver, USA</div>
                                <div class="Goodup-middle-caption mt-3">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus</p>
                                </div>
                            </div>
                            <div class="Goodup-grid-footer py-2 px-3">
                                <div class="Goodup-ft-first">
                                    <a href="#" class="Goodup-cats-wrap">
                                        <div class="cats-ico bg-5"><i class="lni lni-shopping-basket"></i></div>
                                        <span class="cats-title">Shopping Mall</span>
                                    </a>
                                </div>
                                <div class="Goodup-ft-last">
                                    <div class="Goodup-inline">
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-envelope position-absolute"></i></button></div>
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-heart-filled position-absolute"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>          

        </div>       
    </section> --}}
    <!-- ======================= Related Listings ======================== -->

@stop
