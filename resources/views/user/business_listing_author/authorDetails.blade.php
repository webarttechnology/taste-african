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
                                <div class="Goodup-location"><i class="fas fa-map-marker-alt"></i>{{ $userInfo->city }}
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
                                                <h6 class="count">310</h6>
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
                                            <p>{{ $userInfo->email }}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-phone"></i></div>
                                        <div class="jhk-list-inf-caption">
                                            <h5>Make Call</h5>
                                            <p>{{ $userInfo->email }}</p>
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
                                {{-- <li>
                                    <div class="jhk-list-inf">
                                        <div class="jhk-list-inf-ico"><i class="fas fa-globe"></i></div>
                                        <div class="jhk-list-inf-caption">
                                            <h5>Live Web:</h5>
                                            <p>https://www.Goodup.com/</p>
                                        </div>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="auth-filter-headers d-none">
                        <div class="auth-filter-headers-title">
                            <h5 class="ft-bold fs-md m-0">You have total<span class="theme-cl px-2">412</span>Listings</h5>
                        </div>
                        <div class="auth-filter-headers-filts">
                            <ul class="no-ul-list">
                                <li>
                                    <input id="alls" class="checkbox-custom" name="alls" type="checkbox"
                                        checked="">
                                    <label for="alls" class="checkbox-custom-label">All</label>
                                </li>
                                <li>
                                    <input id="pls" class="checkbox-custom" name="pls" type="checkbox">
                                    <label for="pls" class="checkbox-custom-label">Places</label>
                                </li>
                                <li>
                                    <input id="prty" class="checkbox-custom" name="prty" type="checkbox">
                                    <label for="prty" class="checkbox-custom-label">Property</label>
                                </li>
                                <li>
                                    <input id="crs" class="checkbox-custom" name="crs" type="checkbox">
                                    <label for="crs" class="checkbox-custom-label">Cars</label>
                                </li>
                                <li>
                                    <input id="htls" class="checkbox-custom" name="htls" type="checkbox">
                                    <label for="htls" class="checkbox-custom-label">Hotels</label>
                                </li>
                                <li>
                                    <input id="jbsd" class="checkbox-custom" name="jbsd" type="checkbox">
                                    <label for="jbsd" class="checkbox-custom-label">Jobs</label>
                                </li>
                            </ul>
                        </div>
                    </div>

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
                                            <div class="Goodup-status open me-2">open</div>
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
                                            <div class="Goodup-cates"><a href="search.html">{{ $listing->category }}</a>
                                            </div>
                                            <h4 class="mb-0 ft-medium medium"><a href="listing-search-v1.html"
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
                                        {{-- <div class="Goodup-grid-footer py-3 px-3">
                                            <div class="Goodup-ft-first">
                                                <div class="Goodup-rating">
                                                    <div class="Goodup-pr-average mid">4.9</div>
                                                    <div class="Goodup-rates">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="Goodup-price-range">
                                                    <span class="active"><i class="fas fa-dollar-sign"></i></span>
                                                    <span class="active"><i class="fas fa-dollar-sign"></i></span>
                                                    <span class="active"><i class="fas fa-dollar-sign"></i></span>
                                                    <span><i class="fas fa-dollar-sign"></i></span>
                                                </div>
                                            </div>
                                            <div class="Goodup-ft-last">
                                                <span class="small">1 days ago</span>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /row -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="pagination">
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
