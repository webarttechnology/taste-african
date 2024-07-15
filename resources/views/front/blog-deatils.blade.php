@extends('front.layout.app')
@section('content')

<!-- ======================= Top Breadcrubms ======================== -->
<div class="bg-dark py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route ('front')}}" class="text-light">Home / </a> Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

    <!-- ======================= About Start ============================ -->
    <section class="space">
        <div class="container">

            <div class="row align-items-center justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center mb-4">
                    <div class="position-relative">
                        <img src="{{ asset($single_blog->image) }}" class="w-100" alt="" />
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="m-spaced">
                        <div class="position-relative">
                            <div class="mb-2"><span
                                    class="bg-light-sky text-sky px-2 py-1 rounded">{{ $single_blog->category }}</span>
                            </div>
                            <h2 class="ft-bold mb-3">{{ $single_blog->title }}</h2>
                            <p style="color:black; font-size:18px;"> {!! $single_blog->description !!} </p>
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
    </section>
    <!-- ======================= About Start ============================ -->



@stop




