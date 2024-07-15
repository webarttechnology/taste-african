@extends('admin.layouts.app')

@section('content')
<div class="ec-content-wrapper">
    <center> <h1 class="admin-heading p-5">African Food Admin Dashboard</h1>
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-1">
                    <div class="card-body">
                        <h2 class="mb-1">{{$listing_count}}</h2>
                        <p>Business Listings </p>
                        <span class="">
                            <img src="{{asset('front\img\icons\diagram.png')}}" width="20px">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-2">
                    <div class="card-body">
                        <h2 class="mb-1">{{$category_count}}</h2>
                        <p> Business Categories </p>
                        <span class="">
                            <img src="{{asset('front\img\icons\category.png')}}" width="20px">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 p-b-15 lbl-card">
                <div class="card card-mini dash-card card-3">
                    <div class="card-body">
                        <h2 class="mb-1">{{$blog_count}}</h2>
                        <p>Blogs</p>
                        <span class="">
                            <img src="{{asset('front\img\icons\blog.png')}}" width="20px">
                        </span>
                    </div>
                </div>
            </div>
            
        </div>
    </div> <!-- End Content -->
</div>


@stop
