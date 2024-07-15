@extends('front.layout.app')
@section('content')

    <!-- ======================= Top Breadcrubms ======================== -->
    <section class="about-bg bg-cover" style="background:url('{{ asset('front/img/banner.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-11 col-sm-12">
                    <div class="abt-caption">
                        <div class="abt-caption-head">
                            <h1> Privacy Policy </h1>
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
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative about-section">
                            <div class="mb-2"><span
                                    class="bg-light-sky text-sky px-2 py-1 rounded">{{ $privacy->heading }}</span>
                            </div>
                            <p> {!! $privacy->description !!} </p>
                        </div>
                    </div>
                </div>

               
            </div>

        </div>
    </section>
    <!-- ======================= About Start ============================ -->

   





@stop
