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
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <div id="main-wrapper">
        <div class="header header-transparent change-logo  navbar-light bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand static-logo" href="{{ route('front') }}">
                        <img src="{{ asset('front/img/logos.png') }}" class="logo" alt="" width="100px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('front') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('front.about') }}">About</a>
                            </li>                           

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('user.dashboard') }}"> Listings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('front.faq') }}"> FAQ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('front.contact') }}">Contact</a>
                            </li>

                            {{-- @if (Auth::check() && Auth::user()->role == 'user')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Listings
                                    </a>

                                </li>
                            @endif
                            @if (Auth::check() && Auth::user()->role == 'business_owner')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        User Dashboard
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('business.dashboard') }}"><i
                                                    class="lni lni-files me-2"></i>My
                                                Listings</a></li>
                                        <li><a class="dropdown-item" href="{{ route('business_listing_add') }}"><i
                                                    class="lni lni-add-files me-2"></i>Add Listing</a></li>
                                    </ul>
                                </li>
                            @endif --}}
                        </ul>

                        @auth

                            <a href="{{ route('user.logout') }}" class="ft-bold"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-1 theme-cl"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        @else
                            <ul class="nav-menu nav-menu-social align-to-right">                               
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ route('business.registerForm') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>For Business </a>
                                </li>
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ route('user.registerPage') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>Register</a>
                                </li>
                                <li>
                                    <a class="ft-bold"href="{{ route('login') }}"><i
                                            class="fas fa-sign-in-alt me-1 theme-cl"></i>Login</a>
                                </li>
                            </ul>
                        @endauth
                    </div>
            </div>
            </nav>
            {{-- </div> --}}
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
                                <img src="{{ asset('front/img/logos.png') }}" class="img-footer small mb-2"/>

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
                                    <li><a href="{{ route('front') }}">Home</a></li>
                                    <li><a href="{{ route('front.about') }}">About</a></li>
                                    <li><a href="#">Listings</a></li>
                                    <li><a href="{{ route('front.contact') }}">Contact</a></li>
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

    {{-- Sweet Alert:: --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }

        @if (Session::has('message'))
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
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
</body>

</html>
