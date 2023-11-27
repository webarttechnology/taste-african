@extends('front.layout.app')
@section('content')
			
			<!-- =============================== Dashboard Header ========================== -->
			<section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
				<div class="abs-list-sec"><a href="{{route ('business_listing')}}" class="add-list-btn"><i class="fas fa-plus me-2"></i>Add Listing</a></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								
							<div class="dashboard-head-author-clicl">
								<div class="dashboard-head-author-thumb">
									<img src="{{asset('front/img/t-7.png')}}" class="img-fluid" alt="" />
								</div>
								<div class="dashboard-head-author-caption">
									<div class="dashploio"><h4>{{ Auth::user()->name }}</h4></div>
									{{-- <div class="dashploio"><span class="agd-location"><i class="lni lni-map-marker me-1"></i>San Francisco, USA</span></div>
									<div class="listing-rating high"><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i><i class="fas fa-star active"></i></div> --}}
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- =============================== Dashboard Header ========================== -->
			
			<!-- ======================= dashboard Detail ======================== -->
			<div class="goodup-dashboard-wrap gray px-4 py-5">
				<a class="mobNavigation" data-bs-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
					<i class="fas fa-bars me-2"></i>Dashboard Navigation
				</a>
				

				@include('front.layout.sidebar')
				
				<div class="goodup-dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">{{ Auth::user()->name }}</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Dashboard</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 mb-3">
								<div class="alert bg-inverse text-light d-flex align-items-center" role="alert">
									<p class="p-0 m-0 ft-medium full-width">Your listing <a href="#" class="text-success">Wedding Willa Resort</a> has been approved!</p>
									<button type="button" class="btn-close text-light" data-bs-dismiss="alert" aria-label="Close"></button>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="dsd-boxed-widget py-5 px-4 bg-danger rounded">
									<h2 class="ft-medium mb-1 fs-xl text-light count">46</h2>
									<p class="p-0 m-0 text-light fs-md">Active Listings</p>
									<i class="lni lni-empty-file"></i>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="dsd-boxed-widget py-5 px-4 bg-success rounded">
									<h2 class="ft-medium mb-1 fs-xl text-light count">2615</h2>
									<p class="p-0 m-0 text-light fs-md">Views Listing</p>
									<i class="lni lni-eye"></i>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="dsd-boxed-widget py-5 px-4 bg-warning rounded">
									<h2 class="ft-medium mb-1 fs-xl text-light count">312</h2>
									<p class="p-0 m-0 text-light fs-md">Total Reviews</p>
									<i class="lni lni-comments"></i>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="dsd-boxed-widget py-5 px-4 bg-purple rounded">
									<h2 class="ft-medium mb-1 fs-xl text-light count">410</h2>
									<p class="p-0 m-0 text-light fs-md">Total Bookings</p>
									<i class="lni lni-wallet"></i>
								</div>
							</div>
						</div>
						
						<!-- row -->
						<div class="row">
						
							<!-- Area Chart -->
							<div class="col-md-8 col-sm-12">
								<div class="dash-card">
									<div class="dash-card-header">
										<h4 class="mb-0">View Chart</h4>
									</div>
									<div class="dash-card-body">
										<div class="chart" id="revenue-chart" style="height:365px;"></div>
									</div>
								</div>
							</div>
							
							<!-- Donut Chart -->
							{{-- <div class="col-md-4 col-sm-12">
								<div class="dash-card">
									<div class="dash-card-header">
										<h4>Followers</h4>
									</div>
									<div class="ground-list ground-hover-list">
										<div class="ground ground-list-single">
											<a href="#">
												<img class="ground-avatar" src="assets/img/t-1.png" alt="...">
												<span class="profile-status bg-online pull-right"></span>
											</a>

											<div class="ground-content">
												<h6><a href="#">Maryam Amiri</a></h6>
												<small class="text-fade"><i class="fas fa-map-marker-alt me-1"></i>New York, USA</small>
											</div>
										</div>
										
										<div class="ground ground-list-single">
											<a href="#">
												<img class="ground-avatar" src="assets/img/t-2.png" alt="...">
												<span class="profile-status bg-offline pull-right"></span>
											</a>

											<div class="ground-content">
												<h6><a href="#">Maryam Amiri</a></h6>
												<small class="text-fade"><i class="fas fa-map-marker-alt me-1"></i>Canada, USA</small>
											</div>
										</div>
										
										<div class="ground ground-list-single">
											<a href="#">
												<img class="ground-avatar" src="assets/img/t-3.png" alt="...">
												<span class="profile-status bg-working pull-right"></span>
											</a>

											<div class="ground-content">
												<h6><a href="#">Maryam Amiri</a></h6>
												<small class="text-fade"><i class="fas fa-map-marker-alt me-1"></i>Denver, USA</small>
											</div>
										</div>
										
										<div class="ground ground-list-single">
											<a href="#">
												<img class="ground-avatar" src="assets/img/t-4.png" alt="...">
												<span class="profile-status bg-busy pull-right"></span>
											</a>

											<div class="ground-content">
												<h6><a href="#">Maryam Amiri</a></h6>
												<small class="text-fade"><i class="fas fa-map-marker-alt me-1"></i>Liverpool, UK</small>
											</div>
										</div>
										
										<div class="ground ground-list-single">
											<a href="#">
												<img class="ground-avatar" src="assets/img/t-5.png" alt="...">
												<span class="profile-status bg-online pull-right"></span>
											</a>

											<div class="ground-content">
												<h6><a href="#">Maryam Amiri</a></h6>
												<small class="text-fade"><i class="fas fa-map-marker-alt me-1"></i>California</small>
											</div>
										</div>
									</div>
								</div>	
							</div> --}}
							
						</div>
						<!-- /.row -->
				
						{{-- <div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="goodup-dashboard-grouping-list with-icons">
									<h4>Recent Activities</h4>
									<ul>
										<li>
											<i class="dsd-icon-uiyo ti-layers text-purple bg-light-purple"></i> Your listing <strong><a href="#">Hotel The Lalit</a></strong> has been approved!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-star text-success bg-light-success"></i> Christopher K. Allen left a review <div class="grping-list-rates high" data-rating="5.0"></div> on <strong><a href="#">Bluchee Burger</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-heart text-warning bg-light-warning"></i> Someone bookmarked your <strong><a href="#">Snow Valley House</a></strong> listing!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-star text-info bg-light-info"></i> Jesus A. Rhodes left a review <div class="grping-list-rates mid" data-rating="3.8"></div> on <strong><a href="#">Sonal Cafe</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-heart text-danger bg-light-danger"></i> Someone bookmarked your <strong><a href="#">Blue Bear Bar</a></strong> listing!
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-star text-success bg-light-success"></i> Michael H. Bright left a review <div class="grping-list-rates high" data-rating="4.7"></div> on <strong><a href="#">Lucky Dhaba</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>

										<li>
											<i class="dsd-icon-uiyo ti-star text-purple bg-light-purple"></i> Arnold A. Lynn left a review <div class="grping-list-rates low" data-rating="2.8"></div> on <strong><a href="#">Madhu Sweet House</a></strong>
											<a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-12">
								<div class="goodup-dashboard-grouping-list invoices with-icons">
									<h4>Invoices</h4>
									<ul>
										
										<li><i class="dsd-icon-uiyo ti-files text-warning bg-light-warning"></i>
											<strong>Starter Plan</strong>
											<ul>
												<li class="unpaid">Unpaid</li>
												<li>Order: #LS5410</li>
												<li>Date: 16 Sep 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dsd-icon-uiyo ti-files text-success bg-light-success"></i>
											<strong>Basic Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #LS5487</li>
												<li>Date: 19 Aug 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>

										<li><i class="dsd-icon-uiyo ti-files text-danger bg-light-danger"></i>
											<strong>Extended Plan</strong>
											<ul>
												<li class="pending">Pending</li>
												<li>Order: #LS6413</li>
												<li>Date: 07 Jul 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dsd-icon-uiyo ti-files text-success bg-light-success"></i>
											<strong>Platinum Plan</strong>
											<ul>
												<li class="cancel">Cancel</li>
												<li>Order: #LS6100</li>
												<li>Date: 15 Jun 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dsd-icon-uiyo ti-files text-warning bg-light-warning"></i>
											<strong>Extended Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #LS6257</li>
												<li>Date: 14 05 May 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dsd-icon-uiyo ti-files text-info bg-light-info"></i>
											<strong>Platinum Plan</strong>
											<ul>
												<li class="unpaid">Unpaid</li>
												<li>Order: #LS6548</li>
												<li>Date: 10 May 2022</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button gray">View Invoice</a>
											</div>
										</li>

									</ul>
								</div>
							</div>	
						</div>	 --}}
							
					</div>
					
@stop