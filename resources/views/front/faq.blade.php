@extends('front.layout.app')
@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front') }}" class="text-light">Home</a></li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page">FAQ's</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= FAQ's Detail ======================== -->
    <section class="middle">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-4">
                        <h1 class="ft-bold mb-0">FAQ's Section</h1>
                        <h3 class="ft-medium pt-1 mb-3">Frequently Asked Questions</h3>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-10 col-lg-11 col-md-12 col-sm-12">

                    @foreach ($categories as $category)
                        <div class="d-block position-relative mb-4">
                            <h4 class="ft-medium">{{ $category->name }}:</h4>

                            <div id="accordion{{$category->id}}" class="accordion">
                                @foreach ( $category->faqs as $faq )
									<div class="card ">
										<div class="card-header" id="h{{$category->id}}">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" aria-controls="faq-{{ $faq->id }}" data-bs-target="#faq-{{ $faq->id }}"
													 aria-controls="faq-{{ $faq->id }}">
													{{ $faq->question }}
												</button>
											</h5>
										</div>

										<div id="faq-{{ $faq->id }}" class="accordion-collapse collapse" type="button" aria-labelledby="h{{$category->id}}" data-bs-parent="#accordion{{$category->id}}">
											<div class="accordion-body ">
												{{ $faq->ans }}
											</div>
										</div>
										
									</div>
								@endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- ======================= FAQ's End ======================== -->

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
                    <form class="bg-white rounded p-1" action="{{ route('subscribe_store') }}" method="POST">
                        @csrf
                        <div class="row no-gutters">
                            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                <div class="form-group mb-0 position-relative">
                                    <input type="email" class="form-control b-0" placeholder="Enter Your Email Address"
                                        name="email">
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
