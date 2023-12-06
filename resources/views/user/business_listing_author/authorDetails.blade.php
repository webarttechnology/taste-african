@extends('front.layout.app')
@section('content')


    <!-- ============================================================== -->

    <!-- ============================ Main Section Start ================================== -->
    <section class="gray">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="author-wrap-ngh">
                        <div class="author-wrap-head-ngh">
                            <div class="author-wrap-ngh-thumb">
                                @if(Auth::user()->image == null)
                                <img src="{{asset('front/img/user.png')}}" class="img-fluid" alt="" />
                                @else
                                <img src="{{ asset(Auth::user()->image) }}" class="img-fluid" alt="" />
                                @endif
                            </div>
                            <div class="author-wrap-ngh-info">
                                <h5>{{ $userInfo->name }}</h5>
                                <div class="Goodup-location"><i class="fas fa-map-marker-alt"></i>{{ $userInfo->info->city }}
                                </div>
                            </div>
                        </div>

                        <div class="author-wrap-caption-ngh">
                            <div class="author-wrap-jhyu-ngh">
                                <ul>
                                    <li>
                                        <div class="gdup-kvty">
                                            <div class="gdup-kvty-icon bg-light-sky text-sky"><i class="fas fa-file"></i>
                                            </div>
                                            <div class="gdup-kvty-ctr">
                                                <h6 class="count">{{count($listings)}}</h6>
                                            </div>
                                            <div class="gdup-kvty-text">Listings</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gdup-kvty">
                                            <div class="gdup-kvty-icon bg-light-warning text-warning"><i
                                                    class="fas fa-thumbs-up"></i></div>
                                            <div class="gdup-kvty-ctr">
                                                <h6 class="count">22</h6><span>K</span>
                                            </div>
                                            <div class="gdup-kvty-text">Followers</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="gdup-kvty">
                                            <div class="gdup-kvty-icon bg-light-danger text-danger"><i
                                                    class="fas fa-heart"></i></div>
                                            <div class="gdup-kvty-ctr">
                                                <h6 class="count">206</h6>
                                            </div>
                                            <div class="gdup-kvty-text">Followings</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="author-wrap-yuio-ngh mt-5">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="adv-btn full-width">Follow Now</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="adv-btn full-width">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="author-wrap-footer-ngh">
                            <ul>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-envelope"></i></div>
                                        <div class="jhk-list-inf-caption">
                                            <h5>Mail Us</h5>
                                            <p>
                                                <a href="mailto:{{ $userInfo->email }}">{{ $userInfo->email }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-phone"></i></div>
                                        <div class="jhk-list-inf-caption">
                                            <h5>Make Call</h5>
                                            <p> <a href="tel:+{{ $userInfo->phone }}">{{ $userInfo->phone }}</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="jhk-list-inf-caption">
                                            <h5>Get Direction</h5>
                                            <p>{{ $userInfo->email }}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12">                 
                    <!-- row -->
                    <div class="row justify-content-center gx-3">
                        @foreach ($listings as $listing)
                            <!-- Single -->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="Goodup-grid-wrap">
                                    <div class="Goodup-grid-upper">
                                        <div class="Goodup-bookmark-btn"><button type="button"><i
                                                    class="lni lni-heart-filled position-absolute"></i></button></div>
                                        <div class="Goodup-pos ab-left">
                                            @if($listing->approval == 'hide')
                                            <div class="Goodup-status me-2">Inactive</div>
                                            @else
                                            <div class="Goodup-status open me-2">open</div>
                                            @endif
                                        </div>
                                        <div class="Goodup-grid-thumb">
                                            <a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                class="d-block text-center m-auto">
                                                @foreach ($listing->images->take(1) as $image)
                                                    <img src="{{ asset($image->images) }}" class="img-fluid"
                                                        alt="" />
                                                @endforeach
                                            </a>

                                        </div>

                                    </div>
                                    <div class="Goodup-grid-fl-wrap">
                                        <div class="Goodup-caption px-3 py-2">
                                            <div class="Goodup-cates"><a>{{ $listing->category->name }}</a>
                                            </div>
                                            <h4 class="mb-0 ft-medium medium"><a href="{{ url('user/author-listing-details/' . $listing->id) }}"
                                                    class="text-dark fs-md">{{ $listing->title }}<span
                                                        class="verified-badge"><i
                                                            class="fas fa-check-circle"></i></span></a></h4>
                                            <div class="Goodup-middle-caption mt-3">
                                                <div class="Goodup-location"><i
                                                        class="fas fa-map-marker-alt"></i>{{ $listing->city }}</div>
                                                <div class="Goodup-call"><i
                                                        class="fas fa-phone-alt"></i>{{ $listing->mobile }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Goodup-grid-footer py-3 px-3">
                                            <div class="Goodup-ft-first">
                                                @php
                                                $totalStars = 0;
                                                $totalReviews = count($listing->reviews);

                                                foreach ($listing->reviews as $review) {
                                                    $totalStars += $review->star;
                                                }

                                                $averageStars = $totalReviews > 0 ? round($totalStars / $totalReviews, 2) : 0;
                                            @endphp
                                                <div class="Goodup-rating">
                                                    <div class="Goodup-pr-average mid">{{ $averageStars }}</div>
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
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /row -->

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
    </section>
    <!-- ============================ Main Section End ================================== -->


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
