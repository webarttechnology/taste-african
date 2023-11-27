<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Taste of Africa</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.png') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">


   {{-- Dropzone --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    {{-- Toaster:: --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <div id="main-wrapper">
        <div class="header header-transparent change-logo">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand static-logo" href="#">
                            <img src="{{ asset('front/img/logos/logo.png') }}" class="logo" alt="" />
                        </a>
                        <a class="nav-brand fixed-logo" href="index.php">
                            <img src="{{ asset('front/img/logos/logo.png') }}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                        <div class="mobile_nav">
                            <ul>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#login"
                                        class="theme-cl fs-lg">
                                        <i class="lni lni-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="crs_yuo12 w-auto text-white theme-bg">
                                        <span class="embos_45"><i class="fas fa-plus me-2"></i>Add Listing</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">
                        <ul class="nav-menu">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="listings.php">Listings</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="author-detail.php">Author Detail</a>
                                </ul>
                            </li>
                            @auth
                            <li><a href="listing-detail.php">User Dashboard</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li>
                                        <a href="dashboard.php"><i class="lni lni-dashboard me-2 "></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route ('business_listing')}}"><i class="lni lni-files me-2"></i>My Listings</a>
                                    </li>
                                    <li><a href="{{ route('business_listing') }}"><i class="lni lni-add-files me-2"></i>Add Listing</a></li>
                                    <li><a href="dashboard-saved-listings.php"><i class="lni lni-bookmark me-2"></i>Saved Listing</a></li>
                                    <li><a href="dashboard-my-profile.php"><i class="lni lni-user me-2"></i>My Profile </a></li>
                                    <li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt me-2"></i>Change Password</a></li>
                                </ul>
                            </li>
                            @endauth
                            <li><a href="javascript:void(0);">Pages</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="blog.php">Blog Style</a></li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="pricing.php">Pricing</a></li>
                                    <li><a href="signup.php">Sign Up</a></li>
                                    <li><a href="login.php">Sign In</a></li>
                                    <li><a href="privacy.php">Privacy Policy</a></li>
                                    <li><a href="faq.php">FAQs</a></li>
                                    <li><a href="404.php">404 Page</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav-menu nav-menu-social align-to-right">
                            <li>
                                @auth
                                    <!-- User is authenticated, show logout -->
                                    <a href="{{ route('user.logout') }}" class="ft-bold" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-1 theme-cl"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                    <!-- User is not authenticated, show login -->
                                    <a href="{{ route ('user.loginPage')}}" class="ft-bold"> 
                                        <i class="fas fa-sign-in-alt me-1 theme-cl"></i>Sign In
                                    </a>
                                    <li class="add-listing">
                                        <a href="{{ route ('user.registerPage')}}">
                                            <i class="fas fa-plus me-2"></i>Register
                                        </a>
                                    </li>
                                @endauth
                            </li>   
                        </ul>
                    </div>                      
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- Top header  -->




        @yield('content')



        <!-- ============================ Footer Start ================================== -->

        <footer class="light-footer skin-light-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="footer_widget">
                                <img src="assets/img/logos/logo.png" class="img-footer small mb-2" alt="" />
                                <!-- <h3>LOGO</h3> -->

                                <div class="address mt-2">
                                    7742 Sadar Street Range Road, USA<br>United Kingdom GHQ11
                                </div>
                                <div class="address mt-3">
                                    123 456 7890<br>info@demo.com
                                </div>
                                <div class="address mt-2">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="theme-cl"><i
                                                    class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Main Navigation</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Explore Listings</a></li>
                                    <li><a href="#">Browse Authors</a></li>
                                    <li><a href="#">Submit Listings</a></li>
                                    <li><a href="#">Shortlisted</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Business Owners</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Browse Categories</a></li>
                                    <li><a href="#">Payment Links</a></li>
                                    <li><a href="#">Saved Places</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">About Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Who We'r?</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="#">Our team</a></li>
                                    <li><a href="#">Packages</a></li>
                                    <li><a href="#">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Helpful Topics</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Security</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">FAQ's Page</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom br-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2023 Taste of Africa. Designd By <a href="https://webart.technology/"
                                    target="_blank">WebArt Technology</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->

        <!-- Log In Modal -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal"
            aria-hidden="true">
            <div class="modal-dialog login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-headers">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span class="ti-close"></span>
                        </button>
                    </div>

                    <div class="modal-body p-5">
                        <div class="text-center mb-4">
                            <h4 class="m-0 ft-medium">Login Your Account</h4>
                        </div>

                        <form class="submit-form">
                            <div class="form-group">
                                <label class="mb-1">User Name</label>
                                <input type="text" class="form-control rounded bg-light" placeholder="Username*">
                            </div>

                            <div class="form-group">
                                <label class="mb-1">Password</label>
                                <input type="password" class="form-control rounded bg-light" placeholder="Password*">
                            </div>

                            <div class="form-group">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="flex-1">
                                        <input id="dd" class="checkbox-custom" name="dd" type="checkbox"
                                            checked>
                                        <label for="dd" class="checkbox-custom-label">Remember Me</label>
                                    </div>
                                    <div class="eltio_k2">
                                        <a href="#" class="theme-cl">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-md full-width theme-bg text-light rounded ft-medium">Sign
                                    In</button>
                            </div>

                            <div class="form-group text-center mb-0">
                                <p class="extra">Or login with</p>
                                <div class="option-log">
                                    <div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img
                                                src="assets/img/c-1.png" class="img-fluid" alt="" />Login
                                            with
                                            Google</a></div>
                                    <div class="single-log-opt"><a href="javascript:void(0);" class="log-btn"><img
                                                src="assets/img/facebook.png" class="img-fluid"
                                                alt="" />Login with
                                            Facebook</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->

        <a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>

 
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/slick.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/counterup.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/moment.min.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>

    {{-- Tagify:: --}}
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>

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

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    <!-- Multi-select -->
    @yield('custom_js')
    <!-- Multi-select -->


    {{-- Dropzone --}}
   


	

</body>

</html>
