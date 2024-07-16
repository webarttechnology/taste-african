@php
    $contact = App\Models\ContactDetails::get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $contact[0]->site_name }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($contact[0]->logo) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">
    {{-- Dropzone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    
    {{-- Toaster:: --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>

    <div id="main-wrapper">
        <div class="header header-transparent change-logo  navbar-light bg-light sticky-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand static-logo" href="{{ route('front') }}">
                        <img src="{{ asset($contact[0]->logo) }} " class="logo" alt="" width="100px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="side-menu">
                        <div class="sidebar" id='sidebar'>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('front') }}">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page"
                                            href="{{ route('front.about') }}">About</a>
                                    </li>
                                    
                                         <li class="nav-item">
                                            <a class="nav-link active" aria-current="page"
                                                href="{{ route('front.allListing') }}">Listings</a>
                                        </li>
                                        
                                        <!--<li class="nav-item dropdown">-->
                                        <!--    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"-->
                                        <!--        role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                                        <!--        Listings-->
                                        <!--    </a>-->
        
                                        <!--</li>-->
                                  
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

                                <li class="dropdown">
                                    <a href="#">
                                        Services
                                        <!--SVG dropdown icon-->

                                    </a>
                                    <ul class="dropdown-nav">
                                        <li><a href="">Lawn Care</a></li>
                                        <li><a href="">Walling &amp; Fencing</a></li>
                                        <li><a href="">Landscape design</a></li>
                                        <li><a href="">Grounds Maintenance</a></li>
                                    </ul>
                                </li>

                                @auth
                                    <li class="dropdown">
                                        <a href="#">
                                            <i class="fa-solid fa-user me-1 theme-cl" style="font-size:30px"></i>
                                        </a>
                                        <ul class="dropdown-nav">
                                            <li><a href="{{ route ('user.profile')}}">Profile</a></li>
                                            <li><a href="{{ route('user.logout') }}" class="ft-bold"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <ul class="nav-menu nav-menu-social align-to-right">
                                        <li class="add-listing">
                                            <a class="auth-link" id="places-tab"
                                                href="{{ route('business.registerForm') }}" aria-selected="true"><i
                                                    class="fas fa-plus me-2"></i>List Your Business </a>
                                        </li>

                                        <li>
                                            <a class="ft-bold"href="{{ route('login') }}"><i
                                                    class="fas fa-sign-in-alt me-1 theme-cl"></i>Login</a>
                                        </li>
                                    </ul>
                                @endauth
                            </div>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="{{ $contact[0]->facebook }}" class="theme-cl"><i
                                            class="lni lni-facebook-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $contact[0]->twitter }}"
                                        class="theme-cl"><i class="lni lni-twitter-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $contact[0]->youtube }}"
                                        class="theme-cl"><i class="lni lni-youtube"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $contact[0]->instragram }}"
                                        class="theme-cl"><i class="lni lni-instagram-filled"></i></a></li>
                                <li class="list-inline-item"><a href="{{ $contact[0]->linkdin }}"
                                        class="theme-cl"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>

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
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('front.allListing') }}">Listings</a>
                                </li>
                        </ul>

                        <ul class="list-inline onlydeck">
                            <li class="list-inline-item"><a href="{{ $contact[0]->facebook }}" class="theme-cl"><i
                                        class="lni lni-facebook-filled"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $contact[0]->twitter }}" class="theme-cl"><i
                                        class="lni lni-twitter-filled"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $contact[0]->youtube }}" class="theme-cl"><i
                                        class="lni lni-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $contact[0]->instragram }}" class="theme-cl"><i
                                        class="lni lni-instagram-filled"></i></a></li>
                            <li class="list-inline-item"><a href="{{ $contact[0]->linkdin }}" class="theme-cl"><i
                                        class="lni lni-linkedin-original"></i></a></li>
                        </ul>



                        @auth
                        
                           @if(Auth::user()->role == 'admin')
                           <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ url('admin/dashboard') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>Go to Admin Dashboard </a>
                                </li>
                          </ul>
                           @else
                               <li class="dropdown">
                                <a href="#">
                                    <i class="fa-solid fa-user me-1 theme-cl" style="font-size:30px"></i>
                                </a>
                                <ul class="dropdown-nav">
                                    <li><a href="{{ route ('user.profile')}}">Profile</a></li>
                                    <li><a href="{{ route('user.logout') }}" class="ft-bold"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                           @endif

                            

                            {{-- <a href="{{ route('user.logout') }}" class="ft-bold">
                            <i class="fa-solid fa-user me-1 theme-cl"></i> 
                        </a>

                            <a href="{{ route('user.logout') }}" class="ft-bold"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 Logout
                            </a>
                            <form id="logout-form" action="{{ route('user.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form> --}}
                        @else
                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li class="add-listing">
                                    <a class="auth-link" id="places-tab" href="{{ route('business.registerForm') }}"
                                        aria-selected="true"><i class="fas fa-plus me-2"></i>List Your Business </a>
                                </li>

                                <li>
                                    <a class="ft-bold"href="{{ route('login') }}"><i
                                            class="fas fa-sign-in-alt me-1 theme-cl"></i>Login</a>
                                </li>
                            </ul>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>


        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- Top header  -->




        @yield('content')


    </div>
    <!-- ============================ Footer Start ================================== -->

    <footer class="light-footer skin-light-footer style-2">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <img src="{{ asset($contact[0]->logo) }}" class="img-footer small mb-2" />
                            <!--<div class="address mt-2">-->
                            <!--  <p>The African Food USA is a platform where we rave about your favorite African food joints, your best caters and food distributors and amazing food photographers. </p>-->
                            <!--</div>-->
                            <div class="address mt-3">
                                {{ $contact[0]->phone }}<br>{{ $contact[0]->email }}
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Main Navigation</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('front') }}">Home</a></li>
                                <li><a href="{{ route('front.about') }}">About</a></li>
                                <li><a href="{{ route('front.blog') }}">Blog</a></li>
                                <li><a href="{{ route('front.faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="footer_widget">
                            <h4 class="widget_title">Quick Links</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('front.contact') }}">Contact US</a></li>
                                @if (Auth::check() && Auth::user()->role == 'business_owner')
                                    <li><a href="{{ route('business.dashboard') }}">Dashboard</a></li>
                                @endif
                                <li><a href="{{ route('front.termcondition') }}">Terms And Condition</a></li>
                                <li><a href="{{ route('front.privacypolicy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                    <div class="footer_mail">
                        <form class="bg-white rounded p-1" action="{{ route('subscribe_store') }}" method="POST">
                            @csrf
                            <div class="row no-gutters">
                                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                                    <div class="form-group mb-0 position-relative">
                                        <input type="email" class="form-control b-0"
                                            placeholder="Enter Your Email Address" name="email" required>
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
        </div>

        <div class="footer-bottom br-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 text-center footer-end-text">
                        <p class="mb-0" style="font-size:15px;color:black;font-weight:bold;">©
                            {{ now()->format('Y') }} {{ $contact[0]->site_name }}. Designd By
                            <a href="https://webart.technology/" target="_blank">WebArt Technology</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <a id="tops-button" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>    
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <script src="{{ asset('front/js/popper.min.js') }}"></script>
    <!--<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>-->
    <script src="{{ asset('front/js/slick.js') }}"></script>
    <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/js/counterup.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/moment.min.js') }}"></script>
    <script src="{{ asset('front/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

    {{-- Tagify:: --}}
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    {{-- Toaster:: --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- Sweet Alert:: --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('custom_js')

    <script>
        var btn = document.querySelector('.toggle');
        var btnst = true;
        btn.onclick = function() {
            if (btnst == true) {
                document.querySelector('.toggle span').classList.add('toggle');
                document.getElementById('sidebar').classList.add('sidebarshow');
                btnst = false;
            } else if (btnst == false) {
                document.querySelector('.toggle span').classList.remove('toggle');
                document.getElementById('sidebar').classList.remove('sidebarshow');
                btnst = true;
            }
        }
    </script>

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

    <!-- Multi-select -->
    @yield('custom_js')
    <!-- Multi-select -->
</body>

</html>
