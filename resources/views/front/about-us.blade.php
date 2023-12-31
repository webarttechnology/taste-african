@extends('front.layout.app')
@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <section class="about-bg bg-cover" style="background:url({{ asset($abouts[0]->banner_image) }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-12">
                    <div class="abt-caption">
                        <div class="abt-caption-head">
                            <h1>{{$abouts[0]->banner_sub_heading}}</h1>
                            <h6>{{$abouts[0]->banner_main_heading}}
                            </h6>
                            <div class="abt-bt-info"><a href="javascript:void(0);"
                                    class="btn ft-medium theme-cl bg-white rounded">Get Started<i
                                        class="fas fa-arrow-right ms-2"></i></a></div>
                            {{-- <div class="position-relative row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <h3 class="ft-bold text-sky mb-0"><span class="count">07</span>+</h3>
                                    <p class="ft-medium text-light">Business Listing</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <h3 class="ft-bold text-warning mb-0"><span class="count">06</span>k+</h3>
                                    <p class="ft-medium text-light">Popular Authors</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-4">
                                    <h3 class="ft-bold text-danger mb-0"><span class="count">200</span>+</h3>
                                    <p class="ft-medium text-light">Countries</p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= How It Work Detail ======================== -->
    <section class="space min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="mb-0 theme-cl">Working Process</h6>
                        <h2 class="ft-bold">How It Working</h2>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="wrk-pro-box first">
                        <div class="wrk-pro-box-icon"><i class="ti-map-alt text-success"></i></div>
                        <div class="wrk-pro-box-caption">
                            <h4>Find Interesting Place</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="wrk-pro-box sec">
                        <div class="wrk-pro-box-icon"><i class="ti-user theme-cl"></i></div>
                        <div class="wrk-pro-box-caption">
                            <h4>Contact A Few Owners</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="wrk-pro-box thrd">
                        <div class="wrk-pro-box-icon"><i class="ti-shield text-sky"></i></div>
                        <div class="wrk-pro-box-caption">
                            <h4>Make A Reservation</h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================= How It Work End ======================== -->

    <!-- ======================= Our Teams ======================== -->
    <section class="space min gray">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="mb-0 theme-cl">Our Team</h6>
                        <h2 class="ft-bold"> Expert team</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="Goodup-author-wrap">
                        <div class="Goodup-author-thumb"><a href="author-detail.html"><img src="{{asset('front/img/user.png')}}"
                                    class="img-fluid circle" alt=""></a></div>
                        <div class="Goodup-author-caption">
                            <h4 class="fs-md mb-0 ft-medium m-catrio"><a href="author-detail.html">James R. Smith</a></h4>
                            <div class="Goodup-location">Project Manager</div>
                        </div>
                        <div class="Goodup-author-links">
                            <ul class="Goodup-social colored">
                                <li><a href="javascript:void(0);"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="Goodup-author-wrap">
                        <div class="Goodup-author-thumb"><a href="author-detail.html"><img src="{{asset('front/img/user.png')}}"
                                    class="img-fluid circle" alt=""></a></div>
                        <div class="Goodup-author-caption">
                            <h4 class="fs-md mb-0 ft-medium m-catrio"><a href="author-detail.html">Larry J. Mapes</a></h4>
                            <div class="Goodup-location">Web Expert</div>
                        </div>
                        <div class="Goodup-author-links">
                            <ul class="Goodup-social colored">
                                <li><a href="javascript:void(0);"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="Goodup-author-wrap">
                        <div class="Goodup-author-thumb"><a href="author-detail.html"><img src="{{asset('front/img/user.png')}}"
                                    class="img-fluid circle" alt=""></a></div>
                        <div class="Goodup-author-caption">
                            <h4 class="fs-md mb-0 ft-medium m-catrio"><a href="author-detail.html">Loretta G. Wood</a>
                            </h4>
                            <div class="Goodup-location">Product Designer</div>
                        </div>
                        <div class="Goodup-author-links">
                            <ul class="Goodup-social colored">
                                <li><a href="javascript:void(0);"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="Goodup-author-wrap">
                        <div class="Goodup-author-thumb"><a href="author-detail.html"><img src="{{asset('front/img/user.png')}}"
                                    class="img-fluid circle" alt=""></a></div>
                        <div class="Goodup-author-caption">
                            <h4 class="fs-md mb-0 ft-medium m-catrio"><a href="author-detail.html">Javier M. Brookins</a>
                            </h4>
                            <div class="Goodup-location">Sales Manager</div>
                        </div>
                        <div class="Goodup-author-links">
                            <ul class="Goodup-social colored">
                                <li><a href="javascript:void(0);"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ======================= Our teams End ======================== -->

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



@stop
