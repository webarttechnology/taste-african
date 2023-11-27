<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>African Food - Admin Dashboard</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 
	<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

	<!-- Ekka CSS -->
	<link id="ekka-css" href="{{asset('admin/css/ekka.css')}}" rel="stylesheet"/>

	<!-- FAVICON -->
	 <link href="{{asset('admin/img/favicon.png')}}" rel="shortcut icon" />

	{{-- Toaster:: --}}
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<h1 style="color: #183d8c">African Food</h1>
				</div>

				<div class="ec-navigation" data-simplebar>
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<li class="active">
							<a class="sidenav-item-link" href="{{ route ('dashboard')}}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>

						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="fa-solid fa-arrow-down-short-wide"></i>	
								<span class="nav-text">Users</span>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									
									<li class="">
										<a class="sidenav-item-link" href="">
											<span class="nav-text">User List</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="user-profile.html">
											<span class="nav-text">Users Profile</span>
										</a>
									</li>
								</ul>
							</div>
							<hr>
						</li>
						<li class="active">
							<a class="sidenav-item-link" href="{{ route ('category_listing')}}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Category</span>
							</a>
							<hr>
						</li>

						<li class="active">
							<a class="sidenav-item-link" href="{{ route ('admin.business_listing_show')}}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Business Listing</span>
							</a>
							<hr>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			<header class="ec-main-header" id="header">
				<nav class="navbar navbar-static-top navbar-expand-lg">
					<button id="sidebar-toggler" class="sidebar-toggle"></button>
					<!-- search form -->
					<div class="search-form d-lg-inline-block">
						{{-- <div class="input-group">
							<input type="text" name="query" id="search-input" class="form-control"
								placeholder="search.." autofocus autocomplete="off" />
							<button type="button" name="search" id="search-btn" class="btn btn-flat">
								<i class="mdi mdi-magnify"></i>
							</button>
						</div> --}}
						<div id="search-results-container">
							<ul id="search-results"></ul>
						</div>
					</div>

					<!-- navbar right -->
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<!-- User Account -->
							<li class="dropdown user-menu">
								@if(Auth::check())
									<button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
										<a>{{ Auth::user()->name }}</a>
									</button>
								@else
									<!-- Put alternative content or nothing here if the user is not authenticated -->
								@endif
								<ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
									<li class="dropdown-footer">										
										<form action="{{ route('admin.logout') }}" method="post">
											@csrf
											<button type="submit" class="btn btn-link">Log Out</button>
										</form>
									</li>
								</ul>
							</li>
						
							<li class="right-sidebar-in right-sidebar-2-menu">
								<i class="mdi mdi-settings-outline mdi-spin"></i>
							</li>
						</ul>
					</div>
				</nav>
			</header>



@yield('content')





<!-- ============================ Footer Start ================================== -->

	<!-- Footer -->
    <footer class="footer mt-auto">
        <div class="copyright bg-white">
            <p>
                Copyright &copy; <span id="ec-year"></span><a class="text-primary"
                href="https://webart.technology/" target="_blank"> WebArt Technology</a>. All Rights Reserved.
              </p>
        </div>
    </footer>

</div> <!-- End Page Wrapper -->
</div> <!-- End Wrapper -->

<!-- Common Javascript -->
<script src="{{asset('admin/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin/plugins/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
<script src="{{asset('admin/plugins/slick/slick.min.js')}}"></script>

<!-- Ekka Custom -->
<script src="{{asset('admin/js/ekka.js')}}"></script>

{{-- Toaster:: --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
		toastr.options = {
		"closeButton": true,
		"progressBar": true
	}

	@if(Session::has('message'))
		toastr.success("{{ session('message') }}");
	@endif

	@if(Session::has('error'))
		toastr.error("{{ session('error') }}");
	@endif

	@if(Session::has('info'))
		toastr.info("{{ session('info') }}");
	@endif

	@if(Session::has('warning'))
		toastr.warning("{{ session('warning') }}");
	@endif

	@if ($errors->any())
		@foreach ($errors->all() as $error)
			toastr.error("{{ $error }}");
		@endforeach
	@endif
</script>
</body>
</html>