@extends('front.layout.app')
@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('front') }}" class="text-light">Home / </a> FAQ's</li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page"></li>
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
                        @php
                            if (count($category->faqs) == 0) {
                                continue;
                            }
                        @endphp



                        <div class="d-block position-relative mb-4">
                            <h4 class="ft-medium">{{ $category->name }}:</h4>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach ($category->faqs as $allFaqs)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $loop->iteration }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse{{ $loop->iteration }}" aria-expanded="false"
                                                aria-controls="flush-collapse{{ $loop->iteration }}">
                                                {{ $allFaqs->question }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-heading{{ $loop->iteration }}"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">{{ $allFaqs->ans }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    @endforeach
                </div>
            </div>
    </section>
    <!-- ======================= FAQ's End ======================== -->



@stop
