@extends('front.layout.app')
@section('content')

    <!-- ======================= Searchbar Banner ======================== -->
    {{-- @foreach ($data as $listing) --}}
    <div class="featured-slick">
        <div class="featured-gallery-slide">
            <div class="dlf-flew">
                @if ($listing->images && is_iterable($listing->images))
                    @foreach ($listing->images as $image)
                        <a href="{{ asset($image->images) }}" class="mfp-gallery">
                            <img src="{{ asset($image->images) }}" class="img-fluid mx-auto" alt="" />
                        </a>
                    @endforeach
                @else
                    <p>No images available for this listing.</p>
                @endif
            </div>
        </div>



        <div class="ftl-diope">
            <a href="javascript:void(0);" class="btn bg-white text-dark ft-medium rounded">See 20+ Photos</a>
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
                    <div class="Goodup-ft-first">
                        <div class="Goodup-rating">
                            @php
                                $totalStars = 0;
                                $totalReviews = count($review);

                                foreach ($review as $reviews) {
                                    $totalStars += $reviews->star;
                                }

                                $averageStars = $totalReviews > 0 ? round($totalStars / $totalReviews, 2) : 0;
                            @endphp
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
                            <span class="ft-medium text-light">{{ $totalReviews }} Reviews</span>
                        </div>
                    </div>
                    <div class="d-block mt-3">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-info"><i
                                        class="fas fa-check-circle me-1"></i>Keywords</span></div>
                            <div class="list-lioe-single ms-2 ps-3 seperate">
                                @foreach ($listing->keywords as $listing_keywords)
                                    <a href="javascript:void(0);"
                                        class="text-light ft-medium">{{ $listing_keywords->keywords }}</a>,
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="d-block mt-1">
                        <div class="list-lioe">
                            <div class="list-lioe-single"><span class="ft-medium text-danger">Today</span>
                                @php
                                    $currentDayOfWeek = date('N');
                                    $currentDayName = strtolower(date('l'));

                                    $currentDayOpeningKey = $currentDayName . '_opening_time';
                                    $currentDayClosingKey = $currentDayName . '_closing_time';

                                    $openingTime = $listing->infos[$currentDayOpeningKey];
                                    $closingTime = $listing->infos[$currentDayClosingKey];
                                @endphp

                                <span class="text-light ft-medium ms-2">
                                    {{ $openingTime }} - {{ $closingTime }}
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

                    <!-- Business Menu -->
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
                                                        <img src="{{ asset($listing_menuitems->image) }}" class="img-fluid"
                                                            alt="" />
                                                    </div>
                                                    <div class="Goodup-sng-menu-caption">
                                                        <h4 class="ft-medium fs-md">{{ $listing_menuitems->item_name }}
                                                        </h4>
                                                        <div class="lkji-oiyt"><span>Start From</span>
                                                            <h5 class="theme-cl ft-bold">{{ $listing_menuitems->price }}
                                                            </h5>
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


                    <!-- Recommended Reviews -->
                    @if (count($review) > 0)
                        <div class="bg-white rounded mb-4">
                            <div class="jbd-01 px-4 py-4">
                                <div class="jbd-details mb-4">
                                    <h5 class="ft-bold fs-lg">Recommended Reviews</h5>
                                    <div class="reviews-comments-wrap">
                                        @foreach ($review as $reviews)
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="{{ asset('front/img/user.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                                <div class="reviews-comments-item-text">
                                                    <h4><a href="#">{{ $reviews->name }}</a><span
                                                            class="reviews-comments-item-date"><i
                                                                class="ti-calendar theme-cl me-1"></i>{{ $reviews->created_at->format('d M Y') }}
                                                        </span>
                                                    </h4>

                                                    @if ($reviews->star == 1)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 2)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 3)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 4)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                    @elseif ($reviews->star == 5)
                                                        <div class="listing-rating high">
                                                            <i class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i><i
                                                                class="fas fa-star active"></i>
                                                        </div>
                                                    @else
                                                        <!-- Handle the case where $reviews->star is not 1, 2, 3, 4, or 5 -->
                                                    @endif

                                                    <div class="clearfix"></div>
                                                    <p>" {{ $reviews->review }} "</p>
                                                    {{-- <div class="pull-left reviews-reaction">
                        <a href="#" class="comment-like active"><i class="ti-thumb-up"></i>
                            12</a>
                        <a href="#" class="comment-dislike active"><i class="ti-thumb-down"></i> 1</a>
                        <a href="#" class="comment-love active"><i class="ti-heart"></i>
                            07</a>
                    </div> --}}
                                                </div>
                                            </div>
                                        @endforeach


                                        <!--reviews-comments-item end-->

                                        {{-- <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span class="fas fa-arrow-circle-right"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">18</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span class="fas fa-arrow-circle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul> --}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    <!-- Location & Hours -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Location & Hours</h5>
                                <div class="Goodup-lot-wrap d-block">
                                    <div class="row g-4">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="list-map-lot">
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.0148908503734!2d80.97350361499701!3d26.871267983145383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd9a9f6d1727%3A0xb87eabf63f7e4cee!2sCafe%20Repertwahr!5e0!3m2!1sen!2sin!4v1649059491407!5m2!1sen!2sin"
                                                    width="100%" height="250" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                            <div class="list-map-capt">
                                                <div class="lio-pact"><span
                                                        class="ft-medium text-info">{{ $listing->address }}</span></div>
                                                <div class="lio-pact"><span
                                                        class="hkio-oilp ft-bold">{{ $listing->city . $listing->state }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <td>Mon</td>
                                                        <td>{{ $listing->infos->monday_opening_time }} -
                                                            {{ $listing->infos->monday_opening_time }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tue</td>
                                                        <td>{{ $listing->infos->tuesday_opening_time }} -
                                                            {{ $listing->infos->tuesday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wed</td>
                                                        <td>{{ $listing->infos->wednesday_opening_time }} -
                                                            {{ $listing->infos->wednesday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Thu</td>
                                                        <td>{{ $listing->infos->thursday_opening_time }} -
                                                            {{ $listing->infos->thursday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Fri</td>
                                                        <td>{{ $listing->infos->friday_opening_time }} -
                                                            {{ $listing->infos->friday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sat</td>
                                                        <td>{{ $listing->infos->saturday_opening_time }} -
                                                            {{ $listing->infos->saturday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sun</td>
                                                        <td>{{ $listing->infos->sunday_opening_time }} -
                                                            {{ $listing->infos->sunday_closing_time }}</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Drop Your Review -->
                    <div class="bg-white rounded mb-4">
                        <div class="jbd-01 px-4 py-4">
                            <div class="jbd-details mb-4">
                                <h5 class="ft-bold fs-lg">Drop Your Review</h5>
                                <div class="review-form-box form-submit mt-3">
                                    <form action="{{ route('user.review') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1">Choose Rate</label>
                                                    <select class="form-control rounded" name="star">
                                                        <option>Choose Rating</option>
                                                        <option value="1">1 Star</option>
                                                        <option value="2">2 Star</option>
                                                        <option value="3">3 Star</option>
                                                        <option value="4">4 Star</option>
                                                        <option value="5">5 Star</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1">Name</label>
                                                    <input name="list_id" type="hidden" value="{{ $listing->id }}">
                                                    <input class="form-control rounded" name="name" type="text"
                                                        placeholder="Your Name">
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1">Email</label>
                                                    <input class="form-control rounded" name="email" type="email"
                                                        placeholder="Your Email">
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="ft-medium small mb-1">Review</label>
                                                    <textarea class="form-control rounded ht-140" name="review" placeholder="Review"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn theme-bg text-light rounded">Submit
                                                        Review</button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
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

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-globe"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Live Site</h5>
                                            <p>{{ $listing->website }}</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-envelope"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Drop a Mail</h5>
                                            <p>{{ $listing->email }}</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="list-uiyt">
                                        <div class="list-iobk"><i class="fas fa-phone"></i></div>
                                        <div class="list-uiyt-capt">
                                            <h5>Call Us</h5>
                                            <p>{{ $listing->mobile }}</p>
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
    <section class="space min">
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
            <!-- row -->

        </div>
        {{-- @endforeach --}}
    </section>
    <!-- ======================= Related Listings ======================== -->

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
                    <form class="bg-white rounded p-1">
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="text" class="form-control b-0"
                                        placeholder="Enter Your Email Address">
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                                <div class="form-group mb-0 position-relative">
                                    <button class="btn full-width btn-height theme-bg text-light fs-md"
                                        type="button">Subscribe</button>
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
