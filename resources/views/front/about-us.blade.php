@extends('front.layout.app')
@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <section class="about-bg bg-cover" style="background:url({{ asset($abouts[0]->banner_image) }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-12">
                    <div class="abt-caption">
                        <div class="abt-caption-head">
                            <h1>{{ $abouts[0]->banner_sub_heading }}</h1>
                            <h6>{{ $abouts[0]->banner_main_heading }}
                            </h6>
                            <div class="abt-bt-info">
                                <!--<a href="javascript:void(0);"-->
                                <!--    class="btn ft-medium theme-cl bg-white rounded">Get Started<i-->
                                <!--        class="fas fa-arrow-right ms-2"></i>-->
                                <!--</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= Top Breadcrubms ======================== -->

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
                        <div class="position-relative about-section">
                            <div class="mb-1"><span
                                    class="bg-light-success text-success px-2 py-1 rounded">{{ $abouts[0]->about_short_title_1 }}</span>
                            </div>
                            <h2 class="ft-bold mb-3"> {{ $abouts[0]->about_long_title_1 }}</h2>
                            <p> The beauty of enlisting with African Food USA, is an opportunity to amplify your profile,
                                where you are not just a name on the directory, but a joyful filled journey awaiting to be
                                discovered by millions. At African Food USA, we're not just a directory; we are a flavorful
                                venture awaiting to be explored.</p>
                        </div>
                    </div>

                </div>

            </div>
    </section>
    <!-- ======================= About Start ============================ -->

    

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
                    @if ($category->listings_count > 0)
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="cats-wrap text-center">
                                <a href="{{ url('category/listings/' . $category->id) }}" class="Goodup-catg-wrap">
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

@include('front.newsletter')



@stop
