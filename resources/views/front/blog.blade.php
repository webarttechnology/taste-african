@extends('front.layout.app')
@section('content')

	<!-- ======================= Top Breadcrubms ======================== -->
    <div class="bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="colxl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route ('front')}}" class="text-light">Home / </a> Blog </li>
                            <li class="breadcrumb-item active theme-cl" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ======================= Top Breadcrubms ======================== -->
    
    <!-- ======================= Blog Start ============================ -->
    <section class="middle">
        <div class="container">
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="sec_title position-relative text-center mb-5">
                        <h6 class="theme-cl mb-0">Latest Blogs</h6>
                        <h2 class="ft-bold">View Recent Blogs</h2>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                @foreach ($blog as $blogs)
                     <!-- Single Item -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="gup_blg_grid_box">
                        <div class="gup_blg_grid_thumb">
                            <a href="{{ url('blog/'.$blogs->slug)  }}"><img src="{{ asset($blogs->image) }}" class="img-fluid" alt="{{ $blogs->title }}"></a>
                        </div>
                        <div class="gup_blg_grid_caption">
                            <div class="blg_tag"><span>{{ $blogs->category }}</span></div>
                            <div class="blg_title"><h4><a href="{{ url('blog/'.$blogs->slug)  }}">{{ $blogs->title }}</a></h4></div>
                            <div class="blg_desc"><p>{!! Illuminate\Support\Str::limit($blogs->description, 100) !!}</p></div>
                        </div>
                        <div class="crs_grid_foot">
                            <div class="crs_flex d-flex align-items-center justify-content-between br-top px-3 py-2">
                                <div class="crs_fl_first">
                                    <div class="crs_tutor">
                                        <div class="crs_tutor_thumb"><a href="javascript:void(0);"><img src="{{ asset($blogs->category_icon) }}" class="img-fluid circle" width="35" alt=""></a></div>
                                    </div>
                                </div>
                                <div class="crs_fl_last">
                                    <div class="foot_list_info">
                                        <ul>
                                            <li><div class="elsio_ic"><i class="fa fa-clock text-warning"></i></div><div class="elsio_tx">{{ $blogs->created_at->format('d F Y') }}</div></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach                
            </div>
            
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="position-relative text-center">
                        {{-- <a href="javascript:void(0);" class="btn gray rounded ft-medium">Load More Blogs<i class="lni lni-arrow-right ms-2"></i></a> --}}
                        {{ $blog->links('vendor.pagination.bootstrap-4') }}
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ======================= Blog Start ============================ -->
    


@stop
